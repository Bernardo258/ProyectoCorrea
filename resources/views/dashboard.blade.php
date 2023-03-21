@extends('layout.layouts')

{{-- @section('titulo')

Escoge tu pelicula

@endsection --}}
@section('contenido')

{{-- <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://ramenparados.com/wp-content/uploads/2016/03/one-piece-strong-1000x600.png" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Strong World</h5>
        <p class="card-text">
          Luffy y el resto de Sombreros de Paja van a sus hogares, 
          ya que una grave crisis amenaza las islas de East Blue. 
          En el camino se cruzan con el pirata Shiki el León Dorado, que secuestra a Nami.
        </p>
        <div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
            Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Strong World</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="https://ramenparados.com/wp-content/uploads/2016/03/one-piece-strong-1000x600.png" class="card-img-top" alt="Hollywood Sign on The Hill"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://i.blogs.es/040680/one-piece-film-red-mexico-fecha-estreno-cinepolis/1366_2000.jpeg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Red</h5>
        <p class="card-text">
          Uta, la cantante más popular del mundo, va a presentarse en un escenario y revelar su apariencia por primera vez. 
          Luffy y sus amigos acuden al concierto y se dan cuenta de que la voz de Uta es capaz de cambiarlo todo.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Red</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://i.blogs.es/040680/one-piece-film-red-mexico-fecha-estreno-cinepolis/1366_2000.jpeg" class="card-img-top" alt="Palm Springs Road"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://occ-0-1555-784.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABQqi72f3QUPYXG3NR4SOt8sZIN4UY8Wc8J5i1c3VqLZP-2wZcXqS97PfNJ7XbYRMxmMZtT4nFaLODb5O4qPI4fdye89k5qJ0TsSV.jpg?r=d98" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece: Estampida</h5>
        <p class="card-text">Después de dormir durante 15 años, el dios de la destrucción Bills despierta y se sorprende al saber que Freezer ha sido derrotado por un joven llamado Goku. No les toma mucho tiempo a él y a su maestro salir a buscarlo.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece: Estampida</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://occ-0-1555-784.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABQqi72f3QUPYXG3NR4SOt8sZIN4UY8Wc8J5i1c3VqLZP-2wZcXqS97PfNJ7XbYRMxmMZtT4nFaLODb5O4qPI4fdye89k5qJ0TsSV.jpg?r=d98" class="card-img-top" alt="Los Angeles Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://tierragamer.com/wp-content/uploads/2019/02/one-piece-1.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Gold</h5>
        <p class="card-text">
          Luffy y su tripulación se enfrentan a Tesoro, un hombre sumamente rico, ambicioso y egoísta. Nami será una pieza clave en esta misión.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal4">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Gold</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://tierragamer.com/wp-content/uploads/2019/02/one-piece-1.jpg" class="card-img-top" alt="Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://occ-0-55-32.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABbcr6onkENvQAe-SmFIFKk9FAh-PDdsKBEQrpvToUYYtpAY7hIeTyCmQR3_VkZ8rQtqwG9up034yfiHhfTPdM6VzJlYDkhiVnrto.jpg?r=c83" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: Z</h5>
        <p class="card-text">
          Un ex-almirante de la Marina roba el Dyna Stones, y se cruza en el camino de los Piratas de Sombrero de Paja.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal5">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: Z</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="https://occ-0-55-32.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABbcr6onkENvQAe-SmFIFKk9FAh-PDdsKBEQrpvToUYYtpAY7hIeTyCmQR3_VkZ8rQtqwG9up034yfiHhfTPdM6VzJlYDkhiVnrto.jpg?r=c83" class="card-img-top" alt="Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="http://koi-nya.net/img/subidos_posts/2014/07/One-Piece-3D2Y-Ace-no-Shi-wo-Koete-Luffy-Nakama-to-no-Chikai.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">One Piece Film: 3D2Y</h5>
        <p class="card-text">
          La historia nos narra los dos años de entrenamiento de Luffy con Silvers Rayleigh en la isla Rusukaina, después de la batalla de Marineford y la muerte de su hermano Ace. Allí descubrirá a Byrnndi World, el Destructor del Mundo y el poder de la Fruta del Diablo, Fruta Moa Moa.
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal6">
          Play
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">One Piece Film: 3D2Y</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
      <img src="http://koi-nya.net/img/subidos_posts/2014/07/One-Piece-3D2Y-Ace-no-Shi-wo-Koete-Luffy-Nakama-to-no-Chikai.jpg" class="card-img-top" alt="Skyscrapers"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div> --}}

  <section id="principal">
    <div class="fade"></div>
    <div class="principal-text">
   </div>
</section>
</div>

