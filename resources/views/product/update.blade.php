<x-layout>
    <x-slot:title>
        Редактирование товара
    </x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название товара</label>
            <input class="form-control" id="name" name="name" value="{{$product->name}}"></input>
        </div>

        <div class="mb-3">
            <label class="form-label" for="price">Цена товара</label>
            <input class="form-control" type="number" min="0" step="0.01" id="price" name="price" value="{{$product->price}}"></input>
        </div>
        <div class="mb-3">
            <label class="form-label" for="quantity">Цена товара</label>
            <input class="form-control" type="number" min="0" step="1" id="quantity" name="quantity" value="{{$product->quantity}}"></input>
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Цена товара</label>
            <input class="form-control" id="description" name="description" value="{{$product->description}}"></input>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category_id">Категория</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$product->category_id == $category->id ? "selected" : " "}}>{{$category->name}}</option>
                @endforeach


            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Обновить данные</button>
        </div>
    </form>

</x-layout>
