@extends('layouts.app')
@section('title', 'Denlie Design - Animation Advanced')
@section('content')


    <div style="height: 100vh; background: url('/images/modern-studio.jpg'); background-position: center; background-attachment: fixed; background-size: cover;">
        <h1 class="text-center display-4 py-5" style="text-shadow: black 1px 1px 2px; color:white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Modern at<br>Misty's Dance Unlimited</h1>
        <div class="d-flex justify-content-end" style="position: absolute; bottom: 0; left: 50%; transform: translate(-50%, -50%);">
            <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="scroll-fall" style="font-size: 3em;" onclick="scrollFall()"></ion-icon>
        </div>
    </div>

    <div class="container py-5 my-5">
        <div class="row" style="position: relative;">
            <div class="col-sm ml-5">
                <div class="scene-fall">
                    <div class="viewer-fall rounded shadow"></div>
                </div>
                <div class="bottom" id="arrived-fall" style="position: relative; bottom: 100vh;"></div>
            </div>
            <div class="col-sm">
                <div style="position: sticky; top: 200px; right: 0;" class="pt-5 mt-5">
                    <h2 class="font-weight-bold font-play">What Is Modern?</h2>
                    <p style="font-size: 1.25em;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at autem blanditiis deleniti distinctio dolor, ducimus earum eos esse ex explicabo fugiat fugit ipsam itaque laborum libero magni maiores modi necessitatibus, nesciunt numquam odit officia placeat quae quaerat quasi qui quia, quidem soluta ullam ut vel vitae voluptas. Animi asperiores atque eum hic rem ullam voluptatem. Adipisci alias culpa, cumque dolores mollitia nemo nisi obcaecati quidem rerum, sed tempore voluptatem.
                        <br>
                        <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="scroll-swing" style="font-size: 3em;" onclick="scrollSwing()"></ion-icon>
                    </p>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="container">--}}
{{--        <div style="height: 100vh; width: 100%;">--}}
{{--            <h3 class="text-center font-weight-bold py-5 mt-5">WHAT DO YOU THINK?</h3>--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse officiis veritatis voluptatem voluptates. Fugit impedit ipsa, itaque obcaecati odio ullam vel? Alias aliquam aperiam asperiores at atque, cupiditate delectus dignissimos dolor dolorem ducimus eos et eum exercitationem id in inventore minus molestiae mollitia natus nihil provident quas quis ratione rem sapiente sint sit vero? Ab cum ducimus necessitatibus perspiciatis quidem! Adipisci architecto asperiores aspernatur, atque blanditiis debitis dolorem dolores esse, exercitationem iusto nulla odit ratione sapiente tempora tempore velit voluptas! Aspernatur assumenda commodi delectus, dolore dolores explicabo fugit, iste minus nostrum odit officiis pariatur! Animi culpa delectus, eligendi, impedit iste labore laboriosam nam nobis pariatur, quisquam sint unde. Eveniet inventore minus perferendis. Architecto consectetur cumque deserunt ea error, est et expedita id illo, iste laudantium magni maiores minus neque nobis obcaecati, quae quibusdam quos totam veritatis? Autem delectus dignissimos non nulla reprehenderit sint unde vel voluptatum? Aperiam asperiores, aspernatur beatae corporis facere, id inventore iste iure magni maiores minima neque nobis quam qui quos reprehenderit similique. Adipisci alias architecto aut commodi consequuntur cum dicta dolorum ea eius eos error esse exercitationem explicabo fugiat incidunt iste libero mollitia natus nihil nisi nulla odio pariatur perspiciatis quae ratione reiciendis, rem repellendus sequi temporibus tenetur unde vel velit voluptatibus. Ab architecto, at aut beatae cumque, dolor eaque est eum excepturi magni necessitatibus nulla perferendis quis tempore tenetur ut voluptas voluptatum. Accusamus ad beatae doloribus eius esse illo illum inventore laboriosam natus nulla obcaecati officiis quod quos reprehenderit saepe sed sit soluta, sunt vel velit! A atque commodi cum delectus dicta ducimus error esse eum inventore iusto labore maiores nam non quibusdam, saepe sequi voluptas voluptate? A autem debitis dignissimos dolores, nemo perspiciatis quaerat unde? Eos fugiat libero molestias nemo quam sint soluta velit voluptatum! Deserunt excepturi fuga, harum id modi molestias nostrum? Saepe?--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}

        <div class="container py-5 my-5" id="arrived-swing">
            <div class="row d-flex align-items-center">
                <div class="col-sm">
                    <div style="position: sticky; top: 200px; right: 0;" class="pt-5 mt-5">
                        <h2 class="font-weight-bold font-play">Inspired By José Limón</h2>
                        <p style="font-size: 1.25em;">
                            José Arcadio Limón was a dancer and choreographer who developed what is now known as 'Limón technique'. In the 1940s he founded the José Limón Dance Company, and in 1968 he created the José Limón Foundation to carry on his work. In his choreography, Limón spoke to the complexities of human life as experienced through the body.
                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="/images/swing-loop.gif" alt="" style="height: 100vh;" class="pb-5">
                </div>
            </div>
        </div>

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm">--}}
{{--                <div style="position: sticky; top: 200px; right: 0;" class="pt-5 mt-5">--}}
{{--                    <h2 class="font-weight-bold font-play">Inspired By José Limón</h2>--}}
{{--                    <p style="font-size: 1.25em;">--}}
{{--                        José Arcadio Limón was a dancer and choreographer who developed what is now known as 'Limón technique'. In the 1940s he founded the José Limón Dance Company, and in 1968 he created the José Limón Foundation to carry on his work. In his choreography, Limón spoke to the complexities of human life as experienced through the body.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm mr-5">--}}
{{--                <div class="scene-swing">--}}
{{--                    <div class="viewer-swing rounded shadow"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container py-5 my-5">
        <div class="">
            <div class="row d-flex align-items-center">
                <div class="col-sm">
                    <video height="600" autoplay muted>
                        <source src="/images/headshot.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-sm">
                    <h2 class="font-weight-bold font-play">Meet Mr. Dennis</h2>
                    <p style="font-size: 1.25em;">Mr. Dennis grew up studying ballet at Maple Conservatory of Dance in California. He graduated from Belhaven University with a BFA in dance and has danced professionally with Ballet Mississippi and Filter Dance Company. Additionally, he has four years of experience in Martial Arts. Mr. Dennis has taught at MDU since 2015.</p>
                </div>
            </div>
        </div>
    </div>




@endsection
