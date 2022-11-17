<x-app-layout>
    <div class="flex items-center justify-center h-screen"><img src="academ.png" alt="" style="width:35%" class="card-img-top"></div>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>The Barber Academy is an educational platform which simplifies the administrative processes 
            for students on the one hand, and offers students an accessible and flexible e-learning environment on the other.</p>
        {{-- <p>Resize the browser window to see that this page is responsive by the way.</p> --}}
    </div>

    <br><h2 class="welcome">Our Team</h2>
    
        
    <div class="cards">
        <div class="face front">
            <img src="{{ asset('profile-pic.png') }}" alt="Mateo" style="width:100%">
            <h3>Mateo Arboleda</h3>
            <p class="title">Scrum Master</p>
        </div>
        <div class="face back">
            <h3>Mateo Arboleda</h3>
            <p class="title">Scrum Master</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>mateo@example.com</p>
        </div>
    </div>

    <div class="cards">
        <div class="face front">
            <img src="{{ asset('jose.png') }}" alt="Jose" style="width:100%">
            <h3>Jose chaverra</h3>
            <p class="title">Desarrollador</p>
        </div>
        <div class="face back">
            <h3>Jose chaverra</h3>
            <p class="title">Desarrollador</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>jose@example.com</p>
        </div>
    </div>

    <div class="cards">
        <div class="face front">
            <img src="{{ asset('juan.png') }}" alt="Juan" style="width:100%">
            <h3>Juan Aguirre</h3>
            <p class="title">Desarrollador</p>
        </div>
        <div class="face back">
            <h3>Juan Aguirre</h3>
            <p class="title">Desarrollador</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>juan@example.com</p>
        </div>
    </div>

</x-app-layout>