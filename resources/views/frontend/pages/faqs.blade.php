@extends('frontend.layouts.master')

@section('title','Towa-Xports || Faqs')

@section('main-content')

    <main>
        <!-- GT Breadcrunb Section Start -->
        <div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb.png') }}');">
            <div class="gt-left-shape">
                <img src="{{ asset('assets/img/shape-1.png') }}" alt="img">
            </div>
            <div class="gt-right-shape">
                <img src="{{ asset('assets/img/shape-2.png') }}" alt="img">
            </div>
            <div class="gt-blur-shape">
                <img src="{{ asset('assets/img/breadcrumb-shape.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="gt-page-heading">
                    <div class="gt-breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">faqs</h1>
                    </div>
                    <ul class="gt-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <i class="fa-solid fa-house"></i>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ __('common.home') }} :
                            </a>
                        </li>
                        <li class="color">
                            faqs
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- GT Faq Section Start -->
        <section class="gt-faq-section section-padding fix">
            <div class="container">
               <div class="gt-faq-wrapper">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="gt-faq-item">
                                <div class="gt-faq-content">
                                    <h4>
                                        frequently ask questions
                                    </h4>
                                    <p>
                                       Find quick answers to the most common questions about Boost Packs and our services below.
                                    </p>
                                     <div class="faq-accordion">
                                <div class="accordion" id="accordion">
    <!-- New FAQ items starting from 1 -->
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq1"
                aria-expanded="true" aria-controls="faq1">
                <span>01</span>
                What is a Boost Pack and how does it work?
            </button>
        </h5>
        <div id="faq1" class="accordion-collapse show"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Boost Packs enhance your in-game progress, such as ranking faster, unlocking exclusive content, or improving performance. After purchase, instructions on activation or delivery will be provided on your order page.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq2"
                aria-expanded="false" aria-controls="faq2">
                <span>02</span>
                Are these in-game items official or third-party mods?
            </button>
        </h5>
        <div id="faq2" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                All items are custom-designed content or enhancements provided by our platform. They are compatible with the original game but are not officially affiliated with the game developers.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq3"
                aria-expanded="false" aria-controls="faq3">
                <span>03</span>
                How do I receive my purchased product?
            </button>
        </h5>
        <div id="faq3" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Most products are delivered instantly via download, account update, or in-game instructions. Some items may require a support agent to coordinate activation.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq4"
                aria-expanded="false" aria-controls="faq4">
                <span>04</span>
                Can I buy a Season Pass for a specific game world only?
            </button>
        </h5>
        <div id="faq4" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Yes, Season Passes are specific to each game world (e.g., Shadow Breach, Frostveil) and unlock missions, cosmetics, and progression tiers relevant to that theme.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq5"
                aria-expanded="false" aria-controls="faq5">
                <span>05</span>
                What are XP Boosters and how long do they last?
            </button>
        </h5>
        <div id="faq5" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                XP Boosters temporarily increase your experience gain rate. Duration varies by product, typically from 1 hour to a full season.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq6"
                aria-expanded="false" aria-controls="faq6">
                <span>06</span>
                Is it safe to use Rank Boosting services?
            </button>
        </h5>
        <div id="faq6" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Yes. We use secure, private methods to ensure account safety. No cheats or exploits are used, and we comply with fair-play standards.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq7"
                aria-expanded="false" aria-controls="faq7">
                <span>07</span>
                Do I need to share my login details for services?
            </button>
        </h5>
        <div id="faq7" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Only specific services like Rank Boosting or Account Setups may require temporary access. For these, we guarantee strict privacy and optional 2FA support.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq8"
                aria-expanded="false" aria-controls="faq8">
                <span>08</span>
                Can I customize weapon skins before buying?
            </button>
        </h5>
        <div id="faq8" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Previews are available for most bundles, but customization (e.g., color or style variations) may depend on the product type. Check the product page for options.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq9"
                aria-expanded="false" aria-controls="faq9">
                <span>09</span>
                Are bundles cheaper than individual items?
            </button>
        </h5>
        <div id="faq9" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Yes. Bundles like Survival Gear Packs or Weapon Skin Collections offer discounted pricing compared to buying items separately.
            </div>
        </div>
    </div>
    <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq10"
                aria-expanded="false" aria-controls="faq10">
                <span>10</span>
                What are Pre-Built or Pre-Setup Accounts?
            </button>
        </h5>
        <div id="faq10" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                These are accounts prepared in advance with specific upgrades, items, or ranks for instant gameplay access. Ideal for players who want to skip the grind.
             </div>
            </div>
     </div>
      <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq11"
                aria-expanded="false" aria-controls="faq11">
                <span>11</span>
               Do Special Mission Access packs include story content?
            </button>
        </h5>
        <div id="faq11" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
               Yes. They often unlock new quests, lore expansions, or exclusive gameplay modes tied to the game's universe.
            </div>
        </div>
    </div>
     <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq12"
                aria-expanded="false" aria-controls="faq12">
                <span>12</span>
                What is the difference between Resource Boosters and Crafting Bundles?
            </button>
        </h5>
        <div id="faq12" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                Resource Boosters increase the amount you gather during gameplay, while Crafting Bundles provide pre-packed materials for instant use.
             </div>
            </div>
     </div>
      <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq13"
                aria-expanded="false" aria-controls="faq13">
                <span>13</span>
                 Can I use multiple boost products at once?
            </button>
        </h5>
        <div id="faq13" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                 Yes, most boosters can be stacked or combined. For example, using an XP Booster with a Skill Upgrade Kit for rapid growth.
             </div>
            </div>
     </div>
     <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq14"
                aria-expanded="false" aria-controls="faq14">
                <span>14</span>
                Are these digital products refundable?
            </button>
        </h5>
        <div id="faq14" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                 Due to the nature of digital delivery, purchases are generally non-refundable. However, we handle exceptions on a case-by-case basis. Contact support within 24 hours.
             </div>
            </div>
     </div>
       <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq15"
                aria-expanded="false" aria-controls="faq15">
                <span>15</span>
               What’s included in Custom Emotes or Skins Packs?
            </button>
        </h5>
        <div id="faq15" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                 These typically include character animations, gestures, or visual styles not found in standard gameplay. Some are exclusive to premium tiers.
             </div>
            </div>
     </div>
      <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq16"
                aria-expanded="false" aria-controls="faq16">
                <span>16</span>
              How do I know if a product is compatible with my version of the game?
            </button>
        </h5>
        <div id="faq16" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                 Each product page lists the supported game versions and platforms. Compatibility details are also available from our support team.
             </div>
            </div>
     </div>
     <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq17"
                aria-expanded="false" aria-controls="faq17">
                <span>17</span>
              Can I gift a product to a friend?
            </button>
        </h5>
        <div id="faq17" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                  Yes. During checkout, select the "Gift this Item" option and enter your friend’s account or email address.
             </div>
            </div>
     </div>
      <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq18"
                aria-expanded="false" aria-controls="faq18">
                <span>18</span>
              Are your services available worldwide?
            </button>
        </h5>
        <div id="faq18" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                  Yes, our digital products and boosting services are available globally, unless restricted by specific regional game policies.
             </div>
            </div>
     </div>
     <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq19"
                aria-expanded="false" aria-controls="faq19">
                <span>19</span>
             How often are new packs or bundles released?
            </button>
        </h5>
        <div id="faq19" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                   We release new themed packs every month. Subscribe to our newsletter or follow us on social media for updates.
             </div>
            </div>
     </div>
     <div class="accordion-item mb-3">
        <h5 class="accordion-header">
            <button class="accordion-button d-flex gap-2 flex-wrap collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq20"
                aria-expanded="false" aria-controls="faq20">
                <span>20</span>
            What if I face issues after purchasing a product?
            </button>
        </h5>
        <div id="faq20" class="accordion-collapse collapse"
            data-bs-parent="#accordion">
            <div class="accordion-body">
                   You can reach out to our support team via email. We aim to resolve all product-related issues within 24 hours.
             </div>
            </div>
     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <div class="col-lg-4">
                            <div class="gt-contact-bg bg-cover" style="background-image: url(assets/img/inner-page/match-details/bg.jpg);">
                                <div class="gt-contact-content">
                                    <h3>Need Any Help</h3>
                                    <p>Nees Any Help, Call Us  24/7 Full Support</p>
                                    <div class="gt-contact-item">
                                        <div class="gt-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Call Us:</span></li>
                                            <li><a href="tel:{{ __('common.company_phone') }}">{{ __('common.company_phone') }} </a></li>
                                        </ul>
                                    </div>
                                    <div class="gt-contact-item">
                                        <div class="gt-icon">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Mail Us</span></li>
                                            <li><a href="mailto:{{ __('common.company_email') }}">
                                                {{ __('common.company_email') }}
                                            </a></li>
                                        </ul>
                                    </div>
                                    <div class="gt-contact-item mb-0">
                                        <div class="gt-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Location:</span></li>
                                            <li>{{ __('common.company_address') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>
    </main>

@endsection