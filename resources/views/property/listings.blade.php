<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href=" {{ URL::asset('css/all.min.css') }} ">
    <link rel="stylesheet" href=" {{ URL::asset('css/listing.css') }} ">


    <title>myProperty</title>
</head>

<body>

    <!-- header section start  -->

    <header>

        <a href="#" class="logo"><span>real</span>Estate</a>




        <div class="icons">
            <a href="{{ route('property.create') }}"><i class="fa-solid fa-location-arrow"></i> Post</a>
            <a href="{{route('profile.edit')}}"><i class="fa-regular fa-user"></i> Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"><i class="fa-solid fa-right-from-bracket"></i>Logout</button>
            </form>


        </div>



    </header>

    <!-- header section end  -->





    <!-- Mylistings section start  -->

    <section class="featured" id="featured">
        <h1 class="heading"><span>My Featured</span> properties </h1>
        <div class="box-container">
            @foreach ($properties as $property)
                <div class="box">
                    <div class="img-container">
                        <img src="{{$property->image}}" alt="">
                        <div class="info">
                            <h3>3 days ago</h3>
                        </div>
                    </div>
                    <div class="content">
                        <div class="price">
                            <h3>${{$property->price}} /mo</h3>
                        </div>
                        <div class="details">
                            <h3> <i class="fas fa-expand"></i> {{$property->size}} m^2</h3>
                            <h3> <i class="fas fa-bed"></i> {{$property->bedrooms}}beds</h3>
                            <h3><i class="fas fa-bath"></i> {{$property->bathrooms}}baths</h3>
                        </div>
                        <div class="buttons">
                            <a href="{{route('property.edit', ['property' => $property])}}" class="btn">Edit</a>
                            <form action="{{route('property.delete' , ['property' => $property])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit"  class="btn" value="Delete">
                            </form>
                        </div>
                    </div>


                </div>
            @endforeach






    </section>

    <!-- Mylistings section end  -->




    <!-- footer section start  -->

    <footer>
        <div class="footer-container">
            <div class="box-container">
                <div class="box">
                    <h3>branch location</h3>
                    <a href="#">algeria</a>
                    <a href="#">USA</a>
                    <a href="#">france</a>
                    <a href="#">russia</a>
                    <a href="#">italy</a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#">home</a>
                    <a href="#">featured</a>
                    <a href="#">myProperty</a>
                    <a href="#">post property</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">X</a>
                    <a href="#">instagram</a>
                    <a href="#">linkedin</a>
                </div>

                <div class="credits">created by <span>Aymen Zouzou</span></div>
            </div>
        </div>
    </footer>

    <!-- footer section end  -->



</body>

</html>
