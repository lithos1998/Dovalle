<div class="about-us container" id="about-us" >
    <div class="about-us-content">
        <h2 class="text-center">Valores</h2>
        <p class="container text-center text-nosotros">En <span>Estudio Dovalle</span> nos destacamos por nuestra atención personalizada y excelente servicio. Priorizamos la comunicacion y la colaboracion estrecha con todos nuestros clientes, con un equipo de profesionales altamente calificados para ir atendiendo y resolviendo de manera personal los diferentes problemas planteados.</p> 
        <p>Nuestra dedicación a la calidad, la creatividad y la satisfacción del cliente nos convierte en la elección ideal para resolver los diferentes problemas.</p>
        
        <h2 class="text-center">¿Por que elegirnos?</h2>
        <p class="container text-center text-nosotros">Nos especializamos en brindar soluciones rápidas y efectivas, anticipándonos a posibles obstáculos y ofreciendo alternativas viables. La gestión de obras es una de nuestras fortalezas, donde cada paso es cuidadosamente supervisado para asegurar la calidad y el cumplimiento de los plazos establecidos.</p>
        <div class="skills">
            @foreach (Data::$skills as $skill)
                <div class="skill">
                    <i class="{{ $skill['icon'] }}"></i>
                    <p> {{ $skill['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="references container" id="references" >
    <div id="our-references">
        <h2>Referencias comerciales</h2>

        <div class="our-references" >
            @foreach (Data::$references as $reference)
                <div class="reference">
                    <div>
                        <i class="{{ $reference['icon'] }}"></i>
                        <span>{{ $reference['number'] }}</span>
                    </div>
                    <p>{{ $reference['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>