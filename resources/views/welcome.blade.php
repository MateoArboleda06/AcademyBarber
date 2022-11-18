<x-app-layout>
    <div class="flex items-center justify-center"><img src="academ.png" alt="" style="width:30%"
            class="card-img-top"></div>

    <div class="about-section">
        <h4 class="text-2xl">About Us Page</h4>
        <br>
        <p>The Barber Academy is an educational platform which simplifies the administrative processes
            for students on the one hand, and offers students an accessible and flexible e-learning environment on the
            other.</p>
    </div>

    <br>
    <h4 class="welcome text-2xl">Our Team</h4>

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
                    <p>Scrum team trainer and facilitator. It helps the team stay focused on the project objectives and eliminate impediments that appear along the way.</p>
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

</x-app-layout>
