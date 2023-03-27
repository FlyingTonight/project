<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div id="container">
                        <div id="header"><h1><a href="http://www.free-css.com/free-css-layouts.php">Free CSS Layouts</a></h1></div>
                          <div id="wrapper">
                            <div id="content">
                              <p><strong>Content here.</strong></p>
                              <p>Sapibulumnibh phasellus nulla egestibulum enim pretium elit tincidunt estiquam ultrisque donectetur. Sedcondimentumsan odio hendrerit proin vitae dignis nibh ac justo id congue. Amesintesque vel curabitae volutpat donec alique nasceleifendimentesque montesque rhoncus quis eros. Vestnunc nonummy</p>
                              <p>Montegeraliquam sed pede in cursus praesenec vestas rhoncus wisi at wisi. Condisseloborttis enim et ipsum mauristie id felit adipiscipit ac auctortorttitor sempor. Vitantesqueat sempus non sed et mus sit vivamus purus netus hendiment. Pretiuma diam et id tempus dolor por wisi sed volutpat facilisi.</p>
                              <p>Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. Semperligula curabitae tellentesque nulla trices vestas ristibulum id justo auctor facinia. Natisdonec consequat nibh pellus.</p>
                              <p>Vestibusodio euisque id elerisus lacus tincidunt sit malesuada lacus pellus parturpiscing. Pellenterdumat maecenatoque cras a magna nibh et quis diam ames et. Laoremvolutpat ac dolor eget eget temper lacus vestibus velit lacus venean. Magnaipsum tellus morbi leo aliquat nulla convallis pellentesque.</p>
                            </div>
                          </div>
                          <div id="navigation">
                            <p><strong>Navigation Here</strong></p>
                            <ul>
                              <li><a href="http://www.free-css.com/">Free CSS Templates</a></li>
                              <li><a href="http://www.free-css.com/free-css-layouts.php">Free CSS Layouts</a></li>
                            </ul>
                          </div>
                          <div id="extra">
                            <p><strong>More stuff here.</strong></p>
                            <p>sit malesuada lacus pellus parturpiscing. Pellenterdumat maecenatoque cras a magna nibh et quis diam ames et. Laoremvolutpat ac dolor eget eget temper lacus vestibus velit lacus venean. Magnaipsum tellus morbi leo aliquat nulla convallis pellentesque.</p>
                          </div>
                          <div id="footer">
                            <p>Footer</p>
                          </div>
                        </div>
                        {{-- @foreach ($posts as $post) --}}


                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="position-relative mb-4">
                                <img class="img-fluid rounded w-100" src="{{ asset('storage/'.$post->photo) }}" alt="">
                                <div class="blog-date">
                                    <h4 class="font-weight-bold mb-n1">01</h4>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                                 <div class="d-flex mb-2">
                                    @foreach ($post->tags as $tag )


                                <a class="text-secondary text-uppercase font-weight-medium">{{$tag->name}}</a>
                                <span class="text-primary px-2">|</span>
                                @endforeach
                            </div>
                            <div class="d-flex mb-2">
                                <a class="text-danger text-uppercase font-weight-medium" href="">{{$post->category->name}}</a>
                            </div>
                            <h5 class="font-weight-medium mb-2">{{$post->title}}</h5>
                            <p class="mb-4">{{$post->short_content}}</p>
                            <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show',['post'=> $post->id])}}">O'qish</a>
                        </div>
                      {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
