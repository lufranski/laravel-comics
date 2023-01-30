@extends('layouts.main')

@section('content')
    <div class="bg-dark p-5">
        <div id="ms_label" class="bg-primary text-white p-3">CURRENT SERIES</div>

        <div id="card-container" class="container bg-dark d-flex flex-wrap">
            <div class="row gx-5 mb-5">
                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                        
                        <h6 class="mt-1">ACTION COMICS</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="">
                        
                        <h6 class="mt-1">AMERICAN VAMPIRE 1976</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="">
                        
                        <h6 class="mt-1">AQUAMAN</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="">
                        
                        <h6 class="mt-1">BATGIRL</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="">
                        
                        <h6 class="mt-1">BATMAN BEYOND</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="">
                        
                        <h6 class="mt-1">BATMAN BEYOND</h6>
                    </a>
                </div>
                
            </div>

            <div class="row gx-5">
                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="">
                        
                        <h6 class="mt-1">BATMAN/SUPERMAN</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="">
                        
                        <h6 class="mt-1">BATMAN/SUPERMAN ANNUAL</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="">
                        
                        <h6 class="mt-1">BATMAN: THE JOKER WARZONE</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="">
                        
                        <h6 class="mt-1">BATMAN: THREE JOKERS</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="">
                        
                        <h6 class="mt-1">BATMAN WHITE KNIGHT: HARLEY QUEEN</h6>
                    </a>
                </div>

                <div class="col-2">
                    <a href="comic" class="text-white">

                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="">
                        
                        <h6 class="mt-1">CATWOMAN</h6>
                    </a>
                </div>
                
            </div>

            <div class="bg-primary text-white fw-bold py-2 px-5 mt-5 mx-auto">
                LOAD MORE
            </div>

        </div>
        
    </div>
    <div class="bg-primary text-white fw-bold">
        <ul class="px-5 d-flex justify-content-center">
            <li>
               <img class="resize" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
               <span>
                   DIGITAL COMICS
                </span> 
            </li>

            <li>
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                <span>
                    DC MERCHANDISE
                </span>
            </li>

            <li>
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <span>
                    SUBSCRIPTIONS
                </span>
            </li>
            
            <li>
                <img class="resize" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                <span>
                    COMIC SHOP LOCATOR
                </span>
            </li>

            <li class="d-flex">
                <img class="mt-2" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                <p class="align-self-center mt-3">
                    DC POWER VISA
                </p>
            </li>
        </ul>
    </div>

@endsection