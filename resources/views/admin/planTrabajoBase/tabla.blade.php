<style type="text/css">

	.caja_tabla{
    	overflow: scroll;
    }

    .vista_tabla_gantt{
    	border-collapse: collapse;
    }

	
	.STATUS_ACTIVE, .STATUS_ACTIVE:hover{
        background-color: #ecde00 !important;
       	fill: #ecde00 !important;
    }
    .STATUS_DONE, .STATUS_DONE:hover{
        background-color: #17d300 !important;
       	fill: #17d300 !important;
    }
    .STATUS_FAILED, .STATUS_FAILED:hover{
        background-color: #e10000 !important;
       	fill: #e10000 !important;
    }
    .STATUS_SUSPENDED, .STATUS_SUSPENDED:hover{
        background-color: #e7e7e7 !important;
       	fill: #e7e7e7 !important;
        color: #222222 !important;
    }
    .STATUS_UNDEFINED, .STATUS_UNDEFINED:hover{
        background-color: #00b1e1 !important;
       	fill: #00b1e1 !important;
    }






    
    .tabla_gantt_fase:nth-child(1n+1) th{
    	color: #000ff1;
    }
    .tabla_gantt_fase:nth-child(2n+1) th{
    	color: #f10075;
    }
    .tabla_gantt_fase:nth-child(3n+1) th{
    	color: #02d68f;
    }


	.tabla_gantt_fase:nth-child(1n+1) tbody tr:before{
		background-color: #000ff1;
	}
	.tabla_gantt_fase:nth-child(2n+1) tbody tr:before{
		background-color: #f10075;
	}
	.tabla_gantt_fase:nth-child(3n+1) tbody tr:before{
		background-color: #02d68f;
	}






    

    .tabla_gantt_fase{
    	width: 100%;
    	margin-top: 20px;
    }
    .tabla_gantt_fase th{
    	background-color: #fafafa;
    	border-bottom: 1px solid #e3e3e3;
    	padding: 10px;
    }
    .tabla_gantt_fase tr{
    	position: relative;
    }
    .tabla_gantt_fase tr:before{
    	content: "";
    	position: absolute;
    	width: 7px;
    	height: 90%;
    	top: 5%;
    	left: 0;
    }
    .tabla_gantt_fase td{
    	padding: 10px;
    	border: 2px solid #fff;
    	background-color: #eeeeee;
    	position: relative;
    }
    .tabla_gantt_fase tbody i{
    	color: #888;
    }
    .estatus_td{
		color: #fff;
		position: relative;
	}
    .tr_secundario, .td_secundario, .estatus_td{
    	text-align: center;
    }
    .tabla_gantt_fase img{
    	height: 37px;
    	position: absolute;
    	left: 0;
    	top: 0;
    	bottom: 0;
    	right: 0;
    	margin: auto;
    }
    .tabla_gantt_fase .btn_empleados{
    	top: 0;
    	right: 0;
    	left: 0;
    	bottom: 0;
    	margin: auto;
    	margin-right: 35px;
    	position: absolute;
    	width: 25px;
    	height: 25px;
    	border-radius: 100px;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	background-color: #666;
    	color: #fff;
    	z-index: 1;
    	cursor: pointer;
    }
    .lista_empleados{
    	text-align: left;
    	list-style: none;
    	padding: 0;
    }
    .lista_empleados li{
    	text-align: left !important;
    	margin-top: 7px;
    }

    .tabla_gantt_fase input{
    	border: none;
    	background-color: rgba(255, 255, 255, 0);
    }
    .tabla_gantt_fase input:focus, .tabla_gantt_fase input:focus-visible{
    	background-color: rgba(255,255,255,1);
    	outline: none;
    	font-weight: bold;
    }

    .estatus_select{
    	position: absolute;
    	top: 0;
    	left: 0;
    	width: 100%;
    	height: 100%;
    	background-color: rgba(0, 0, 0, 0) !important;
    	outline: none !important;
    	border: none !important;
    	color: #fff;
    }
