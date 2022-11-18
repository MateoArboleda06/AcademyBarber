<x-app-layout>

    {{--     <div class="about-section">
        <h4 class="text-2xl">Occupational Profile</h4>
        <br>
        <p>Perform haircuts and changes of hair shapes, apply color techniques, integral stylist and colorist,
            makeup artist and hairstylist, image consultant, seller of products and services for hair hygiene.</p>
    </div> --}}

    <div class="w-full p-4 text-center border rounded-lg shadow-md sm:p-8 about-section">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Program Description</h5>
        <br>
        <p class="mb-5 text-base sm:text-lg text-gray-500 dark:text-gray-400">The barbering course is a technical labor
            program that is designed based on international and national standards of hairdressing,
            and seeks that its graduates develop high skills and competencies that allow them to be independent or work
            in the competitive environment that we are presented today.
            The graduate of our work program will have the ability to assess the characteristics of the hair, face and
            customer profile; based on this analysis apply classic and modern haircutting techniques,
            creation of facial shapes, design patterns and figures. In addition to the above, change the color following
            technical procedures and change the shape of the hair permanently, applying chemical procedures.
            All of the above in compliance with the protocols and biosafety standards, providing a service and advice in
            a technical manner.</p>
    </div>
    <br>
    <br>
    <div class="w-full p-4 text-center border rounded-lg shadow-md sm:p-8 about-section">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Occupational Profile</h5>
        <br>
        <p class="mb-5 text-base sm:text-lg text-gray-500 dark:text-gray-400">Perform haircuts and changes of hair
            shapes, apply color techniques,
            integral stylist and colorist,
            makeup artist and hairstylist, image consultant, seller of products and services for hair hygiene.</p>
    </div>

    <br>
    <br>

    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm md:grid-cols-2">

        <figure
            class="flex flex-col items-center justify-center p-8 text-center border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r"
            style="background-color: rgb(84, 49, 27)">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Program objectives</h3>
                <br>
                <ul class="space-y-1 max-w-md list-disc list-inside text-gray-500 dark:text-gray-400">
                    <li>
                        To train people in the area of Barbering to improve the personal image of their clients, to
                        understand their needs and demands and through the application of current and modern technical
                        procedures of Barbering,
                        to perform temporary or permanent changes in hair and facial hair.
                    </li>
                    <li>
                        Develop technical skills in haircutting, beard grooming and pattern design that meet the needs
                        and demands of customers.
                    </li>
                    <li>
                        Evaluate the physical and hair fiber characteristics of the client, in order to diagnose and
                        know the previous conditions in barbering services.
                    </li>
                    <li>
                        Perform total or partial color changes according to previous diagnosis, needs and demands of the
                        client.
                    </li>
                    <li>
                        Business skills that allow graduates to develop and start an economic activity in the area of
                        barbering.
                    </li>
                    <li>
                        Knowledge and skills for continuous learning of techniques and methods in the development of the
                        profession.
                    </li>
                </ul>
            </blockquote>
        </figure>

        <figure
            class="flex flex-col items-center justify-center p-8 text-center border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r about-section">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Job skills</h3>
                <br>
                <ul class="space-y-1 max-w-md list-disc list-inside text-gray-500 dark:text-gray-400">
                    <li>
                        Apply safe and healthy techniques in the work environment, taking into account current legal
                        regulations.
                    </li>
                    <li>
                        Use asepsis measures according to biosafety manual and legal regulations in force.
                    </li>
                    <li>
                        Perform hair analysis in order to apply esthetic hair care protocols.
                    </li>
                    <li>
                        Apply cosmetic products according to hair diagnosis, hygiene and safety techniques.
                    </li>
                    <li>
                        Cut hair using techniques according to the client's demand and needs in safe and hygienic
                        conditions.
                    </li>
                    <li>
                        Perform shaving techniques, moustache and beard trimming according to the requested service,
                        using safety and hygiene standards.
                    </li>
                    <li>
                        Perform design of patterns and figures in head contour, according to taste and biosafety
                        standards.
                    </li>
                    <li>
                        Perform total or partial color changes according to hair diagnosis and client's taste, under
                        hygienic and health conditions.
                    </li>
                    <li>
                        Perform permanent hair changes according to hair diagnosis and client's taste, under hygienic
                        and health conditions.
                    </li>
                    <li>
                        Advise and sell products and services for personal image according to company policies, ethical
                        and legal principles.
                    </li>
                </ul>
            </blockquote>
        </figure>

    </div>

    <br>
    <div class="flex items-center justify-center">

        <div
            class="max-w bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="barber.png" alt="" />
        </div>
    </div>

</x-app-layout>

<style>
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .card {
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 50px;
        background-color:
    }

    .container {
        padding: 20px 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    /*Jose*/
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 28px;
    }

    /*     .button {
        position: relative;
        background-color: #0a0a23;
        color: #fff;
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 2px 2px rgb(0, 0, 0);
    } */

    .button {
        background: linear-gradient(to bottom right, rgba(164, 120, 93), rgba(28, 27, 23));
        border: 0;
        border-radius: 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 0 1rem;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button1 {
        width: 75%;
        background: linear-gradient(to bottom right, rgba(164, 120, 93), rgba(28, 27, 23));
        border: 0;
        border-radius: 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 0 1rem;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button1:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button1:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    /*Cards*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");

    /*     * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        min-height: 100vh;
        background: #232427;
    }

    body .cont {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 40px 0;
    } */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding in columns */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    body .cont .cards {
        position: relative;
        min-width: 320px;
        height: 440px;
        box-shadow: inset 5px 5px 5px rgba(242, 237, 237, 0.2),
            inset -5px -5px 15px rgba(255, 255, 255, 0.1),
            5px 5px 15px rgba(243, 240, 240, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        margin: 30px;
        transition: 0.5s;
    }


    body .cont .cards .box {
        position: absolute;
        top: 20px;
        left: 20px;
        right: 20px;
        bottom: 20px;
        background: #d5d3d3;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transition: 0.5s;
    }

    body .cont .cards .box:hover {
        transform: translateY(-50px);
    }

    body .cont .cards .box:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: rgba(255, 255, 255, 0.03);
    }

    body .cont .cards .box .content {
        padding: 20px;
        text-align: center;
    }

    body .cont .cards .box .content h2 {
        position: absolute;
        top: -10px;
        right: 30px;
        font-size: 8rem;
        color: rgba(255, 255, 255, 0.1);
    }

    body .cont .cards .box .content h3 {
        font-size: 1.8rem;
        color: #fff;
        z-index: 1;
        transition: 0.5s;
        margin-bottom: 15px;
    }

    body .cont .cards .box .content p {
        font-size: 1rem;
        font-weight: 300;
        color: rgba(0, 0, 0, 0.9);
        z-index: 1;
        transition: 0.5s;
    }

    body .cont .cards .box .content a:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
        background: #fff;
        color: #000;
    }
</style>
