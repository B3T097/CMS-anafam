/*
 Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.addTemplates("default", {
    imagesPath: CKEDITOR.getUrl(CKEDITOR.plugins.getPath("templates") + "templates/images/"),
    templates: [
        // {
        //     title: "Introducción color",
        //     image: "template3.gif",
        //     description: "Texto Introduccion con color",
        //     html: `
        //         <div class="notas-nuevas">
        //             <h5 class="nota-titulo color-texto">introducción</h5>
        //         </div>
        //     `
        // },
        // {
        //     title: "Introducción fondo",
        //     image: "template3.gif",
        //     description: "Texto Introduccion con fondo ",
        //     html: `
        //         <div class="notas-nuevas">
        //             <h5 class="nota-titulo fondo-texto">introducción</h5>
        //         </div>
        //     `
        // },
        {
            title: "Parrafo primera letra",
            image: "template10.png",
            description: "Parrafo inicial con la primera letra más grande",
            html: `
                <div class="notas-nuevas">
                    <p class="primera-letra">
                        Los partos distócicos causan graves pérdidas económicas, ya
                        que afectan la producción de becerros y disminuye la
                        fertilidad de las vacas.
                    </p>
                </div>
            `
        },
        {
            title: "Parrafo primera letra con fondo",
            image: "template20.png",
            description: "Parrafo inicial con la primera letra más grande con fondo",
            html: `
                <div class="notas-nuevas ">
                    <p class="primera-letra cuadro-color">
                        Los partos distócicos causan graves pérdidas económicas, ya
                        que afectan la producción de becerros y disminuye la
                        fertilidad de las vacas.
                    </p>
                </div>
            `
        },
        {
            title: "Frase destacada en recuadro",
            image: "template9.png",
            description: "Es la frase que se coloca en el recuadro gris a dos columnas",
            html: `
                <div class="notas-nuevas">
                    <div class="cont-cuadro-frase">
                        <div class="cuadro-texto-normal">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                                </p>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                                </p>
                            </div>
                            <div class="cuadro-frase">
                                <img src="../uploads/Upload-62157e139db21-23022022.jpeg" />
                                <div class="cuadro-frase--decorador">&nbsp;</div>
                                <p class="cuadro-frase--texto">
                                    <span>&ldquo;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.<span>&rdquo;.</span>
                                </p>
                                <div class="cuadro-frase--decorador">&nbsp;</div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            `
        },
        {
            title: "Frase destacada con comilla ",
            image: "template6.png",
            description: "Es la frase color gris que lleva una comilla",
            html: `
                <div class="notas-nuevas">
                    <blockquote>
                        <span class="frase-destacada-comilla">&ldquo;</span>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                    </blockquote>
                </div>
            `
        },
        {
            title: "Texto a dos columnas",
            image: "template5.png",
            description: "Texto a dos columnas",
            html: `
                <div class="notas-nuevas">
                    <div class="texto-dos-columnas">
                        <div>
                            <p></p>
                        </div>
                        <div>
                            <p></p>
                        </div>
                    </div>
                </div>
            `
        },
        {
            title: "Lista a dos columnas",
            image: "template21.png",
            description: "Texto a dos columnas",
            html: `
                <div class="notas-nuevas">
                    <div class="texto-dos-columnas">
                        <div>
                            <ul class="ul-paloma">
                                <li>
                                    posuere sollicitudin aliquam
                                </li>
                                <li>
                                posuere sollicitudin aliquam
                                </li>
                                <li>
                                posuere sollicitudin aliquam
                                </li>
                                <li>
                                posuere sollicitudin aliquam
                                </li>
                                <li>
                                posuere sollicitudin aliquam
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="ul-paloma">

                                <li>
                                posuere sollicitudin aliquam
                                </li>
                                <li>
                                posuere sollicitudin aliquam
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            `
        },
        {
            title: "Cuadro img text fondo solido",
            image: "template12.png",
            description: "Cuadro y Texto a dos columnas con fondo solido",
            html: `
                <div class="notas-nuevas">
                    <div class="recuadro-fondo-2">
                        <div class="recuadro-fondo-2--img">
                            <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                        </div>
                        <div class="recuadro-fondo-2--texto">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                        </div>
                    </div>
                </div>
            `
        },
        {
            title: "Cuadro img text fondo de color y blanco",
            image: "template11.png",
            description: "Cuadro y Texto a dos columnas con fondo de color y blanco",
            html: `
                <div class="notas-nuevas">
                    <div class="recuadro-fondo-1">
                        <div class="recuadro-fondo-1--img">
                            <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                        </div>
                        <div class="recuadro-fondo-1--texto">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet consectetur adipiscing elit duis tristique.
                        </p>
                        </div>
                    </div>
                </div>
            `
        },
        {
            title: "Lista con numeros en cuadros",
            image: "template8.png",
            description: "Lista con numeros en cuadros",
            html: `
                <div class="notas-nuevas">
                    <ol class="ol-decorado">
                        <li>posuere sollicitudin aliquam</li>
                        <li>posuere sollicitudin aliquam</li>
                        <li>posuere sollicitudin aliquam</li>
                        <li>posuere sollicitudin aliquam</li>
                        <li>posuere sollicitudin aliquam</li>
                    </ol>
                </div>
            `
        },
        {
            title: "Imagenes en fila",
            image: "template4.png",
            description: "Lista con numeros en cuadros",
            html: `
                <div class="notas-nuevas">
                    <div class="img-fila">
                    <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                    <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                    <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                    </div>
                </div>
            `
        },
        {
            title: "Lista con imagenes",
            image: "template8.png",
            description: "Lista de imagenes personalidas",
            html: `
                <div class="notas-nuevas">
                    <div class="lista-imagenes">
                        <div class="li-elemento">
                            <div class="li-imagen">
                                <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                            </div>
                            <div class="li-texto">
                                Los ganaderos deben buscar profesionales de la salud animal dispuestos a compartir sus
                                conocimientos para trabajar en eq
                            </div>
                        </div>
                        <div class="li-elemento">
                            <div class="li-imagen">
                                <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                            </div>
                            <div class="li-texto">
                                Los ganaderos deben buscar profesionales de la salud animal dispuestos a compartir sus
                                conocimientos para trabajar en eq
                            </div>
                        </div>
                        <div class="li-elemento">
                            <div class="li-imagen">
                                <img src="../uploads/Upload-620f2b482d66b-18022022.jpeg" alt="">
                            </div>
                            <div class="li-texto">
                                Los ganaderos deben buscar profesionales de la salud animal dispuestos a compartir sus
                                conocimientos para trabajar en eq
                            </div>
                        </div>
                    </div>
                </div>
            `
        },
        {
            title: "Lista letras minusculas con punto",
            image: "template19.png",
            description: "Texto a dos columnas",
            html: `
               <ol class="ol-alfa-punto">
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 1</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 2</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 3</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 4</li>
               </ol>
            `
        },
        {
            title: "Lista letras minusculas con parentesis",
            image: "template14.png",
            description: "Texto a dos columnas",
            html: `
               <ol class="parentesis-letras">
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 1</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 2</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 3</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 4</li>
               </ol>
            `
        },
        {
            title: "Lista letras Mayusculas con punto",
            image: "template18.png",
            description: "Texto a dos columnas",
            html: `
               <ol class="ol-alfa-punto-mayus">
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 1</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 2</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 3</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 4</li>
               </ol>
            `
        },
        {
            title: "Lista letras Mayusculas con parentesis",
            image: "template15.png",
            description: "Texto a dos columnas",
            html: `
               <ol class="ol-alfa-mayus-parentesis">
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 1</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 2</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 3</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 4</li>
               </ol>
            `
        },
        {
            title: "Lista Romanos Mayusculas con parentesis",
            image: "template16.png",
            description: "Texto a dos columnas",
            html: `
               <ol class="ol-roman-parentesis">
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 1</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 2</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 3</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 4</li>
               </ol>
            `
        },
        {
            title: "Lista Romanos Mayusculas con punto",
            image: "template17.png",
            description: "Texto a dos columnas",
            html: `
               <ol class="ol-roman-punto">
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 1</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 2</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 3</li>
                    <li>Tempus quam pellentesque nec nam aliquam sem et tortor consequat 4</li>
               </ol>
            `
        },
        {
            title: "Parrafo",
            image: "template1.gif",
            description: "Parrafo",
            html: `
               <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               </p>
            `
        },
        {
            title: "Listas en lista",
            image: "template13.png",
            description: "Listas en lista",
            html: `
                <ul>
                    <li>
                        item 1
                        <ul>
                            <li>
                                item 1.1
                            </li>
                            <li>
                                item 1.2
                            </li>
                        </ul>
                    </li>
                    <li>
                        item 2
                        <ul>
                            <li>
                                item 2.1
                            </li>
                            <li>
                                item 2.2
                            </li>
                        </ul>
                    </li>
                    <li>
                        item 3
                    </li>
                </ul>
            `
        },
    ]
});