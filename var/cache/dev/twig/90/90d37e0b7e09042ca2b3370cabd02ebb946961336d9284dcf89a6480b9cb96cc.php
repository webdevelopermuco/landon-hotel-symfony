<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_edea3f968eef08d1c9b6a9311e24d23104f8cd1edc33458aba78baa7ad32e325 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Landon Hotel</title>
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
</head>
<body>
<header id=\"intro\">
    <article class=\"fullheight\">
        <div class=\"hgroup\">
            <h1>Landon Hotel</h1>
            <h2>West London</h2>
            <p><a href=\"#welcome\"><img src=\"images/misc/arrow.png\" alt=\"down arrow\"></a></p>
        </div>
    </article>

    <nav id=\"nav\">
        <div class=\"navbar\">
            <div class=\"brand\"><a href=\"#welcome\">Landon <span>Hotel</span></a></div>
            <ul>
                <li><a class=\"icon info\" href=\"#hotelinfo\"><span>info</span></a></li>
                <li><a class=\"icon rooms\" href=\"#rooms\"><span>rooms</span></a></li>
                <li><a class=\"icon dining\" href=\"#dining\"><span>dining</span></a></li>
                <li><a class=\"icon events\" href=\"#events\"><span>events</span></a></li>
                <li><a class=\"icon attractions\" href=\"#attractions\"><span>attractions</span></a></li>
            </ul>
        </div><!-- navbar -->
    </nav>
