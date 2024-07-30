<header id="tg-header" class="tg-header tg-haslayout">
    <div class="tg-topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-leftbox" style="margin-top: 8px;">
                        Chúc bạn ngày mới tốt lành
                    </div>
                    <div class="tg-rightbox">
                        <ul class="tg-socialicons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul>
                            <li class="dropdown tg-themedropdown">
                                <a href="{{route('login')}}"><button class="tg-btndropdown" id="tg-logindropdown" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">đăng
                                    nhập</button></a>
                            </li>
                            <li class="dropdown tg-themedropdown">
                                <a href="{{route('register')}}"><button class="tg-btndropdown" id="tg-registerdropdown" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">đăng
                                    ký</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="" style="display: flex; align-items: center;">
                    <strong class="tg-logo"><a href="{{url('/')}}"><img src="/layout/images/logo.png"
                                alt="logo"></a></strong>
                    <form action="{{url('timkiem')}}" style="display: flex; align-items: center;">
                        <input
                            style="margin-left: 200px; border-radius: 10px 0 0 10px ; margin-top: 20px; width: 500px; height: 40px;"
                            type="text" name="keyword" id=""
                            placeholder="nhập nội dung muốn tìm ">
                        <button type="submit"
                            style="margin-top: 20px;border-radius:0 10px  10px 0; width: 80px; height: 40px; display: flex; align-items: center; background-color: bisque;"><i
                                class="lnr lnr-magnifier">Tìm kiếm</i></button>
                    </form>
                </div>
                <div class="tg-navigationarea">
                    <nav id="tg-nav" class="tg-nav">
                        <div  class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                @foreach ($danhmuc as $dm)
                                <li>
                                    <a style="text-decoration: none" href="{{url('tintheoloai',$dm->id)}}"><b>{{$dm->name}}</b></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>