<section id="trabajamos">
<div class="container">
    <h2>¿Cómo trabajamos?</h2>
    <div class="flex">
        <div>
            <span  class="fas fa-candy-cane fa-spin fa-pulse "></span>
            <h4>Encuentra tus dulces.</h4>
            <p>Contamos con gran variedad de dulces, encuentra tus dulces favoritos con nosotros.</p>
        </div>

        <div>
            <span class="fas fa-cart-plus fa-spin fa-pulse "></span>
            <h4>Agrega al carrito.</h4>
            <p>Haz tu selección preferida de dulces agregandolos al carrito.</p>
        </div>

        <div>
            <span class="fas fa-store fa-spin fa-pulse "></span>
            <h4>Visitanos.</h4>
            <p>Encuentra la tienda mas cercana para realizar la compra.</p>
        </div>
    </div>
</div>
</section>

<section id="dulces">
<div class="container">
    <h2>Dulces</h2>
    <div id="dulces-slider" class="slick">
        <div>
            <img src="http://cdn.shopify.com/s/files/1/0415/6696/1824/products/WhatsApp-Image-2021-08-02-at-08.17.26-15.jpg?v=1638651588" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$1.50</p>
                <span class="beds">Picafresa</span>

            </div>
        </div>

        <div>
            <img src="https://www.costco.com.mx/medias/sys_master/products/h13/h05/70367362285598.jpg" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$3.50</p>
                <span class="beds">Mazapan</span>

            </div>
        </div>

        <div>
            <img src="https://detqhtv6m6lzl.cloudfront.net/wp-content/uploads/2021/05/mini_7432354-1.jpg" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$8.00</p>
                <span class="beds">Bubulubu</span>
   
            </div>
        </div>

        <div>
            <img src="https://masbodegaonline.com.mx/media/catalog/product/i/m/image_7_5655.jpeg?optimize=low&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$7.00</p>
                <span class="beds">Rockaleta</span>
    
            </div>
        </div>

        <div>
            <img src="https://cdn.shopify.com/s/files/1/0372/4450/2149/products/PanditasRojos_1200x1200.jpg?v=1587138372" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$12.50</p>
                <span class="beds">Panditas Rojos</span>

            </div>
        </div>

        <div>
            <img src="https://cdn.shopify.com/s/files/1/0430/5489/1157/products/Disenosintitulo-2022-05-20T125800.138_900x.png?v=1653069537" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$2.50</p>
                <span class="beds">Paleta de la rosa</span>

            </div>
        </div>

        <div>
            <img src="https://surtitienda.vteximg.com.br/arquivos/ids/188876-2000-2000/00025046150137.1.jpg?v=637618265999730000" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$5.00</p>
                <span class="beds">Bocadin</span>

            </div>
        </div>

        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkI3g2fvP9hclVEO_Vha2Np_1V2j2LhPV5Ow&usqp=CAU" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$2.00</p>
                <span class="beds">Orbit</span>

            </div>
        </div>

        <div>
            <img src="https://candymania.mx/wp-content/uploads/2021/02/vuala-switch.png" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$6.00</p>
                <span class="beds">Vuala swich </span>

            </div>
        </div>

      <div>
            <img src="https://res.cloudinary.com/walmart-labs/image/upload/d_default.jpg/w_960,dpr_auto,f_auto,q_auto:best/gr/images/product-images/img_large/00750100027840L.jpg" alt="Property 1" />
            <div class="dulces-detalles">
                <p class="price">$16.00</p>
                <span class="beds">Paleta payaso </span>

            </div>
        </div>
    </div>

    <button class="rounded">Ver todos los dulces disponibles</button>
</div>
</section>

<section id="empleados">
<div class="container">
    <h2>Nosotros</h2>
    <p class="parrafo">Contamos con las mejores personas, con el gusto y placer de trabajar diariamente.</p>

    <div class="flex">
        <div class="card">
            <img id="yop" src="{{ asset('img/ul.jpeg') }}" alt="mi foto">
            <h3>Ulises Martínez</h3>
            <p>Complice en el desarrollo de Dulceria UTA</p>
        </div>

        <div class="card">
            <img id="yop" src="/img/se.png" alt="Realtor 1" />
            <h3>Sebastian Guerra</h3>
            <p>Analista de Dulceria UTA</p>
        </div>

        <div class="card">
            <img id="yop" src="/img/ul.jpeg" alt="Realtor 1" />
            <h3>Ulises Martínez</h3>
            <p>Hacker de Dulceria UTA</p>
        </div>

        <div class="card">
            <img id="yop" src="/img/ber.png" alt="Realtor 1" />
            <h3>Bernardo Paredes</h3>
            <p>Administrador y mercadologo de Dulceria UTA</p>
        </div>

        <div class="card">
            <img id="yop" src="/img/se.png" alt="Realtor 1" />
            <h3>Sebastian Guerra</h3>
            <p>Inversionista #1 de Dulceria UTA</p>
        </div>

        <div class="card">
          <img id="yop" src="/img/ber.png" alt="Realtor 1" />
          <h3>Bernardo Paredes</h3>
          <p>Contador de Dulceria UTA</p>
        </div>
    </div>