</header>
<main id=\"wrapper\">
    <div class=\"scene\" id=\"welcome\">
        <article class=\"content\">
            <div class=\"gallery\">
                <img src=\"images/hotel/intro_room.jpg\" alt=\"Intro Gallery Room Sample Pictures\">
                <img src=\"images/hotel/intro_pool.jpg\" alt=\"Intro Gallery Pool Sample Pictures\">
                <img src=\"images/hotel/intro_dining.jpg\" alt=\"Intro Gallery Dining Sample Pictures\">
                <img src=\"images/hotel/intro_attractions.jpg\" alt=\"Intro Gallery Attractions Sample Pictures\">
                <img class=\"hidesm\" src=\"images/hotel/intro_wedding.jpg\" alt=\"Intro Gallery Dining Sample Pictures\">
            </div>
            <h1>Welcome to the Landon&nbsp;Hotel</h1>
            <p>The original Landon perseveres after <strong>";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</strong> years in the heart of West London. The West
                End
                neighborhood has something for everyone&mdash;from theater to dining to historic sights. And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good&nbsp;conversation.</p>
        </article>
    </div><!-- welcome -->
    <div class=\"scene\" id=\"hotelinfo\">
        <article class=\"heading\">
            <h1>Essential Info</h1>
        </article>
        <article id=\"usefulinfo\">
            <section id=\"arrivalinfo\">
                <h2>Arrival Information</h2>
                <ul>
                    <li><strong>Check-in:</strong> 3:00 PM</li>
                    <li><strong>Check-out:</strong> 11:00 AM</li>
                    <li><strong>Parking:</strong> Self-parking in the underground garage is ￡15 per day and valet-parking is ￡50 per day.</li>
                    <li><strong>Airport Shuttle:</strong> Our complimentary airport shuttles leave every hour on the hour, and make trips to Heathrow and Gatwick airports.</li>
                    <li><strong>Trains:</strong> The nearest Underground station is at Leicester Square.</li>
                    <li><strong>Pet Policy:</strong> Pets of all sizes and types are allowed in designated pet rooms, and the specified common areas. Service animals are allowed everywhere.</li>
                </ul>
            </section>
            <section class=\"checklist\" id=\"services\">
                <h2>Services and Amenities</h2>
                <p>Our services and amenities are designed to make your travel easy, your stay comfortable, and your experience one-of-a-kind.</p>
                <ul>
                    <li>Indoor pool</li>
                    <li>24-hour fitness center</li>
                    <li>Massage therapy</li>
                    <li>Full service spa</li>
                    <li>In-room jacuzzi tubs</li>
                    <li>Rooftop café  &amp; smoothie bar</li>
                    <li>Coffee bar  &amp; pastry shop</li>
                    <li>Traditional continental breakfast</li>
                    <li>24-hour concierge service</li>
                    <li>Business center</li>
                    <li>Complimentary wireless service</li>
                    <li>Laundry &amp; dry cleaning service</li>
                    <li>Daily paper</li>
                    <li>Certified \"green\" hotel</li>
                    <li>Pet-friendly rooms  &amp; common areas</li>
                </ul>
            </section>
            <section class=\"checklist\" id=\"accessibility\">
                <h2>Accessibility</h2>
                <p>We're committed to maintaining the same quality of service for every individual. We offer the following facilities for those with special needs:</p>
                <ul>
                    <li>Grab bars on tub walls</li>
                    <li>Shower chairs</li>
                    <li>Hand held shower sprayers</li>
                    <li>Higher toilets &amp; toilet modifiers</li>
                    <li>Lower sink faucet handles</li>
                    <li>Wheelchair clearance under sinks &amp; vanity</li>
                    <li>Lower racks in closet</li>
                    <li>TDD machines</li>
                    <li>Telephone light signalers  &amp; smoke alarms</li>
                    <li>Telephone amplification handsets</li>
                    <li>Closed captioned television converters</li>
                    <li>Vibrating alarm clocks</li>
                    <li>Telephones with volume control</li>
                </ul>
            </section>
        </article>
        <article id=\"greenprogram\">
            <h2>Landon Green Program</h2>
            <p><strong>The Landon Hotel - London</strong> was recently renovated, and we considered the impact on the earth the entire way. From green building materials, to solar power, to energy-friendly lighting and appliances throughout the hotel - we’re saving energy in every socket, outlet, and switch. We’ve also initiated a recycling and composting program that reduces the load to local landfills, while providing valuable raw material for use in new products, or in the case of compost, for use in local gardens and landscapes.</p>
        </article>
    </div><!-- hotelinfo -->
    <div class=\"scene\" id=\"rooms\">
        <header>
            <h1>Guest Rooms</h1>
            <p>Our guest rooms feature sumptuous classic furnishings that evoke visions of London’s rich and long-standing tradition of royalty. While our rooms are decked out in classic design, they each have a modern flair, and contain all the modern comforts expected in today’s luxury hotels. We’ve named our rooms for the notable public squares and circuses around which the West End is laid&nbsp;out.</p>
        </header>

        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 117
            echo "            <article class=\"room fullheight\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "tag", [], "any", false, false, false, 117), "html", null, true);
            echo "\">
                <section class=\"content\">
                    <h1>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 119), "html", null, true);
            echo " - £";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "price", [], "any", false, false, false, 119), "html", null, true);
            echo " per night</h1>
                    <p>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 120), "html", null, true);
            echo "</p>
                </section>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
    </div><!-- rooms -->
    <div class=\"scene\" id=\"dining\">
        <article id=\"areadining\">
            <h1>Dining in the Area</h1>
            <p>The West End is a foodie’s paradise, and the Landon Hotel is in the center of it all. With options for traditional English, Italian, Indian, American, Chinese, and French cuisines, all within two blocks of the hotel, and a variety of tasty culinary delights from many other countries, within a half-mile radius, the only trouble you’ll have is choosing! </p>
        </article>
        <article id=\"inhotel\">
            <section id=\"rooftopcafe\">
                <h2>Rooftop Caf&eacute;</h2>
                <img src=\"images/hotel/dining_rooftop.jpg\" alt=\"Dining\">
                <p>Landon Rooftop Caf&eacute; is the destination for five star dining. Our master chefs are trained to meet special dietary needs, and we offer a range of vegetarian/vegan, kosher, gluten, and dairy free selections to accommodate our guests. Whether you&rsquo;re in the mood for our award winning roast beef, fresh select salads, appetizing lunch entrees, or delectable desserts, we have you covered.</p>
            </section>

            <section id=\"smoothiebar\">
                <h2>Smoothie Bar</h2>
                <img src=\"images/hotel/dining_smoothiebar.jpg\" alt=\"Dining\">
                <p>The Rooftop Smoothie Bar gives you panoramic views of the city, where you can have one of our specialty smoothies while you wait for your table. Our top mixologists are constantly bringing new and unique offerings to our smoothie menu. We have a wide range of locally grown, fresh fruit and vegetable choices to make you custom blended drinks.  We also have seasonal selections that you won’t find anywhere else.</p>
            </section>

            <section id=\"coffeebar\">
                <h2>Breakfast &amp; Coffee Bar</h2>
                <img src=\"images/hotel/dining_lattes.jpg\" alt=\"Dining\">
                <p>Our traditional breakfast and coffee bar, located adjacent to our lounge, are the perfect way to start your morning. We offer a wide selection of seasonal fresh fruit, a variety of cereals, croissants, crusty sourdough bread, cook-to-order eggs and omelettes, fresh juice, coffee, and teas. Breakfast is served from 7:00 am to 10:00 am daily. Our coffee bar is open until 6:30 pm daily.</p>
            </section>
        </article><!-- inhotel -->
        <article id=\"roomservice\">
            <h1>Room Service</h1>
            <p>If you’d rather stay in your room and enjoy a quiet evening in, or a relaxing breakfast in bed, room service options are available for all of our dining choices.</p>
        </article>
    </div><!-- dining -->
    <div class=\"scene\" id=\"events\">
        <article class=\"event fullheight\" id=\"businessmeetings\">
            <div class=\"content\">
                <h2>Business Meetings</h2>
                <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
            </div><!-- content -->
        </article><!-- article -->
        <article class=\"event fullheight\" id=\"weddings\">
            <div class=\"content\">
                <h2>Weddings &amp; Social Events</h2>
                <p> When you entrust us to handle your wedding, or other event, you’re putting your faith in our professional reputation – and that’s not a responsibility we take lightly. </p>
            </div><!-- content -->
        </article><!-- article -->
    </div><!-- events -->
    <div class=\"scene fullheight\" id=\"attractions\">
        <article class=\"content\">
            <h1>Local Attractions</h1>
            <p>Whether you’re a theater enthusiast, enjoy epic shopping, or love to stroll and people watch, London’s West End has an endless opportunity to partake. The heart of London’s \"Theatreland\" offering the best in drama, comedy, and musical productions.</p>
        </article>
    </div><!-- attractions -->
