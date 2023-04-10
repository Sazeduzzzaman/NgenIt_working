<style>
    .frame {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        height: 55px;
        width: 180px;
        position: relative;
        transition: box-shadow 0.6s cubic-bezier(.79, .21, .06, .81);
        border-radius: 10px;
    }

    .frame a:hover {
        color: #ae0a46;
    }

    .btns {
        text-align: center;
        height: 35px;
        width: 35px;
        border-radius: 23px;
        background: #e0e5ec;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-tap-highlight-color: transparent;
        box-shadow:
            -7px -7px 20px 0px #fff9,
            -4px -4px 5px 0px #fff9,
            7px 7px 20px 0px #0002,
            4px 4px 5px 0px #0001,
            inset 0px 0px 0px 0px #fff9,
            inset 0px 0px 0px 0px #0001,
            inset 0px 0px 0px 0px #fff9, inset 0px 0px 0px 0px #0001;
        transition: box-shadow 0.6s cubic-bezier(.79, .21, .06, .81);
        font-size: 16px;
        color: rgba(42, 52, 84, 1);
        text-decoration: none;
    }

    .btns:active {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .5),
            -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255, 255, 255, .5),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
    }
</style>


<section class="sticky-bottom">
    <div class="shadow-sm bg-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center ">

                <div class="text-center py-2 bg-white">
                    <span class="text-center">&copy; {{ date('Y') }} <a href="">Ngen It</a></span>
                </div>
                {{-- <div class="frame">
                    <a href="#" class="btns">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btns">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btns">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="btns">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div> --}}
            </div>
            {{-- <ul class="nav">
                <li class="nav-item">
                    <a href="" class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                        <div class="d-flex align-items-center mx-md-1">
                            <i class="ph-lifebuoy"></i>
                            <span class="d-none d-md-inline-block ms-2">Support</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item ms-md-1">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon text-danger fw-semibold rounded"
                        target="_blank">
                        <div class="d-flex align-items-center mx-md-1">
                            <i class="fab fa-laravel"></i>
                            <span class="d-none d-md-inline-block ms-2">
                                {{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
                        </div>
                    </a>
                </li>
            </ul> --}}
        </div>
    </div>
</section>
