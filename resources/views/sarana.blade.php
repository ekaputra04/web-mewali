@extends('layouts/main')

@section('container')    
    <main>
        <section class="py-5 text-center container">
            <div class="row ">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Sarana Upacara</h1>
                    <p class="lead text-body-secondary">Website <b>Mewali</b> menyediakan sarana upacara yang lengkap dan langsung terhubung ke penjual.</p>
                    
                </div>
            </div>
        </section>

        <div class="album ">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    {{-- <form action="/sarana/{{ $sarana -> slug }}" method="GET">
                                    </form> --}}
                                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#demo-modal">View</button> --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Detail
                                      </button>
                                       
                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
{{-- <div class="modal-dialog modal-dialog-scrollable" id="demo-modal">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ipsum vitae nisi aspernatur quis. Praesentium minima debitis earum consequuntur ratione eligendi! Ducimus eius quia vero consectetur sit voluptas ut totam deleniti eveniet quas molestias officia ab adipisci esse et itaque sunt culpa dolore ullam, corporis accusamus nostrum! Accusantium, quos veniam eum necessitatibus autem similique dolorum neque nihil nisi sunt non veritatis repellat quaerat sint, laudantium velit cupiditate dolorem nobis eius. Corrupti esse dolores iusto numquam error quia fugit, commodi dignissimos similique earum dolorum, suscipit aliquam at exercitationem non cumque perspiciatis et cupiditate illum laborum? Ducimus consectetur voluptate esse eos dolor obcaecati? Aliquam officiis commodi fuga! Alias, ex saepe laborum repellendus ab, quibusdam voluptas delectus adipisci est sapiente voluptatibus laudantium voluptates fuga minima totam quo nobis ratione velit! Magnam iure, provident ut asperiores est aspernatur nam id, nisi laborum assumenda odit maiores deleniti nobis reprehenderit eligendi consectetur, repellat vitae fugit odio soluta totam inventore labore in. Dolorem, ex dignissimos quos harum amet esse optio earum ipsam laborum recusandae voluptas cumque rem quia praesentium soluta sint cum facilis, modi ab ad vitae iste officiis. Neque quae necessitatibus, alias deleniti praesentium harum voluptates, magni molestiae esse rem tempore placeat, vitae odio ipsa quisquam?
  </div> --}}

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Banten Biyukaon</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
            <div class="w-100 overflow-hidden text-center " height="250">
                <img src="{{ asset('img/banten biyukaon.jpg') }}" alt="Logo Mewali" style="max-width: 100%; max-height: 100%;">
            </div>
            <p class="py-1 fw-bold fs-3">
                Rp 10.000
            </p>

            <p class=" fs-4">
                Toko Abdy Rahayu
            </p>
            <hr>
            <p style="text-align: justify;">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus officiis veniam quae, natus cum numquam temporibus cumque nobis quisquam, dolore debitis possimus porro dolorem dicta dolores officia iusto totam animi. Cupiditate tempore omnis repellendus explicabo laborum distinctio ab a? Suscipit fuga ut animi consectetur odio, ipsam, porro fugit doloribus distinctio commodi perferendis aut quisquam! Suscipit, corrupti quia voluptate cum doloremque magni dolorem accusantium, aliquid placeat nam nostrum obcaecati quo aut maiores reiciendis tempora labore architecto eaque beatae dolorum sed adipisci minima? Exercitationem, impedit. Dolores at, corporis magni repellendus inventore eaque sunt sit facere in? Ab enim, sunt eveniet repellat vitae itaque corrupti exercitationem quos blanditiis debitis. Tempora amet ab, sed facere molestiae alias? Provident modi aperiam illum pariatur nulla qui cumque reiciendis molestias nam ipsa veritatis esse, voluptate sint hic, enim earum! Odio dolores numquam iste maxime repellendus eveniet illum iure ex quas labore itaque dolorum ab molestiae esse, sint tempora natus, quam accusamus. Minus accusantium, accusamus dolorem autem ipsa dignissimos sequi perferendis, quam blanditiis omnis aspernatur excepturi praesentium sed quis ipsam doloremque! Ad deleniti rem et natus quae! Quis odio dolor dolore accusantium voluptatum, ipsam soluta quisquam officia officiis facere velit commodi incidunt sunt consequuntur mollitia maiores asperiores. Fugit?
            </p>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Pesan sekarang</button>
        </div>
      </div>
    </div>
  </div>

    </main>
@endsection