</main>
<footer class=\"scene\">
    <article class=\"content\">
        <div id=\"socialmedia\">
            <ul class=\"group\">
                <li><a href=\"https://twitter.com\"><img class=\"icon\" src=\"images/socialmedia/twitter.png\" alt=\"icon for twitter\" /></a></li>
                <li><a href=\"http://www.facebook.com\"><img class=\"icon\" src=\"images/socialmedia/facebook.png\" alt=\"icon for facebook\" /></a></li>
                <li><a href=\"http://www.youtube.com\"><img class=\"icon\" src=\"images/socialmedia/youtube.png\" alt=\"icon for youtube\" /></a></li>
            </ul>
        </div>
    </article>
</footer>
<script src=\"js/script.js\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 124,  179 => 120,  173 => 119,  167 => 117,  163 => 116,  87 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Landon Hotel</title>
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
</head>
<body>
<header id=\"intro\">
    <article class=\"fullheight\">
        <div class=\"hgroup\">
            <h1>Landon Hotel</h1>
            <h2>West London</h2>
            <p><a href=\"#welcome\"><img src=\"images/misc/arrow.png\" alt=\"down arrow\"></a></p>
        </div>
    </article>

    <nav id=\"nav\">
        <div class=\"navbar\">
            <div class=\"brand\"><a href=\"#welcome\">Landon <span>Hotel</span></a></div>
            <ul>
                <li><a class=\"icon info\" href=\"#hotelinfo\"><span>info</span></a></li>
                <li><a class=\"icon rooms\" href=\"#rooms\"><span>rooms</span></a></li>
                <li><a class=\"icon dining\" href=\"#dining\"><span>dining</span></a></li>
                <li><a class=\"icon events\" href=\"#events\"><span>events</span></a></li>
                <li><a class=\"icon attractions\" href=\"#attractions\"><span>attractions</span></a></li>
            </ul>
        </div><!-- navbar -->
    </nav>
