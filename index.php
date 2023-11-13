<?php 
  
  $title = 'Home';
  include('header.php');

?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpeg)">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>
                            Welcome to
                            <span>Ndola and District Chamber of Commerce and Industry</span>
                        </h2>
                        <p>
                            We are dedicated to fostering a thriving business environment
                            that encourages innovation, collaboration, and sustainable
                            growth. Our mission is to serve as a catalyst for economic
                            development by providing invaluable resources, networking
                            opportunities, and advocacy for businesses of all sizes and
                            sectors.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpeg)">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Fueling the Future, Embrace Small Business Support!</h2>
                        <p>
                            The future lies in the hands of small businesses, and we have
                            the power to fuel their growth. Embracing small business
                            support means investing in the potential of local
                            entrepreneurs and fostering an ecosystem of economic
                            prosperity.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpeg)">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Small Businesses, Mighty Impact. Stand with Them!</h2>
                        <p>
                            Though small in scale, the impact of these businesses is
                            mighty. They not only contribute to the economy but also bring
                            character and personality to our towns and cities. By standing
                            with small businesses, we are supporting the unique offerings
                            they bring to the market, from handcrafted goods to
                            personalized services
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>NDCC <span>STRATEGIC PLAN</span> 2022 TO 2026</h3>
                    <p>
                        The document outlines the NDCCI's vision and strategy for the
                        years 2022 to 2026, with a primary focus on the theme of
                        "Industry 4.0." This theme underscores their dedication to
                        facilitating significant technological and industrial progress
                        among their members.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="pdf/STRATEGICPLAN.pdf" download="">Download PDF</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta Section -->

    <section id="about-us" class="about-us">
        <div class="container">
            <div class="row no-gutters p-2">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                    data-aos="fade-right"></div>
                <div class="col-xl-7 ps-1 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center p-4">
                        <h3 data-aos="fade-up">who are we?</h3>

                        <p data-aos="fade-up">
                            Since Its Founding In 1930 The Ndola & District Chamber Of
                            Commerce & Industry (NDCCI) Has Been At The Confluence Of
                            Business Development In Ndola And The District – Representing
                            Members Drawn From All Economic Sectors. The NDCCI is the
                            ‘’first port of call’’ for all Commerce Trade and Industry in
                            Ndola and the District.
                        </p>

                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-shield"></i>
                                <h4>Creed</h4>
                                <p>
                                    Together We Can Make A Difference For Better Business.
                                </p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4>Objective</h4>
                                <p>
                                    Diversity Of Ideas And Unity Of Purpose Are The NDCCI’s
                                    Anchor In Achieving Our Objectives.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End .content-->
                </div>
            </div>
        </div>
    </section>
    <section id="coreValues" class="core-values">
        <div class="container">
            <div class="section-title mb-5" data-aos="fade-up">
                <h2>Our <strong>Core Values</strong></h2>
                <p>
                    We Are Business Advocates, Entrepreneurial Lobbyists And
                    Commercial Diplomats Of The Sharpest Acumen, Constantly Engaged
                    In;
                </p>
            </div>

            <ul class="nav nav-pills mb-3 flex-column flex-sm-row d-flex justify-content-center" id="pills-tab"
                role="tablist">
                <li class="nav-item col-12 mb-2 col-sm-auto" role="presentation">
                    <button class="nav-link active btn-block" id="pills-advocacy-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-advocacy" type="button" role="tab" aria-controls="pills-advocacy"
                        aria-selected="true">
                        Advocacy and Policy Analysis
                    </button>
                </li>
                <li class="nav-item col-12 col-sm-auto" role="presentation">
                    <button class="nav-link btn-block" id="pills-networking-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-networking" type="button" role="tab" aria-controls="pills-networking"
                        aria-selected="false">
                        Capacity Building
                    </button>
                </li>
                <li class="nav-item col-12 col-sm-auto" role="presentation">
                    <button class="nav-link btn-block" id="pills-innovations-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-innovations" type="button" role="tab" aria-controls="pills-innovations"
                        aria-selected="false">
                        innovation
                    </button>
                </li>
                <li class="nav-item col-12 col-sm-auto" role="presentation">
                    <button class="nav-link btn-block" id="pills-businessnet-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-businessnet" type="button" role="tab" aria-controls="pills-businessnet"
                        aria-selected="false">
                        bussiness Mentorship
                    </button>
                </li>
                <li class="nav-item col-12 col-sm-auto" role="presentation">
                    <button class="nav-link btn-block" id="pills-summits-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-summits" type="button" role="tab" aria-controls="pills-summits"
                        aria-selected="false">
                        Apolitical
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-advocacy" role="tabpanel"
                    aria-labelledby="pills-advocacy-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="assets/img/core-values/advocacy.jpeg" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 py-3">
                            <h3 class="text-capitalize fw-bold">
                                Advocacy and Policy Analysis
                            </h3>
                            <p>
                                The Ndola and District Chamber of Commerce and Industry
                                (NDCCI) is a vital organization dedicated to promoting and
                                supporting businesses in the Ndola region and surrounding
                                districts. One of the key services offered by NDCCI is its
                                comprehensive advocacy program, designed to champion the
                                interests and needs of local businesses while fostering an
                                enabling environment for economic growth and prosperity.
                            </p>
                            <p>
                                Through policy advocacy, networking, capacity building, and
                                other initiatives, the chamber empowers businesses to
                                overcome challenges, seize opportunities, and collectively
                                contribute to the region's economic growth and prosperity.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-networking" role="tabpanel" aria-labelledby="pills-networking-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="assets/img/core-values/networking.jpeg" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 py-3">
                            <h3 class="text-capitalize fw-bold">Capacity Building</h3>
                            <p>
                                NDCCI places a strong emphasis on capacity building as a
                                core component of its mission. Capacity building, in the
                                context of NDCCI, refers to the deliberate and strategic
                                efforts to enhance the knowledge, skills, resources, and
                                capabilities of its members and stakeholders.
                            </p>
                            <p>
                                NDCCI's commitment to capacity building is a testament to
                                its dedication to the growth and development of its members.
                                Through a combination of education, mentorship, resource
                                access, and advocacy, the organization empowers businesses
                                to thrive, innovate, and contribute to broader economic
                                progress in their respective regions and industries.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-innovations" role="tabpanel"
                    aria-labelledby="pills-innovations-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="assets/img/core-values/investiment.jpeg" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 py-3">
                            <h3 class="text-capitalize fw-bold">innovation</h3>
                            <p>
                                The NDCCI has firmly established itself as an innovative
                                leader within the business sector. Over the years, it has
                                consistently demonstrated a commitment to fostering
                                innovation and driving progress among its members.
                            </p>
                            <p>
                                NDCCI's innovative approach in the business sector is
                                evident through its proactive adoption of emerging
                                technologies, support for startups, commitment to continuous
                                learning, collaboration with research institutions, digital
                                transformation, sustainability efforts, and member-centric
                                services. This innovation-centric strategy not only benefits
                                its members but also contributes to the overall growth and
                                competitiveness of the business community it serves.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-businessnet" role="tabpanel"
                    aria-labelledby="pills-businessnet-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="assets/img/core-values/business-net.jpeg" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 py-3">
                            <h3 class="text-capitalize fw-bold">business Mentorship</h3>
                            <p>
                                NDCCI can play a vital role as a provider of business
                                mentorship. As a reputable organization dedicated to
                                economic development and business growth, NDCCI is
                                well-positioned to offer valuable mentorship services to
                                entrepreneurs and businesses in various industries.
                            </p>
                            <p>
                                NDCCI's business mentorship programs embody its commitment
                                to fostering entrepreneurship and economic growth. By
                                offering tailored guidance, sharing expertise, and
                                facilitating networking, NDCCI empowers mentees to navigate
                                the complexities of business, make informed decisions, and
                                achieve sustainable success in their ventures.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-summits" role="tabpanel" aria-labelledby="pills-summit-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="assets/img/core-values/business-sumit.jpeg" alt="" class="img-fluid" />
                        </div>
                        <div class="col-lg-6 py-3">
                            <h3 class="text-capitalize fw-bold">apolitical</h3>
                            <p>
                                The NDCCI proudly maintains an apolitical stance in all of
                                its operations and engagements. Being apolitical means that
                                the organization remains neutral and does not align itself
                                with any particular political party, ideology, or agenda.
                                This commitment to political neutrality is a fundamental
                                aspect of NDCCI's mission and values.
                            </p>
                            <p>
                                NDCCI's commitment to being apolitical is a deliberate
                                choice made to uphold its core values of impartiality,
                                inclusivity, and a singular focus on economic development.
                                By staying neutral in the political arena, NDCCI can better
                                serve its members and work toward its overarching goal of
                                fostering economic growth and prosperity for businesses and
                                industries across its network.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our <strong>Clients</strong></h2>
                <p>
                    Our Members are expected to exhibit the best commercial ethics and
                    lead in good corporate Governance embodying excellence in best
                    business practices above all else. We have a membership of 105
                    members
                </p>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/zisc.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/fnb.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/zanaco.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/stanbic.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/afrox.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/advance.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/dangote.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/sampay.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/aquavita.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/fqm.jpg" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/professional.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo mb-3">
                        <img src="assets/img/clients/medison.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 mt-5">
                    <div class="text-center">
                        <a href="clients.php" class="btn btn-outline-danger">
                            More Clients</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Clients Section -->
</main>
<!-- End #main -->
<?php 

  include('footer.php');

?>