<?php

class Data{
    public static $services = [
        'ley_257' => [
            'name' => 'Ley 6116 (Ex ley 257)', 
            'id' => 'ley_257', 
            'class' => 'fa-solid fa-hotel', 
            'type' => 'inmobiliaria'
        ],
        'avisos_obra' => [
            'name' => 'Permisos y avisos de obra', 
            'id' => 'avisos_obra', 
            'class' => 'fa-solid fa-file-signature', 
            'type' => 'inmobiliaria'
        ],
        'planos_suminsitro_gas' => [
            'name' => 'Planos de suministro de gas', 
            'id' => 'planos_suminsitro_gas', 
            'class' => 'fa-regular fa-map', 
            'type' => 'inmobiliaria'
        ],
        'planos_evacuacion' => [
            'name' => 'Planos de evacuacion', 
            'id' => 'planos_evacuacion', 
            'class' => 'fa-solid fa-person-running', 
            'type' => 'inmobiliaria'
        ],
        'obleas' => [
            'name' => 'Obleas', 
            'id' => 'obleas', 
            'class' => 'fa-solid fa-file-invoice', 
            'type' => 'inmobiliaria'
        ],
        'puesta_a_tierra' => [
            'name' => 'Medicion de puesta a tierra', 
            'id' => 'puesta_a_tierra', 
            'class' => 'fa-solid fa-bolt-lightning', 
            'type' => 'inmobiliaria'
        ],
        'habilitaciones' => [
            'name' => 'Habilitaciones', 
            'id' => 'habilitaciones', 
            'class' => 'fa-regular fa-calendar-check', 
            'type' => 'administracion'
        ],
        'informe_factibilidad' => [
            'name' => 'Informe de factibilidad', 
            'id' => 'informe_factibilidad', 
            'class' => 'fa-solid fa-paste', 
            'type' => 'administracion'
        ],
        'solicitud_planos' => [
            'name' => 'Solicitud de planos', 
            'id' => 'solicitud_planos', 
            'class' => 'fa-regular fa-map', 
            'type' => 'both'
        ],
        'informe dominio' => [
            'name' => 'Informe de dominio', 
            'id' => 'informe_dominio', 
            'class' => 'fa-solid fa-file-lines', 
            'type' => 'both'
        ],
        'subdivision' => [
            'name' => 'Subdivision', 
            'id' => 'subdivision', 
            'class' => 'fa-solid fa-table-cells-large', 
            'type' => 'administracion'
        ],
        'fachadas' => [
            'name' => 'Mantenimiento de fachadas', 
            'id' => 'fachadas', 
            'class' => 'fa-solid fa-person-digging', 
            'type' => 'administracion'
        ],
        'aph' => [
            'name' => 'Habilitaciones comerciales', 
            'id' => 'aph', 
            'class' => 'fa-solid fa-building-circle-check', 
            'type' => 'administracion'
        ],
    ];

    public static $principal_services = [
        'ley_257' => [
            'name' => 'Ley 6116 (Ex ley 257)', 
            'id' => 'ley_257', 
            'class' => 'fa-solid fa-hotel', 
            'type' => 'home'
        ],
        'habilitaciones' => [
            'name' => 'Habilitaciones', 
            'id' => 'habilitaciones', 
            'class' => 'fa-solid fa-file-circle-check', 
            'type' => 'home'
        ],
        'subdivision' => [
            'name' => 'Subdivision', 
            'id' => 'subdivision', 
            'class' => 'fa-solid fa-table-cells-large', 
            'type' => 'home'
        ],
        'puesta_a_tierra' => [
            'name' => 'Medicion de puesta a tierra', 
            'id' => 'puesta_a_tierra', 
            'class' => 'fa-solid fa-plug', 
            'type' => 'home'
        ],
        'avisos_obra' => [
            'name' => 'Avisos de obra', 
            'id' => 'avisos_obra', 
            'class' => 'fa-solid fa-file-signature', 
            'type' => 'inmobiliaria'
        ],
        'solicitud_planos' => [
            'name' => 'Solicitud de planos', 
            'id' => 'solicitud_planos', 
            'class' => 'fa-regular fa-map', 
            'type' => 'home'
        ],
        'fachadas' => [
            'name' => 'Mantenimiento de fachadas', 
            'id' => 'fachadas', 
            'class' => 'fa-solid fa-building-shield', 
            'type' => 'home'
        ],
        'aph' => [
            'name' => 'Consultas APH', 
            'id' => 'aph', 
            'class' => 'fa-solid fa-hospital-user', 
            'type' => 'home'
        ],
    ];

    public static $skills = [
        [
            'icon' => 'fa-solid fa-shield-halved',
            'title' => 'Seguridad'    
        ],
        [
            'icon' => 'fa-regular fa-comments',
            'title' => 'Atencion personalizada'
        ],
        [
            'icon' => 'fa-regular fa-handshake',
            'title' => 'Compromiso'
        ],
        [
            'icon' => 'fa-solid fa-user-tie',
            'title' => 'Profesionalismo'
        ]
    ];

    public static $references = [
        [
            'icon' => 'fa-solid fa-stamp',
            'title' => 'Habilitaciones realizadas',
            'id' => 'habilitaciones'
        ],
        [
            'icon' => 'fa-solid fa-circle-check',
            'title' => 'Informes realizados',
            'id' => 'informes'
        ],
        [
            'icon' => 'fa-regular fa-map',
            'title' => 'Gestiones realizadas',
            'id' => 'gestiones'
        ],
        [
            'icon' => 'fa-solid fa-helmet-safety',
            'title' => 'Trabajos realizados',
            'id' => 'trabajos'
        ]
    ];
}










