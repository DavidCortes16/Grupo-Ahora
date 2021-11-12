@extends('layouts.grupoahora')

@section('title', 'GRUPO AHORA S.A.S')


@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                        src="assets/img/GRUPOAHORA-02.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal-2">Contáctanos</button></li>
                </ul>
            </div>
        </nav>
        <!-- Background Video-->
        <video id="video" class="bg-video" playsinline="playsinline" controls autoplay="autoplay" muted="muted" loop="loop">
            <source src="assets/mp4/Hitech_Digital_Background.mp4" type="video/mp4" /></video>

        <!-- Masthead-->
        <!-- <div class="masthead">
                    <div class="masthead-content text-white"> -->
        <div class="container-fluid px-4 px-lg-0">
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Clarence
                        <span class="text-primary">Taylor</span>
                    </h1>
                    <div class="subheading mb-5">
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">name@email.com</a>
                    </div>
                    <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for
                        high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to
                        further the overall value proposition.</p>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of
                                the day, going forward, a new normal that has evolved from generation X is on the runway
                                heading towards a streamlined cloud solution. User generated content in real-time will have
                                multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                                Override the digital divide with additional clickthroughs from DevOps. Nanotechnology
                                immersion along the information highway will close the loop on focusing solely on the bottom
                                line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking
                                seamless key performance indicators offline to maximise the long tail. Keeping your eye on
                                the ball while performing a deep dive on the start-up mentality to derive convergence on
                                cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                procrastinate B2C users after installed base benefits. Dramatically visualize customer
                                directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Colorado Boulder</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.23</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">James Buchanan High School</h3>
                            <div class="subheading mb-3">Technology Magnet Program</div>
                            <p>GPA: 3.56</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-less"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid
                        skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking,
                        free climbing, and kayaking.</p>
                    <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television
                        shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest
                        technology advancements in the front-end web development world.</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="contactus">
                <div class="resume-section-content">
                    <div class="contact-image">
                        <img src="" alt="rocket_contact" />
                    </div>
                    <form method="post">
                        <h3>Contáctanos</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control"
                                        placeholder="Your Phone Number *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                                        style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <!-- </div>
                </div> -->
        <!-- Social Icons-->
        <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->

        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">

                <div class="algicon">
                    <a class="btn btn-dark m-2" href="https://twitter.com/Anthonycntrers#!"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark m-2" href="https://web.facebook.com/anthonycntreras#!"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark m-2" href="https://www.instagram.com/phothony/" #!><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark m-2" button onclick="enableMute()" type="button"> <i
                            class="fas fa-volume-mute"></i></a>
                    <a class="btn btn-dark m-2" button onclick="disableMute()" type="button"> <i
                            class="fas fa-volume-up"></i></a>
                    <a class="btn btn-dark m-2" button onclick="checkMute()" type="button"> <i class="fas fa-cog"></i></a>
                </div>

            </div>
        </div>
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                    
                </div>
                {!! Form::open(['route'=>'contactus.store','method'=>'POST']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                {!! Form::label('name', 'Nombre') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre completo']) !!}
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <br>
                                {!! Form::label('email', 'Correo Electrónico') !!}
                                {!! Form::text('email ', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electrónico']) !!}
                                @error('email ')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                                <br>
                                {!! Form::label('phone', 'Número de Contacto') !!}
                                {!! Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el número telefónico']) !!}
                                @error('phone')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                                <br>
                                
                            </div>
                            <div class="col-6">
                                {!! Form::label('city', 'Ciudad / Departamento') !!}
                                {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ciudad / Departamento']) !!}
                                @error('city')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <br>
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                                        style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop