<div class="seccion_div">
    <div class="row">


        <form method="POST" class="col-12"
            action="{{ route('admin.accion-correctivas.storeAnalisis', $accionCorrectiva->id) }}">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    Seleccione el metódo de análisis
                </div>
                <div class="col-md-8">
                    <select id="select_metodos" class="form-control" name="metodo">
                        <option selected disabled>- -</option>
                        <option {{$analisis->metodo=="Lluvia de ideas (Brainstorming)"?'selected':''}} class="op_ideas" data-metodo="ideas">Lluvia de ideas (Brainstorming)
                        </option>
                        <option {{$analisis->metodo=="5 Porqués (5 Why)"?'selected':''}} class="op_porque" data-metodo="porque">5 Porqués (5 Why)</option>
                        <option {{$analisis->metodo=="Diagrama causa efecto (Ishikawa)"?'selected':''}} class="op_digrama" data-metodo="digrama">Diagrama causa efecto (Ishikawa)
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-12" style="position: relative;">

                <div id="ideas" class="caja_oculta_dinamica row">
                    <div class="form-group col-12">
                        <label>Ideas</label>
                        <textarea class="form-control" name="ideas">{{ $analisis->ideas }}</textarea>
                    </div>

                    <div class="form-group col-12">
                        <label>Causa Raíz</label>
                        <textarea class="form-control" name="causa_ideas">{{ $analisis->causa_ideas }}</textarea>
                    </div>
                </div>



                <div id="porque" class="caja_oculta_dinamica row">
                    <div class="form-group col-12">
                        Problema: <textarea class="form-control"
                            name="problema_porque">{{ $analisis->problema_porque }}</textarea>
                    </div>
                    <div class="form-group col-12">
                        <label>1er porqué:</label>
                        <input name="porque_1" class="form-control" value="{{ $analisis->porque_1 }}">
                        <label>2do porqué:</label>
                        <input name="porque_2" class="form-control" value="{{ $analisis->porque_2 }}">
                        <label>3er porqué:</label>
                        <input name="porque_3" class="form-control" value="{{ $analisis->porque_3 }}">
                        <label>4to porqué:</label>
                        <input name="porque_4" class="form-control" value="{{ $analisis->porque_4 }}">
                        <label>5to porqué:</label>
                        <input name="porque_5" class="form-control" value="{{ $analisis->porque_5 }}">
                    </div>
                    <div class="form-group col-12">
                        Causa Raíz: <textarea class="form-control"
                            name="causa_porque">{{ $analisis->causa_porque }}</textarea>
                    </div>
                </div>



                <div id="digrama" class="caja_oculta_dinamica">
                    <div class="mt-5 col-12" style="overflow: auto;">
                        <div style="width: 100%; min-width:540px; position: relative;">
                            <img src="{{ asset('img/diagrama_causa_raiz.png') }}" style="width:100%">

                            <textarea name="control_a"
                                class="politicas_txtarea">{{ $analisis->control_a }}</textarea>
                            <textarea name="control_b"
                                class="politicas_txtarea txt_obj_secundarios_a">{{ $analisis->control_b }}</textarea>

                            <textarea name="proceso_a" class="procesos_txtarea">{{ $analisis->proceso_a }}</textarea>
                            <textarea name="proceso_b"
                                class="procesos_txtarea txt_obj_secundarios_a">{{ $analisis->proceso_b }}</textarea>

                            <textarea name="personas_a"
                                class="personas_txtarea">{{ $analisis->personas_a }}</textarea>
                            <textarea name="personas_b"
                                class="personas_txtarea txt_obj_secundarios_a">{{ $analisis->personas_b }}</textarea>

                            <textarea name="tecnologia_a"
                                class="tecnologia_txtarea txt_obj_secundarios_b">{{ $analisis->tecnologia_a }}</textarea>
                            <textarea name="tecnologia_b"
                                class="tecnologia_txtarea ">{{ $analisis->tecnologia_b }}</textarea>

                            <textarea name="metodos_a"
                                class="metodos_txtarea txt_obj_secundarios_b">{{ $analisis->metodos_a }}</textarea>
                            <textarea name="metodos_b" class="metodos_txtarea ">{{ $analisis->metodos_b }}</textarea>

                            <textarea name="ambiente_a"
                                class="ambiente_txtarea txt_obj_secundarios_b">{{ $analisis->ambiente_a }}</textarea>
                            <textarea name="ambiente_b"
                                class="ambiente_txtarea ">{{ $analisis->ambiente_b }}</textarea>

                            <textarea name="problema_diagrama"
                                class="problemas_txtarea">{{ $analisis->problema_diagrama }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-3 text-right col-12">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
