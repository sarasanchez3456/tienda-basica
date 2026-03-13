<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AIVideoController extends Controller
{
    /**
     * Muestra el directorio de los mejores modelos de generación de video AI
     */
    public function index()
    {
        $aiVideos = [
            [
                'id' => 1,
                'nombre' => 'OpenAI Sora',
                'descripcion' => 'Modelo de generación de video de OpenAI capaz de crear videos de hasta 60 segundos a partir de descripciones de texto. Convierte texto en video realista con una comprensión profunda del lenguaje y la física.',
                'caracteristicas' => ['Videos de hasta 60 segundos', 'Comprensión avanzada del lenguaje', 'Simulación física realista', 'Creación de escenas complejas'],
                'sitio_web' => 'https://openai.com/sora',
                'precio' => 'Por confirmar',
                'imagen' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400',
                'categoria' => 'Texto a Video'
            ],
            [
                'id' => 2,
                'nombre' => 'Runway Gen-3 Alpha',
                'descripcion' => 'La tercera generación de Runway ofrece videos de alta calidad con control preciso sobre movimientos, estilos y transiciones. Incluye herramientas de edición avanzadas.',
                'caracteristicas' => ['Alta calidad de video', 'Control de movimientos', 'Múltiples estilos artísticos', 'Edición avanzada'],
                'sitio_web' => 'https://runwayml.com',
                'precio' => 'USD 15/mes',
                'imagen' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=400',
                'categoria' => 'Texto a Video'
            ],
            [
                'id' => 3,
                'nombre' => 'Pika Labs',
                'descripcion' => 'Plataforma de generación de video por IA que permite crear y editar videos a partir de texto, imágenes o videos existentes. Conocida por su velocidad y calidad.',
                'caracteristicas' => ['Generación rápida', 'Edición de videos existentes', 'Texto a video', 'Imagen a video'],
                'sitio_web' => 'https://pika.art',
                'precio' => 'Gratis + Premium',
                'imagen' => 'https://images.unsplash.com/photo-1535016120720-40c6874c3b13?w=400',
                'categoria' => 'Texto a Video'
            ],
            [
                'id' => 4,
                'nombre' => 'Luma Dream Machine',
                'descripcion' => 'Modelo de IA desarrollado por Luma AI que genera videos realistas a partir de imágenes y texto. Excelente para transformar imágenes estáticas en motion.',
                'caracteristicas' => ['Imagen a video', 'Alta realismo', 'Motion natural', 'Transformación de fotos'],
                'sitio_web' => 'https://lumalabs.ai/dream-machine',
                'precio' => 'Gratis + Premium',
                'imagen' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400',
                'categoria' => 'Imagen a Video'
            ],
            [
                'id' => 5,
                'nombre' => 'Kling AI',
                'descripcion' => 'Desarrollado por Kuaishou, Kling AI produce videos de alta calidad con movimientos naturales y coherencia temporal. Una de las opciones más potentes del mercado.',
                'caracteristicas' => ['Videos largos', 'Movimientos naturales', 'Coherencia temporal', 'Alta resolución'],
                'sitio_web' => 'https://klingai.com',
                'precio' => 'Gratis disponible',
                'imagen' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=400',
                'categoria' => 'Texto a Video'
            ],
            [
                'id' => 6,
                'nombre' => 'Stable Video Diffusion',
                'descripcion' => 'Modelo de código abierto de Stability AI que genera videos a partir de imágenes. Perfecto para quienes buscan control total y personalización.',
                'caracteristicas' => ['Código abierto', 'Imagen a video', 'Alta personalización', 'Gratis'],
                'sitio_web' => 'https://stability.ai/stable-video',
                'precio' => 'Gratis (Open Source)',
                'imagen' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=400',
                'categoria' => 'Imagen a Video'
            ],
            [
                'id' => 7,
                'nombre' => 'Meta Movie Gen',
                'descripcion' => 'La solución de generación de video de Meta AI. Crea videos realistas y editables con capacidades avanzadas de personalización.',
                'caracteristicas' => ['Edición detallada', 'Personalización', 'Videos realistas', 'Integración social'],
                'sitio_web' => 'https://ai.meta.com/movie-gen',
                'precio' => 'Por confirmar',
                'imagen' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=400',
                'categoria' => 'Texto a Video'
            ],
            [
                'id' => 8,
                'nombre' => 'Google Veo',
                'descripcion' => 'El modelo de video de Google DeepMind que genera videos de alta calidad con comprensión avanzada del contexto y la física.',
                'caracteristicas' => ['Alta calidad 4K', 'Comprensión de física', 'Videos largos', 'Integración Google'],
                'sitio_web' => 'https://deepmind.google/technologies/veo',
                'precio' => 'Por confirmar',
                'imagen' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400',
                'categoria' => 'Texto a Video'
            ],
            [
                'id' => 9,
                'nombre' => 'InVideo AI',
                'descripcion' => 'Plataforma especializada en la creación de videos de marketing y contenido social. Genera guiones, voces en off y videos completos automáticamente.',
                'caracteristicas' => ['Videos de marketing', 'Voz automatizada', 'Plantillas varias', 'Publicación directa'],
                'sitio_web' => 'https://invideo.io',
                'precio' => 'USD 15/mes',
                'imagen' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400',
                'categoria' => 'Contenido Marketing'
            ],
            [
                'id' => 10,
                'nombre' => 'HeyGen',
                'descripcion' => 'Especializado en avatares digitales y videos con presentadores virtuales. Ideal para crear contenido de capacitación y explicaciones.',
                'caracteristicas' => ['Avatares realistas', 'Clonación de voz', 'Multiidioma', 'Videos corporativos'],
                'sitio_web' => 'https://heygen.com',
                'precio' => 'USD 29/mes',
                'imagen' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=400',
                'categoria' => 'Avatares Digitales'
            ],
            [
                'id' => 11,
                'nombre' => 'Synthesia',
                'descripcion' => 'Plataforma líder en la creación de videos con avatares AI. Utilizada por empresas worldwide para capacitación y comunicaciones corporativas.',
                'caracteristicas' => ['+140 avatares', '+120 idiomas', 'Videos profesionales', 'Integración empresarial'],
                'sitio_web' => 'https://synthesia.io',
                'precio' => 'USD 30/mes',
                'imagen' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=400',
                'categoria' => 'Avatares Digitales'
            ],
            [
                'id' => 12,
                'nombre' => 'Kaiber',
                'descripcion' => 'Herramienta creativa para artistas y creadores que permite transformar imágenes y audio en videos estilizados con efectos visuales únicos.',
                'caracteristicas' => ['Estilos artísticos', 'Audio a video', 'Transformación de imágenes', 'Creativo'],
                'sitio_web' => 'https://kaiber.ai',
                'precio' => 'USD 5/mes',
                'imagen' => 'https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?w=400',
                'categoria' => 'Arte Creativo'
            ]
        ];

        return view('aivideos.index', compact('aiVideos'));
    }

    /**
     * Muestra los detalles de un modelo específico
     */
    public function show($id)
    {
        $aiVideos = [
            1 => ['nombre' => 'OpenAI Sora', 'descripcion' => 'Modelo de generación de video de OpenAI...'],
            2 => ['nombre' => 'Runway Gen-3 Alpha', 'descripcion' => 'La tercera generación de Runway...'],
            // ... más datos
        ];
        
        // Datos completos para cada ID
        $videosData = [
            1 => [
                'id' => 1,
                'nombre' => 'OpenAI Sora',
                'descripcion' => 'Modelo de generación de video de OpenAI capaz de crear videos de hasta 60 segundos a partir de descripciones de texto. Convierte texto en video realista con una comprensión profunda del lenguaje y la física.',
                'caracteristicas' => ['Videos de hasta 60 segundos', 'Comprensión avanzada del lenguaje', 'Simulación física realista', 'Creación de escenas complejas'],
                'sitio_web' => 'https://openai.com/sora',
                'precio' => 'Por confirmar',
                'imagen' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400',
                'categoria' => 'Texto a Video'
            ],
            2 => [
                'id' => 2,
                'nombre' => 'Runway Gen-3 Alpha',
                'descripcion' => 'La tercera generación de Runway ofrece videos de alta calidad con control preciso sobre movimientos, estilos y transiciones.',
                'caracteristicas' => ['Alta calidad de video', 'Control de movimientos', 'Múltiples estilos artísticos', 'Edición avanzada'],
                'sitio_web' => 'https://runwayml.com',
                'precio' => 'USD 15/mes',
                'imagen' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=400',
                'categoria' => 'Texto a Video'
            ],
            3 => [
                'id' => 3,
                'nombre' => 'Pika Labs',
                'descripcion' => 'Plataforma de generación de video por IA que permite crear y editar videos a partir de texto, imágenes o videos existentes.',
                'caracteristicas' => ['Generación rápida', 'Edición de videos existentes', 'Texto a video', 'Imagen a video'],
                'sitio_web' => 'https://pika.art',
                'precio' => 'Gratis + Premium',
                'imagen' => 'https://images.unsplash.com/photo-1535016120720-40c6874c3b13?w=400',
                'categoria' => 'Texto a Video'
            ],
            4 => [
                'id' => 4,
                'nombre' => 'Luma Dream Machine',
                'descripcion' => 'Modelo de IA desarrollado por Luma AI que genera videos realistas a partir de imágenes y texto.',
                'caracteristicas' => ['Imagen a video', 'Alta realismo', 'Motion natural', 'Transformación de fotos'],
                'sitio_web' => 'https://lumalabs.ai/dream-machine',
                'precio' => 'Gratis + Premium',
                'imagen' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400',
                'categoria' => 'Imagen a Video'
            ],
            5 => [
                'id' => 5,
                'nombre' => 'Kling AI',
                'descripcion' => 'Desarrollado por Kuaishou, Kling AI produce videos de alta calidad con movimientos naturales.',
                'caracteristicas' => ['Videos largos', 'Movimientos naturales', 'Coherencia temporal', 'Alta resolución'],
                'sitio_web' => 'https://klingai.com',
                'precio' => 'Gratis disponible',
                'imagen' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=400',
                'categoria' => 'Texto a Video'
            ],
            6 => [
                'id' => 6,
                'nombre' => 'Stable Video Diffusion',
                'descripcion' => 'Modelo de código abierto de Stability AI que genera videos a partir de imágenes.',
                'caracteristicas' => ['Código abierto', 'Imagen a video', 'Alta personalización', 'Gratis'],
                'sitio_web' => 'https://stability.ai/stable-video',
                'precio' => 'Gratis (Open Source)',
                'imagen' => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=400',
                'categoria' => 'Imagen a Video'
            ],
            7 => [
                'id' => 7,
                'nombre' => 'Meta Movie Gen',
                'descripcion' => 'La solución de generación de video de Meta AI con capacidades avanzadas de personalización.',
                'caracteristicas' => ['Edición detallada', 'Personalización', 'Videos realistas', 'Integración social'],
                'sitio_web' => 'https://ai.meta.com/movie-gen',
                'precio' => 'Por confirmar',
                'imagen' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=400',
                'categoria' => 'Texto a Video'
            ],
            8 => [
                'id' => 8,
                'nombre' => 'Google Veo',
                'descripcion' => 'El modelo de video de Google DeepMind que genera videos de alta calidad.',
                'caracteristicas' => ['Alta calidad 4K', 'Comprensión de física', 'Videos largos', 'Integración Google'],
                'sitio_web' => 'https://deepmind.google/technologies/veo',
                'precio' => 'Por confirmar',
                'imagen' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400',
                'categoria' => 'Texto a Video'
            ],
            9 => [
                'id' => 9,
                'nombre' => 'InVideo AI',
                'descripcion' => 'Plataforma especializada en la creación de videos de marketing y contenido social.',
                'caracteristicas' => ['Videos de marketing', 'Voz automatizada', 'Plantillas varias', 'Publicación directa'],
                'sitio_web' => 'https://invideo.io',
                'precio' => 'USD 15/mes',
                'imagen' => 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=400',
                'categoria' => 'Contenido Marketing'
            ],
            10 => [
                'id' => 10,
                'nombre' => 'HeyGen',
                'descripcion' => 'Especializado en avatares digitales y videos con presentadores virtuales.',
                'caracteristicas' => ['Avatares realistas', 'Clonación de voz', 'Multiidioma', 'Videos corporativos'],
                'sitio_web' => 'https://heygen.com',
                'precio' => 'USD 29/mes',
                'imagen' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=400',
                'categoria' => 'Avatares Digitales'
            ],
            11 => [
                'id' => 11,
                'nombre' => 'Synthesia',
                'descripcion' => 'Plataforma líder en la creación de videos con avatares AI para empresas.',
                'caracteristicas' => ['+140 avatares', '+120 idiomas', 'Videos profesionales', 'Integración empresarial'],
                'sitio_web' => 'https://synthesia.io',
                'precio' => 'USD 30/mes',
                'imagen' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=400',
                'categoria' => 'Avatares Digitales'
            ],
            12 => [
                'id' => 12,
                'nombre' => 'Kaiber',
                'descripcion' => 'Herramienta creativa para artistas que permite transformar imágenes y audio en videos estilizados.',
                'caracteristicas' => ['Estilos artísticos', 'Audio a video', 'Transformación de imágenes', 'Creativo'],
                'sitio_web' => 'https://kaiber.ai',
                'precio' => 'USD 5/mes',
                'imagen' => 'https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?w=400',
                'categoria' => 'Arte Creativo'
            ]
        ];

        if (!isset($videosData[$id])) {
            abort(404);
        }

        $video = $videosData[$id];
        return view('aivideos.show', compact('video'));
    }
}