</header>
<main id=\"wrapper\">
    <div class=\"scene\" id=\"welcome\">
        <article class=\"content\">
            <div class=\"gallery\">
                <img src=\"images/hotel/intro_room.jpg\" alt=\"Intro Gallery Room Sample Pictures\">
                <img src=\"images/hotel/intro_pool.jpg\" alt=\"Intro Gallery Pool Sample Pictures\">
                <img src=\"images/hotel/intro_dining.jpg\" alt=\"Intro Gallery Dining Sample Pictures\">
                <img src=\"images/hotel/intro_attractions.jpg\" alt=\"Intro Gallery Attractions Sample Pictures\">
                <img class=\"hidesm\" src=\"images/hotel/intro_wedding.jpg\" alt=\"Intro Gallery Dining Sample Pictures\">
            </div>
            <h1>Welcome to the Landon&nbsp;Hotel</h1>
            <p>The original Landon perseveres after <strong>{{ year }}</strong> years in the heart of West London. The West
                End
                neighborhood has something for everyone&mdash;from theater to dining to historic sights. And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good&nbsp;conversation.</p>
        </article>
    </div><!-- welcome -->
    <div class=\"scene\" id=\"hotelinfo\">
        <article class=\"heading\">
            <h1>Essential Info</h1>
        </article>
        <article id=\"usefulinfo\">
            <section id=\"arrivalinfo\">
                <h2>Arrival Information</h2>
                <ul>
                    <li><strong>Check-in:</strong> 3:00 PM</li>
                    <li><strong>Check-out:</strong> 11:00 AM</li>
                    <li><strong>Parking:</strong> Self-parking in the underground garage is ￡15 per day and valet-parking is ￡50 per day.</li>
                    <li><strong>Airport Shuttle:</strong> Our complimentary airport shuttles leave every hour on the hour, and make trips to Heathrow and Gatwick airports.</li>
                    <li><strong>Trains:</strong> The nearest Underground station is at Leicester Square.</li>
                    <li><strong>Pet Policy:</strong> Pets of all sizes and types are allowed in designated pet rooms, and the specified common areas. Service animals are allowed everywhere.</li>
                </ul>
            </section>
            <section class=\"checklist\" id=\"services\">
                <h2>Services and Amenities</h2>
                <p>Our services and amenities are designed to make your travel easy, your stay comfortable, and your experience one-of-a-kind.</p>
                <ul>
                    <li>Indoor pool</li>
                    <li>24-hour fitness center</li>
                    <li>Massage therapy</li>
                    <li>Full service spa</li>
                    <li>In-room jacuzzi tubs</li>
                    <li>Rooftop café  &amp; smoothie bar</li>
                    <li>Coffee bar  &amp; pastry shop</li>
                    <li>Traditional continental breakfast</li>
                    <li>24-hour concierge service</li>
                    <li>Business center</li>
                    <li>Complimentary wireless service</li>
                    <li>Laundry &amp; dry cleaning service</li>
                    <li>Daily paper</li>
                    <li>Certified \"green\" hotel</li>
                    <li>Pet-friendly rooms  &amp; common areas</li>
                </ul>
            </section>
            <section class=\"checklist\" id=\"accessibility\">
                <h2>Accessibility</h2>
                <p>We're committed to maintaining the same quality of service for every individual. We offer the following facilities for those with special needs:</p>
                <ul>
                    <li>Grab bars on tub walls</li>
                    <li>Shower chairs</li>
                    <li>Hand held shower sprayers</li>
                    <li>Higher toilets &amp; toilet modifiers</li>
                    <li>Lower sink faucet handles</li>
                    <li>Wheelchair clearance under sinks &amp; vanity</li>
                    <li>Lower racks in closet</li>
                    <li>TDD machines</li>
                    <li>Telephone light signalers  &amp; smoke alarms</li>
                    <li>Telephone amplification handsets</li>
                    <li>Closed captioned television converters</li>
                    <li>Vibrating alarm clocks</li>
                    <li>Telephones with volume control</li>
                </ul>
            </section>
        </article>
        <article id=\"greenprogram\">
            <h2>Landon Green Program</h2>
            <p><strong>The Landon Hotel - London</strong> was recently renovated, and we considered the impact on the earth the entire way. From green building materials, to solar power, to energy-friendly lighting and appliances throughout the hotel - we’re saving energy in every socket, outlet, and switch. We’ve also initiated a recycling and composting program that reduces the load to local landfills, while providing valuable raw material for use in new products, or in the case of compost, for use in local gardens and landscapes.</p>
        </article>
    </div><!-- hotelinfo -->
    <div class=\"scene\" id=\"rooms\">
        <header>
            <h1>Guest Rooms</h1>
            <p>Our guest rooms feature sumptuous classic furnishings that evoke visions of London’s rich and long-standing tradition of royalty. While our rooms are decked out in classic design, they each have a modern flair, and contain all the modern comforts expected in today’s luxury hotels. We’ve named our rooms for the notable public squares and circuses around which the West End is laid&nbsp;out.</p>
        </header>

        {% for hotel in hotels %}
            <article class=\"room fullheight\" id=\"{{ hotel.tag }}\">
                <section class=\"content\">
                    <h1>{{ hotel.name }} - £{{ hotel.price }} per night</h1>
                    <p>{{ hotel.description }}</p>
                </section>
            </article>
        {%  endfor %}

    </div><!-- rooms -->
    <div class=\"scene\" id=\"dining\">
        <article id=\"areadining\">
            <h1>Dining in the Area</h1>
            <p>The West End is a foodie’s paradise, and the Landon Hotel is in the center of it all. With options for traditional English, Italian, Indian, American, Chinese, and French cuisines, all within two blocks of the hotel, and a variety of tasty culinary delights from many other countries, within a half-mile radius, the only trouble you’ll have is choosing! </p>
        </article>
        <article id=\"inhotel\">
            <section id=\"rooftopcafe\">
                <h2>Rooftop Caf&eacute;</h2>
                <img src=\"images/hotel/dining_rooftop.jpg\" alt=\"Dining\">
                <p>Landon Rooftop Caf&eacute; is the destination for five star dining. Our master chefs are trained to meet special dietary needs, and we offer a range of vegetarian/vegan, kosher, gluten, and dairy free selections to accommodate our guests. Whether you&rsquo;re in the mood for our award winning roast beef, fresh select salads, appetizing lunch entrees, or delectable desserts, we have you covered.</p>
            </section>

            <section id=\"smoothiebar\">
                <h2>Smoothie Bar</h2>
                <img src=\"images/hotel/dining_smoothiebar.jpg\" alt=\"Dining\">
                <p>The Rooftop Smoothie Bar gives you panoramic views of the city, where you can have one of our specialty smoothies while you wait for your table. Our top mixologists are constantly bringing new and unique offerings to our smoothie menu. We have a wide range of locally grown, fresh fruit and vegetable choices to make you custom blended drinks.  We also have seasonal selections that you won’t find anywhere else.</p>
            </section>

            <section id=\"coffeebar\">
                <h2>Breakfast &amp; Coffee Bar</h2>
                <img src=\"images/hotel/dining_lattes.jpg\" alt=\"Dining\">
                <p>Our traditional breakfast and coffee bar, located adjacent to our lounge, are the perfect way to start your morning. We offer a wide selection of seasonal fresh fruit, a variety of cereals, croissants, crusty sourdough bread, cook-to-order eggs and omelettes, fresh juice, coffee, and teas. Breakfast is served from 7:00 am to 10:00 am daily. Our coffee bar is open until 6:30 pm daily.</p>
            </section>
        </article><!-- inhotel -->
        <article id=\"roomservice\">
            <h1>Room Service</h1>
            <p>If you’d rather stay in your room and enjoy a quiet evening in, or a relaxing breakfast in bed, room service options are available for all of our dining choices.</p>
        </article>
    </div><!-- dining -->
    <div class=\"scene\" id=\"events\">
        <article class=\"event fullheight\" id=\"businessmeetings\">
            <div class=\"content\">
                <h2>Business Meetings</h2>
                <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
            </div><!-- content -->
        </article><!-- article -->
        <article class=\"event fullheight\" id=\"weddings\">
            <div class=\"content\">
                <h2>Weddings &amp; Social Events</h2>
                <p> When you entrust us to handle your wedding, or other event, you’re putting your faith in our professional reputation – and that’s not a responsibility we take lightly. </p>
            </div><!-- content -->
        </article><!-- article -->
    </div><!-- events -->
    <div class=\"scene fullheight\" id=\"attractions\">
        <article class=\"content\">
            <h1>Local Attractions</h1>
            <p>Whether you’re a theater enthusiast, enjoy epic shopping, or love to stroll and people watch, London’s West End has an endless opportunity to partake. The heart of London’s \"Theatreland\" offering the best in drama, comedy, and musical productions.</p>
        </article>
    </div><!-- attractions -->
</main>
<footer class=\"scene\">
    <article class=\"content\">
        <div id=\"socialmedia\">
            <ul class=\"group\">
                <li><a href=\"https://twitter.com\"><img class=\"icon\" src=\"images/socialmedia/twitter.png\" alt=\"icon for twitter\" /></a></li>
                <li><a href=\"http://www.facebook.com\"><img class=\"icon\" src=\"images/socialmedia/facebook.png\" alt=\"icon for facebook\" /></a></li>
                <li><a href=\"http://www.youtube.com\"><img class=\"icon\" src=\"images/socialmedia/youtube.png\" alt=\"icon for youtube\" /></a></li>
            </ul>
        </div>
    </article>
</footer>
<script src=\"js/script.js\"></script>
</body>
</html>
", "index.html.twig", "C:\\Users\\mchdc\\Desktop\\reactbabe\\landon-hotel\\templates\\index.html.twig");
    }
}
