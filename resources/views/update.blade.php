<h1>Update Food</h1>
<form action="{{ Request::url() }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <label for="name">Food name</label>
    <input type="text" name="name" placeholder="Minimum 5 characters" value="{{$item->name}}"><br>
    <label for="brief_description">Brief description</label>
    <textarea name="brief_description" placeholder="Maximum 100 characters">{{$item->brief_description}}</textarea><br>
    <label for="brief_description">Full description</label>
    <textarea name="full_description" placeholder="Maximum 255 characters">{{$item->full_description}}</textarea><br>
    <label for="brief_description">Category</label>
    <select name="type">
        <option value="main"
        @if ($item->type == "main")
            selected
        @endif
        >Main dish</option>
        <option value="beverage"
        @if ($item->type == "beverage")
            selected
        @endif>
        Beverage</option>
        <option value="dessert" 
        @if ($item->type == "dessert")
            selected
        @endif>Dessert</option>
    </select><br>
    <label for="brief_description">Price</label>
    <input type="number" name="price" value="{{$item->price}}"><br>
    <label for="picture">Image file</label>
    <input type="file" name="picture"><br>
    <button>Add</button>
</form>