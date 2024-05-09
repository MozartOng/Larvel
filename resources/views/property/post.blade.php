<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/post.css')}}">
    <title>Post</title>
</head>

<body>


    <!-- header section -->

    <header>

        <a href="#" class="logo"><span>real</span>Estate</a>




        <div class="icons">
            <button id="openPost"><i class="fa-solid fa-location-arrow"></i> Post</button>
            <button id="openprofile"><i class="fa-regular fa-user"></i> Profile</button>
            <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
        </div>



    </header>
    <!-- HEADER section end -->


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

        <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <h3 class="heading">property <span>details</span></h3>
            <div class="box">
                <p>property name <span>*</span></p>
                <input type="text" name="property_name" required maxlength="50" placeholder="enter property name"
                    class="input">
            </div>
            <div class="flex">
                <div class="box">
                    <p>property price <span>*</span></p>
                    <input type="number" name="price" required min="0" max="9999999999" maxlength="10"
                        placeholder="enter property price" class="input">
                </div>

                <div class="box">
                    <p>property address <span>*</span></p>
                    <input type="text" name="property_adress" required maxlength="100" step="0.001"
                        placeholder="enter property full address" class="input">
                </div>


                <div class="box">
                    <p>how many bedrooms <span>*</span></p>
                    <select name="bedrooms" required class="input">
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
                    <select name="bathrooms" required class="input">
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
                    <input type="number" name="size" required min="1" max="9999999999" maxlength="10" placeholder="how many squarefits?" class="input">
                </div>


                <div class="box">
                    <p>property description <span>*</span></p>
                    <textarea name="description" maxlength="1000" class="input" required cols="30" rows="10"
                        placeholder="write about property..."></textarea>
                </div>

                <div class="box">
                    <p>image 01 <span>*</span></p>
                    <input type="file" name="image" class="input" accept="image/*" >
                </div>

                <input type="submit" value="post property" class="button" name="post">


        </form>

    </section>

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
                    <a href="#">my property</a>
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
