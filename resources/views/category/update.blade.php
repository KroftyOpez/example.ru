<x-layout>
    <x-slot:title>
        Редактирование категории
    </x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название категории</label>
            <input class="form-control" id="name" name="name" value="{{$category->name}}"></input>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Обновить данные</button>
        </div>
    </form>

</x-layout>
