@extends('layouts.main')

@section('content')

    <div id="blue" class="bg-primary"></div>

    <img class="ms_poster" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">

    <div class="container justify-content-center p-5">
        <div class="row d-flex justify-content-around">

            <div id="comic"class="col-7">
                <h2 style="color: #0A2647">Action Comics #1000: The Deluxe Edition</h2>
                
                <div class="bg-success d-flex text-white p-2">
                    <div class="d-flex justify-content-between ps-2 pe-2 col-9 align-self-center">
                        <h6>
                            US Price
                            <span class="fw-bold">
                                $19.99
                            </span>
                        </h6>
    
                        <h6>
                            AVAILABLE
                        </h6>
                    </div>

                    <div class="btn-group col-3 mb-2">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Check Availability
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                      </div>
                </div>

                <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
            </div>
    
            <div id="adv" class="col-4 text-end">
                <h6 class="text-secondary">ADVERTISEMENT</h6>
    
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
        </div>    
    </div>
    
    <div class="row d-flex justify-content-evenly" style="background-color: #EEEEEE">
        <table class="table w-25 me-2">
            <thead>
              <tr>
                <th scope="col" style="color: #0A2647">Talent</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Art by</th>
                <td class="text-primary">
                    José Luis García-López,Clay Mann,Rafael Albuquerque,Patrick Gleaso,Dan Jurgens,Joe Shuster,Neal Adams,Curt Swan,John Cassada,Olivier Coipel,Jim Lee</td>
              </tr>
              <tr>
                <th scope="row">Written By</th>
                <td class="text-primary">
                    Brad Meltzer,Tom King,Scott Snyder,Geoff Johns,Brian Michael Bendis,Paul Dini,Louise Simonson,Richard Donner,Marv Wolfman,Peter J. Tomasi,Dan Jurgens,Jerry Siegel,Paul Levitz
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table w-25">
            <thead>
              <tr>
                <th scope="col" style="color: #0A2647">Specs</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Series</th>
                <td class="text-primary fw-bold">ACTION COMICS</td>
              </tr>
              <tr>
                <th scope="row">US Price</th>
                <td>$19.99</td>
              </tr>
              <tr>
                <th scope="row">On Sale Date</th>
                <td colspan="2">2018-10-02</td>
              </tr>
            </tbody>
          </table>
        
    </div>
@endsection