<footer>
        <section class="container links-list">
            <div class="link-list">
                <ul>
                    <li>
                        <h2>
                            dc comics
                        </h2>
                    </li>

                    @foreach($FooterLinkDcComics as $link)
                    <li>
                        <a>
                            {{ $link['title'] }}
                        </a>
                    </li>
                    @endforeach
    
                    <li>
                        <h2>
                            shop
                        </h2>
                    </li> 

                    @foreach($FooterLinkShop as $link)
                    <li>
                        <a>
                            {{ $link['title'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <ul>
                    <li>
                        <h2>
                            dc
                        </h2>
                    </li> 
                    
                    @foreach($FooterLinkDclist as $link)
                    <li>
                        <a>
                            {{ $link['title'] }}
                        </a>
                    </li>
                    @endforeach

                </ul>
                <ul>
                    <li>
                        <h2>
                            sites
                        </h2>
                    </li> 

                    @foreach($FooterLinkSites as $link)
                    <li>
                        <a>
                            {{ $link['title'] }}
                        </a>
                    </li>
                    @endforeach
                
                </ul>
            </div>
            <img src="../assets/img/dc-logo-bg.png" alt="brand logo decoration">
        </section>
    </footer>