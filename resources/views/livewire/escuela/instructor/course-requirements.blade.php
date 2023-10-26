<section class="mt-4">
    <h1>Requisitos del curso</h1>
    <hr class="mt-2 mb-6 bg-primary">

    @foreach ($course->requirements as $item)
                @if ($requirement->id == $item->id)
                <div class="registro rounded p-2">
                    <form wire:submit='update'>
                        <input wire:model.live="requirement.name" class="form-control">
                        @error('requirement.name') <span class="text-danger">{{ $message }}</span> @enderror
                    </form>
                </div>
                @else
                <div class="registro rounded pt-2 pl-4 pr-4">
                    <div class="row justify-content-start">
                        <div class="col-9">
                            <h4 style="color:#3086AF;">{{ $item->name }}</h4>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <i wire:click="edit({{ $item }})"
                                    class="m-1 text-blue-500 cursor-pointer fas fa-edit"></i>
                            <i wire:click="destroy({{ $item }})" class="m-1 fa-regular fa-trash-can"></i>
                        </div>
                    </div>
                </div>

                @endif
    @endforeach

    <article class="card shadow-none">
        <div class="card-body">
            <form wire:submit="store" class="form-group">
                <div class="grid grid-cols-2 gap-4 mt-2 row justify-content-start">
                    <div class="col-9 pl-0">
                        {!! Form::label('title', 'Agregar el nombre del requisito*',[
                        'class' => 'pl-0']) !!}
                        <input wire:model.live="name" class="form-control" placeholder="Agregar el nombre del requisito">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-light text-primary">Agregar <i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
                <div class="flex justify-end mt-2">
                </div>
            </form>
        </div>
    </article>
</section>
