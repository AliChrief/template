pieaceOfCode = `<div class="uk-container">
    <div class="inner">
        <div class="logo">
            <a href="index.html">
                <div class="brand"></div>
            </a>
        </div>
        <div class="navbar pr-font-second">
            <nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true">
                <ul>
                    <li><a href="#pr__hero">Home</a></li>
                    <li><a href="#pr__services">Services</a></li>
                    <li><a href="#pr__works">Works</a></li>
                    <li><a href="#pr__about">About</a></li>
                    <li><a href="#pr__clients">Clients</a></li>
                    <li><a href="#pr__blog">Blog</a></li>
                    <li><a href="#pr__contact">Contact</a></li>
                </ul>
            </nav>
            <div class="lang">
                <div data-uk-form-custom="target: true">
                    <select>
                        <option value="English">En</option>
                        <option value="Germany">Ge</option>
                    </select>
                    <span></span>
                    <i class="icon pr-chevron-down"></i>
                </div>
            </div>
        </div>
        <div class="navbar-tigger" data-uk-toggle="target: #navbar-mobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
`
const myHeader = document.getElementById('my-header').innerHTML = pieaceOfCode