</style>

<div class="card" style="">
 

    <div class="card-body caja_tabla" style="height: 600px;">
		<div class="vista_tabla_gantt">
			<div id="cuerpo_tabla">
				s
			</div>	
		</div>
	</div>
</div>

<div class="prueba">
	funcio de test
</div>


@section('scripts')
@parent
	<script type="text/javascript">
		$(document).ready(function(){
			let url = '{{ asset('storage/gantt/')}}/{{$name_file_gantt}}';
			$.ajax({

				type: "get",

				url: url,

				success: function (response) {
					

					renderTable(response);





				}
		    });
		});
			

		function saveOnServer(response){
			$.ajax({
			    type: "post",
			    url: "{{ route('admin.planTrabajoBase.saveCurrentProyect') }}",
			    data: { 
			    	_token:"{{ csrf_token() }}",
			    	gantt:JSON.stringify(response),
			    },
			    dataType: "JSON",
			    success: function (response) {
			        console.log(response);
			    }
			});
		}


		function renderTable(response){
			let resources = response.resources;
					

			let html = '';
			let contador = 0;
			response.tasks.forEach((task, idx) => {
				let estatus = '';
				switch(task.status){
					case 'STATUS_ACTIVE':
						estatus = 'En proceso'; 
					break;
					case 'STATUS_DONE':
						estatus = 'Completada'; 
					break;
					case 'STATUS_FAILED':
						estatus = 'Con retraso'; 
					break;
					case 'STATUS_SUSPENDED':
						estatus = 'Suspendida'; 
					break;
					case 'STATUS_UNDEFINED':
						estatus = 'Sin iniciar'; 
					break;
					default:
						estatus = 'Sin iniciar';
					break;
				}
				
				
				if (Number(task.level) == 0){
					contador ++;
					html += `
					</table>
					<table class="tabla_gantt_fase">
						<thead>
							<tr>
								<th> <span><i class="fas ${contador == 1?'fa-minus-circle' : 'fa-plus-circle'}"></i></span> ${task.name}</th>
								<th class="tr_secundario ${contador == 1?'' : 'd-none'}">Responsable</th>
								<th class="tr_secundario ${contador == 1?'' : 'd-none'}">Estatus</th>
							</tr>
						</thead>
					`;
					
				}else{
					html += `
					<tbody class="${contador == 1?'' : 'd-none'} ">
						<tr id="${task.id}">
							<td style="padding-left: ${task.level * 15}px;">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-up" viewBox="0 0 16 16">
								  	<path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708l-4-4z"/>
								</svg>
								<input class="name_input" value="${task.name}" style="width: calc(100% - ${task.level * 15}px - 16px + ${task.level * 10}px);">
							</td>`;
								

								let assigs = task.assigs.map(asignado => {
									return(resources.find(r => r.id === Number(asignado.resourceId)));
								});

								let imagenes = '';
								if (assigs.length > 0) {
									if (assigs.length < 3) {
										for (var i = 0; i < assigs.length; i++) {
											let foto = 'man.png';
											if(assigs[i].foto == null){ 
												if (assigs[i].genero == 'M') {
													foto = 'woman.png'; 
												}else{
													foto = 'usuario_no_cargado.png'; 
												}
											}else{
												foto = assigs[i].foto;
											}
											imagenes += `<img class="rounded-circle" src="{{ asset('storage/empleados/imagenes') }}/${foto}"></img>`;
										}		
									}else{

										let foto = 'man.png';
										if(assigs[0].foto == null){ 
											if (assigs[0].genero == 'M') {
												foto = 'woman.png'; 
											}else{
												foto = 'usuario_no_cargado.png'; 
											}
										}else{
											foto = assigs[0].foto;
										}

										imagenes += `<img class="rounded-circle" src="{{ asset('storage/empleados/imagenes') }}/${foto}"></img><span class="btn_empleados" onmouseover="renderCard(this, '${encodeURIComponent(JSON.stringify(assigs))}')">+${assigs.length - 1}</span>`;
									}
								}

								
							html += `
							<td class="td_secundario" width="15%">${imagenes}</td>

							<td class="${task.status} estatus_td" width="15%">
								<select class="estatus_select">

									<option class="STATUS_ACTIVE" value="STATUS_ACTIVE" 
										${task.status == 'STATUS_ACTIVE' ? 'selected':''}>En proceso</option>
									<option class="STATUS_DONE" value="STATUS_DONE" 
										${task.status == 'STATUS_DONE' ? 'selected':''}>Completado</option>
									<option class="STATUS_FAILED" value="STATUS_FAILED" 
										${task.status == 'STATUS_FAILED' ? 'selected':''}>Retraso</option>
									<option class="STATUS_SUSPENDED" value="STATUS_SUSPENDED" 
										${task.status == 'STATUS_SUSPENDED' ? 'selected':''}>Suspendida</option>
									<option class="STATUS_UNDEFINED" value="STATUS_UNDEFINED" 
										${task.status == 'STATUS_UNDEFINED' ? 'selected':''}>Sin iniciar</option>

								</select>
							</td>
						</tr>
					<tbody>
					
					`;
				}
				
			});





			let c_tabla = document.querySelector('#cuerpo_tabla');
			c_tabla.innerHTML = html;





			let name_input = document.querySelectorAll('.name_input');



			name_input.forEach(i_nombre =>{
				i_nombre.addEventListener('change', function(){
					let id_row = Number(this.parentElement.parentElement.getAttribute('id'));
					let valor_nuevo = this.value;
					let tarea_correspondiente = response.tasks.find(t => t.id == id_row);
					tarea_correspondiente.name = valor_nuevo;
					saveOnServer(response);
				});
			});



			let estatus_select = document.querySelectorAll('.estatus_select');

			estatus_select.forEach(s_status => {
				s_status.addEventListener('change', function(){
					let id_row = Number(this.parentElement.parentElement.getAttribute('id'));
					let valor_nuevo = this.value;
					let tarea_correspondiente = response.tasks.find(t => t.id == id_row);
					tarea_correspondiente.status = valor_nuevo;
					
					saveOnServer(response);
					renderTable(response);

					console.log(tarea_correspondiente);
				});
			});





			window.renderCard = function(e, assigs) {
				let obj = JSON.parse(decodeURIComponent(assigs));
				

				const instance = tippy(document.querySelector('.btn_empleados:hover'));
				instance.setProps({ arrow: true, animation: 'scale', allowHTML: true,});

				instance.show();

				let info_card = `
					<ul class="lista_empleados">`
						obj.forEach(asigando => {
							let foto = 'man.png';
							if(asigando.foto == null){ 
								if (asigando.genero == 'M') {
									foto = 'woman.png'; 
								}else{
									foto = 'usuario_no_cargado.png'; 
								}
							}else{
								foto = asigando.foto;
							}
							info_card +=
								`<li><img class="rounded-circle" src="{{ asset('storage/empleados/imagenes') }}/${foto}" style="height: 20px !important; background-color: #fff;"></img> ${asigando.name}</li>`;
						})
						
					info_card += '</ul>';
				
				instance.setContent(info_card);
				$(".btn_empleados").mouseleave(function(){
					instance.destroy();
				});

			}



			



			$(".tabla_gantt_fase th span").click(function(e){
				$(".tabla_gantt_fase:hover tbody").toggleClass('d-none');
				$(".tabla_gantt_fase:hover .tr_secundario").toggleClass('d-none');
				$(".tabla_gantt_fase:hover span i").toggleClass('fa-minus-circle  fa-plus-circle');
			});


		}


	</script>

	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="https://unpkg.com/tippy.js@6"></script>



@endsection