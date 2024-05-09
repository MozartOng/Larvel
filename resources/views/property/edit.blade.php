<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/edit.css')}}">
    <title>Post</title>
</head>

<body>



    <section class="property-form" id="post-form">

        <div>
            @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)


                    <li>{{$error}}</li>

                @endforeach
                </ul>

            @endif
        </div>

        <form action="{{route('property.update' , ['property' => $property])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h3 class="heading">Edit Youre <span>Informatiom</span></h3>
            <div class="box">
                <p>property name <span>*</span></p>
                <input type="text" name="property_name" required maxlength="50" placeholder="enter property name"
                    class="input" value="{{$property->property_name}}">
            </div>
            <div class="flex">
                <div class="box">
                    <p>property price <span>*</span></p>
                    <input type="number" name="price" required min="0" max="9999999999" maxlength="10"
                        placeholder="enter property price" class="input" value="{{$property->price}}">
                </div>

                <div class="box">
                    <p>property address <span>*</span></p>
                    <input type="text" name="property_adress" required maxlength="100" step="0.001"
                        placeholder="enter property full address" class="input" value="{{$property->property_adress}}">
                </div>


                <div class="box">
                    <p>how many bedrooms <span>*</span></p>
                    <select name="bedrooms" required class="input" value="{{$property->bedrooms}}">
                        <option value="0">0 bedroom</option>
                        <option value="1" selected>1 bedroom</option>
                        <option value="2">2 bedroom</option>
                        <option value="3">3 bedroom</option>
                        <option value="4">4 bedroom</option>
                        <option value="5">5 bedroom</option>
                        <option value="6">6 bedroom</option>
                        <option value="7">7 bedroom</option>
                        <option value="8">8 bedroom</option>
                        <option value="9">9 bedroom</option>
                    </select>
                </div>
                <div class="box">
                    <p>how many bathrooms <span>*</span></p>
                    <select name="bathrooms" required class="input" value="{{$property->bathrooms}}">
                        <option value="1">1 bathroom</option>
                        <option value="2">2 bathroom</option>
                        <option value="3">3 bathroom</option>
                        <option value="4">4 bathroom</option>
                        <option value="5">5 bathroom</option>
                        <option value="6">6 bathroom</option>
                        <option value="7">7 bathroom</option>
                        <option value="8">8 bathroom</option>
                        <option value="9">9 bathroom</option>
                    </select>
                </div>

                <div class="box">
                    <p>carpet area <span>*</span></p>
                    <input type="number" name="size" required min="1" max="9999999999" maxlength="10" placeholder="how many squarefits?" class="input" value="{{$property->size}}">
                </div>


                <div class="box">
                    <p>property description <span>*</span></p>
                    <textarea name="description" maxlength="1000" class="input" required cols="30" rows="10"
                        placeholder="write about property..." value="">{{$property->description}}</textarea>
                </div>

                <div class="box">
                    <p>image 01 <span>*</span></p>
                    <input type="file" name="image" class="input" accept="image/*" value="{{$property->image}}" >
                </div>

                <input type="submit" value="Update" class="button" name="post">


        </form>

    </section>

</body>

</html>
