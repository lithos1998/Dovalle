<div class="about-us" id="about-us" >
    <h2 class="text-center">Nosotros</h2>
    <p class="container text-center text-nosotros"><span>Estudio Dovalle</span> se distingue por su compromiso con la innovación y la excelencia. Cada proyecto que emprendemos refleja nuestra pasión por el diseño único y funcional. Valoramos la colaboración estrecha con nuestros clientes, priorizando sus visiones y necesidades. Además, contamos con profesionales altamente calificados que transforman sus ideas en realidades impresionantes. La dedicación a la calidad, la creatividad y la satisfacción del cliente nos convierte en la elección ideal para materializar sus sueños y proyectos.</p>
    
    <h2 class="text-center">¿Por que elegirnos?</h2>
    <p class="container text-center text-nosotros">Desde <span>Estudio Dovalle</span> queremos ayudarte para que puedas cumplir tus sueños y comiences a disfrutarlo.</p>
    <div class="skills">
        @foreach (Data::$skills as $skill)
            <div class="skill">
                <i class="{{ $skill['icon'] }}"></i>
                <p> {{ $skill['title'] }}</p>
            </div>
        @endforeach
    </div>
</div>