</div>
</section>


<section id="estrella">
<div class="flex container">
    <img src="http://cdn.shopify.com/s/files/1/0415/6696/1824/products/WhatsApp-Image-2021-08-02-at-08.17.26-15.jpg?v=1638651588" alt="Property 1" />
    <div>
        <h2>Nuestro producto estrella</h2>
        <p class="large-paragraph">El impacto de la picafresa vuelve loco a todo el mundo.</p>
        <p>Los exámenes, tareas y proyectos universitarios dejan a los estudiantes agotados y estresados, es por ello
            que la picafresa se vende a montones para los jovenes universitarios, pues este producto es el producto que 
            regenera la energia y mantiene activamente a los estudiantes a continuar con sus actividades del día a día.</p>
            <h2>Beneficios</h2>
        <ul>    
            <li>Poderoso antioxidante.</li>
            <li>Fortalece el sistema inmunológico.</li>
            <li>Recomendado en tareas de alto rendimiento.</li>
            <li>Recomendado para deportistas.</li>
        </ul>
    </div>
</div>
</section>


<section id="testimonios">
<div class="container">
    <h2>Lo que nuestros clientes cuentan</h2>
    <div id="testimonios-slider">
        <div>
            <blockquote>
                <p>"Una tienda en linea muy juvenil, excelente para estudiantes con unos precios muy accesibles."</p>
            </blockquote>
            <div class="testimonios-caption">
                <img src="https://yt3.googleusercontent.com/ytc/AMLnZu9SnsWqXQBm-KEFTnwZBss4oLYmJQBKGOkWr6qqOQ=s900-c-k-c0x00ffffff-no-rj" alt="Client 7" />
                <p>Marión Neta</p>
            </div>
        </div>

        <div>
            <blockquote>
                <p>"Desde que conozco esta tienda, he subido 8 kg comiendo puros dulces, es una adicción que me hace feliz como una lombriz."</p>
            </blockquote>
            <div class="testimonios-caption">
                <img src="https://www.elsoldemexico.com.mx/gossip/p1bisk-facundo.jpg/ALTERNATES/LANDSCAPE_1140/facundo.jpg" alt="Client 7" />
                <p>Elber González</p>
            </div>
        </div>

        <div>
            <blockquote>
                <p>"Me gusta que tengan Rockaleta entre los productos es mi dulce favorito y no lo cambiaria por nada ni por un duvalin."</p>
            </blockquote>
            <div class="testimonios-caption">
                <img src="https://cdn-3.expansion.mx/dims4/default/92a0dd7/2147483647/strip/true/crop/1200x869+0+0/resize/1200x869!/format/webp/quality/90/?url=https%3A%2F%2Fcdn-3.expansion.mx%2Fc7%2F8c%2Fee53fcee44c4bf85673edd1f8cf0%2F272140185-231259359153917-9039025978953150748-n.jpg" alt="Client 7" />
                <p>Paty Chapoy</p>
            </div>
        </div>

        <div>
            <blockquote>
                <p>"Me encanta, me fascina, me vuelvo loco."</p>
            </blockquote>
            <div class="testimonios-caption">
                <img src="https://www.forosperu.net/adjuntos/daa6fafb699b2e012404eeca999aabdd-jpg.117163/" alt="Client 7" />
                <p>Pedrito solo</p>
            </div>
        </div>
    </div>
</div>
</section>

<section id="contacto">
<div class="container">
    <h2>Contactanos</h2>

    <div class="flex">
        <div id="form-container">
            <h3>Formulario de contacto</h3>
            <form>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" />

                <label for="email">Correo electrónico</label>
                <input type="text" id="email" />

                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" />

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Deposita tus palabras bonitas aquí.."></textarea>

                <button class="rounded">Enviar</button>
            </form>
        </div>

        <div id="direccion-container">
            <label>Dirección</label>
            <address>
                Blvd. Juan Pablo II No. 1302 Ex hacienda la Cantera, 20200 Aguascalientes, Ags.
            </address>

            <label>Teléfono</label>
            <a href="#"> 449 910 5000</a>

            <label>Correo electrónico</label>
            <a href="#">Matricula@utags.edu.mx</a>
        </div>
    </div>
</div>
</section>

  @endsection