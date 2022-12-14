<x-app-layout>
    <div class="image flex items-center justify-center"><img src="academ.png" alt="" style="width:30%"
            class="card-img-top"></div>

    <div class="team">
        <div class="sticky-lg">
            <h1 class="welcome text-2xl">Team</h1>
        </div>
    </div>

    @if (is_null(auth()->user()))
        <audio id="au" controls preload autoplay style="visibility:hidden">
            <source src="audiowelcome.mp3" type="audio/mpeg">
            Tu navegador no soporta audio HTML5.
        </audio>
    @endif
    @if (!is_null(auth()->user()))
        @if (auth()->user()->roles[0]->name == 'Teacher')
            <audio id="au" controls preload autoplay style="visibility:hidden">
                <source src="audioteacher.mp3" type="audio/mpeg">
                Tu navegador no soporta audio HTML5.
            </audio>
        @endif
        @if (auth()->user()->roles[0]->name == 'Student')
            <audio id="au" controls preload autoplay style="visibility:hidden">
                <source src="audiostudent.mp3" type="audio/mpeg">
                Tu navegador no soporta audio HTML5.
            </audio>
        @endif
        @if (auth()->user()->roles[0]->name == 'Admin')
            <audio id="au" controls preload autoplay style="visibility:hidden">
                <source src="audioadmin.mp3" type="audio/mpeg">
                Tu navegador no soporta audio HTML5.
            </audio>
        @endif
    @endif
    
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-5">

        <div class="">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('profile-pic.png') }}" alt="Mateo" style="width:100%">
                    <h3>Mateo Arboleda</h3>
                    <p class="title">Scrum Master</p>
                </div>
                <div class="face back">
                    <h3>Mateo Arboleda</h3>
                    <p class="title">Scrum Master</p>
                    <p>Scrum team trainer and facilitator. It helps the team stay focused on the project objectives
                        and
                        eliminate impediments that appear along the way.</p>
                    <p>mateo_arboleda82181@elpoli.edu.co</p>
                </div>
            </div>
        </div>

        <div class="">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('jose.png') }}" alt="Jose" style="width:100%">
                    <h3>Jose chaverra</h3>
                    <p class="title">Developer</p>
                </div>
                <div class="face back">
                    <h3>Jose chaverra</h3>
                    <p class="title">Developer</p>
                    <p>Design-focused developer.</p>
                    <p>jose_chaverra82192@elpoli.edu.co</p>
                </div>
            </div>
        </div>

        <div class="">
            <div class="cards">
                <div class="face front">
                    <img src="{{ asset('juan.png') }}" alt="Juan" style="width:100%">
                    <h3>Juan Aguirre</h3>
                    <p class="title">Developer</p>
                </div>
                <div class="face back">
                    <h3>Juan Aguirre</h3>
                    <p class="title">Developer</p>
                    <p>Design-focused developer.</p>
                    <p>juan_aguirre82181@elpoli.edu.co</p>
                </div>
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <x-slot:footer>
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <img src="academ.png" alt="Barber Academy">
                </figure>
            </div>
            <div class="box">
                <h2>About Us Page</h2>
                <p>The Barber Academy is an educational platform which simplifies the administrative processes
                    for students on the one hand, and offers students an accessible and flexible e-learning
                    environment
                    on the
                    other</p>
            </div>
            <div class="box">
                <h2>CONTACT US</h2>
                <section class="buttons">
                    <a href="https://wa.me/+573016389477?text=Hi,%20¿%20How%20are%20you?"
                        class="fa-brands fa-whatsapp"></a>
                </section>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
        </div>
    </x-slot:footer>
</x-app-layout>

<style>
    .image {
        animation: animate1 7s linear infinite;
    }

    @keyframes animate1 {

        0%,
        100% {
            transform: translateY(11px);
        }

        50% {
            transform: translateY(-11px);
        }
    }
</style>

<script>
    $(document).ready(function() {
        var audi = document.getElementById("au");
        audi.play();
    });
</script>
