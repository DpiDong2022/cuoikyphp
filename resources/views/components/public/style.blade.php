@import url("https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800");
html {
  font-size: 62.5%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  font-size-adjust: 100%;
}
html,
body {
  height: 100%;
}
body {
  font: normal 300 1.4rem/1.86 "Poppins", sans-serif;
  color: #2b7a78;
  background-color: #fff;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow-x: hidden;
}
::-moz-selection {
  color: #fff;
  background-color: #3aafa9;
}
::selection {
  color: #fff;
  background-color: #3aafa9;
}
p {
  margin-bottom: 1.5rem;
}
ul,
ol {
  list-style: none;
  padding: 0;
  margin: 0 0 1.5rem;
}
b,
strong {
  font-weight: 700;
}
em,
i {
  font-style: italic;
}
hr {
  border: none;
  border-top: 1px solid #ebebeb;
  margin: 3rem auto 2.5rem;
}
sub,
sup {
  position: relative;
  font-size: 70%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  display: block;
  max-width: 100%;
  height: auto;
}
.bg-light {
  background-color: #f8f8f8 !important;
}
.bg-light-2 {
  background-color: #f9f9f9 !important;
}
.bg-lighter {
  background-color: #fafafa !important;
}
.bg-gray {
  background-color: #f4f5f8 !important;
}
.bg-primary {
  background-color: #3aafa9 !important;
}
.bg-secondary {
  background-color: #2b7a78 !important;
}
.bg-image {
  background-color: #ccc;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.bg-overlay {
  position: relative;
}
.bg-overlay:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 1;
  opacity: 0.3;
  background-color: #333;
}
.bg-overlay .container,
.bg-overlay .container-fluid {
  position: relative;
  z-index: 2;
}
@keyframes rotating {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  font-weight: 500;
  line-height: 1.1;
  margin-bottom: 1.4rem;
  color: #333;
  letter-spacing: -0.03em;
}
h1,
.h1 {
  font-size: 4rem;
}
h2,
.h2 {
  font-size: 3.6rem;
}
h3,
.h3 {
  font-size: 2.6rem;
}
h4,
.h4 {
  font-size: 2.2rem;
}
h5,
.h5 {
  font-size: 2rem;
  letter-spacing: -0.025em;
}
h6,
.h6 {
  font-size: 1.6rem;
  letter-spacing: -0.01em;
}
a {
  color: #3aafa9;
  text-decoration: none;
  transition: color 0.3s ease;
}
a:hover,
a:focus {
  color: #2b7a78;
  text-decoration: none;
}
.link-underline {
  box-shadow: 0 1px 0 0 #3aafa9;
}
.text-primary {
  color: #3aafa9 !important;
}
.text-secondary {
  color: #2b7a78 !important;
}
.text-dark {
  color: #333 !important;
}
.text-light {
  color: #ccc !important;
}
.lead {
  font-size: 1.6rem;
  font-weight: 400;
  line-height: 1.875;
  margin-bottom: 1.2rem;
}
blockquote {
  position: relative;
  margin: 0 0 4.2rem;
  padding: 0;
  color: #777;
  font-style: italic;
  font-size: 1.6rem;
  line-height: 1.625;
}
blockquote p {
  max-width: 1120px;
}
blockquote.text-center p {
  margin-left: auto;
  margin-right: auto;
}
blockquote cite {
  font-style: normal;
  font-weight: 500;
  color: #333333;
  letter-spacing: -0.01em;
  line-height: 1;
}
blockquote cite span {
  display: block;
  font-weight: 300;
  font-size: 1.4rem;
}
blockquote.text-white cite {
  color: #cccccc;
}
blockquote.text-white cite span {
  color: #777;
}
@media screen and (min-width: 768px) {
  h1,
  .h1 {
    font-size: 5rem;
  }
  h2,
  .h2 {
    font-size: 4rem;
  }
  h3,
  .h3 {
    font-size: 3rem;
  }
  h4,
  .h4 {
    font-size: 2.4rem;
  }
}
.row {
  margin-left: -10px;
  margin-right: -10px;
}
.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
  padding-right: 10px;
  padding-left: 10px;
}
.no-gutters {
  margin-left: 0;
  margin-right: 0;
}
.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-left: 0;
  padding-right: 0;
}
.container {
  width: 1188px;
  max-width: 100%;
  padding-left: 10px;
  padding-right: 10px;
}
.page-wrapper {
  position: relative;
  display: flex;
  flex-direction: column;
  min-height: 100%;
  transition: transform 0.4s ease;
}
.mmenu-active .page-wrapper {
  transform: translateX(200px);
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .page-wrapper {
    display: block;
  }
}
.main {
  flex: 1;
  width: 100%;
}
.page-content {
  padding-bottom: 5rem;
}
@media screen and (min-width: 992px) {
  .col-5col {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
}
.col-xl-5col {
  width: 100%;
  padding-left: 10px;
  padding-right: 10px;
}
.col-xl-4-5col {
  width: 100%;
  padding-left: 10px;
  padding-right: 10px;
}
.col-xl-2-5col {
  width: 100%;
  padding-left: 10px;
  padding-right: 10px;
}
.col-xl-3-5col {
  width: 100%;
  padding-left: 10px;
  padding-right: 10px;
}
@media screen and (min-width: 1200px) {
  .container-fluid {
    padding-left: 30px;
    padding-right: 30px;
  }
  .col-xl-5col {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
  .col-xl-4-5col {
    -ms-flex: 0 0 80%;
    flex: 0 0 80%;
    max-width: 80%;
  }
  .col-xl-2-5col {
    -ms-flex: 0 0 calc(40%);
    flex: 0 0 calc(40%);
    max-width: calc(40%);
  }
  .col-xl-3-5col {
    -ms-flex: 0 0 calc(60%);
    flex: 0 0 calc(60%);
    max-width: calc(60%);
  }
  .no-gutters .col-xl-2-5col {
    -ms-flex: 0 0 calc(40% + 8px);
    flex: 0 0 calc(40% + 8px);
    max-width: calc(40% + 8px);
  }
  .no-gutters .col-xl-3-5col {
    -ms-flex: 0 0 calc(60% - 8px);
    flex: 0 0 calc(60% - 8px);
    max-width: calc(60% - 8px);
  }
}
@media screen and (min-width: 1280px) {
  .container {
    max-width: 1200px;
  }
}
@media screen and (min-width: 1600px) {
  .container-fluid {
    padding-left: 70px;
    padding-right: 70px;
  }
  .col-xxl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xxl-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xxl-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xxl-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .offset-xxl-2 {
    margin-left: 16.666667%;
  }
  .col-xxl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xxl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xxl-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xxl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xxl-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xxl-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xxl-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xxl-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xxl-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xxl-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .col-xxl-5col {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
  .col-xxl-4-5col {
    -ms-flex: 0 0 80%;
    flex: 0 0 80%;
    max-width: 80%;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
}
@media screen and (min-width: 1920px) {
  .container-fluid {
    max-width: 1920px;
    margin-left: auto;
    margin-right: auto;
  }
}
.header {
  width: 100%;
  background-color: #fff;
}
.header .container,
.header .container-fluid {
  position: relative;
  display: flex;
  align-items: center;
}
.header-left,
.header-center,
.header-right {
  display: flex;
  align-items: center;
}
.header-right {
  margin-left: auto;
  align-self: stretch;
}
.header-center {
  margin-left: auto;
  margin-right: auto;
}
.logo {
  display: block;
  margin-top: 2.55rem;
  margin-bottom: 2.95rem;
  flex-shrink: 0;
  min-height: 25px;
}
.logo img {
  display: block;
  max-width: 100%;
  height: auto;
}
.header-top {
  font-weight: 300;
  font-size: 1.3rem;
  line-height: 1.5;
  letter-spacing: 0;
  color: #777;
  margin-bottom: 0.1rem;
}
.header-top a {
  color: inherit;
}
.header-top a:hover,
.header-top a:focus {
  color: #3aafa9;
}
.header-top .container,
.header-top .container-fluid {
  position: relative;
}
.header-top .container:after,
.header-top .container-fluid:after {
  content: "";
  display: block;
  height: 1px;
  position: absolute;
  bottom: -1px;
  left: 10px;
  right: 10px;
  background-color: #ebebeb;
}
.header-top .top-menu li + li {
  margin-left: 2.6rem;
}
@media screen and (min-width: 1200px) {
  .header-top .container-fluid:after {
    left: 30px;
    right: 30px;
  }
}
@media screen and (min-width: 1600px) {
  .header-top .container-fluid:after {
    left: 70px;
    right: 70px;
  }
}
.top-menu {
  text-transform: uppercase;
  letter-spacing: -0.01em;
  margin: 0;
}
.top-menu > li {
  position: relative;
}
.top-menu > li > a {
  display: none;
}
.top-menu ul {
  display: flex;
  align-items: center;
}
.top-menu li + li {
  margin-left: 3rem;
}
.top-menu a {
  display: inline-flex;
  align-items: center;
}
.top-menu i {
  font-size: 1.5rem;
  margin-right: 0.8rem;
  line-height: 1;
}
.top-menu i.icon-heart-o {
  margin-top: -0.2rem;
}
.top-menu span {
  color: #3aafa9;
  margin-left: 0.3rem;
}
.header-dropdown {
  position: relative;
  padding-top: 0.8rem;
  padding-bottom: 0.8rem;
}
.header-dropdown + .header-dropdown {
  margin-left: 2.9rem;
}
.header-dropdown > a,
.header-dropdown > span {
  position: relative;
  display: inline-flex;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  padding-right: 2.2rem;
  align-items: center;
  text-transform: uppercase;
}
{{-- .header-dropdown > a::after,
.header-dropdown > span::after {
  font-family: "molla";
  content: "\f0d7";
  position: absolute;
  right: 0;
  top: 50%;
  display: inline-block;
  font-size: 1.2rem;
  line-height: 1;
  margin-top: -0.7rem;
} --}}
.header-dropdown a:hover,
.header-dropdown a:focus {
  text-decoration: none;
}
.header-menu {
  position: absolute;
  left: -1.5rem;
  top: 100%;
  z-index: 20;
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
  min-width: 100%;
  visibility: hidden;
  opacity: 0;
  background-color: #fff;
  box-shadow: 2px 5px 8px rgba(51, 51, 51, 0.05),
    -2px 5px 8px rgba(51, 51, 51, 0.05);
  transition: all 0.25s;
  margin-top: 1px;
}
.header-dropdown:first-child .header-menu {
  left: 0;
}
.header-menu:before {
  content: "";
  display: block;
  width: 100%;
  height: 0.1rem;
  position: absolute;
  top: -1px;
  left: 0;
}
.header-dropdown:hover > .header-menu,
.header-dropdown:focus > .header-menu {
  visibility: visible;
  opacity: 1;
}
.header-menu ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.header-menu ul li {
  margin: 0;
}
.header-menu ul a {
  padding: 0.3rem 1.5rem;
  display: flex;
  align-items: center;
  white-space: nowrap;
}
.header-menu a {
  color: inherit;
}
.header-menu a:hover,
.header-menu a:focus {
  color: #3aafa9;
}
.header-right .header-menu,
.header-right .header-dropdown:first-child .header-menu {
  left: auto;
  right: 0;
}
.header-right .top-menu + .header-dropdown {
  margin-left: 2.5rem;
}
.header-middle {
  border-bottom: 0.1rem solid #f4f4f4;
}
.header-middle .menu > li > a {
  letter-spacing: 0.01em;
}
.header-middle .menu.sf-arrows > li > .sf-with-ul {
  padding-right: 1.5rem;
}
.cart-dropdown,
.compare-dropdown {
  display: flex;
  align-self: stretch;
  align-items: center;
}
.cart-dropdown .dropdown-toggle,
.compare-dropdown .dropdown-toggle {
  position: relative;
  display: flex;
  align-items: center;
  text-decoration: none !important;
  line-height: 1;
  color: #333;
}
.cart-dropdown .dropdown-toggle::after,
.compare-dropdown .dropdown-toggle::after {
  display: none;
}
.cart-dropdown .dropdown-menu,
.compare-dropdown .dropdown-menu {
  display: block;
  width: 300px;
  z-index: 100;
  font-size: 1.3rem;
  z-index: 1001;
  border: none;
  margin: 1px 0 0;
  padding: 2.2rem 3rem 2.5rem;
  border-radius: 0;
  border: none;
  box-shadow: 5px 10px 16px rgba(51, 51, 51, 0.05),
    -5px 10px 16px rgba(51, 51, 51, 0.05);
  background-color: #fff;
  visibility: hidden;
  opacity: 0;
  transition: all 0.25s;
}
.cart-dropdown .dropdown-menu:before,
.compare-dropdown .dropdown-menu:before {
  content: "";
  display: block;
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  height: 1px;
}
.cart-dropdown .dropdown-menu.dropdown-menu-right,
.compare-dropdown .dropdown-menu.dropdown-menu-right {
  right: -1px;
}
.cart-dropdown .btn-remove,
.compare-dropdown .btn-remove {
  position: absolute;
  top: 50%;
  right: -0.55rem;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.4rem;
  height: 2.4rem;
  color: #cccccc;
  font-size: 1.3rem;
  line-height: 1;
  text-align: center;
  margin-top: -1.2rem;
}
.cart-dropdown .btn-remove:hover,
.cart-dropdown .btn-remove:focus,
.compare-dropdown .btn-remove:hover,
.compare-dropdown .btn-remove:focus {
  color: #333;
}
.cart-dropdown:hover .dropdown-toggle,
.cart-dropdown.show .dropdown-toggle,
.compare-dropdown:hover .dropdown-toggle,
.compare-dropdown.show .dropdown-toggle {
  color: #3aafa9;
}
.cart-dropdown:hover .dropdown-menu,
.cart-dropdown.show .dropdown-menu,
.compare-dropdown:hover .dropdown-menu,
.compare-dropdown.show .dropdown-menu {
  visibility: visible;
  opacity: 1;
}
.compare-dropdown {
  padding-left: 2.5rem;
}
.compare-dropdown .dropdown-toggle {
  font-size: 2.6rem;
}
.compare-products {
  list-style: none;
  padding: 0;
  margin: 0;
}
.compare-product {
  position: relative;
  padding: 0.5rem 0;
  margin: 0;
  box-shadow: none !important;
}
.compare-product:hover {
  box-shadow: none;
}
.compare-product-title {
  color: #666;
  font-weight: 300;
  font-size: 1.3rem;
  line-height: 1.35;
  margin: 0;
  letter-spacing: -0.01em;
}
.compare-product-title a {
  color: inherit;
}
.compare-product-title a:hover,
.compare-product-title a:focus {
  color: #3aafa9;
}
.compare-actions {
  display: flex;
  align-items: center;
  margin-top: 2rem;
}
.compare-actions .action-link {
  font-size: 1.3rem;
  color: #666;
}
.compare-actions .action-link:hover,
.compare-actions .action-link:focus {
  color: #3aafa9;
  text-decoration: underline;
}
.compare-actions .btn {
  font-size: 1.3rem;
  min-width: 110px;
  margin-left: auto;
  padding-top: 0.65rem;
  padding-bottom: 0.65rem;
}
.cart-dropdown {
  padding-left: 2.5rem;
}
.cart-dropdown .dropdown-toggle {
  font-size: 3.2rem;
}
.cart-dropdown .dropdown-toggle i {
  display: inline-block;
  margin-top: -3px;
}
.cart-dropdown .cart-count {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 2rem;
  height: 2rem;
  border-radius: 50%;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1;
  margin-left: 0.2rem;
  margin-top: 0.1rem;
  color: #fff;
  background-color: #3aafa9;
}
.cart-dropdown .dropdown-cart-products {
  margin-top: -1rem;
}
.cart-dropdown .product {
  position: relative;
  display: flex;
  align-items: flex-start;
  padding: 1.6rem 2.4rem 1.6rem 0;
  box-shadow: none;
  margin: 0 !important;
  border: none;
  border-bottom: 1px solid #ebebeb;
  box-shadow: none !important;
}
.cart-dropdown .product-image-container {
  position: relative;
  max-width: 60px;
  margin: 0;
  margin-left: auto;
}
.cart-dropdown .product-title {
  font-weight: 400;
  font-size: 1.3rem;
  line-height: 1.3;
  color: #666;
  text-align: left;
  margin-bottom: 0.4rem;
}
.cart-dropdown .product-title a {
  color: inherit;
}
.cart-dropdown .product-title a:hover,
.cart-dropdown .product-title a:focus {
  color: #3aafa9;
}
.cart-dropdown .product-cart-details {
  font-weight: 400;
  max-width: 150px;
  font-size: 1.3rem;
  color: #999;
  text-align: left;
}
.dropdown-cart-total {
  padding: 1rem 0 0.5rem;
  display: flex;
  align-items: flex-end;
  font-size: 1.4rem;
  font-weight: 400;
  text-transform: uppercase;
  color: #666;
  margin-bottom: 1.1rem;
}
.dropdown-cart-total .cart-total-price {
  font-size: 1.5rem;
  margin-left: auto;
}
.dropdown-cart-action {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 0 0.5rem;
}
.dropdown-cart-action .btn {
  font-size: 1.3rem;
  min-width: 110px;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.wishlist-link {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  font-size: 2.6rem;
  line-height: 1;
  margin-left: 2.4rem;
}
.wishlist-link i {
  display: inline-block;
  margin-top: -2px;
}
.wishlist-link .wishlist-count {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 2rem;
  height: 2rem;
  border-radius: 50%;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1;
  margin-left: 0.7rem;
  margin-top: 0.1rem;
  color: #fff;
  background-color: #3aafa9;
}
.wishlist-link:hover,
.wishlist-link:focus {
  color: #3aafa9;
}
.search-toggle {
  position: relative;
  display: block;
  font-size: 2.4rem;
  line-height: 1;
  min-width: 2.5rem;
  padding: 0.3rem 0.2rem;
  font-weight: 400;
  color: #333;
  text-align: center;
  z-index: 11;
}
.search-toggle:hover,
.search-toggle:focus,
.search-toggle.active {
  color: #3aafa9;
  outline: none !important;
}
.header-search {
  position: relative;
  margin: 0;
  font-size: 0;
  line-height: 1;
  padding: 0;
  border: none;
}
.header-search .header-search-wrapper {
  position: absolute;
  right: -1.4rem;
  top: 50%;
  margin-top: -20px;
  display: none;
  align-items: stretch;
  overflow: visible;
  border-radius: 20px;
  width: 100%;
  min-width: 270px;
  background-color: #fff;
  border: 0.1rem solid #ebebeb;
  border-radius: 20px;
  z-index: 10;
}
.header-search .header-search-wrapper.show {
  display: flex;
}
.header-search .search-wrapper-wide {
  width: 570px;
}
.header-search form {
  margin: 0;
}
.header-search .select-custom {
  flex: 0 0 200px;
  max-width: 200px;
  padding-right: 0;
  margin: 0;
  align-self: center;
}
.header-search .select-custom:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  top: 50%;
  width: 0.1rem;
  height: 2.6rem;
  margin-top: -1.3rem;
  background-color: #ebebeb;
}
.header-search .select-custom::after {
  right: 2rem;
  color: #999;
  font-size: 1.2rem;
}
.header-search .form-control,
.header-search select {
  line-height: 1;
  font-weight: 400;
  font-size: 1.4rem;
  letter-spacing: 0;
  background-color: #fff;
  margin: 0;
}
.header-search .form-control {
  flex: 1 1 auto;
  padding: 0.9rem 5rem 0.9rem 2.3rem;
  width: 100%;
  margin: 0;
  height: 38px;
  line-height: 20px;
  border: none;
  border-radius: 20px;
  box-shadow: none;
}
.header-search select {
  width: 100%;
  border: none;
  line-height: 38px;
  height: 38px;
  color: #777;
  padding: 0.1rem 4rem 0.1rem 2rem;
  border-radius: 0;
  -moz-appearance: none;
  -webkit-appearance: none;
}
.header-search select:focus {
  outline: none !important;
}
.header-search option {
  font-size: 1.3rem;
  padding: 0.1rem 0.3rem;
}
.header-search .btn {
  flex: 0 0 40px;
  max-width: 40px;
  min-width: 0;
  height: 40px;
  font-weight: 400;
  font-size: 1.8rem;
  line-height: 1;
  border: 0;
  padding: 0;
  margin: 0;
  min-width: 0;
  cursor: pointer;
  margin-top: -1px;
  margin-right: -1px;
  margin-bottom: -1rem;
  border-radius: 0 20px 20px 0;
}
.header-search .btn i {
  margin: 0 !important;
}
.header-search-extended {
  margin-right: 19rem;
  width: 100%;
  max-width: 570px;
  margin-top: 2.2rem;
  margin-bottom: 2.2rem;
}
.header-search-extended .header-search-wrapper {
  border-radius: 30px;
}
.header-search-extended .form-control,
.header-search-extended select {
  font-weight: 300;
}
.header-search-extended .form-control {
  height: 44px;
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
  padding-right: 2.4rem;
  border-radius: 30px 0 0 30px;
}
.header-search-extended select {
  line-height: 44px;
  height: 44px;
}
.header-search-extended .btn {
  flex: 0 0 70px;
  max-width: 70px;
  height: 46px;
  font-size: 2rem;
  border-radius: 0 30px 30px 0;
}
.header-search-visible .search-toggle {
  display: none;
}
.header-search-visible .header-search-wrapper {
  position: static;
  left: auto;
  right: auto;
  top: auto;
  margin-top: 0;
  display: flex;
}
.header-search-no-radius .header-search-wrapper,
.header-search-no-radius .form-control,
.header-search-no-radius .btn {
  border-radius: 0;
}
.header-search-no-round .header-search-wrapper {
  border-radius: 0.3rem;
}
.header-search-no-round .form-control {
  border-radius: 0.3rem 0 0 0.3rem;
}
.header-search-no-round .btn {
  border-radius: 0 0.3rem 0.3rem 0;
}
.mobile-menu-toggler {
  border: none;
  background: transparent;
  color: #666;
  padding: 0.2rem 0.25rem;
  font-size: 2.8rem;
  line-height: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  margin-left: 1rem;
  margin-right: 1rem;
}
.header-bottom .mobile-menu-toggler {
  margin-top: 0.55rem;
  margin-bottom: 0.55rem;
  margin-left: -0.4rem;
}
.menu .megamenu.demo {
  height: 65vh;
  overflow-x: hidden;
  overflow-y: scroll;
}
.menu .megamenu.demo::-webkit-scrollbar {
  height: 10px;
  width: 7px;
}
.menu .megamenu.demo::-webkit-scrollbar-thumb {
  background: #ebebeb;
  border-radius: 10px;
}
.menu .megamenu.demo::-webkit-scrollbar-track {
  background: #fff;
  border-radius: 10px;
  margin: 8px;
  width: 100%;
}
.menu .megamenu.demo .demo-item.hidden {
  opacity: 0;
  max-height: 0;
  padding-bottom: 0;
  overflow: hidden;
  transform: translateY(50px);
  transition: all 0.5s;
}
.menu .megamenu.demo .demo-item.show {
  opacity: 1;
  max-height: 100%;
  padding-bottom: 3rem;
  transform: translateY(0);
}
.disabled-hidden {
  opacity: 0;
  width: 0;
  height: 0;
  padding: 0 !important;
  overflow: hidden;
}
.header-intro-clearance .header-middle .header-left,
.header-intro-clearance .header-bottom .header-left {
  flex: 0 0 calc((100% + 20px) / 4);
  max-width: calc((100% + 20px) / 4);
  margin: 0;
}
.header-intro-clearance .header-middle .header-center,
.header-intro-clearance .header-bottom .header-center {
  flex: 0 0 calc((100% + 20px) / 2 - 20px);
  max-width: calc((100% + 20px) / 2 - 20px);
  margin: 0;
}
.header-intro-clearance .header-middle .header-right,
.header-intro-clearance .header-bottom .header-right {
  margin-left: auto;
}
.header-intro-clearance .header-bottom .menu > li > a {
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  text-transform: none;
}
.header-intro-clearance .header-bottom .menu > li > a::before {
  top: 0;
}
.header-intro-clearance
  .header-bottom
  .menu.sf-arrows
  > li
  > .sf-with-ul::after {
  right: 1.3rem;
}
.header-intro-clearance .header-bottom .menu > li + li {
  margin-left: 0.7rem;
}
.header-intro-clearance .header-bottom .header-left {
  align-self: stretch;
}
.header-intro-clearance .header-bottom .header-right p {
  padding-right: 0.5rem;
  font-size: 1.4rem;
  font-weight: 500;
  letter-spacing: -0.01em;
}
.header-intro-clearance .header-bottom .header-right .highlight {
  color: #333;
}
.header-intro-clearance .header-bottom .header-right i {
  color: #333;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-right: 1.5rem;
}
.header-intro-clearance .header-bottom .container::before {
  position: absolute;
  content: "";
  left: 28.5rem;
  height: 1.5rem;
  width: 0.1rem;
  top: 50%;
  background-color: #ccc;
  transform: translateY(-50%);
}
.header-intro-clearance .header-bottom .container::after {
  position: absolute;
  content: "";
  right: 28rem;
  height: 1.5rem;
  width: 0.1rem;
  top: 50%;
  background-color: #ccc;
  transform: translateY(-50%);
}
.header-intro-clearance .header-middle .header-right p {
  font-size: 1.1rem;
}
.header-intro-clearance .top-menu {
  text-transform: none;
}
.header-intro-clearance .header-dropdown > a,
.header-intro-clearance .header-dropdown > span {
  padding-right: 1.8rem;
  text-transform: none;
}
.header-intro-clearance .header-dropdown > a:after,
.header-intro-clearance .header-dropdown > span:after {
  font-size: 1rem;
  margin-top: -0.6rem;
}
.header-intro-clearance .dropdown.category-dropdown {
  width: 275px;
  max-width: 95%;
}
.header-intro-clearance .dropdown.category-dropdown .dropdown-toggle {
  color: #333;
  text-transform: none;
  padding-left: 5.5rem;
  min-width: 100%;
}
.header-intro-clearance .dropdown.category-dropdown .dropdown-toggle i {
  font-size: 1rem;
  position: absolute;
  right: 1.5rem;
}
.header-intro-clearance .dropdown.category-dropdown .dropdown-toggle::before {
  height: 0;
}
.header-intro-clearance .dropdown.category-dropdown .dropdown-toggle::after {
  font-weight: 400;
  position: absolute;
  margin-left: 0;
  left: 1.5rem;
}
.header-intro-clearance .header-menu ul {
  display: block;
}
.header-intro-clearance .top-menu:not(.top-link-menu) .header-menu li + li {
  margin-left: 0;
}
.header-intro-clearance .account,
.header-intro-clearance .wishlist,
.header-intro-clearance .compare-dropdown,
.header-intro-clearance .cart-dropdown {
  display: flex;
  align-self: stretch;
  align-items: initial;
}
.header-intro-clearance .account > a,
.header-intro-clearance .wishlist > a,
.header-intro-clearance .compare-dropdown > a,
.header-intro-clearance .cart-dropdown > a {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.header-intro-clearance div.icon {
  position: relative;
  height: 3.2rem;
}
.header-intro-clearance .account a {
  font-size: 3rem;
  color: #333;
  line-height: 1;
}
.header-intro-clearance .wishlist a {
  font-size: 2.8rem;
  color: #333;
  line-height: 1;
}
.header-intro-clearance .cart-dropdown .cart-count,
.header-intro-clearance .wishlist .wishlist-count {
  min-width: 1.6rem;
  height: 1.6rem;
}
.header-intro-clearance .wishlist .wishlist-count {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1;
  color: #fff;
}
.header-intro-clearance .wishlist .wishlist-count {
  position: absolute;
  top: 0;
  right: -0.5rem;
}
.header-intro-clearance .cart-dropdown .cart-count {
  position: absolute;
  top: 0;
  right: -0.3rem;
}
.header-intro-clearance .cart-dropdown,
.header-intro-clearance .wishlist,
.header-intro-clearance .account {
  padding-left: 3rem;
}
.header-intro-clearance .cart-dropdown .dropdown-toggle,
.header-intro-clearance .wishlist .dropdown-toggle,
.header-intro-clearance .account .dropdown-toggle {
  color: #333;
}
@media screen and (min-width: 992px) {
  .mobile-menu-toggler {
    display: none;
  }
}
@media screen and (min-width: 1600px) {
  .header .container-fluid .megamenu-container {
    position: relative;
  }
  .header .container-fluid .megamenu-container .megamenu {
    right: auto;
    width: 1170px;
  }
}
@media screen and (max-width: 1199px) {
  .header-search .search-wrapper-wide {
    width: 480px;
  }
  .header-search-extended {
    margin-right: 10rem;
  }
  .header-search-extended .btn {
    flex: 0 0 50px;
    max-width: 50px;
  }
}
@media screen and (max-width: 991px) {
  .top-menu:not(.top-link-menu) {
    display: flex;
    align-items: center;
    align-self: stretch;
  }
  .top-menu:not(.top-link-menu) > li {
    display: flex;
    align-items: center;
    align-self: stretch;
    padding-right: 2.2rem;
  }
  .top-menu:not(.top-link-menu) > li > a {
    display: block;
    padding-left: 0;
    padding-right: 0;
  }
  .top-menu:not(.top-link-menu) > li::after {
    font-family: "molla";
    content: "\f110";
    position: absolute;
    right: 0;
    top: 50%;
    display: inline-block;
    font-size: 1.2rem;
    line-height: 1;
    margin-top: -0.7rem;
  }
  .top-menu:not(.top-link-menu) ul {
    display: block;
    position: absolute;
    right: 0;
    top: 100%;
    z-index: 20;
    padding-top: 0.6rem;
    padding-bottom: 0.6rem;
    min-width: 180px;
    visibility: hidden;
    opacity: 0;
    margin-top: 1px;
    background-color: #fff;
    box-shadow: 2px 5px 8px rgba(51, 51, 51, 0.05),
      -2px 5px 8px rgba(51, 51, 51, 0.05);
    text-transform: capitalize;
  }
  .top-menu:not(.top-link-menu) ul:before {
    content: "";
    display: block;
    width: 100%;
    height: 0.1rem;
    position: absolute;
    top: -1px;
    left: 0;
  }
  .top-menu:not(.top-link-menu):hover ul,
  .top-menu:not(.top-link-menu):focus ul {
    visibility: visible;
    opacity: 1;
  }
  .top-menu:not(.top-link-menu) li + li {
    margin-left: 0 !important;
  }
  .top-menu:not(.top-link-menu) a {
    padding: 0.3rem 1.5rem;
  }
  .header-left .top-menu ul {
    right: auto;
    left: 0;
  }
  .header-search {
    display: none;
  }
  .header-search-extended {
    margin-right: 0;
  }
  .header-search-extended .btn {
    height: 40px;
  }
  .header-search-extended .form-control {
    height: 38px;
    padding-top: 0.9rem;
    padding-bottom: 0.9rem;
  }
  .header-search-extended select {
    height: 38px;
    line-height: 38px;
  }
  .header-search-visible .search-toggle {
    display: block;
  }
  .header-search-visible .header-search-wrapper {
    position: absolute;
    right: -10rem;
    top: 100%;
    margin-top: 0.8rem;
    display: none;
    border-width: 0.4rem;
  }
  .header-search-visible .header-search-wrapper:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    right: 10rem;
    bottom: 100%;
    border-style: solid;
    border-width: 0 11px 13px 11px;
    border-color: transparent transparent #ebebeb transparent;
  }
  .header-bottom {
    display: none;
  }
}
@media screen and (max-width: 767px) {
  .header-search .search-wrapper-wide {
    width: 420px;
  }
  .header-search .select-custom {
    flex: 0 0 180px;
    max-width: 180px;
  }
}
@media screen and (max-width: 575px) {
  .header-search .search-wrapper-wide {
    width: 300px;
  }
  .header-search .select-custom {
    display: none;
  }
  .compare-dropdown,
  .wishlist-link {
    display: none;
  }
  .cart-dropdown {
    padding-left: 1.4rem;
  }
}
@media (max-width: 340px) {
  .header-search .search-wrapper-wide {
    width: 260px;
  }
  .compare-dropdown,
  .wishlist,
  .account,
  .wishlist-link {
    display: none !important;
  }
}
.main-nav {
  margin-left: 2rem;
  display: none;
}
.menu,
.menu ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.menu {
  display: flex;
  align-items: center;
}
.menu li {
  position: relative;
}
.menu li:hover > ul,
.menu li:hover > .megamenu,
.menu li.show > ul,
.menu li.show > .megamenu {
  display: block;
}
.menu .megamenu-container {
  position: static;
}
.menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 1002;
}
.menu ul ul {
  top: -1.6rem;
  left: 100%;
}
.menu .megamenu {
  display: none;
  position: absolute;
  left: 1.5rem;
  right: 1.5rem;
  top: 100%;
  z-index: 1002;
}
.menu .megamenu.megamenu-sm {
  left: 0;
  right: auto;
  width: 456px;
}
.menu .megamenu.megamenu-md {
  left: -10rem;
  right: auto;
  width: 694px;
}
.menu .megamenu > ul,
.menu .megamenu div > ul {
  display: block;
  position: static;
  left: auto;
  right: auto;
  top: auto;
  bottom: auto;
  box-shadow: none;
  margin-top: 0;
  padding: 0;
  min-width: 0;
}
.menu ul,
.menu .megamenu {
  margin-top: 1px;
}
.menu ul:before,
.menu .megamenu:before {
  content: "";
  display: block;
  position: absolute;
  bottom: 100%;
  height: 1px;
  left: 0;
  right: 0;
}
.menu ul ul,
.menu .megamenu ul {
  margin-top: 0;
}
.menu a:not(.btn) {
  display: block;
  position: relative;
  text-decoration: none;
}
.menu a:not(.btn):focus {
  outline: none !important;
}
.menu {
  line-height: 1.5;
}
.menu li > a {
  color: #999999;
  font-weight: 300;
  font-size: 1.3rem;
  letter-spacing: 0;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 3rem;
  padding-right: 3rem;
}
.menu li > a span:not(.tip) {
  position: relative;
}
.menu > li > a {
  color: #333;
  font-weight: 500;
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  padding: 3.95rem 3rem;
  text-transform: uppercase;
}
.menu > li + li {
  margin-left: 0;
}
.menu.sf-arrows > li > .sf-with-ul {
  padding-right: 2rem;
}
.menu.sf-arrows .sf-with-ul {
  position: relative;
}
.menu.sf-arrows .sf-with-ul::after {
  font-family: "molla";
  content: "\f110";
  position: absolute;
  right: 0;
  top: 50%;
  display: block;
  font-size: 1rem;
  line-height: 1;
  margin-top: -0.5rem;
}
.menu.sf-arrows ul .sf-with-ul {
  padding-right: 4rem;
}
.menu.sf-arrows ul .sf-with-ul:after {
  content: "\f112";
  right: 3rem;
}
.menu .megamenu,
.menu ul {
  background-color: #fff;
  box-shadow: 5px 10px 16px rgba(51, 51, 51, 0.05),
    -5px 10px 16px rgba(51, 51, 51, 0.05);
}
.menu ul {
  min-width: 218px;
  padding: 1.6rem 0 2rem;
}
.menu .megamenu .banner > a {
  display: block;
  padding: 0;
  margin: 0;
}
.menu .megamenu li a {
  padding-right: 0;
  padding-left: 0;
}
.menu .megamenu .btn {
  min-width: 210px;
  text-transform: uppercase;
}
.menu .banner {
  margin: 0;
  max-width: 218px;
  float: right;
  height: 100%;
}
.menu .menu-col {
  padding-left: 3rem;
  padding-right: 3rem;
  margin-top: 2.2rem;
  padding-bottom: 2rem;
}
.menu .menu-title {
  color: #333;
  font-weight: 400;
  font-size: 1.4rem;
  text-transform: uppercase;
  margin-bottom: 0.6rem;
}
.menu .megamenu-action {
  padding-bottom: 2rem;
}
.menu ul + .menu-title {
  margin-top: 1.5rem;
}
.menu .banner-content {
  padding-top: 0;
}
.menu .banner-content.banner-content-bottom {
  left: 2.4rem;
  bottom: 2.4rem;
}
.menu .banner-content.banner-content-top {
  left: 2rem;
  top: 2.4rem;
  transform: translateY(0);
  -ms-transform: translateY(0);
}
.menu .banner-title {
  margin: 0;
  font-weight: 400;
  font-size: 1.8rem;
  line-height: 1.25;
  text-transform: uppercase;
  letter-spacing: 0;
}
.menu .banner-title span {
  font-size: 2.4rem;
}
.menu .banner-content-top .banner-title span {
  line-height: 1.05;
  font-size: 3.1rem;
}
.menu li:hover > a,
.menu li.show > a,
.menu li.active > a {
  color: #3aafa9;
}
.demo-list {
  display: flex;
  align-items: center;
  flex-flow: wrap;
  margin: 1.8rem -10px 0.4rem;
}
.demo-item {
  color: #999999;
  flex: 0 0 20%;
  max-width: 20%;
  padding: 0 10px;
  text-align: center;
  padding-bottom: 3rem;
  margin-bottom: auto;
}
.demo-item a {
  color: inherit;
}
.demo-item a:hover,
.demo-item a:focus {
  color: #3aafa9;
}
.demo-item a:hover .demo-bg,
.demo-item a:focus .demo-bg {
  box-shadow: 3px 10px 16px rgba(51, 51, 51, 0.05),
    -3px 10px 16px rgba(51, 51, 51, 0.05);
  background-position: center bottom;
  transition: background-position 2s linear, box-shadow 0.3s;
}
.demo-bg {
  background-repeat: no-repeat;
  background-size: cover;
  display: block;
  background-color: #f4f4f4;
  border: 0.1rem solid #ebebeb;
  margin-bottom: 1.2rem;
  padding-top: 80.95%;
  background-position: center top;
  transition: background-position 0.6s linear, box-shadow 0.3s;
}
.demo-title {
  font-weight: 300;
  font-size: 1.3rem;
  letter-spacing: 0.01em;
}
.tip {
  color: #fff;
  display: block;
  position: absolute;
  left: 100%;
  bottom: 1.1rem;
  text-align: center;
  font-weight: 400;
  font-size: 0.8rem;
  line-height: 1;
  letter-spacing: 0;
  padding: 0.3rem 0.1rem 0.1rem;
  min-width: 23px;
  z-index: 1;
  border-radius: 0;
  margin-left: 0.5rem;
  text-transform: uppercase;
  background-color: #3aafa9;
}
.tip.tip-new {
  background-color: #2b7a78;
}
.tip.tip-hot {
  background-color: #ef837b;
}
.header-bottom .main-nav {
  margin-left: 0;
}
.header-bottom .menu .megamenu.megamenu-md {
  left: 0;
}
.header-bottom .menu > li + li {
  margin-left: 1rem;
}
.header-bottom .menu > li > a {
  padding: 1.65rem 1rem;
}
.header-bottom .menu > li > .sf-with-ul {
  padding-right: 3rem;
}
.header-bottom .menu > li > a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 0.1rem;
  background-color: #3aafa9;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s ease;
}
.header-bottom .menu li:hover > a:before,
.header-bottom .menu li.show > a:before,
.header-bottom .menu li.active > a:before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.header-bottom .menu.sf-arrows > li > .sf-with-ul::after {
  right: 1rem;
}
@media screen and (min-width: 992px) {
  .main-nav {
    display: block;
  }
}
.side-nav {
  position: relative;
  margin: 0;
}
.sidenav-title {
  font-weight: 600;
  font-size: 1.6rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  padding: 1.45rem 3rem;
  color: #fff;
  background-color: #333;
  text-transform: uppercase;
}
.category-dropdown {
  display: flex;
  align-self: stretch;
  align-items: center;
}
.category-dropdown .dropdown-toggle {
  position: relative;
  display: flex;
  align-items: center;
  align-self: stretch;
  color: #333333;
  font-weight: 500;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  text-transform: uppercase;
  padding: 1rem 1.9rem 1rem 2rem;
  min-width: 270px;
  transition: background 0.4s, color 0.1s;
}
.category-dropdown .dropdown-toggle:after {
  content: "\f131";
  font-family: "molla";
  border: none;
  font-size: 2.3rem;
  line-height: 1;
  margin-left: 6.7rem;
}
.category-dropdown .dropdown-toggle:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 1px;
  background-color: #3aafa9;
  transition: all 0.35s;
}
.category-dropdown .dropdown-toggle:hover,
.category-dropdown .dropdown-toggle:focus {
  color: #fff;
  background-color: #3aafa9;
  outline: none !important;
}
.category-dropdown:not(.is-on):hover .dropdown-menu {
  display: block;
}
.category-dropdown:not(.is-on):hover .dropdown-toggle {
  color: #fff !important;
  background-color: #3aafa9;
}
.category-dropdown:not(.is-on):hover .dropdown-toggle:after {
  content: "\f191";
}
.category-dropdown.show .dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
}
.category-dropdown.show .dropdown-toggle:after {
  content: "\f191";
}
.category-dropdown .dropdown-menu {
  left: 0;
  width: 100%;
  margin: 0;
  border-radius: 0;
  border: none;
  padding: 0;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}
.category-dropdown .dropdown-item {
  color: #666;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  border: 0.1rem solid #ebebeb;
  border-top: none;
  padding: 0.9rem 1.9rem;
  width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.category-dropdown .dropdown-item.dropdown-item-lead {
  color: #333;
  font-weight: 500;
  background-color: #f9f9f9;
}
.category-dropdown .dropdown-item:hover,
.category-dropdown .dropdown-item:focus {
  color: #3aafa9;
  background-color: #fff;
  outline: none !important;
}
.category-dropdown .dropdown-item:hover.dropdown-item-lead,
.category-dropdown .dropdown-item:focus.dropdown-item-lead {
  background-color: #f9f9f9;
}
.menu-vertical,
.menu-vertical ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.menu-vertical {
  display: flex;
  align-items: center;
  position: static;
  line-height: 1.5;
  flex-direction: column;
}
.menu-vertical li {
  position: relative;
}
.menu-vertical li:hover > ul,
.menu-vertical li:hover > .megamenu,
.menu-vertical li.show > ul,
.menu-vertical li.show > .megamenu {
  display: block;
}
.menu-vertical a:not(.btn) {
  display: block;
  position: relative;
  text-decoration: none;
}
.menu-vertical a:not(.btn):focus {
  outline: none !important;
}
.menu-vertical .megamenu-container {
  position: static;
}
.menu-vertical ul {
  min-width: 218px;
  padding: 1.6rem 0 2rem;
}
.menu-vertical ul,
.menu-vertical .megamenu {
  display: none;
  position: absolute;
  top: 0;
  left: 100%;
  z-index: 1002;
  margin-top: 0;
  background-color: #fff;
  box-shadow: 5px 10px 16px rgba(51, 51, 51, 0.05),
    -5px 10px 16px rgba(51, 51, 51, 0.05);
}
.menu-vertical ul:before,
.menu-vertical .megamenu:before {
  display: none;
}
.menu-vertical .megamenu {
  width: 713px;
}
.menu-vertical .megamenu.megamenu-sm {
  width: 456px;
}
.menu-vertical .megamenu.megamenu-md {
  width: 694px;
}
@media screen and (min-width: 1200px) {
  .menu-vertical .megamenu:not(.megamenu-sm):not(.megamenu-md) {
    width: 893px;
    min-height: 100%;
  }
}
.menu-vertical .megamenu > ul,
.menu-vertical .megamenu div > ul {
  display: block;
  position: static;
  left: auto;
  right: auto;
  top: auto;
  bottom: auto;
  box-shadow: none;
  margin-top: 0;
  padding: 0;
  min-width: 0;
}
.menu-vertical .banner {
  margin: 0;
  max-width: 280px;
  float: right;
  border-radius: 0;
}
.menu-vertical .banner img {
  border-radius: 0;
}
.menu-vertical .menu-banners {
  margin-top: 2.4rem;
}
.menu-vertical .menu-banners .banner {
  float: none;
  max-width: 100%;
}
.menu-vertical.sf-arrows > li > .sf-with-ul {
  padding-right: 3rem;
}
.menu-vertical.sf-arrows .sf-with-ul {
  position: relative;
}
.menu-vertical.sf-arrows .sf-with-ul::after {
  display: block;
  font-family: "molla";
  content: "\f112";
  position: absolute;
  right: 1.8rem;
  top: 50%;
  line-height: 1;
  font-size: 1.2rem;
  margin-top: -0.6rem;
}
.menu-vertical li > a {
  color: #666;
  font-weight: 300;
  font-size: 1.3rem;
  letter-spacing: 0;
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
  padding-left: 3rem;
  padding-right: 3rem;
}
.menu-vertical li > a span:not(.tip) {
  position: relative;
}
.menu-vertical li > a strong {
  font-weight: 600;
}
.menu-vertical > li {
  width: 100%;
}
.menu-vertical > li > a {
  display: block;
  color: #666;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  border: 0.1rem solid #ebebeb;
  border-top: none;
  padding: 0.9rem 1.9rem;
  width: 100%;
}
.menu-vertical > li.item-lead > a {
  color: #333;
  font-weight: 500;
  background-color: #f9f9f9;
}
.menu-vertical > li + li {
  margin-left: 0;
}
.menu-vertical .menu-title {
  color: #333;
  font-weight: 600;
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  text-transform: capitalize;
  padding-bottom: 1rem;
  border-bottom: 0.1rem solid #eeeeee;
  margin-bottom: 0.7rem;
}
.menu-vertical ul + .menu-title {
  margin-top: 1.2rem;
}
.menu-vertical i {
  display: inline-block;
  color: #ccc;
  min-width: 3.4rem;
}
.menu-vertical .menu-col {
  padding-left: 2rem;
  padding-right: 2rem;
  margin-top: 1.5rem;
  padding-bottom: 1.5rem;
}
.menu-vertical .menu-col li > a {
  padding-left: 0;
  padding-right: 0;
}
.menu-vertical li:hover > a,
.menu-vertical li.show > a,
.menu-vertical li.active > a {
  color: #3aafa9;
}
.menu-vertical > li:hover > a,
.menu-vertical > li.show > a,
.menu-vertical > li.active > a {
  color: #3aafa9;
}
.menu-brands.menu-col {
  padding-top: 2rem;
  margin-top: 0 !important;
  border-top: 0.1rem solid #ebebeb;
}
.menu-brands .brand {
  display: flex !important;
}
.menu-brands .col,
.menu-brands [class*="col-"] {
  display: flex;
  align-items: center;
  justify-content: center;
}
@keyframes fixedHeader {
  0% {
    opacity: 0;
    transform: translateY(-60px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@media screen and (min-width: 992px) {
  .sticky-header.fixed {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    z-index: 1040;
    animation-name: fixedHeader;
    animation-duration: 0.4s;
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(51, 51, 51, 0.05);
  }
  .sticky-header.fixed .logo {
    margin-top: 0;
    margin-bottom: 0;
  }
  .sticky-header.fixed.header-middle .menu > li > a {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
}
.mobile-menu-container {
  position: fixed;
  left: -280px;
  top: 0;
  bottom: 0;
  z-index: 1001;
  background-color: #333;
  width: 100%;
  max-width: 280px;
  overflow-y: scroll;
  box-shadow: 0.1rem 0 0.6rem 0 rgba(51, 51, 51, 0.5);
  will-change: transform;
  visibility: hidden;
  font-size: 1.2rem;
  line-height: 1.5;
  transition: all 0.4s ease;
}
.mmenu-active .mobile-menu-container {
  visibility: visible;
  transform: translateX(280px);
}
.mobile-menu-container .social-icons {
  justify-content: center;
  margin-bottom: 0;
}
.mobile-menu-container .social-icon {
  width: 3rem;
  height: 3rem;
  font-size: 1.2rem;
  background-color: transparent;
  margin-bottom: 0;
  color: rgba(255, 255, 255, 0.45);
  border-color: rgba(255, 255, 255, 0.45);
}
.mobile-menu-container .social-icon + .social-icon {
  margin-left: 0.8rem;
}
.mobile-menu-container .social-icon:hover,
.mobile-menu-container .social-icon:focus {
  background-color: transparent;
}
.mobile-menu-wrapper {
  position: relative;
  padding: 4.2rem 0;
}
.mobile-menu-close {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  position: absolute;
  top: 0.7rem;
  right: 1rem;
  padding: 0;
  z-index: 9;
  cursor: pointer;
  font-size: 1.6rem;
  line-height: 1;
  color: #fff;
  transition: color 0.35s;
}
.mobile-menu-close:hover,
.mobile-menu-close:focus {
  color: #3aafa9;
}
.mobile-menu-overlay {
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  background-color: rgba(25, 25, 25, 0.25);
  z-index: 1000;
  transition: all 0.4s;
  visibility: hidden;
  opacity: 0;
}
.mmenu-active .mobile-menu-overlay {
  visibility: visible;
  opacity: 1;
}
.mobile-nav {
  padding: 0;
  margin: 0 0 2.5rem;
}
.mobile-menu {
  margin: 0;
  padding: 0;
  list-style: none;
}
.mobile-menu > li > a {
  text-transform: uppercase;
}
.mobile-menu li {
  display: block;
  position: relative;
}
.mobile-menu li a {
  position: relative;
  display: block;
  padding: 1rem 4.5rem 1rem 2rem;
  color: #fff;
  border-bottom: 0.1rem solid rgba(255, 255, 255, 0.08);
}
.mobile-menu li a:hover,
.mobile-menu li a:focus {
  color: #3aafa9;
  text-decoration: none;
  outline: none !important;
}
.mobile-menu li.open > a,
.mobile-menu li.active > a {
  color: #3aafa9;
}
.mobile-menu li ul {
  margin: 0;
  padding: 0.7rem 0 0.9rem;
  display: none;
  margin-bottom: 0;
  border-bottom: 0.1rem solid rgba(255, 255, 255, 0.08);
}
.mobile-menu li ul li a {
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
  padding-left: 3.5rem;
  border-bottom: none;
}
.mobile-menu li ul li a:not(:hover):not(:focus) {
  color: rgba(255, 255, 255, 0.8);
}
.mobile-menu li ul li:last-child ul {
  border-bottom: none;
  padding-bottom: 0;
}
.mobile-menu li ul ul {
  border-top: 0.1rem solid rgba(255, 255, 255, 0.08);
}
.mobile-menu li ul ul li a {
  padding-left: 5rem;
}
.mobile-menu > li > a {
  text-transform: uppercase;
}
.mobile-menu span:not(.mmenu-btn):not(.tip) {
  position: relative;
}
.mmenu-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 1rem;
  top: 50%;
  z-index: 10;
  width: 3rem;
  height: 3rem;
  font-size: 1.2rem;
  color: #fff;
  margin-top: -1.5rem;
  border-radius: 0;
  background-color: transparent;
  cursor: pointer;
  outline: none;
  transition: color 0.35s;
}
.mmenu-btn::after {
  font-family: "molla";
  content: "\f110";
  display: inline-block;
}
.mmenu-btn:hover,
.mmenu-btn:focus {
  color: #3aafa9;
}
.open > a > .mmenu-btn::after {
  content: "\e802";
}
.mobile-search {
  margin: 1rem 0 1.5rem;
  padding: 0 2rem;
  display: flex;
  align-items: center;
}
.mobile-search .form-control {
  height: 36px;
  margin-bottom: 0;
  -webkit-appearance: none;
  font-size: 1.2rem;
  line-height: 1.5;
  padding: 0.8rem 1.5rem;
  max-width: calc(100% - 36px);
  background-color: #333;
  border-color: rgba(255, 255, 255, 0.1);
  border-right-width: 0;
}
.mobile-search .form-control::placeholder {
  color: rgba(255, 255, 255, 0.45);
}
.mobile-search .form-control:focus {
  color: #fff;
  border-color: #3aafa9;
  background-color: #333;
}
.mobile-search .btn {
  font-size: 1.2rem;
  min-width: 3.6rem;
  padding: 0.8rem 0.2rem;
}
.mobile-menu-container .tab-content {
  padding: 0;
  margin: 0 0 2.5rem;
  border: none;
}
.mobile-menu-container .tab-content .mobile-nav,
.mobile-menu-container .tab-content .mobile-cats-nav {
  margin-bottom: 0;
}
.mobile-menu-container .tab-pane {
  padding: 0;
}
.nav.nav-pills-mobile {
  display: flex;
  align-items: center;
  border-bottom: 0.1rem solid rgba(255, 255, 255, 0.1);
  margin: 0 0 0.2rem;
}
.nav.nav-pills-mobile .nav-item {
  flex-grow: 1;
  flex-basis: 0;
  margin: 0 0 -0.1rem;
}
.nav.nav-pills-mobile .nav-link {
  color: #fff;
  font-weight: 600;
  font-size: 1.3rem;
  line-height: 1.5;
  text-transform: uppercase;
  border-bottom: 0.2rem solid transparent;
  background: none;
  padding: 0.8rem 2rem;
  transition: all 0.35s ease;
}
.nav.nav-pills-mobile .nav-link.active,
.nav.nav-pills-mobile .nav-link:hover,
.nav.nav-pills-mobile .nav-link:focus {
  color: #3aafa9;
  border-bottom-color: #3aafa9;
}
.mobile-cats-nav .mobile-menu > li > a {
  text-transform: capitalize;
}
.mobile-cats-menu li a {
  position: relative;
  display: block;
  padding: 1rem 4.5rem 1rem 2rem;
  color: rgba(255, 255, 255, 0.8);
  border-bottom: 0.1rem solid rgba(255, 255, 255, 0.08);
}
.mobile-cats-menu li a.mobile-cats-lead {
  font-weight: 500;
  color: #fff;
}
.mobile-cats-menu li a:hover,
.mobile-cats-menu li a:focus {
  color: #3aafa9;
  text-decoration: none;
  outline: none !important;
}
.mobile-menu-light {
  background-color: #fff;
}
.mobile-menu-light .mobile-menu-close:not(:hover):not(:focus) {
  color: #666;
}
.mobile-menu-light .social-icon {
  color: #999;
  border-color: #999;
}
.mobile-menu-light .mobile-menu li a {
  border-bottom-color: #efefef;
}
.mobile-menu-light .mobile-menu li a:not(:hover):not(:focus) {
  color: #666;
}
.mobile-menu-light .mobile-menu li.open > a,
.mobile-menu-light .mobile-menu li.active > a {
  color: #3aafa9;
}
.mobile-menu-light .mobile-menu li ul {
  border-bottom-color: #efefef;
}
.mobile-menu-light .mobile-menu li ul li a:not(:hover):not(:focus) {
  color: #666;
}
.mobile-menu-light .mobile-menu li ul ul {
  border-top-color: #efefef;
}
.mobile-menu-light .mmenu-btn:not(:hover):not(:focus) {
  color: #666;
}
.mobile-menu-light .mobile-search .form-control {
  color: #666;
  background-color: #fff;
  border-color: #e5e5e5;
}
.mobile-menu-light .mobile-search .form-control::placeholder {
  color: #666;
}
.mobile-menu-light .mobile-search .form-control:focus {
  color: #666;
  border-color: #3aafa9;
  background-color: #fff;
}
.mobile-menu-light .nav.nav-pills-mobile {
  border-bottom-color: #efefef;
}
.mobile-menu-light
  .nav.nav-pills-mobile
  .nav-link:not(:hover):not(:focus):not(.active) {
  color: #333;
}
.mobile-menu-light .mobile-cats-menu li a {
  border-bottom-color: #efefef;
}
.mobile-menu-light .mobile-cats-menu li a:not(:hover):not(:focus) {
  color: #666;
}
.mobile-menu-light
  .mobile-cats-menu
  li
  a:not(:hover):not(:focus).mobile-cats-lead {
  color: #333;
}
a {
  font-family: "Poppins";
}
p {
  margin-bottom: 0;
  font-size: 1.4rem;
  font-weight: 300;
  font-family: "Poppins";
  letter-spacing: 0;
}
.header-2 {
  background-color: #fff;
}
.header-2 .logo {
  margin-top: 2.9rem;
  margin-bottom: 2.9rem;
}
.header-2 .header-search-extended {
  margin-right: 0;
  max-width: none;
}
.header-2 .header-search-extended select,
.header-2 .header-search-extended .form-control {
  height: 38px;
}
.header-2 .header-search-extended .form-control {
  padding: 1.2rem 2.4rem 1rem 2rem;
  font-family: "Poppins";
  letter-spacing: -0.01em;
}
.header-2 .header-search-extended .btn {
  height: 42px;
  background-color: transparent;
  color: #666;
  max-width: 60px;
}
.header-2 .header-search-extended .btn:hover,
.header-2 .header-search-extended .btn:focus,
.header-2 .header-search-extended .btn:active {
  color: #2b7a78;
  background-color: transparent;
}
.header-2 .btn-primary:not(:disabled):not(.disabled):active,
.header-2 .btn-primary:not(:disabled):not(.disabled).active,
.header-2 .show > .btn-primary.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
}
.header-2 .header-search .search-wrapper-wide {
  width: unset;
}
.header-2 .header-top {
  font-weight: 300;
  font-size: 1.4rem;
  background-color: #f8f8f8;
}
.header-2 .header-top .header-left {
  display: flex;
  align-items: center;
}
.header-2 .header-top .container::after,
.header-2 .header-top .container-fluid::after {
  height: 0;
}
.header-2 .header-dropdown {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.header-2 .header-dropdown + .header-dropdown {
  margin-left: 4rem;
}
.header-2 .login-modal {
  margin-left: 4rem;
}
.header-2 .top-menu {
  text-transform: capitalize;
}
.header-2 .top-menu li + li {
  margin-left: 4rem;
}
.header-2 .header-middle {
  border-bottom: none;
}
.header-2 .header-middle .container::after {
  position: absolute;
  content: "";
  bottom: -0.1rem;
  left: 1rem;
  right: 1rem;
  height: 0.1rem;
  background-color: #ebebeb;
}
.header-2 .cart-dropdown .dropdown-menu,
.header-2 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-2 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-2 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-2 .mobile-menu-toggler,
.header-2 .search-toggle:not(:hover):not(:focus),
.header-2 .wishlist-link:not(:hover):not(:focus) {
  color: #333;
}
.header-2 .sticky-header {
  background-color: #fff;
}
.header-2 .mobile-menu-toggler {
  margin-left: 0;
}
.header-2 .header-search .header-search-wrapper {
  border-color: #dadada;
}
.header-2 .header-bottom {
  color: #fff;
}
.header-2 .header-bottom .main-nav {
  margin-left: 0;
}
.header-2 .header-bottom .menu ul,
.header-2 .header-bottom .menu .megamenu {
  margin-top: 0;
}
.header-2 .header-bottom .menu > li:not(:hover):not(.active):not(.show) > a {
  color: #333;
}
.header-2 .header-bottom .mobile-menu-toggler {
  color: #fff;
}
@media screen and (max-width: 991px) {
  .header-2 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #dadada;
  }
}
@media screen and (max-width: 991px) {
  .header-middle .header-center {
    display: none;
  }
  .top-menu:not(.top-link-menu) ul {
    min-width: 141px;
  }
  .top-menu > li {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }
  .top-menu .header-dropdown {
    padding: 0;
  }
  .top-menu .header-dropdown ul {
    left: -100%;
    right: 100%;
  }
  .top-menu .header-menu {
    padding: 0;
  }
}
.header-3 {
  color: #fff;
  background-color: #2b7a78;
}
.header-3 .header-top {
  background-color: #2b7a78;
  color: #fff;
}
.header-3 .header-top .container::after,
.header-3 .header-top .container-fluid::after {
  height: 0.1rem;
  background-color: #fff;
}
.header-3 .header-top .header-left i {
  font-size: 1.6rem;
  margin-right: 0.5rem;
}
.header-3 .header-dropdown {
  padding-top: 0.65rem;
  padding-bottom: 0.65rem;
}
.header-3 .header-middle {
  border-bottom: none;
}
.header-3 .header-bottom {
  background-color: #fff;
}
.header-3 .header-bottom .menu > li > a::before {
  bottom: 0;
  top: unset;
}
.header-3 .wishlist a {
  color: #fff;
}
.header-3 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-3 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-3 .mobile-menu-toggler,
.header-3 .search-toggle:not(:hover):not(:focus),
.header-3 .wishlist-link:not(:hover):not(:focus) {
  color: #fff;
}
.header-3 .wishlist .wishlist-count,
.header-3 .cart-count {
  color: #333;
}
.header-3 .header-bottom {
  border-bottom: 0.1rem solid #ebebeb;
}
.header-3 .header-bottom .header-right p {
  padding-right: 0;
}
.header-3 .logo {
  margin-bottom: 3.5rem;
  margin-top: 3rem;
}
.header-3 .header-search-extended .btn {
  max-width: 40px;
  margin-left: 1rem;
  height: 46px;
  font-size: 2.2rem;
  background-color: transparent;
  color: #333;
}
.header-3 .header-search-extended .form-control {
  border-top-right-radius: 3rem;
  border-bottom-right-radius: 3rem;
  padding-left: 0;
  height: 44px;
  padding: 1rem 2.4rem 1rem 0.5rem;
}
.header-3 .btn-primary:hover,
.header-3 .btn-primary:focus,
.header-3 .btn-primary.focus,
.header-3 .btn-primary:not(:disabled):not(.disabled):active,
.header-3 .btn-primary:not(:disabled):not(.disabled).active,
.header-3 .show > .btn-primary.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
}
@media screen and (max-width: 991px) {
  .header-3 .header-search-visible .header-search-wrapper {
    border-color: #dadada;
  }
  .header-3 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #dadada;
  }
}
@media screen and (max-width: 575px) {
  .header-3 .cart-dropdown,
  .header-3 .compare-dropdown,
  .header-3 .wishlist {
    padding-left: 1.4rem;
  }
}
@media screen and (max-width: 1119px) {
  .header-intro-clearance .header-bottom .container::before,
  .header-intro-clearance .header-bottom .container::after {
    visibility: hidden;
  }
}
@media screen and (max-width: 1100px) {
  .header-intro-clearance .header-bottom .header-right i {
    visibility: hidden;
  }
}
@media screen and (max-width: 399px) {
  .header-intro-clearance .account,
  .wishlist {
    display: none;
  }
}
.header-4 .header-top {
  font-weight: 400;
  font-size: 1.4rem;
  background-color: #f5f6f9;
  margin-bottom: 0;
  letter-spacing: -0.01em;
}
.header-4 .header-top .container:after {
  display: none;
}
.header-4 .header-top .header-left i {
  font-size: 1.6rem;
  margin-right: 0.5rem;
}
.header-4 .header-dropdown {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.header-4 .header-dropdown + .header-dropdown {
  margin-left: 2rem;
}
.header-4 .header-dropdown > a,
.header-4 .header-dropdown > span {
  font-weight: 300;
  text-transform: initial;
}
.header-4 .header-menu {
  margin-top: 0;
}
.header-4 .top-menu {
  text-transform: capitalize;
}
.header-4 .top-menu i {
  font-size: 1.6rem;
}
.header-4 .top-menu li + li {
  margin-left: 4rem;
}
.header-4 .header-middle {
  border-bottom: none;
  margin-bottom: 0.1rem;
}
.header-4 .header-search-extended {
  margin-top: 2.1rem;
  margin-bottom: 2.1rem;
}
.header-4 .compare-dropdown .dropdown-toggle {
  font-size: 3rem;
}
.header-4 .cart-dropdown .dropdown-toggle {
  font-size: 3.2rem;
}
.header-4 .cart-dropdown,
.header-4 .compare-dropdown {
  padding-left: 3rem;
}
.header-4 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-4 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle {
  color: #333;
}
.header-4 .wishlist-link:not(:hover):not(:focus),
.header-4 .search-toggle:not(:hover):not(:focus),
.header-4 .mobile-menu-toggler {
  color: #333;
}
.header-4.header-intro-clearance .header-search .header-search-wrapper {
  border-color: #ccc;
}
.header-4 .header-bottom {
  background-color: #fff;
}
.header-4 .header-bottom .container::before {
  height: 0;
}
.header-4 .menu ul,
.header-4 .menu .megamenu {
  margin-top: 0;
}
.header-4 .dropdown.category-dropdown {
  background-color: #f8f8f8;
}
.header-4 .dropdown.category-dropdown .dropdown-toggle:not(:hover):not(:focus) {
  color: #3aafa9;
}
.header-4 .header-search-extended .btn {
  max-width: 40px;
  margin-left: 1rem;
  height: 46px;
  font-size: 2.2rem;
}
.header-4 .header-search-extended .form-control {
  border-top-right-radius: 3rem;
  border-bottom-right-radius: 3rem;
  padding-left: 0;
  height: 44px;
  padding: 1rem 2.4rem 1rem 0.5rem;
}
.header-4 .btn-primary:hover,
.header-4 .btn-primary:focus,
.header-4 .btn-primary.focus,
.header-4 .btn-primary:not(:disabled):not(.disabled):active,
.header-4 .btn-primary:not(:disabled):not(.disabled).active,
.header-4 .show > .btn-primary.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
}
.header-4 .dropdown.category-dropdown .dropdown-toggle:not(:hover):not(:focus) {
  color: #333 !important;
}
@media screen and (min-width: 992px) {
  .header-4 .header-search-extended {
    margin-right: 7rem;
  }
}
@media screen and (min-width: 1200px) {
  .header-4 .header-search-extended {
    margin-right: 15rem;
  }
}
@media screen and (max-width: 991px) {
  .header-4 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #3aafa9;
  }
}
@media screen and (max-width: 575px) {
  .header-4 .cart-dropdown,
  .header-4 .compare-dropdown,
  .header-4 .wishlist {
    padding-left: 1.4rem;
  }
}
.header-5 {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  z-index: 1040;
  background-color: transparent;
  margin-top: 1rem;
}
.header-5 .header-middle {
  border-bottom: none;
  margin-bottom: 0.1rem;
}
.header-5 .cart-dropdown,
.header-5 .compare-dropdown {
  padding-left: 2.3rem;
}
.header-5 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-5 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle {
  color: #fff;
}
.header-5 .cart-dropdown .dropdown-menu,
.header-5 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-5 .header-search {
  margin-right: 0;
}
.header-5 .header-search .header-search-wrapper {
  background-color: transparent;
  border: none;
  border-radius: 0;
  border-bottom: 0.1rem solid #fff;
  min-width: 260px;
}
.header-5 .header-search-extended {
  margin-top: 0;
  margin-bottom: 0;
}
.header-5 .header-search-extended .form-control {
  background-color: transparent;
  color: #fff;
  border-radius: 0;
  padding-left: 1rem;
}
.header-5 .header-search-extended .form-control::placeholder {
  color: #fff;
}
.header-5 .header-search-extended .btn {
  max-width: 40px;
  flex: 0 0 40px;
}
.header-5 .wishlist-link {
  margin-left: 3rem;
}
.header-5 .wishlist-link:not(:hover):not(:focus),
.header-5 .search-toggle:not(:hover):not(:focus):not(.active),
.header-5 .mobile-menu-toggler,
.header-5 .wishlist-link:not(:hover):not(:focus),
.header-5 .menu > li:not(:hover):not(.active):not(.show) > a,
.header-5 .mobile-menu-toggler {
  color: #fff;
}
.header-5 .logo {
  margin-top: 0;
  margin-bottom: 0;
}
.header-5 .menu ul,
.header-5 .menu .megamenu {
  margin-top: 0;
}
.header-5 .menu > li > a {
  padding-top: 2rem;
  padding-bottom: 2rem;
  font-weight: 400;
  font-size: 1.5rem;
  letter-spacing: -0.01em;
}
.header-5 .menu > li > a::before {
  content: "";
  position: absolute;
  left: 2rem;
  right: -0.5rem;
  bottom: 0.5rem;
  height: 0.1rem;
  background-color: #fff;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s;
}
.header-5 .menu > li:hover > a,
.header-5 .menu > li:focus > a,
.header-5 .menu > li.active > a {
  color: #fff;
}
.header-5 .menu > li:hover > a::before,
.header-5 .menu > li:focus > a::before,
.header-5 .menu > li.active > a::before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.header-5 .sticky-header.fixed {
  background-color: #333;
}
@media screen and (min-width: 1200px) {
  .header-5 .container-fluid {
    padding-left: 3rem;
    padding-right: 3rem;
  }
}
@media screen and (min-width: 1600px) {
  .header-5 .container-fluid {
    padding-left: 6rem;
    padding-right: 6rem;
  }
  .header-5 .container-fluid .megamenu-container {
    position: relative;
  }
  .header-5 .container-fluid .megamenu-container .megamenu {
    right: auto;
    width: 1170px;
  }
}
@media screen and (max-width: 575px) {
  .header-5 .cart-dropdown,
  .header-5 .compare-dropdown {
    padding-left: 1.4rem;
  }
}
@media screen and (max-width: 1149px) {
  .header-5 .header-search-extended {
    display: none;
  }
}
.header-6 .header-dropdown {
  padding-top: 0.55rem;
  padding-bottom: 0.55rem;
}
.header-6 .header-dropdown + .header-dropdown {
  margin-left: 2rem;
}
.header-6 .header-right .top-menu + .header-dropdown {
  margin-left: 2rem;
}
.header-6 .header-dropdown > a,
.header-6 .header-dropdown > span {
  font-weight: 400;
  text-transform: initial;
  padding-right: 2.8rem;
}
.header-6 .header-menu {
  margin-top: 0;
  font-size: 1.5rem;
}
.header-6 .top-menu {
  text-transform: capitalize;
}
.header-6 .top-menu i {
  font-size: 1.6rem;
}
.header-6 .top-menu li + li {
  margin-left: 2rem;
}
.header-6 .header-middle {
  display: flex;
  min-height: 84px;
  color: #777;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.5;
  letter-spacing: 0;
  border-bottom: none;
  margin-bottom: 0.1rem;
}
.header-6 .header-middle a {
  color: #666;
}
.header-6 .header-middle a:hover,
.header-6 .header-middle a:focus {
  color: #3aafa9;
}
.header-6 .header-middle .container {
  position: relative;
  min-height: 0;
}
.header-6 .header-middle .header-center a {
  display: flex;
  align-items: center;
}
.header-6 .cart-dropdown,
.header-6 .compare-dropdown {
  padding-left: 2.3rem;
}
.header-6 .cart-dropdown .dropdown-menu,
.header-6 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-6 .cart-dropdown:hover .cart-txt,
.header-6 .cart-dropdown:focus .cart-txt,
.header-6 .compare-dropdown:hover .cart-txt,
.header-6 .compare-dropdown:focus .cart-txt {
  color: #3aafa9;
}
.header-6 .header-bottom {
  background-color: #222;
}
.header-6 .header-bottom .menu > li + li {
  margin-left: 0.6rem;
}
.header-6 .header-bottom .menu > li > a {
  padding-top: 1.55rem;
  padding-bottom: 1.55rem;
  letter-spacing: 0.05em;
  color: #fff;
}
.header-6 .header-bottom .menu > li > a:before {
  bottom: 1rem;
}
.header-6 .header-bottom .header-right i {
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-right: 1.5rem;
  color: #3aafa9;
}
.header-6 .header-bottom .header-right p {
  font-size: 1.4rem;
  font-weight: 500;
  letter-spacing: 0.05em;
  color: #fff;
  text-transform: uppercase;
}
.header-6 .menu ul,
.header-6 .menu .megamenu {
  margin-top: 0;
}
.header-6 .header-top .social-icons {
  margin-right: 3rem;
}
.header-6 .header-top .social-icons a {
  font-size: 1.4rem;
  font-weight: 500;
  color: #777;
}
.header-6 .header-right .top-menu + .header-dropdown {
  margin-left: 3rem;
}
.header-6 .header-search .search-wrapper-wide {
  width: 270px;
  border: none;
}
.header-6 .header-search-extended {
  margin-top: 2rem;
  margin-bottom: 2rem;
}
.header-6 .header-search-extended .form-control {
  font-size: 1.3rem;
  font-weight: 400;
  color: #222;
  border-radius: 0;
  padding: 1.4rem 2.4rem 1.2rem 2rem;
}
.header-6 .header-search-extended .form-control::placeholder {
  color: #222;
}
.header-6 .header-search-extended .btn {
  background-color: transparent;
  color: #666;
  font-size: 2.6rem;
  padding-left: 1rem;
  max-width: 0;
  z-index: 1;
}
.header-6 .wishlist-link {
  font-size: 2.8rem;
}
.header-6 .wishlist-link:hover .wishlist-txt,
.header-6 .wishlist-link:focus .wishlist-txt {
  color: #3aafa9;
}
.header-6 .wishlist-link .wishlist-count,
.header-6 .cart-dropdown .cart-count {
  min-width: 1.7rem;
  height: 1.7rem;
  margin-bottom: 1.5rem;
  margin-left: -1.2rem;
}
.header-6 .wishlist-txt,
.header-6 .cart-txt {
  font-size: 1.3rem;
  font-weight: 400;
  letter-spacing: 0;
  color: #222;
  margin-left: 1rem;
  margin-top: -0.5rem;
  transition: all 0.3s;
}
.header-6 .cart-txt {
  font-weight: 500;
}
.header-6 .menu.sf-arrows .sf-with-ul::after {
  letter-spacing: -0.01em;
}
.header-6 .header-middle a.btn:hover,
.header-6 .header-middle a.btn:focus {
  color: #fff;
}
.header-6 .btn-primary:hover,
.header-6 .btn-primary:focus,
.header-6 .btn-primary.focus,
.header-6 .btn-primary:not(:disabled):not(.disabled):active,
.header-6 .btn-primary:not(:disabled):not(.disabled).active,
.header-6 .show > .btn-primary.dropdown-toggle {
  color: #c15454;
  background-color: transparent;
}
@media screen and (min-width: 992px) {
  .header-6 .logo {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    margin: 0;
  }
}
@media screen and (max-width: 991px) {
  .header-6 .header-bottom {
    display: block;
  }
}
@media screen and (max-width: 575px) {
  .header-6 .header-dropdown {
    display: none;
  }
  .header-6 .cart-dropdown,
  .header-6 .compare-dropdown {
    padding-left: 1.4rem;
  }
  .header-6 .wishlist-link {
    margin-left: 1.4rem;
  }
  .header-6 .compare-dropdown,
  .header-6 .wishlist-link {
    display: flex;
  }
}
@media screen and (max-width: 991px) {
  .header-6 .header-middle .header-left {
    display: none;
  }
  .header-6 .header-middle .header-center {
    display: block;
  }
  .header-6 .logo {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translate(0, -50%);
    margin-top: 0;
    margin-bottom: 0;
  }
}
.header-7 .header-top {
  background-color: #f9f9f9;
}
.header-7 .header-top .container-fluid::after {
  height: 0;
}
.header-7 .header-middle {
  border-bottom: none;
}
.header-7 .header-middle .menu > li > a {
  font-size: 1.4rem;
  font-weight: 400;
  letter-spacing: 0;
}
.header-7 .cart-dropdown,
.header-7 .compare-dropdown {
  padding-left: 2.3rem;
}
.header-7 .cart-dropdown .dropdown-menu,
.header-7 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-7 .logo {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}
.header-7 .main-nav {
  margin-left: 2.5rem;
}
.header-7 .menu ul,
.header-7 .menu .megamenu {
  margin-top: 0;
}
.header-7 .menu > li > a {
  padding-top: 3.9rem;
  padding-bottom: 3.7rem;
}
.header-7 .menu.sf-arrows > li > .sf-with-ul {
  padding-right: 1.7rem;
}
.header-7 .header-search-extended {
  margin-right: 0.5rem;
  max-width: 270px;
}
.header-7 .header-search-extended .btn-primary {
  flex: 0 0 40px;
  max-width: 40px;
  background-color: transparent;
  font-size: 2.2rem;
  color: #666;
  border-radius: 0;
}
.header-7 .header-search-extended .header-search-wrapper {
  border-radius: 0;
  border: none;
  border-bottom: 0.1rem solid #ccc;
}
.header-7 .header-search-extended .search-wrapper-wide {
  width: 270px;
}
.header-7 .header-search-extended .form-control {
  padding-left: 1rem;
  padding-bottom: 1rem;
}
.header-7 .btn-primary:hover,
.header-7 .btn-primary:focus,
.header-7 .btn-primary.focus,
.header-7 .btn-primary:not(:disabled):not(.disabled):active,
.header-7 .btn-primary:not(:disabled):not(.disabled).active,
.header-7 .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #cc6666;
  border-color: #cc6666;
  box-shadow: none;
}
.header-7 .top-menu:not(.top-link-menu) ul {
  min-width: 180px;
}
@media screen and (max-width: 575px) {
  .header-7 .cart-dropdown,
  .header-7 .compare-dropdown {
    padding-left: 1.4rem;
  }
  .header-7 .wishlist-link {
    margin-left: 1.4rem;
  }
}
@media screen and (max-width: 1079px) {
  .header.header-7 .header-search-extended {
    display: none;
  }
}
.header-8 .header-top {
  font-weight: 400;
  font-size: 1.4rem;
  color: #f4e8dd;
  background-color: #3aafa9;
  margin-bottom: 0;
}
.header-8 .header-top .container:after,
.header-8 .header-top .container-fluid:after {
  display: none;
}
.header-8 .header-top .header-dropdown > a:hover,
.header-8 .header-top .header-dropdown > a:focus,
.header-8 .header-top .top-menu > li > a:hover,
.header-8 .header-top .top-menu > li > a:focus {
  color: #fff;
}
.header-8 .header-menu {
  margin-top: 0;
}
.header-8 .header-menu ul a:not(:focus):not(:hover) {
  color: #666;
}
.header-8 .header-dropdown {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.header-8 .header-dropdown + .header-dropdown {
  margin-left: 2rem;
}
.header-8 .top-menu,
.header-8 .header-dropdown > a,
.header-8 .header-dropdown > span {
  text-transform: capitalize;
}
.header-8 .header-dropdown > a,
.header-8 .header-dropdown > span {
  padding-right: 2rem;
}
.header-8 .header-dropdown > a::after,
.header-8 .header-dropdown > span::after {
  font-size: 1rem;
  margin-top: -0.5rem;
}
.header-8 .top-menu li + li {
  margin-left: 2.1rem;
}
.header-8 .header-middle {
  border-bottom: none;
  margin-bottom: 0;
}
.header-8 .main-nav {
  margin-left: 0;
  margin-right: 3rem;
}
.header-8 .menu > li > a {
  padding-top: 3.45rem;
  padding-bottom: 3.45rem;
}
.header-8 .header-search .form-control {
  background-color: #f4f4f4;
}
.header-8 .header-search .form-control::placeholder {
  font-style: italic;
}
.header-8 .header-search .header-search-wrapper {
  border-color: #f4f4f4;
}
.header-8 .cart-dropdown .dropdown-menu,
.header-8 .compare-dropdown .dropdown-menu,
.header-8 .menu ul,
.header-8 .menu .megamenu {
  margin-top: 0;
}
@media screen and (min-width: 992px) {
  .header-8 .header-top .top-menu a:hover,
  .header-8 .header-top .top-menu a:focus {
    color: #fff;
  }
}
@media screen and (max-width: 991px) {
  .header-8 .top-menu ul a:not(:hover):not(:focus) {
    color: #666;
  }
  .header-8 .top-menu:not(.top-link-menu) ul {
    margin-top: 0;
  }
  .header-8 .top-menu:not(.top-link-menu) > li {
    padding-right: 2rem;
  }
  .header-8 .top-menu:not(.top-link-menu) > li::after {
    font-size: 1rem;
    margin-top: -0.5rem;
  }
}
@media screen and (min-width: 1200px) {
  .header-8 .header-search .header-search-wrapper {
    display: flex;
  }
  .header-8 .main-nav {
    margin-right: 26rem;
  }
}
.header-9 {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  z-index: 1040;
  background-color: transparent;
}
.header-9 .header-middle {
  border-bottom: none;
}
.header-9 .cart-dropdown,
.header-9 .compare-dropdown {
  padding-left: 2.3rem;
}
.header-9 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-9 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle {
  color: #fff;
}
.header-9 .cart-dropdown .dropdown-menu,
.header-9 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-9 .header-search .header-search-wrapper {
  border-color: #fff;
}
.header-9 .wishlist-link:not(:hover):not(:focus),
.header-9 .search-toggle:not(:hover):not(:focus):not(.active),
.header-9 .mobile-menu-toggler,
.header-9 .wishlist-link:not(:hover):not(:focus),
.header-9 .menu > li:not(:hover):not(.active):not(.show) > a,
.header-9 .mobile-menu-toggler {
  color: #fff;
}
.header-9 .logo {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}
.header-9 .main-nav {
  margin-left: 1rem;
}
.header-9 .menu ul,
.header-9 .menu .megamenu {
  margin-top: 0;
}
.header-9 .menu > li > a {
  padding-top: 2.85rem;
  padding-bottom: 2.85rem;
}
.header-9 .sticky-header.fixed {
  background-color: #333;
}
@media screen and (max-width: 575px) {
  .header-9 .cart-dropdown,
  .header-9 .compare-dropdown {
    padding-left: 1.4rem;
  }
  .header-9 .wishlist-link {
    margin-left: 1.4rem;
  }
}
.header-10 {
  background-color: #fff;
}
.header-10 .header-top {
  font-size: 1.4rem;
  background-color: #fafafa;
  margin-bottom: 0;
}
.header-10 .header-top .container:after,
.header-10 .header-top .container-fluid:after {
  display: none;
}
.header-10 .header-menu {
  margin-top: 0;
}
.header-10 .header-dropdown {
  padding-top: 0.7rem;
  padding-bottom: 0.7rem;
}
.header-10 .header-dropdown + .header-dropdown {
  margin-left: 2rem;
}
.header-10 .header-dropdown > a,
.header-10 .header-dropdown > span {
  padding-right: 1.8rem;
}
.header-10 .header-dropdown > a:after,
.header-10 .header-dropdown > span:after {
  font-size: 1rem;
  margin-top: -0.6rem;
}
.header-10 .top-menu {
  text-transform: capitalize;
}
.header-10 .top-menu li + li {
  margin-left: 2rem;
}
.header-10 .header-middle {
  border-bottom: none;
}
.header-10 .cart-dropdown,
.header-10 .compare-dropdown {
  padding-left: 1.4rem;
}
.header-10 .cart-dropdown .dropdown-menu,
.header-10 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-10 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-10 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-10 .mobile-menu-toggler,
.header-10 .search-toggle:not(:hover):not(:focus),
.header-10 .wishlist-link:not(:hover):not(:focus) {
  color: #333;
}
.header-10 .sticky-header {
  background-color: #f7f7f7;
}
.header-10 .mobile-menu-toggler {
  margin-left: 0;
}
.header-10 .header-search-extended {
  margin-right: 2.8rem;
  margin-top: 2.25rem;
  margin-bottom: 2.25rem;
}
.header-10 .header-search .header-search-wrapper {
  border-radius: 0.2rem;
  border-color: #3aafa9;
}
.header-10 .header-search .btn {
  border-radius: 0 0.2rem 0.2rem 0;
}
.header-10 .header-search .select-custom:before {
  left: auto;
  right: 0;
}
.header-10 .header-bottom {
  background-color: #333;
}
.header-10 .header-bottom .container {
  display: block;
}
.header-10 .header-bottom .col-lg-9 {
  position: static;
}
.header-10 .header-bottom .main-nav {
  margin-left: 5.2rem;
}
.header-10 .header-bottom .menu ul,
.header-10 .header-bottom .menu .megamenu {
  margin-top: 0;
}
.header-10 .header-bottom .menu > li:not(:hover):not(.active):not(.show) > a {
  color: #fff;
}
.header-10 .header-bottom .mobile-menu-toggler {
  color: #fff;
}
.header-10 .header-bottom .menu > li > a {
  padding-top: 1.6rem;
  padding-bottom: 1.6rem;
}
.header-10 .header-bottom .menu > li > a:before {
  background-color: #fff;
}
.header-10 .menu > li:hover > a,
.header-10 .menu > li.show > a,
.header-10 .menu > li.active > a {
  color: #fff;
}
.header-10 .category-dropdown .dropdown-toggle {
  color: #fff;
  text-transform: capitalize;
  font-weight: 500;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  padding: 1.45rem 5rem 1.45rem 2rem;
  background-color: #3aafa9;
  min-width: 100%;
}
.header-10 .category-dropdown .dropdown-toggle:before {
  display: none;
}
.header-10 .category-dropdown .dropdown-toggle:after {
  position: absolute;
  right: 1.9rem;
  top: 50%;
  margin-top: -1.15rem;
  font-weight: normal;
  margin-left: 0;
  float: right;
}
.header-10 .category-dropdown.show .dropdown-toggle:after {
  content: "\f131";
}
.header-10 .category-dropdown .dropdown-menu {
  box-shadow: none;
}
.header-10 .menu-vertical ul li > a {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.header-10 .menu-vertical .menu-title {
  color: #3aafa9;
}
.header-10 .menu-vertical .menu-col {
  margin-top: 1.6rem;
}
@media screen and (max-width: 991px) {
  .header-10 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #dadada;
  }
  .header-10 .top-menu:not(.top-link-menu) ul {
    margin-top: 0;
  }
}
@media screen and (min-width: 1200px) {
  .header-10 .header-search-extended {
    margin-right: 6.6rem;
  }
}
.header-11 {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  z-index: 1040;
  background-color: transparent;
}
.header-11 .header-middle {
  border-bottom-color: rgba(250, 250, 250, 0.2);
}
.header-11 .header-left,
.header-11 .header-right {
  flex: 1 1 0;
}
.header-11 .header-center {
  flex: 0 1 auto;
}
.header-11 .header-right {
  display: flex;
  justify-content: flex-end;
}
.header-11 .cart-dropdown,
.header-11 .compare-dropdown {
  padding-left: 2.3rem;
}
.header-11 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-11 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle {
  color: #fff;
}
.header-11 .cart-dropdown .dropdown-menu,
.header-11 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-11 .header-search .header-search-wrapper {
  border-color: #fff;
}
.header-11 .wishlist-link:not(:hover):not(:focus),
.header-11 .search-toggle:not(:hover):not(:focus):not(.active),
.header-11 .mobile-menu-toggler,
.header-11 .wishlist-link:not(:hover):not(:focus),
.header-11 .menu > li:not(:hover):not(.active):not(.show) > a,
.header-11 .mobile-menu-toggler {
  color: #fff;
}
.header-11 .logo {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}
.header-11 .main-nav {
  margin-left: 0;
}
.header-11 .menu > li:not(:last-child) {
  margin-right: 2rem;
}
.header-11 .menu > li > a {
  padding-top: 2.95rem;
  padding-bottom: 2.95rem;
  padding-left: 0;
}
.header-11 .sticky-header.fixed {
  background-color: #333;
}
.header-11 .mobile-menu-toggler {
  margin-left: 0;
}
@media screen and (max-width: 575px) {
  .header-11 .cart-dropdown,
  .header-11 .compare-dropdown {
    padding-left: 1.4rem;
  }
  .header-11 .wishlist-link {
    margin-left: 1.4rem;
  }
}
@media screen and (min-width: 1200px) {
  .header-11 .menu > li:not(:last-child) {
    margin-right: 3rem;
  }
}
.header-12 .logo {
  margin-bottom: 2.5rem;
}
.header-12 .header-dropdown-link {
  display: flex;
  align-items: flex-end;
}
.header-12 .account,
.header-12 .wishlist,
.header-12 .compare-dropdown,
.header-12 .cart-dropdown {
  display: flex;
  align-self: stretch;
  align-items: initial;
}
.header-12 .account > a,
.header-12 .wishlist > a,
.header-12 .compare-dropdown > a,
.header-12 .cart-dropdown > a {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
}
.header-12 div.icon {
  position: relative;
}
.header-12 .account a {
  font-size: 3rem;
  color: #333;
  line-height: 1;
}
.header-12 .wishlist a {
  font-size: 2.8rem;
  color: #333;
  line-height: 1;
}
.header-12 .cart-dropdown .cart-count,
.header-12 .wishlist .wishlist-count {
  min-width: 1.6rem;
  height: 1.6rem;
}
.header-12 .wishlist .wishlist-count {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1;
  color: #fff;
}
.header-12 .wishlist .wishlist-count {
  position: absolute;
  top: 0;
  right: -0.5rem;
}
.header-12 .cart-dropdown .cart-count {
  position: absolute;
  top: 0;
  right: -0.3rem;
}
.header-12 .cart-dropdown,
.header-12 .wishlist,
.header-12 .account {
  padding-left: 3rem;
}
.header-12 .cart-dropdown .dropdown-toggle,
.header-12 .wishlist .dropdown-toggle,
.header-12 .account .dropdown-toggle {
  color: #333;
}
.header-12 .cart-dropdown,
.header-12 .wishlist,
.header-12 .account {
  align-items: flex-end;
  padding-left: 3.4rem;
}
.header-12 .cart-dropdown > a p,
.header-12 .wishlist > a p,
.header-12 .account > a p {
  margin-top: 0.3rem;
  font-size: 1.1rem;
  font-weight: 300;
  letter-spacing: 0;
  transition: color 0.3s;
}
.header-12 .cart-dropdown:hover > a,
.header-12 .cart-dropdown:hover > a p,
.header-12 .cart-dropdown:focus > a,
.header-12 .cart-dropdown:focus > a p,
.header-12 .cart-dropdown.show > a,
.header-12 .cart-dropdown.show > a p,
.header-12 .wishlist:hover > a,
.header-12 .wishlist:hover > a p,
.header-12 .wishlist:focus > a,
.header-12 .wishlist:focus > a p,
.header-12 .wishlist.show > a,
.header-12 .wishlist.show > a p,
.header-12 .account:hover > a,
.header-12 .account:hover > a p,
.header-12 .account:focus > a,
.header-12 .account:focus > a p,
.header-12 .account.show > a,
.header-12 .account.show > a p {
  color: #1cc0a0;
}
.header-12 .wishlist {
  padding-left: 3rem;
}
.header-12 .dropdown.category-dropdown .dropdown-toggle {
  min-width: 264px;
  position: relative;
  color: #fff;
  background-color: #1cc0a0;
  padding-left: 5.6rem;
  padding-right: 3rem;
}
.header-12 .dropdown.category-dropdown .dropdown-toggle:after {
  margin-left: 0;
  position: absolute;
  left: 1.8rem;
  top: 50%;
  margin-top: -1.1rem;
}
.header-12 .dropdown.category-dropdown .dropdown-toggle:before {
  display: block;
  height: auto;
  content: "";
  font-family: "molla";
  content: "\f110";
  position: absolute;
  left: auto;
  right: 1.8rem;
  top: 50%;
  font-size: 1rem;
  line-height: 1;
  margin-top: -0.5rem;
}
.header-12 .dropdown.category-dropdown.show .dropdown-toggle:before {
  content: "\e801";
}
.header-12 .header-dropdown > a,
.header-12 .header-dropdown > span {
  text-transform: none;
}
.header-12 .top-menu {
  text-transform: none;
}
.header-12 .header-menu ul {
  display: block;
}
.header-12 .header-dropdown {
  padding-top: 0.7rem;
  padding-bottom: 0.7rem;
}
.header-12 .header-top {
  font-size: 1.4rem;
}
.header-12 .header-top .header-left {
  letter-spacing: -0.01em;
}
.header-12 .header-top .header-left i {
  margin-right: 0.8rem;
}
.header-12 .header-top .top-menu li + li {
  margin-left: 0;
}
.header-12 .header-top .dropdown-links > li + li {
  margin-left: 4rem;
}
.header-12 .header-middle {
  border-bottom: none;
}
.header-12 .header-bottom .container {
  position: relative;
}
.header-12 .header-bottom .container::after {
  content: "";
  position: absolute;
  top: 1.8rem;
  bottom: 1.8rem;
  width: 0.1rem;
  background-color: #ccc;
  right: 20.5%;
}
.header-12 .header-bottom .menu > li + li {
  margin-left: 2.8rem;
}
.header-12 .header-bottom .menu > li > a {
  padding: 1.55rem 3rem 1.55rem 1rem;
}
.header-12 .header-bottom .menu > li > a::before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: -0.5rem;
  width: unset;
  bottom: 0;
  height: 0.1rem;
  background-color: #1cc0a0;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s ease;
}
.header-12 .header-bottom .menu > li:hover > a,
.header-12 .header-bottom .menu > li:focus > a,
.header-12 .header-bottom .menu > li.active > a {
  color: #1cc0a0;
}
.header-12 .header-bottom .menu > li:hover > a::before,
.header-12 .header-bottom .menu > li:focus > a::before,
.header-12 .header-bottom .menu > li.active > a::before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.header-12 .header-bottom .header-right {
  margin-left: 2rem;
}
.header-12 .header-bottom .header-right i {
  font-size: 1.6rem;
  color: #fff;
}
.header-12 .header-bottom .header-right p {
  font-size: 1.4rem;
  font-weight: 500;
  letter-spacing: -0.01em;
  color: #fff;
  text-transform: none;
  padding-left: 1.5rem;
  margin-right: 4rem;
}
.header-12 .header-bottom .menu > li:not(:hover):not(.active):not(.show) > a {
  color: #fff;
}
.header-12 .sticky-header.fixed {
  background-color: #333;
}
.header-12 .header-search-extended #cat,
.header-12 .header-search-extended .form-control {
  background-color: #f8f8f8;
}
.header-12 .header-search-extended .form-control {
  padding-left: 2rem;
}
.header-12 .header-search-extended .select-custom {
  flex: 0 0 213px;
  max-width: 213px;
}
@media screen and (min-width: 1600px) {
  .header-12 .header-search-extended {
    margin-right: 7rem;
  }
  .header-12 .header-search .search-wrapper-wide {
    width: 832px;
  }
  .header-12 .header-search-extended {
    max-width: 832px;
  }
}
@media screen and (max-width: 991px) {
  .header-12 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #dadada;
  }
}
@media screen and (min-width: 1200px) {
  .header-12 .header-text {
    display: block;
  }
}
@media screen and (max-width: 1279px) {
  .header-12 .header-bottom .menu > li + li {
    margin-left: 0.5rem;
  }
  .header-12 .header-bottom .container::after {
    visibility: hidden;
  }
}
@media screen and (max-width: 1140px) {
  .header-12 .header-bottom .header-right {
    margin-left: 0;
  }
  .header-12 .header-bottom .header-right p {
    font-size: 1.3rem;
    margin-right: 1rem;
  }
  .header-12 .header-bottom .menu > li > a {
    font-size: 1.3rem;
  }
  .header-12 .dropdown.category-dropdown .dropdown-toggle {
    font-size: 1.3rem;
    min-width: 150px;
    padding-left: 5rem;
  }
  .header-12 .dropdown.category-dropdown .dropdown-toggle::before {
    right: 1rem;
  }
}
@media screen and (max-width: 395px) {
  .header-12 .wishlist,
  .header-12 .account {
    display: none;
  }
}
.header-13 {
  background-color: #fff;
}
.header-13 .header-top {
  font-weight: 300;
  font-size: 1.3rem;
}
.header-13 .header-dropdown {
  padding-top: 0.85rem;
  padding-bottom: 0.85rem;
}
.header-13 .header-dropdown + .header-dropdown {
  margin-left: 2rem;
}
.header-13 .header-dropdown > a,
.header-13 .header-dropdown > span {
  padding-right: 1.8rem;
}
.header-13 .header-dropdown > a:after,
.header-13 .header-dropdown > span:after {
  font-size: 1rem;
  margin-top: -0.6rem;
}
.header-13 .top-menu {
  text-transform: uppercase;
}
.header-13 .top-menu li + li {
  margin-left: 3rem;
}
.header-13 .header-middle {
  border-bottom: none;
}
.header-13 .cart-dropdown,
.header-13 .compare-dropdown {
  padding-left: 1.4rem;
}
.header-13 .cart-dropdown .dropdown-menu,
.header-13 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-13 .cart-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-13 .compare-dropdown:not(:hover):not(.show) .dropdown-toggle,
.header-13 .mobile-menu-toggler,
.header-13 .search-toggle:not(:hover):not(:focus),
.header-13 .wishlist-link:not(:hover):not(:focus) {
  color: #666;
}
.header-13 .mobile-menu-toggler {
  margin-left: 0;
}
.header-13 .header-search-extended {
  margin-right: 2.1rem;
}
.header-13 .header-search .header-search-wrapper {
  border-radius: 0.3rem;
  border-color: #ebebeb;
}
.header-13 .header-search .btn {
  border-radius: 0 0.3rem 0.3rem 0;
}
.header-13 .header-bottom {
  color: #fff;
  background-color: #333;
}
.header-13 .header-bottom .menu ul,
.header-13 .header-bottom .menu .megamenu {
  margin-top: 0;
}
.header-13 .header-bottom .menu > li:not(:hover):not(.active):not(.show) > a {
  color: #ccc;
}
.header-13 .header-bottom .menu > li.active > a,
.header-13 .header-bottom .menu > li.show > a {
  color: #fff;
}
.header-13 .header-bottom .mobile-menu-toggler {
  color: #fff;
}
.header-13 .header-bottom .menu > li > a {
  padding-left: 0;
  padding-top: 1.55rem;
  padding-bottom: 1.55rem;
}
.header-13 .header-bottom .menu > li > a:hover,
.header-13 .header-bottom .menu > li > a:focus {
  color: #fff;
}
.header-13 .main-nav {
  margin-left: 2rem;
}
.header-13 .menu > li > a:before {
  display: none;
}
.header-13 .fixed .menu .megamenu {
  left: 0;
  right: 0;
}
.header-13 .dropdown.category-dropdown .dropdown-toggle {
  min-width: 264px;
  position: relative;
  color: #fff;
  background-color: #3aafa9;
  padding-left: 5.6rem;
  padding-right: 3rem;
}
.header-13 .dropdown.category-dropdown .dropdown-toggle:after {
  margin-left: 0;
  position: absolute;
  left: 1.8rem;
  top: 50%;
  margin-top: -1.1rem;
}
.header-13 .dropdown.category-dropdown.show .dropdown-toggle:before {
  content: "\e801";
}
.header-13 .header-text {
  color: #ccc;
  display: none;
}
.header-13 .header-text i {
  margin-right: 1.4rem;
}
.header-13 .sticky-header.fixed {
  left: auto;
  right: auto;
}
@media screen and (max-width: 991px) {
  .header-13 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #dadada;
  }
}
@media screen and (min-width: 992px) {
  .header-13 .sticky-header.fixed {
    width: 930px;
  }
}
@media screen and (min-width: 1200px) {
  .header-13 .header-text {
    display: block;
  }
  .header-13 .sticky-header.fixed {
    width: 1110px;
  }
  .header-13 .header-search-extended {
    margin-right: 11rem;
  }
}
@media screen and (min-width: 1280px) {
  .header-13 .sticky-header.fixed {
    width: 1170px;
  }
  .header-13 .header-search-extended {
    margin-right: 17rem;
  }
}
.header-14 {
  background-color: #fff;
}
.header-14 .header-top {
  font-weight: 300;
  font-size: 1.4rem;
  letter-spacing: 0;
}
.header-14 .header-top .header-left {
  font-weight: 400;
  letter-spacing: -0.01em;
}
.header-14 .header-top .header-left i {
  margin-right: 1rem;
  font-size: 1.6rem;
}
.header-14 .header-middle .container,
.header-14 .header-middle .container-fluid,
.header-14 .header-bottom .container,
.header-14 .header-bottom .container-fluid {
  display: block;
}
.header-14 .header-bottom .container::after,
.header-14 .header-bottom .container-fluid::after {
  content: "";
  position: absolute;
  top: 1.95rem;
  bottom: 1.95rem;
  right: 16%;
  width: 0.1rem;
  background-color: #fff;
}
.header-14 .header-dropdown {
  padding-top: 0.8rem;
  padding-bottom: 0.8rem;
}
.header-14 .header-dropdown + .header-dropdown {
  margin-left: 2rem;
}
.header-14 .header-dropdown > a,
.header-14 .header-dropdown > span {
  padding-right: 1.8rem;
  text-transform: none;
}
.header-14 .header-dropdown > a:after,
.header-14 .header-dropdown > span:after {
  font-size: 1rem;
  margin-top: -0.6rem;
}
.header-14 .login {
  text-transform: none;
}
.header-14 .top-menu {
  text-transform: uppercase;
}
.header-14 .top-menu ul {
  display: block;
}
.header-14 .top-menu .menus {
  display: flex;
  align-items: center;
}
.header-14 .top-menu .menus > li + li {
  margin-left: 4rem;
}
.header-14 .top-menu li + li {
  margin-left: 0;
}
.header-14 .header-middle {
  border-bottom: none;
}
.header-14 .cart-dropdown,
.header-14 .compare-dropdown {
  padding-left: 0;
}
.header-14 .cart-dropdown .dropdown-menu,
.header-14 .compare-dropdown .dropdown-menu {
  margin-top: 0;
}
.header-14 .cart-dropdown:hover .dropdown-toggle,
.header-14 .cart-dropdown.show .dropdown-toggle,
.header-14 .compare-dropdown:hover .dropdown-toggle,
.header-14 .compare-dropdown.show .dropdown-toggle {
  color: #fcb941;
}
.header-14 .mobile-menu-toggler {
  margin-left: 0;
  color: #333;
}
.header-14 .header-search-extended {
  margin-right: 0;
  max-width: 100%;
  margin-top: 2.05rem;
  margin-bottom: 2.05rem;
}
.header-14 .header-search .header-search-wrapper {
  border-radius: 0.3rem;
  border-color: #3aafa9;
}
.header-14 .header-search .search-wrapper-wide {
  width: 100%;
}
.header-14 .header-search .btn {
  border-radius: 0 0.3rem 0.3rem 0;
}
.header-14 .header-bottom {
  color: #fff;
  background-color: #333;
}
.header-14 .header-bottom .menu ul,
.header-14 .header-bottom .menu .megamenu {
  margin-top: 0;
}
.header-14 .header-bottom .menu > li:not(:hover):not(.active):not(.show) > a {
  color: #fff;
}
.header-14 .header-bottom .menu > li > a {
  padding-left: 0;
  padding-top: 1.6rem;
  padding-bottom: 1.6rem;
}
.header-14 .header-bottom .menu > li > a::before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: -0.5rem;
  width: unset;
  bottom: 0;
  height: 0.1rem;
  background-color: #fcb941;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s ease;
}
.header-14 .header-bottom .menu > li:hover > a::before,
.header-14 .header-bottom .menu > li:focus > a::before,
.header-14 .header-bottom .menu > li.active > a::before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.header-14 .header-bottom .menu > li > .sf-with-ul {
  padding-left: 1rem;
  padding-right: 2.5rem;
}
.header-14 .main-nav {
  margin-left: 0;
}
.header-14 .menu > li > a:before {
  display: none;
}
.header-14 .dropdown.category-dropdown .dropdown-toggle {
  min-width: 0;
  width: 100%;
  position: relative;
  color: #333 !important;
  background-color: #3aafa9;
  font-size: 1.6rem;
  text-transform: capitalize;
  padding: 1.45rem 1rem 1.45rem 5rem;
}
.header-14 .dropdown.category-dropdown .dropdown-toggle:before {
  display: none;
}
.header-14 .dropdown.category-dropdown .dropdown-toggle:after {
  margin-left: 0;
  position: absolute;
  left: 1.4rem;
  top: 50%;
  font-size: 2.2rem;
  margin-top: -1.2rem;
}
.header-14 .dropdown.category-dropdown .dropdown-menu {
  box-shadow: none;
}
.header-14 .dropdown.category-dropdown.show .dropdown-toggle::after {
  content: "\f131";
}
.header-14 .menu-vertical ul li > a {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.header-14 .menu-vertical > li:not(:last-child) > a {
  border-bottom: none;
}
.header-14 .menu-vertical > li > a {
  font-weight: 400;
  padding-bottom: 0.95rem;
  padding-left: 0.5rem;
}
.header-14 .menu-vertical > li:not(:hover):not(.show):not(.active) > a {
  color: #333;
}
.header-14 .menu-vertical .megamenu:not(.megamenu-sm):not(.megamenu-md) {
  min-height: 0;
}
.header-14 .menu-vertical i {
  font-size: 1.4rem;
  display: inline-flex;
  justify-content: center;
  margin-right: 1rem;
}
.header-14 .menu-vertical .sf-with-ul::after {
  right: 1.3rem;
}
.header-14 .menu-brands.menu-col {
  padding-bottom: 2rem;
}
.header-14 .header-bottom .header-left .category-dropdown {
  width: 100%;
}
.header-14 .header-bottom .header-center {
  display: flex;
  justify-content: center;
}
.header-14 .header-bottom .header-center .main-nav {
  margin-left: 0;
}
.header-14 .header-bottom .header-right {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding-right: 5rem;
}
.header-14 .header-bottom .header-right p {
  font-weight: 500;
  letter-spacing: -0.01em;
  color: #fff;
}
.header-14 .header-bottom .header-right i {
  font-size: 1.6rem;
  margin-right: 1.5rem;
  color: #fcb941;
}
.header-14 .header-dropdown-link {
  display: flex;
  align-items: flex-end;
}
.header-14 .wishlist-link {
  position: relative;
  flex-direction: column;
  font-size: 2.8rem;
  color: #333;
}
.header-14 .wishlist-link .wishlist-count {
  right: 0;
  top: -0.5rem;
}
.header-14 .wishlist-link:hover .wishlist-txt,
.header-14 .wishlist-link:focus .wishlist-txt {
  color: #fcb941;
}
.header-14 .compare-dropdown {
  padding-left: 2.4rem;
}
.header-14 .compare-dropdown .dropdown-toggle {
  font-size: 3rem;
}
.header-14 .compare-dropdown:hover .compare-txt,
.header-14 .compare-dropdown:focus .compare-txt {
  color: #fcb941;
}
.header-14 .cart-dropdown {
  font-size: 3.2rem;
  margin-left: 3.4rem;
  align-items: flex-end;
}
.header-14 .cart-dropdown .cart-count {
  top: -0.3rem;
  right: -0.3rem;
}
.header-14 .cart-dropdown:hover .cart-txt,
.header-14 .cart-dropdown:focus .cart-txt {
  color: #fcb941;
}
.header-14 .compare-dropdown [class*="count"],
.header-14 .cart-dropdown [class*="count"],
.header-14 .wishlist-link [class*="count"] {
  min-width: 1.6rem;
  height: 1.6rem;
  position: absolute;
}
.header-14 .compare-dropdown .dropdown-toggle,
.header-14 .cart-dropdown .dropdown-toggle,
.header-14 .wishlist-link .dropdown-toggle {
  position: relative;
  flex-direction: column;
}
.header-14 .wishlist-txt,
.header-14 .cart-txt,
.header-14 .compare-txt {
  font-size: 1.1rem;
  font-weight: 300;
  letter-spacing: 0;
  color: #777;
  margin-top: 0.3rem;
  transition: all 0.3s;
}
.header-14 .select-custom::before {
  right: 0;
  left: unset;
  background-color: #dadada;
}
@media screen and (max-width: 991px) {
  .header-14 .header-search-visible .header-search-wrapper:before {
    border-bottom-color: #dadada;
  }
  .header-14 .header-middle-right {
    display: flex;
    align-items: stretch;
    justify-content: flex-end;
  }
}
@media screen and (min-width: 768px) {
  .header-14 .header-middle .header-right {
    max-width: 84%;
  }
}
@media screen and (min-width: 1200px) {
  .header-14 .main-nav {
    margin-left: 2rem;
  }
}
@media screen and (min-width: 1600px) {
  .header-14 .container-fluid .megamenu-container {
    position: static;
  }
  .header-14 .main-nav {
    margin-left: 3rem;
  }
  .header-14 .header-bottom .menu > li + li {
    margin-left: 3rem;
  }
}
@media screen and (max-width: 1500px) {
  .header-14 .header-bottom .col-lg-9 {
    position: static;
  }
  .header-14 .menu .megamenu {
    left: 3rem;
    right: 3rem;
  }
}
@media screen and (max-width: 1199px) {
  .header-14 .menu .megamenu {
    left: 1.5rem;
    right: 1.5rem;
  }
}
@media screen and (max-width: 992px) {
  .header-14 .top-menu .menus {
    display: block;
  }
}
@media screen and (max-width: 1700px) {
  .header-14 .header-bottom .container::after,
  .header-14 .header-bottom .container-fluid::after {
    right: 22%;
  }
}
@media screen and (max-width: 1200px) {
  .header-14 .header-bottom .header-right {
    padding-right: 1rem;
  }
  .header-14 .header-bottom .menu > li > a {
    font-size: 1.3rem;
  }
  .header-14 .header-bottom .menu > li + li {
    margin-left: 0;
  }
}
.footer {
  width: 100%;
  font-weight: 300;
  font-size: 1.4rem;
  color: #777;
  background-color: #fff;
}
.footer a {
  color: inherit;
}
.footer a:hover,
.footer a:focus {
  color: #3aafa9;
}
.footer .widget {
  margin-bottom: 4rem;
}
.footer .widget-title {
  color: #333333;
  font-weight: 500;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-top: 0;
  margin-bottom: 1.9rem;
}
.footer-middle {
  padding: 6.7rem 0 2.2rem;
  border-top: 0.1rem solid #ebebeb;
}
.footer-logo {
  margin-bottom: 2rem;
  margin-top: -0.8rem;
}
.widget-about p {
  max-width: 250px;
}
.container-fluid .widget-about p {
  max-width: 540px;
}
.widget-about p:last-of-type {
  margin-bottom: 3.2rem;
}
.widget-list {
  margin-bottom: 0;
}
.widget-list li:not(:last-child) {
  margin-bottom: 0.4rem;
}
.widget-newsletter form {
  padding-top: 0.7rem;
}
.widget-newsletter .form-control {
  height: 46px;
  padding-top: 1.15rem;
  padding-bottom: 1.15rem;
  background-color: #fff;
  border-right-width: 0;
}
.widget-newsletter .form-control:not(:focus) {
  border-color: #dadada;
}
.widget-newsletter .btn {
  min-width: 46px;
  font-size: 1.5rem;
  padding: 1.1rem 1rem;
}
.widget-newsletter .btn i {
  margin: 0 !important;
}
.footer-bottom .container,
.footer-bottom .container-fluid {
  position: relative;
  display: flex;
  align-content: center;
  flex-direction: column;
  padding-top: 2.1rem;
  padding-bottom: 2.9rem;
}
.footer-bottom .container:before,
.footer-bottom .container-fluid:before {
  content: "";
  display: block;
  height: 1px;
  position: absolute;
  top: 0;
  left: 10px;
  right: 10px;
  background-color: #ebebeb;
}
.footer-copyright {
  margin-bottom: 1rem;
  text-align: center;
}
.footer-payments {
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 0;
}
#scroll-top {
  width: 5rem;
  height: 5rem;
  position: fixed;
  right: 50px;
  bottom: 128px;
  z-index: 999;
  color: #cccccc;
  display: none;
  align-items: center;
  justify-content: center;
  text-align: center;
  line-height: 1;
  visibility: hidden;
  opacity: 0;
  border-radius: 0;
  border: none;
  background-color: #fafafa;
  font-size: 3rem;
  transition: all 0.4s ease;
  transform: translateY(60px);
  -ms-transform: translateY(60px);
}
#scroll-top:hover,
#scroll-top:focus {
  color: #777;
  background-color: #eaeaea;
}
#scroll-top.show {
  visibility: visible;
  opacity: 1;
  transform: translateY(0);
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
}
@media screen and (min-width: 768px) {
  #scroll-top {
    display: flex;
  }
}
@media screen and (min-width: 992px) {
  .footer-bottom .container,
  .footer-bottom .container-fluid {
    flex-direction: row;
  }
  .footer-copyright {
    margin-bottom: 0;
    text-align: left;
  }
  .footer-payments {
    margin-right: 0;
  }
}
@media screen and (min-width: 1200px) {
  .footer-bottom .container-fluid:before {
    left: 30px;
    right: 30px;
  }
}
@media screen and (min-width: 1600px) {
  .footer-bottom .container-fluid:before {
    left: 70px;
    right: 70px;
  }
}
@media screen and (min-width: 992px) and (max-width: 1200px) {
  .footer .widget-about .social-icon:not(:last-child) {
    margin-right: 0.4rem;
  }
}
.footer-dark {
  background-color: #333333;
}
.footer-dark .footer-middle {
  border-top-width: 0;
}
.footer-dark .widget-title {
  color: #fff;
}
.footer-dark .social-icon:hover,
.footer-dark .social-icon:focus {
  color: #fff;
}
.footer-dark .footer-bottom {
  color: #666666;
}
.footer-dark .footer-bottom .container:before {
  background-color: #525455;
}
.footer-dark.footer-2 .widget-about-info a:not(:hover) {
  color: #fff;
}
.footer-dark.footer-2 .widget-about-title {
  color: #3aafa9;
}
.footer-dark.footer-2 .footer-bottom {
  color: #999999;
}
.footer-2 .footer-middle {
  padding-top: 4.5rem;
  padding-bottom: 0.4rem;
}
.footer-2 .footer-bottom .container {
  padding-top: 2.2rem;
  padding-bottom: 2.2rem;
  flex-direction: column-reverse;
}
.col-md-6 .widget-about p,
.col-lg-6 .widget-about p {
  max-width: none;
}
.widget-about-info {
  font-weight: 400;
  font-size: 2rem;
  letter-spacing: -0.01em;
  line-height: 1.3;
  padding-top: 0.7rem;
}
.widget-about-info .footer-payments {
  margin-top: 0.6rem;
}
.widget-about-title {
  display: block;
  font-weight: 300;
  font-size: 1.3rem;
  color: #333333;
  letter-spacing: 0;
  margin-bottom: 0.4rem;
}
.footer-bottom .social-icons {
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 1rem;
}
.footer-bottom .social-icon {
  font-size: 1.3rem;
}
.footer-newsletter {
  color: #ebebeb;
  padding-top: 4.8rem;
  padding-bottom: 5.5rem;
}
.footer-newsletter .heading {
  margin-bottom: 2.4rem;
}
.footer-newsletter .title {
  color: #fff;
  font-weight: 500;
}
.footer-newsletter .title-desc {
  color: inherit;
  font-size: 1.6rem;
  margin-top: 0.7rem;
}
.footer-newsletter .title-desc span {
  color: #fff;
  font-weight: 400;
}
.footer-newsletter .form-control {
  height: 46px;
  padding: 1.25rem 2rem;
  font-size: 1.4rem;
  line-height: 1.5;
  font-weight: 300;
  color: #999999;
  background-color: #fff;
  border: none;
  border-radius: 0;
  margin-bottom: 0;
  transition: all 0.3s;
}
.footer-newsletter .form-control.form-control::placeholder {
  color: #999999;
}
.footer-newsletter .btn i:last-child {
  margin-left: 1rem;
}
.footer-menu {
  display: flex;
  align-items: center;
  margin-bottom: 0.8rem;
  margin-left: auto;
  margin-right: auto;
}
.footer-menu li {
  position: relative;
}
.footer-menu li + li {
  margin-left: 2.1rem;
}
.footer-menu li + li:before {
  content: "";
  display: inline-block;
  width: 1px;
  height: 1.2rem;
  position: absolute;
  left: -1.1rem;
  top: 50%;
  margin-top: -0.6rem;
  background-color: #b5b5b5;
}
.footer-menu a {
  box-shadow: 0 1px 0 #b5b5b5;
}
@media screen and (min-width: 992px) {
  .footer-2 .footer-bottom .container,
  .footer-2 .footer-bottom .container-fluid {
    flex-direction: row;
  }
  .footer-menu {
    margin-bottom: 0;
    margin-left: 0.6rem;
    margin-right: 0;
  }
  .footer-bottom .social-icons {
    margin-left: auto;
    margin-right: 0;
    margin-bottom: 0;
  }
}
@media screen and (max-width: 575px) {
  .widget-about-info .col-sm-6:not(:last-child) {
    margin-bottom: 1rem;
  }
}
.page-header {
  padding: 4.6rem 0 5rem;
  background-color: #ebebeb;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.page-header h1 {
  color: #333;
  font: normal 400 3.2rem/1.1 "Poppins", sans-serif;
  letter-spacing: -0.025em;
  margin-bottom: 0;
}
.page-header h1 span {
  display: block;
  color: #3aafa9;
  font-size: 1.6rem;
  margin-top: 0.8rem;
}
.page-header.page-header-big {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 250px;
  margin-bottom: 5rem;
}
.page-header.page-header-big h1 span {
  font-size: 1.6rem;
  margin-top: 0.4rem;
  letter-spacing: 0;
}
@media screen and (min-width: 768px) {
  .page-header h1 {
    font-size: 3.6rem;
  }
  .page-header h1 span {
    font-size: 1.8rem;
  }
  .page-header.page-header-big {
    min-height: 350px;
  }
}
@media screen and (min-width: 992px) {
  .page-header h1 {
    font-size: 4rem;
  }
  .page-header h1 span {
    font-size: 2rem;
  }
  .page-header.page-header-big {
    min-height: 450px;
  }
}
.breadcrumb-nav {
  margin-bottom: 4rem;
  border-bottom: 0.1rem solid rgba(235, 235, 235, 0.55);
}
.breadcrumb-nav .container,
.breadcrumb-nav .container-fluid {
  padding-top: 1.4rem;
  padding-bottom: 1.4rem;
}
.breadcrumb-with-filter .container,
.breadcrumb-with-filter .container-fluid {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}
.breadcrumb-with-filter .container-fluid {
  width: 100%;
}
.breadcrumb {
  background-color: transparent;
  border-radius: 0;
  margin: 0;
  padding: 0;
}
.breadcrumb-item {
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: 0;
  text-transform: capitalize;
}
.breadcrumb-item i {
  font-size: 1.3rem;
  vertical-align: top;
  margin-top: -0.2rem;
}
.breadcrumb-item i::before {
  margin: 0;
}
.breadcrumb-item a {
  color: #777;
}
.breadcrumb-item a:hover,
.breadcrumb-item a:focus {
  color: #3aafa9;
}
.breadcrumb-item.active {
  color: #333333;
}
.breadcrumb-item + .breadcrumb-item {
  padding-left: 1rem;
}
.breadcrumb-item + .breadcrumb-item:before {
  color: #999999;
  content: "\f112";
  font-family: "molla";
  padding-right: 0.7rem;
  font-size: 1.1rem;
  vertical-align: middle;
  margin-top: -0.1rem;
}
.title {
  font-size: 2.2rem;
  letter-spacing: -0.03em;
}
.title-lg {
  font-weight: 600;
  font-size: 2.6rem;
  letter-spacing: -0.01em;
}
.title-sm {
  font-size: 2rem;
  letter-spacing: -0.03em;
}
.heading {
  margin-bottom: 1.6rem;
}
.heading.heading-flex {
  display: flex;
  flex-direction: column;
  text-align: center;
}
.heading .title {
  margin-bottom: 0;
}
.heading.heading-center {
  text-align: center;
}
.heading.heading-center .title {
  margin-bottom: 1.5rem;
}
.heading.heading-center .title-lg {
  margin-bottom: 2.4rem;
}
.title-separator {
  font-weight: 300;
  color: #cccccc;
}
.text-white .title-separator {
  color: #777;
}
.title-desc {
  color: #777;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  margin-bottom: 0;
}
.heading-right {
  margin-top: 0.5rem;
}
.title-link {
  font-weight: 500;
  transition: all 0.3s ease;
}
.title-link:hover,
.title-link:focus {
  box-shadow: 0 1px 0 0 #3aafa9;
}
.title-link i {
  font-size: 1.5rem;
}
.title-link i:last-child {
  margin-left: 0.5rem;
}
@media screen and (min-width: 768px) {
  .title {
    font-size: 2.4rem;
  }
  .title-lg {
    font-size: 3rem;
  }
}
@media screen and (min-width: 992px) {
  .heading.heading-flex {
    align-items: center;
    flex-direction: row;
    text-align: left;
  }
  .heading-right {
    margin-top: 0;
    margin-left: auto;
  }
}
.icon-box {
  color: #777;
  font-weight: 300;
  font-size: 1.6rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  margin-bottom: 2rem;
}
.icon-box.icon-box-sm {
  font-size: 1.4rem;
  line-height: 1.86;
}
.icon-box-title {
  color: #333333;
  font-weight: 400;
  font-size: 1.8rem;
  letter-spacing: -0.025em;
  margin-bottom: 0.9rem;
}
.icon-box-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #3aafa9;
  font-size: 4rem;
  line-height: 1;
  margin-bottom: 2rem;
}
.icon-box-content p:last-child {
  margin-bottom: 0;
}
.icon-box-left {
  position: relative;
  padding-left: 70px;
}
.icon-box-left .icon-box-icon {
  position: absolute;
  left: 0;
  top: -1rem;
}
.icon-box-circle .icon-box-icon {
  width: 7rem;
  height: 7rem;
  border-radius: 50%;
  color: #fff;
  background-color: #3aafa9;
}
.icon-box-circle.icon-box-left {
  padding-left: 100px;
}
.icon-box-circle.icon-box-left .icon-box-icon {
  left: 1rem;
}
.icon-box-card {
  background-color: #fafafa;
  padding: 6.5rem 2rem 6rem;
}
.icon-box-card .icon-box-title {
  font-weight: 600;
}
.icon-box-card .icon-box-icon {
  margin-bottom: 1.3rem;
}
.icon-boxes-container {
  background-color: #f7f7f7;
  padding-top: 2.8rem;
  padding-bottom: 2.8rem;
  margin-bottom: 0;
}
.icon-boxes-container.bg-dark .icon-box-icon {
  color: #666;
}
.icon-boxes-container.bg-dark .icon-box-title {
  color: #fff;
}
.icon-box-side {
  display: flex;
  align-items: center;
  width: 100%;
  padding-top: 2rem;
  padding-bottom: 2rem;
  margin-bottom: 0;
}
.icon-box-side p {
  margin-bottom: 0;
}
.icon-box-side .icon-box-icon {
  display: inline-block;
  line-height: 0;
  min-width: 7rem;
  text-align: center;
  margin-bottom: 0;
}
.icon-box-side .icon-box-title {
  font-weight: 500;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-top: 0.2rem;
  margin-bottom: 0;
}
@media screen and (min-width: 768px) {
  .icon-box {
    margin-bottom: 4rem;
  }
  .icon-box-side {
    margin-bottom: 0;
  }
}
@media screen and (min-width: 1200px) {
  .icon-boxes-separator [class*="col-"] + [class*="col-"]:before {
    content: "";
    display: block;
    width: 0.1rem;
    height: 5.3rem;
    background-color: #e9e9e9;
    position: absolute;
    left: -0.3rem;
    top: 50%;
    margin-top: -2.55rem;
  }
}
@media screen and (max-width: 1199px) {
  .icon-box-sm br {
    display: none;
  }
}
.accordion {
  margin-bottom: 3rem;
}
.card {
  border-radius: 0;
  margin-bottom: 0;
  border: none;
  border-top: 0.1rem solid #ebebeb;
}
.card:last-child {
  border-bottom: 0.1rem solid #ebebeb;
}
.card-header {
  position: relative;
  padding: 0;
  border: none;
  font-weight: 700;
  line-height: 1.5;
  background-color: transparent;
  margin: 0;
}
.card-header::after {
  display: block;
  clear: both;
  content: "";
}
.card-title {
  font-size: 1.8rem;
  line-height: 1.2;
  margin-bottom: 0;
}
.card-title a {
  display: block;
  padding: 1.7rem 4rem 1.7rem 1.2rem;
  position: relative;
  color: #3aafa9;
  border: none;
  background-color: transparent;
  outline: none !important;
}
.card-title a i {
  min-width: 17px;
  margin-right: 2.4rem;
}
.card-title a:before {
  content: "\e802";
  display: inline-block;
  position: absolute;
  right: 1.2rem;
  top: 50%;
  color: #3aafa9;
  font-family: "molla";
  line-height: 1;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transition: all 0.3s;
}
.card-title a.collapsed {
  color: #333;
}
.card-title a.collapsed:hover,
.card-title a.collapsed:focus {
  color: #3aafa9;
}
.card-title a.collapsed:before {
  content: "\f110";
  color: #8c8c8c;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.card-body {
  padding: 0.4rem 4rem 1.8rem 1.2rem;
  border: none;
  border-radius: 0;
}
.accordion-icon .card-body {
  padding-left: 5.5rem !important;
}
.accordion-plus .card-title a:before {
  content: "\f28e";
}
.accordion-plus .card-title a.collapsed:before {
  content: "\f2c2";
}
.accordion-rounded .card:first-child {
  border-radius: 0.3rem 0.3rem 0 0;
}
.accordion-rounded .card:last-child {
  border-radius: 0 0 0.3rem 0.3rem;
}
.card.card-box .card-title a {
  padding-left: 2rem;
}
.card.card-box .card-title a:before {
  right: 2rem;
}
.card.card-box .card-title a i {
  margin-right: 1.4rem;
}
.card.card-box .card-body {
  padding: 1rem 2rem 2rem;
}
.card.card-sm .card-title {
  font-size: 1.6rem;
  letter-spacing: -0.01em;
}
.card.card-sm .card-title a {
  padding-top: 2.1rem;
  padding-bottom: 2.1rem;
}
.card.card-sm .card-title a:before {
  right: 2rem;
}
.card.card-sm .card-body {
  padding: 1rem 2rem 2rem;
}
.card.bg-light,
.card.bg-white {
  background-color: #fff !important;
  border: 0.1rem solid #ebebeb;
}
.card.bg-light .card-title a,
.card.bg-white .card-title a {
  background-color: #fff;
}
.card.bg-light .card-title a.collapsed {
  background-color: #fafafa;
}
@media screen and (min-width: 992px) {
  .card-title {
    font-size: 2rem;
  }
}
.nav-link:focus {
  outline: none !important;
}
.nav.nav-tabs {
  border-bottom-right-radius: 0.3rem;
  border: 0.1rem solid #d7d7d7;
  border-top-width: 0;
  border-right-width: 0;
  border-left-width: 0;
}
.nav.nav-tabs .nav-link {
  color: #777;
  font-weight: 500;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.025em;
  padding: 0.85rem 2.2rem;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
  text-align: center;
  transition: all 0.35s ease;
}
.nav.nav-tabs .nav-link:hover,
.nav.nav-tabs .nav-link:focus {
  color: #3aafa9;
  border-color: transparent;
}
.nav.nav-tabs .nav-item + .nav-item {
  margin-left: 0.1rem;
}
.nav.nav-tabs .nav-item.show .nav-link,
.nav.nav-tabs .nav-item .nav-link.active {
  color: #3aafa9;
  border-color: #d7d7d7;
  border-bottom-color: transparent;
}
.nav.nav-tabs.nav-tabs-bg .nav-link:not(.active) {
  border-color: #ebebeb #ebebeb #d7d7d7 #ebebeb;
  background-color: #fafafa;
}
.nav.nav-tabs.justify-content-center {
  border-bottom-left-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}
.tab-content-border {
  border: 0.1rem solid #d7d7d7;
  border-radius: 0.3rem;
  border-top-left-radius: 0;
  border-top-width: 0;
}
.justify-content-center + .tab-content-border {
  border-top-left-radius: 0.3rem;
}
.tab-pane {
  padding: 1.4rem 2.2rem;
}
.tab-pane p:last-child {
  margin-bottom: 0;
}
.nav.nav-pills .nav-link {
  color: #777;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  padding: 0.45rem 1rem;
  border-radius: 0;
  text-align: center;
  text-transform: uppercase;
  border: none;
  border-bottom: 0.1rem solid transparent;
  background-color: transparent;
  transition: all 0.35s ease;
}
.nav.nav-pills .nav-link:hover,
.nav.nav-pills .nav-link:focus {
  color: #3aafa9;
}
.nav.nav-pills .nav-link:focus {
  outline: none !important;
}
.nav.nav-pills .nav-item + .nav-item {
  margin-left: 1rem;
}
.nav.nav-pills .nav-item.show .nav-link,
.nav.nav-pills .nav-item .nav-link.active {
  color: #3aafa9;
  border-color: #d7d7d7;
  border-bottom-color: #3aafa9;
}
.nav-pills + .tab-content .tab-pane {
  padding: 1.4rem 0;
}
.nav-pills + .tab-content .tab-pane p:last-child {
  margin-bottom: 0;
}
.tabs-vertical {
  display: flex;
  align-items: flex-start;
  align-items: stretch;
}
.tabs-vertical .tab-content-border {
  border-top-width: 0.1rem;
  border-left-width: 0;
  border-bottom-left-radius: 0;
}
.tabs-vertical .nav {
  flex-shrink: 0;
}
.tabs-vertical .nav .nav-link {
  min-width: 100px;
}
.tabs-vertical .nav.nav-tabs {
  border-bottom-width: 0;
  border-right-width: 0.1rem;
}
.tabs-vertical .nav.nav-tabs .nav-link {
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0;
  border-bottom-left-radius: 0.3rem;
}
.tabs-vertical .nav.nav-tabs .nav-item {
  margin-bottom: 0;
  margin-right: -1px;
}
.tabs-vertical .nav.nav-tabs .nav-item + .nav-item {
  margin-left: 0;
  margin-top: 1px;
}
.tabs-vertical .nav.nav-tabs .nav-item.show .nav-link,
.tabs-vertical .nav.nav-tabs .nav-item .nav-link.active {
  border-color: #d7d7d7;
  border-right-color: transparent;
}
.tabs-vertical .nav.nav-tabs.nav-tabs-bg .nav-link:not(.active) {
  border-color: #ebebeb #d7d7d7 #ebebeb #ebebeb;
  background-color: #fafafa;
}
.tab-content.tab-content-carousel > .tab-pane {
  display: block;
  visibility: hidden;
  height: 0 !important;
}
.tab-content.tab-content-carousel > .tab-pane:not(.active) {
  overflow: hidden !important;
}
.tab-content.tab-content-carousel > .active {
  height: auto !important;
  visibility: visible;
}
.nav.nav-border-anim .nav-link {
  position: relative;
  border-bottom: none;
}
.nav.nav-border-anim .nav-link:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 0.1rem;
  background-color: #3aafa9;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s ease;
}
.form-tab .nav.nav-border-anim .nav-link:before {
  height: 0.2rem;
}
.nav.nav-border-anim .nav-link.active:before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.nav.nav-border-anim.nav-pills-mobile .nav-link:before {
  height: 0.2rem;
}
@media screen and (min-width: 992px) {
  .nav-pills + .tab-content .tab-pane {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
.btn-wrap {
  display: inline-block;
  margin-bottom: 2rem;
}
.btn-wrap > span {
  display: block;
  color: #ccc;
  margin-bottom: 0.3rem;
}
.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0.85rem 1.5rem;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  min-width: 170px;
  border-radius: 0;
  white-space: normal;
  transition: all 0.3s;
}
.btn span {
  line-height: 1;
}
.btn i:first-child {
  margin-right: 1rem;
}
.btn i:last-child {
  margin-left: 1rem;
}
.btn:focus {
  box-shadow: none;
}
.btn:focus,
.btn:active {
  outline: none !important;
}
.btn:active:focus {
  box-shadow: none !important;
}
.btn.btn-minwidth-sm {
  min-width: 112px;
}
.btn.btn-minwidth {
  min-width: 170px;
}
.btn.btn-minwidth-lg {
  min-width: 218px;
}
.btn:active {
  outline: none;
}
.btn-rounded {
  border-radius: 0.2rem;
}
.btn-round {
  border-radius: 3rem;
}
.btn-lg {
  font-weight: 500;
  font-size: 1.5rem;
  min-width: 170px;
  padding: 1.1rem 2rem;
}
.btn-lg i:first-child {
  margin-right: 1.4rem;
}
.btn-lg i:last-child {
  margin-left: 1.4rem;
}
.btn-more {
  padding-top: 1.15rem;
  padding-bottom: 1.15rem;
  min-width: 230px;
  text-transform: uppercase;
}
.btn-link {
  padding: 0.4rem 1rem;
  min-width: 0;
  color: #3aafa9;
  text-decoration: none;
  border: none;
  border-bottom: 0.1rem solid transparent;
  letter-spacing: 0;
  font-size: 1.4rem;
  min-width: 0;
  font-family: "Poppins", sans-serif;
}
.btn-link.btn-link-dark {
  color: #333;
}
.btn-link:hover,
.btn-link:focus,
.btn-link .btn-link-dark:hover,
.btn-link .btn-link-dark:focus {
  color: #3aafa9;
  text-decoration: none;
  border-color: #3aafa9;
}
.btn-link i:first-child {
  margin-right: 1rem;
}
.btn-link i:last-child {
  margin-left: 1rem;
}
.btn-hover-text {
  display: none;
}
.btn:hover .btn-text,
.btn:focus .btn-text {
  display: none;
}
.btn:hover .btn-hover-text,
.btn:focus .btn-hover-text {
  display: inline-block;
}
.btn-primary {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #17252a;
  border-color: #17252a;
  box-shadow: none;
}
.btn-primary.disabled,
.btn-primary:disabled {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
}
.btn-secondary {
  color: #fff;
  background-color: #17252a;
  border-color: #17252a;
  box-shadow: none;
}
.btn-secondary:hover,
.btn-secondary:focus,
.btn-secondary.focus,
.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-secondary.disabled,
.btn-secondary:disabled {
  color: #fff;
  background-color: #2b7a78;
  border-color: #2b7a78;
}
.btn-white {
  color: #333;
  background-color: #fff;
  border-color: #fff;
  box-shadow: none;
}
.btn-white:hover,
.btn-white:focus,
.btn-white.focus,
.btn-white:not(:disabled):not(.disabled):active,
.btn-white:not(:disabled):not(.disabled).active,
.show > .btn-white.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-white.disabled,
.btn-white:disabled {
  color: #333;
  background-color: #fff;
  border-color: #fff;
}
.btn-white-2 {
  color: #333;
  background-color: #fff;
  border-color: #fff;
  box-shadow: none;
}
.btn-white-2:hover,
.btn-white-2:focus,
.btn-white-2.focus,
.btn-white-2:not(:disabled):not(.disabled):active,
.btn-white-2:not(:disabled):not(.disabled).active,
.show > .btn-white-2.dropdown-toggle {
  color: #fff;
  background-color: #2b7a78;
  border-color: #2b7a78;
  box-shadow: none;
}
.btn-white-2.disabled,
.btn-white-2:disabled {
  color: #333;
  background-color: #fff;
  border-color: #fff;
}
.btn-primary-white {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-primary-white:hover,
.btn-primary-white:focus,
.btn-primary-white.focus,
.btn-primary-white:not(:disabled):not(.disabled):active,
.btn-primary-white:not(:disabled):not(.disabled).active,
.show > .btn-primary-white.dropdown-toggle {
  color: #3aafa9;
  background-color: #fff;
  border-color: #fff;
  box-shadow: none;
}
.btn-primary-white.disabled,
.btn-primary-white:disabled {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
}
.btn-white-primary {
  color: #3aafa9;
  background-color: #fff;
  border-color: #fff;
  box-shadow: none;
}
.btn-white-primary:hover,
.btn-white-primary:focus,
.btn-white-primary.focus,
.btn-white-primary:not(:disabled):not(.disabled):active,
.btn-white-primary:not(:disabled):not(.disabled).active,
.show > .btn-white-primary.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-white-primary.disabled,
.btn-white-primary:disabled {
  color: #3aafa9;
  background-color: #fff;
  border-color: #fff;
}
.btn-dark {
  color: #fff;
  background-color: #333;
  border-color: #333;
  box-shadow: none;
}
.btn-dark:hover,
.btn-dark:focus,
.btn-dark.focus,
.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-dark.disabled,
.btn-dark:disabled {
  color: #fff;
  background-color: #333;
  border-color: #333;
}
.btn-outline {
  color: #3aafa9;
  background-color: transparent;
  background-image: none;
  border-color: #ebebeb;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
}
.btn-outline:hover,
.btn-outline:focus,
.btn-outline.focus,
.btn-outline:not(:disabled):not(.disabled):active,
.btn-outline:not(:disabled):not(.disabled).active,
.show > .btn-outline.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
  border-color: #ebebeb;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}
.btn-outline.disabled,
.btn-outline:disabled {
  color: #3aafa9;
  background-color: transparent;
}
.btn-outline-primary {
  color: #3aafa9;
  background-color: transparent;
  background-image: none;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-primary:hover,
.btn-outline-primary:focus,
.btn-outline-primary.focus,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
  border-color: #ebebeb;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
  color: #3aafa9;
  background-color: transparent;
}
.btn-outline-primary-2 {
  color: #3aafa9;
  background-color: transparent;
  background-image: none;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-primary-2:hover,
.btn-outline-primary-2:focus,
.btn-outline-primary-2.focus,
.btn-outline-primary-2:not(:disabled):not(.disabled):active,
.btn-outline-primary-2:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary-2.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-primary-2.disabled,
.btn-outline-primary-2:disabled {
  color: #3aafa9;
  background-color: transparent;
}
.btn-outline-light {
  color: #fff;
  background-color: transparent;
  background-image: none;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-light:hover,
.btn-outline-light:focus,
.btn-outline-light.focus,
.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-light.disabled,
.btn-outline-light:disabled {
  color: #fff;
  background-color: transparent;
}
.btn-outline-dark {
  color: #333;
  background-color: transparent;
  background-image: none;
  border-color: #d7d7d7;
  box-shadow: none;
}
.btn-outline-dark:hover,
.btn-outline-dark:focus,
.btn-outline-dark.focus,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
  border-color: #ebebeb;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
  color: #333;
  background-color: transparent;
}
.btn-outline-dark-2 {
  color: #333;
  background-color: transparent;
  background-image: none;
  border-color: #ebebeb;
  box-shadow: none;
}
.btn-outline-dark-2:hover,
.btn-outline-dark-2:focus,
.btn-outline-dark-2.focus,
.btn-outline-dark-2:not(:disabled):not(.disabled):active,
.btn-outline-dark-2:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark-2.dropdown-toggle {
  color: #3aafa9;
  background-color: #fafafa;
  border-color: #ebebeb;
  box-shadow: none;
}
.btn-outline-dark-2.disabled,
.btn-outline-dark-2:disabled {
  color: #333;
  background-color: transparent;
}
.btn-outline-dark-3 {
  color: #333;
  background-color: transparent;
  background-image: none;
  border-color: #d7d7d7;
  box-shadow: none;
}
.btn-outline-dark-3:hover,
.btn-outline-dark-3:focus,
.btn-outline-dark-3.focus,
.btn-outline-dark-3:not(:disabled):not(.disabled):active,
.btn-outline-dark-3:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark-3.dropdown-toggle {
  color: #3aafa9;
  background-color: transparent;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-dark-3.disabled,
.btn-outline-dark-3:disabled {
  color: #333;
  background-color: transparent;
}
.btn-outline-darker {
  color: #333;
  background-color: transparent;
  background-image: none;
  border-color: #d7d7d7;
  box-shadow: none;
}
.btn-outline-darker:hover,
.btn-outline-darker:focus,
.btn-outline-darker.focus,
.btn-outline-darker:not(:disabled):not(.disabled):active,
.btn-outline-darker:not(:disabled):not(.disabled).active,
.show > .btn-outline-darker.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-darker.disabled,
.btn-outline-darker:disabled {
  color: #333;
  background-color: transparent;
}
.btn-outline-gray {
  color: #333;
  background-color: transparent;
  background-image: none;
  border-color: #959595;
  box-shadow: none;
}
.btn-outline-gray:hover,
.btn-outline-gray:focus,
.btn-outline-gray.focus,
.btn-outline-gray:not(:disabled):not(.disabled):active,
.btn-outline-gray:not(:disabled):not(.disabled).active,
.show > .btn-outline-gray.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-gray.disabled,
.btn-outline-gray:disabled {
  color: #333;
  background-color: transparent;
}
.btn-outline-lightgray {
  color: #333;
  background-color: transparent;
  background-image: none;
  border-color: #ebebeb;
  box-shadow: none;
}
.btn-outline-lightgray:hover,
.btn-outline-lightgray:focus,
.btn-outline-lightgray.focus,
.btn-outline-lightgray:not(:disabled):not(.disabled):active,
.btn-outline-lightgray:not(:disabled):not(.disabled).active,
.show > .btn-outline-lightgray.dropdown-toggle {
  color: #3aafa9;
  background-color: #f5f6f9;
  border-color: #ebebeb;
  box-shadow: none;
}
.btn-outline-lightgray.disabled,
.btn-outline-lightgray:disabled {
  color: #333;
  background-color: transparent;
}
.btn-shadow {
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05) !important;
}
.btn-shadow:hover,
.btn-shadow:focus,
.btn-shadow:active {
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15) !important;
}
.btn-outline-white {
  color: #fff;
  background-color: transparent;
  background-image: none;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-white:hover,
.btn-outline-white:focus,
.btn-outline-white.focus,
.btn-outline-white:not(:disabled):not(.disabled):active,
.btn-outline-white:not(:disabled):not(.disabled).active,
.show > .btn-outline-white.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
  box-shadow: none;
}
.btn-outline-white.disabled,
.btn-outline-white:disabled {
  color: #fff;
  background-color: transparent;
}
.btn-outline-white-2 {
  color: #fff;
  background-color: transparent;
  background-image: none;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-white-2:hover,
.btn-outline-white-2:focus,
.btn-outline-white-2.focus,
.btn-outline-white-2:not(:disabled):not(.disabled):active,
.btn-outline-white-2:not(:disabled):not(.disabled).active,
.show > .btn-outline-white-2.dropdown-toggle {
  color: #fff;
  background-color: #2b7a78;
  border-color: #2b7a78;
  box-shadow: none;
}
.btn-outline-white-2.disabled,
.btn-outline-white-2:disabled {
  color: #fff;
  background-color: transparent;
}
.btn-outline-white-3 {
  color: #fff;
  background-color: transparent;
  background-image: none;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-white-3:hover,
.btn-outline-white-3:focus,
.btn-outline-white-3.focus,
.btn-outline-white-3:not(:disabled):not(.disabled):active,
.btn-outline-white-3:not(:disabled):not(.disabled).active,
.show > .btn-outline-white-3.dropdown-toggle {
  color: #333;
  background-color: #fff;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-white-3.disabled,
.btn-outline-white-3:disabled {
  color: #fff;
  background-color: transparent;
}
.btn-outline-white-4 {
  color: #fff;
  background-color: transparent;
  background-image: none;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-white-4:hover,
.btn-outline-white-4:focus,
.btn-outline-white-4.focus,
.btn-outline-white-4:not(:disabled):not(.disabled):active,
.btn-outline-white-4:not(:disabled):not(.disabled).active,
.show > .btn-outline-white-4.dropdown-toggle {
  color: #3aafa9;
  background-color: #fff;
  border-color: #fff;
  box-shadow: none;
}
.btn-outline-white-4.disabled,
.btn-outline-white-4:disabled {
  color: #fff;
  background-color: transparent;
}
.bg-image .btn-wrap > span {
  color: #777;
}
.bg-image .btn-link-dark {
  color: #fff;
}
.bg-image .btn-link-dark:hover,
.bg-image .btn-link-dark:focus {
  color: #3aafa9;
  border-color: #3aafa9;
}
.bg-image .btn-outline-primary:hover,
.bg-image .btn-outline-primary:focus,
.bg-image .btn-outline-primary.focus,
.bg-image .btn-outline-primary:not(:disabled):not(.disabled):active,
.bg-image .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .bg-image .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #3aafa9;
  border-color: #3aafa9;
}
.bg-image .btn-outline-dark {
  color: #fff;
  border-color: #fff;
}
.bg-image .btn-outline-dark:hover,
.bg-image .btn-outline-dark:focus,
.bg-image .btn-outline-dark.focus,
.bg-image .btn-outline-dark:not(:disabled):not(.disabled):active,
.bg-image .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .bg-image .btn-outline-dark.dropdown-toggle {
  color: #3aafa9;
  background-color: #fff;
  border-color: #fff;
}
.product {
  position: relative;
  margin-bottom: 1rem;
  transition: box-shadow 0.35s ease;
  background-color: #fff;
}
.owl-carousel .product {
  margin-bottom: 0 !important;
}
.product:hover {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}
.product-media {
  position: relative;
  display: block;
  background-color: #d7d7d7;
  margin-bottom: 0;
  overflow: hidden;
}
.product-media > a {
  display: block;
}
.product-image {
  display: block;
  width: 100%;
  height: auto;
}
.product-image-hover {
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  width: 100%;
  height: auto;
  transition: all 0.4s ease;
}
.product:hover .product-image-hover {
  opacity: 1;
}
.product-countdown {
  position: absolute;
  left: 0.8rem;
  right: 0.8rem;
  bottom: 1.3rem;
  z-index: 6;
  transition: all 0.4s ease;
  visibility: visible;
  opacity: 1;
}
.product-countdown .countdown-show4 .countdown-section {
  width: calc(25% - 10px);
}
.product-countdown .countdown-section {
  font-size: 1rem;
  line-height: 1;
  padding: 1.4rem 0 1.2rem;
  margin-left: 0.5rem;
  margin-right: 0.5rem;
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 0.4rem;
}
.product-countdown .countdown-section:not(:last-child):after {
  color: #fff;
  content: ":";
  display: inline-block;
  font-weight: 400;
  font-size: 20px;
  line-height: 1;
  position: absolute;
  left: 100%;
  margin-left: 3px;
  margin-top: -1px;
  top: 50%;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.product-countdown .countdown-period {
  display: block;
  font-weight: 400;
  color: #333333;
  text-transform: lowercase;
  width: 100%;
  padding-left: 0.2rem;
  padding-right: 0.2rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.product-countdown .countdown-amount {
  display: inline-block;
  color: #ef837b;
  font-weight: 500;
  font-size: 1.8rem;
  letter-spacing: -0.03em;
  margin-bottom: 0.6rem;
}
.product-countdown.countdown-primary .countdown-amount {
  color: #3aafa9;
}
.product-countdown-container {
  position: absolute;
  left: 1.4rem;
  right: 1.4rem;
  bottom: 1.3rem;
  z-index: 6;
  padding-top: 0.9rem;
  padding-bottom: 0.9rem;
  border-radius: 0.3rem;
  background-color: rgba(255, 255, 255, 0.95);
  letter-spacing: -0.01em;
  transition: all 0.4s ease;
  visibility: visible;
  opacity: 1;
}
.product-countdown-container .product-contdown-title {
  display: block;
  color: #333;
  font-weight: 400;
  font-size: 1.3rem;
  line-height: 1.2;
  margin-bottom: 0.3rem;
  text-align: center;
}
.product-countdown-container .product-countdown {
  position: relative;
  left: auto;
  right: auto;
  bottom: auto;
  z-index: 6;
  line-height: 1;
  opacity: 1;
}
.product-countdown-container .product-countdown .countdown-amount {
  font-weight: 500;
  font-size: 1.4rem;
  line-height: 1;
  margin-bottom: 0;
  text-transform: uppercase;
}
.product:hover .product-countdown,
.product:hover .product-countdown-container {
  opacity: 0;
  visibility: hidden;
}
.product-body {
  position: relative;
  padding: 1.6rem 2rem;
  transition: all 0.35s ease;
  background-color: #fff;
}
.product-body.product-action-inner {
  padding-right: 4rem;
}
.product-title {
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.25;
  letter-spacing: -0.01em;
  color: #333333;
  margin-bottom: 0.2rem;
}
.product-title a {
  color: inherit;
}
.product-title a:hover,
.product-title a:focus {
  color: #3aafa9;
}
.product-cat {
  color: #777;
  font-weight: 300;
  font-size: 1.3rem;
  line-height: 1.2;
  letter-spacing: -0.01em;
  margin-bottom: 0.3rem;
}
.product-cat a {
  color: inherit;
}
.product-cat a:hover,
.product-cat a:focus {
  color: #666;
}
.product-price {
  display: flex;
  align-items: center;
  flex-flow: wrap;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.25;
  color: #3aafa9;
  margin-bottom: 1.3rem;
}
.new-price {
  color: #ef837b;
  margin-right: 0.8rem;
}
.old-price {
  color: #cccccc;
  text-decoration: line-through;
}
.out-price {
  color: #cccccc;
}
.out-text {
  display: block;
  width: 100%;
  font-size: 1.3rem;
  margin-top: 0.2rem;
}
.product-label {
  position: absolute;
  z-index: 1;
  top: 2rem;
  left: 2rem;
  font-weight: 400;
  font-size: 1.3rem;
  line-height: 1.6rem;
  letter-spacing: -0.01em;
  padding: 0.5rem 0.9rem;
  min-width: 45px;
  text-align: center;
  color: #333333;
  background-color: #fff;
}
.product-label + .product-label {
  top: 5rem;
}
.product-label.label-sale {
  color: #fff;
  background-color: #ef837b;
}
.product-label.label-new {
  color: #fff;
  background-color: #2b7a78;
}
.product-label.label-top {
  color: #fff;
  background-color: #7dd2ea;
}
.product-label.label-out {
  color: #fff;
  background-color: #ccc;
}
.product-label.label-primary {
  color: #fff;
  background-color: #3aafa9;
}
.product-label.label-secondary {
  color: #fff;
  background-color: #2b7a78;
}
.product-label-text {
  color: #3aafa9;
  font-weight: 400;
  font-size: 1.3rem;
  line-height: 1;
  letter-spacing: -0.01em;
  margin-top: -0.1rem;
}
.label-circle {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 4.6rem;
  height: 4.6rem;
  min-width: 0;
  border-radius: 50%;
  line-height: 1;
}
.label-circle + .label-circle {
  top: 5.6rem;
}
.label-circle.label-out {
  font-size: 1.1rem;
}
.ratings-container {
  display: flex;
  align-items: center;
  font-size: 1.3rem;
  margin-bottom: 1.7rem;
  line-height: 1;
  white-space: nowrap;
}
.ratings {
  position: relative;
  color: #cccccc;
}
.ratings,
.ratings-val {
  display: inline-block;
  font-size: 1.4rem;
  letter-spacing: 0.1em;
  line-height: 1;
  font-family: "molla";
}
.ratings:before,
.ratings-val:before {
  content: "\f318""\f318""\f318""\f318""\f318";
}
.ratings-val {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  color: #fcb941;
}
.ratings-primary .ratings-val {
  color: #3aafa9;
}
.ratings-text {
  color: #cccccc;
  letter-spacing: -0.01em;
  margin-left: 0.8rem;
}
.ratings-text a {
  color: inherit;
}
.ratings-text a:hover,
.ratings-text a:focus {
  color: #3aafa9;
}
.product-action {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.95);
  z-index: 10;
  transition: all 0.35s ease;
  opacity: 0;
  visibility: hidden;
  transform: translateY(100%);
}
.product:hover .product-action,
.product:focus .product-action {
  visibility: visible;
  opacity: 1;
  transform: translateY(0);
}
.action-icon-top {
  padding-top: 0.8rem;
  padding-bottom: 0.8rem;
}
.action-icon-top .btn-product {
  padding-top: 1rem;
  padding-bottom: 1rem;
  flex-direction: column;
}
.action-icon-top .btn-product span {
  margin-top: 0.9rem;
}
.action-icon-top:before {
  margin-right: 0;
}
.btn-product {
  color: #3aafa9;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8rem;
  line-height: 1;
  transition: all 0.35s ease;
  padding-top: 1.9rem;
  padding-bottom: 1.9rem;
  flex-grow: 1;
  flex-basis: 0;
}
.btn-product + .btn-product {
  border-left: 0.1rem dotted #e5e5e5;
}
.btn-product:before {
  font-family: "molla";
  margin-right: 0.9rem;
}
.btn-product span {
  color: #666666;
  font-weight: 400;
  font-size: 1.3rem;
  letter-spacing: -0.01em;
  transition: all 0.35s ease;
}
.btn-product:hover,
.btn-product:focus {
  outline: none !important;
}
.btn-product:hover span,
.btn-product:focus span {
  color: #3aafa9;
  box-shadow: 0 1px 0 0 #3aafa9;
}
.product-action-dark {
  background-color: #333333;
}
.product-action-dark .btn-product:not(:hover):not(:focus) span {
  color: #fff;
}
.product-action-dark .btn-product + .btn-product {
  border-left-color: #4b4b4b;
}
.product-action-vertical {
  display: flex;
  flex-direction: column;
  position: absolute;
  right: 2rem;
  top: 2rem;
  background-color: transparent;
  z-index: 10;
  visibility: hidden;
  opacity: 0;
  transition: all 0.35s ease;
  transform: translateX(-15px);
}
.product:hover .product-action-vertical {
  visibility: visible;
  opacity: 1;
  transform: translateX(0);
}
.btn-product-icon {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  padding: 0;
  font-size: 1.4rem;
  line-height: 1;
  transition: all 0.35s ease;
  padding: 0;
  border-radius: 50%;
  color: #3aafa9;
  background-color: #fff;
}
.btn-product-icon:before {
  font-family: "molla";
}
.btn-product-icon span {
  display: none;
}
.btn-product-icon:hover,
.btn-product-icon:focus {
  color: #fff;
  background-color: #3aafa9;
}
.btn-product-icon + .btn-product-icon {
  margin-top: 1rem;
}
.btn-cart:before {
  content: "\e812";
}
.btn-wishlist {
  font-size: 1.6rem;
}
.btn-wishlist:before {
  content: "\f234";
}
.product-body .btn-wishlist {
  position: absolute;
  top: 3.4rem;
  right: 2rem;
  color: #ccc;
  padding: 0;
  margin: 0;
  background: none;
}
.product-body .btn-wishlist:before {
  margin-right: 0;
}
.product-body .btn-wishlist span {
  display: none;
}
.product-body .btn-wishlist:hover,
.product-body .btn-wishlist:focus {
  color: #3aafa9;
  background: none;
}
.btn-quickview:before {
  content: "\f145";
}
.btn-compare:before {
  content: "\f2d0";
}
.btn-expandable {
  position: relative;
}
.btn-expandable span {
  position: absolute;
  right: 100%;
  top: 0;
  bottom: 0;
  align-items: center;
  display: inline-flex;
  font-weight: 300;
  font-size: 1.1rem;
  white-space: nowrap;
  letter-spacing: 0;
  min-width: 100px;
  padding-left: 1.8rem;
  padding-right: 0.4rem;
  color: #fff;
  background-color: #3aafa9;
  transition: all 0.35s ease;
  opacity: 0;
  visibility: hidden;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  transform: translateX(15px);
  z-index: -1;
}
.btn-expandable:hover,
.btn-expandable:focus {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-expandable:hover span,
.btn-expandable:focus span {
  visibility: visible;
  opacity: 1;
  transform: translateX(0);
}
.product-size {
  display: flex;
  align-items: center;
  padding-top: 0.2rem;
  margin-bottom: 1.6rem;
}
.product-size a {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  width: 2.1rem;
  height: 2.1rem;
  font-weight: 400;
  font-size: 1.2rem;
  padding-top: 0.1rem;
  line-height: 1;
  color: #666666;
  background-color: #f7f8fa;
  border-radius: 0.2rem;
  transition: all 0.35s ease;
  margin-right: 0.5rem;
}
.product-size a:last-child {
  margin-right: 0;
}
.product-size a:hover,
.product-size a:focus,
.product-size a.active {
  color: #fff;
  background-color: #333;
}
.product-size a.disabled {
  color: #cccccc;
  pointer-events: none;
}
.product-nav {
  display: flex;
  align-items: center;
}
.product-nav-dots {
  margin-bottom: 0.5rem;
}
.product-nav-dots a,
.product-nav-dots span {
  display: block;
  width: 1.7rem;
  height: 1.7rem;
  border-radius: 50%;
  border: 0.2rem solid #fff;
  margin-right: 0.5rem;
  transition: box-shadow 0.35s ease;
  background-repeat: no-repeat;
  background-position: center center;
}
.product-nav-dots a.active,
.product-nav-dots a:hover,
.product-nav-dots a:focus,
.product-nav-dots span.active,
.product-nav-dots span:hover,
.product-nav-dots span:focus {
  box-shadow: 0 0 0 0.1rem #cccccc;
}
.product-nav-dots a:last-child,
.product-nav-dots span:last-child {
  margin-right: 0;
}
.product-nav-thumbs {
  padding-top: 0.2rem;
  margin-bottom: 1.6rem;
}
.product-nav-thumbs a,
.product-nav-thumbs span {
  display: flex;
  align-items: center;
  width: 4.4rem;
  height: 4.4rem;
  border-radius: 0.2rem;
  border: 0.2rem solid #fff;
  margin-right: 0.4rem;
  transition: box-shadow 0.35s ease;
}
.product-nav-thumbs a.active,
.product-nav-thumbs a:hover,
.product-nav-thumbs a:focus,
.product-nav-thumbs span.active,
.product-nav-thumbs span:hover,
.product-nav-thumbs span:focus {
  box-shadow: 0 0 0 0.1rem #cccccc;
}
.product-nav-thumbs a:last-child,
.product-nav-thumbs span:last-child {
  margin-right: 0;
}
.product-nav-thumbs img {
  border-radius: 0.2rem;
}
.product-disabled {
  pointer-events: none;
}
.product-disabled .btn-product,
.product-disabled .btn-product-icon {
  pointer-events: none;
  color: #fff;
  background-color: #ccc !important;
}
.product.text-center .product-price,
.product.text-center .ratings-container,
.product.text-center .product-nav,
.product.text-center .product-size {
  justify-content: center;
}
.product.product-2 .product-body {
  padding-bottom: 0.4rem;
}
.product.product-2 .product-action {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.product.product-2 .btn-product {
  padding-top: 0.1rem;
  padding-bottom: 0.1rem;
}
.product.product-2 .btn-product + .btn-product {
  border-left-style: solid;
}
.product.product-2 .ratings-container:last-child {
  margin-bottom: 1.6rem;
}
.product.product-2 .product-action-vertical {
  top: 3rem;
}
.product.product-2 .product-nav-dots {
  margin-bottom: 2rem;
}
.product-footer {
  display: none;
  padding-top: 1.3rem;
}
.product.product-3 {
  position: relative;
  overflow: hidden;
  background-color: #fff;
}
.product.product-3 .product-action {
  position: absolute;
  bottom: 100%;
  border-bottom: 0.1rem solid #ebebeb;
  background-color: #fff;
  transform: translateY(0);
  transition-duration: 0.25s;
}
.product.product-3 .btn-product {
  padding-top: 1.05rem;
  padding-bottom: 1.05rem;
}
.product.product-3 .btn-product:not(:hover):not(:focus) span {
  color: #333;
}
.product.product-3 .product-price,
.product.product-3 .product-nav {
  margin-bottom: 0;
}
.product.product-3 .product-body {
  background-color: #fff;
}
.product.product-3 .product-footer {
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #fff;
  transform: translateY(100%);
  visibility: hidden;
  transition: all 0.35s ease;
  padding: 0 2rem 1rem;
}
.product.product-3:hover {
  box-shadow: none;
}
.product.product-4 .product-body {
  padding-bottom: 2rem;
  z-index: 2;
}
.product.product-4 .product-body div:last-child {
  margin-bottom: 0;
}
.product.product-4 .product-action {
  background-color: transparent;
}
.product.product-4 .product-action-vertical {
  top: 3rem;
  transform: translate(0, 10px);
}
.product.product-4 .btn-product {
  padding-top: 1.1rem;
  padding-bottom: 1.1rem;
  color: #fff;
  background-color: #3aafa9;
}
.product.product-4 .btn-product span {
  color: inherit;
  transition-duration: 0s;
}
.product.product-4 .btn-product:hover,
.product.product-4 .btn-product:focus {
  color: #fff;
  background-color: #2b7a78;
}
.product.product-4 .btn-product:hover span,
.product.product-4 .btn-product:focus span {
  box-shadow: none;
}
.product.product-4 .product-title {
  margin-bottom: 1rem;
}
.product.product-4 .product-nav {
  margin-bottom: 0;
}
.product.product-4 .product-footer {
  opacity: 0;
  position: absolute;
  left: 0;
  right: 0;
  display: block;
  padding-top: 0.3rem;
  padding-bottom: 2.5rem;
  transition: all 0.35s ease;
  background-color: #fff;
  z-index: 1;
}
.product.product-4 .ratings-container {
  margin-bottom: 0;
}
.product.product-4:hover .product-action-vertical {
  transform: translate(0, 0);
}
.product.product-4:hover .product-footer {
  opacity: 1;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}
.product-4-carousel .owl-stage {
  padding-bottom: 4rem;
}
.product.product-5 .product-body {
  padding-bottom: 1.6rem;
  background-color: #fff;
  transition-duration: 0s;
  z-index: 2;
}
.product.product-5 .product-body div:last-child {
  margin-bottom: 0;
}
.product.product-5 .product-action {
  background-color: transparent;
}
.product.product-5 .product-action-vertical {
  transform: translate(10px, 0);
}
.product.product-5 .btn-product {
  padding-top: 1.1rem;
  padding-bottom: 1.1rem;
  color: #3aafa9;
  background-color: #333333;
}
.product.product-5 .btn-product span {
  color: #fff;
  transition-duration: 0s;
}
.product.product-5 .btn-product:hover,
.product.product-5 .btn-product:focus {
  color: #fff;
  background-color: #3aafa9;
}
.product.product-5 .btn-product:hover span,
.product.product-5 .btn-product:focus span {
  box-shadow: none;
}
.product.product-5 .product-title {
  margin-bottom: 1rem;
}
.product.product-5 .product-footer {
  opacity: 0;
  position: absolute;
  left: 0;
  right: 0;
  display: block;
  padding-top: 0;
  padding-bottom: 2rem;
  transition: all 0.35s ease;
  background-color: #fff;
  z-index: 1;
}
.product.product-5 .ratings-container {
  margin-bottom: 0;
}
.product.product-5 .ratings-container + .product-nav {
  margin-top: 1.7rem;
}
.product.product-5 .product-nav {
  margin-bottom: 0;
}
.product.product-5:hover .product-footer {
  opacity: 1;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}
.product-5-carousel .owl-stage {
  padding-bottom: 7rem;
}
.product.product-6 {
  overflow: hidden;
}
.product.product-6 .product-body {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding-right: 2rem;
  padding-bottom: 0;
  transform: translateY(100%);
}
.product.product-6 .product-action {
  position: static;
  left: auto;
  right: auto;
  bottom: auto;
  visibility: visible;
  opacity: 1;
  transform: translateY(0);
  background-color: transparent;
  padding-top: 1rem;
  padding-bottom: 1rem;
  border-top: 0.1rem solid #ebebeb;
  margin-top: 2.4rem;
}
.product.product-6 .btn-product {
  padding-top: 0.1rem;
  padding-bottom: 0.1rem;
}
.product.product-6 .btn-product + .btn-product {
  border-left-style: solid;
}
.product.product-6 .product-cat {
  margin-bottom: 0.5rem;
}
.product.product-6 .product-title {
  margin-bottom: 1rem;
}
.product.product-6:hover {
  box-shadow: none;
}
.product.product-6:hover .product-body {
  transform: translateY(0);
}
.product.product-7 .btn-product {
  padding-top: 1.1rem;
  padding-bottom: 1.1rem;
  color: #3aafa9;
  background-color: #fff;
  text-transform: uppercase;
  border-bottom: 0.1rem solid #ebebeb;
}
.product.product-7 .btn-product span {
  color: #3aafa9;
}
.product.product-7 .btn-product:before {
  display: inline-block;
  margin-top: -0.1rem;
}
.product.product-7 .btn-product:hover,
.product.product-7 .btn-product:focus {
  color: #fff;
  background-color: #3aafa9;
  border-bottom-color: #3aafa9;
}
.product.product-7 .btn-product:hover span,
.product.product-7 .btn-product:focus span {
  color: #fff;
  box-shadow: none;
}
.product.product-7 .product-nav-thumbs {
  margin-bottom: 1rem;
}
.product.product-8 {
  margin-bottom: 2rem;
}
.product.product-8 .product-media {
  border: 0.1rem solid #ebebeb;
}
.product.product-8 .product-body {
  padding: 1.9rem 0.5rem 4rem;
}
.product.product-8 .product-cat {
  color: #ccc;
  margin-bottom: 0.5rem;
}
.product.product-8 .product-action {
  background-color: transparent;
}
.product.product-8 .product-action-vertical {
  transform: translate(0, 10px);
}
.product.product-8 .new-price {
  color: #3aafa9;
}
.product.product-8 .btn-product {
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
  color: #fff;
  background-color: #333;
  text-transform: uppercase;
}
.product.product-8 .btn-product:before {
  color: #3aafa9;
  margin-top: -2px;
  margin-right: 0.6rem;
}
.product.product-8 .btn-product span {
  font-size: 1.4rem;
  color: inherit;
  transition-duration: 0s;
}
.product.product-8 .btn-product:hover,
.product.product-8 .btn-product:focus {
  color: #fff;
  background-color: #3aafa9;
}
.product.product-8 .btn-product:hover:before,
.product.product-8 .btn-product:focus:before {
  color: #fff;
}
.product.product-8 .btn-product:hover span,
.product.product-8 .btn-product:focus span {
  box-shadow: none;
}
.product.product-8 .product-title {
  margin-bottom: 1rem;
}
.product.product-8 .product-price {
  margin-bottom: 0.9rem;
}
.product.product-8 .product-nav {
  padding-top: 0.4rem;
  margin-bottom: 1.3rem;
}
.product.product-8 .product-nav:last-child {
  margin-bottom: 0;
}
.product.product-8 .ratings-container {
  opacity: 0;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 2.2rem;
  margin-bottom: 0;
  transition: all 0.35s ease;
}
.product.product-8:hover .product-action-vertical {
  transform: translate(0, 0);
}
.product.product-8:hover .ratings-container {
  opacity: 1;
}
.product.product-9 .product-price {
  font-size: 1.4rem;
  font-weight: 500;
  letter-spacing: 0.01em;
  color: #333;
}
.product.product-9 .old-price {
  text-decoration: none;
}
.product.product-9 .label-sale {
  background-color: #3aafa9;
  text-transform: uppercase;
}
.product.product-9 .product-body {
  padding: 1rem 2rem;
  transition: all 0.3s;
}
.product.product-9 .product-action {
  bottom: auto;
  background-color: #fff;
  text-transform: uppercase;
}
.product.product-9 .product-action::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  bottom: 1rem;
  height: 0.1rem;
  background-color: #ebebeb;
}
.product.product-9 .product-detail {
  position: absolute;
  visibility: hidden;
  padding-top: 1rem;
  opacity: 0;
  left: 50%;
  transform: translateX(-50%);
  transition: all 0.3s;
}
.product.product-9 .btn-product {
  padding-top: 1.2rem;
  padding-bottom: 2.2rem;
}
.product.product-9:hover {
  margin-bottom: -9rem !important;
  box-shadow: none;
}
.product.product-9:hover .product-body,
.product.product-9:hover .product-action {
  transform: translateY(-100%);
}
.product.product-9:hover .product-intro {
  padding-bottom: 9rem;
}
.product.product-9:hover .product-detail {
  bottom: 1rem;
  opacity: 1;
  visibility: visible;
}
.product.product-9 .product-nav-dots a,
.product.product-9 .product-nav-dots span {
  width: 4rem;
  height: 5rem;
  border-radius: 0.5rem;
}
.product.product-10:hover .product-body,
.product.product-10:focus .product-body {
  transform: translateY(-56px);
}
.product.product-10:hover .product-action,
.product.product-10:focus .product-action {
  transform: translateY(22%);
}
.product.product-10 .btn-expandable span {
  background-color: #fcb941;
}
.product.product-10 .product-media {
  background-color: #fff;
  padding: 2rem;
}
.product.product-10 .product-image-hover {
  padding: 2rem;
}
.product.product-10 .product-body .btn-wishlist {
  width: fit-content;
  left: 50%;
  right: 0;
  top: 4.5rem;
  transform: translateX(-50%);
}
.product.product-10 .product-body .btn-wishlist span {
  margin-left: 0.5rem;
  display: flex;
}
.product.product-10 .product-body .btn-wishlist:hover,
.product.product-10 .product-body .btn-wishlist:focus {
  color: #666;
}
.product.product-10 .product-body .btn-wishlist:hover::before,
.product.product-10 .product-body .btn-wishlist:focus::before {
  content: "\f233";
}
.product.product-10 .btn-product:hover span,
.product.product-10 .btn-product:focus span {
  color: #3aafa9;
  box-shadow: 0 1px 0 0 #fcb941;
}
.product.product-10 .product-action {
  display: flex;
  justify-content: center;
}
.product.product-10 .product-body {
  padding-bottom: 5rem;
}
.product.product-10 .btn-cart {
  padding: 0.5rem 3.5rem;
  border: 0.2rem solid #fcb941;
  border-radius: 0.5rem;
  color: #fcb941;
}
.product.product-10 .btn-cart span {
  text-transform: uppercase;
}
.product.product-10 .btn-cart::before {
  content: "";
}
.product.product-10 .btn-cart:hover,
.product.product-10 .btn-cart:focus {
  color: #222;
  background-color: #fcb941;
}
.product.product-10 .btn-quickview {
  color: #fcb941;
}
.product.product-10 .btn-quickview:hover,
.product.product-10 .btn-quickview:focus {
  color: #fff;
  background-color: #fcb941;
}
.product.product-10 .product-title a {
  font-size: 1.3rem;
  font-weight: 400;
  font-family: "Poppins";
  letter-spacing: 0;
  color: #333;
}
.product.product-10 .product-title a:hover,
.product.product-10 .product-title a:focus {
  color: #fcb941;
}
.product.product-10 .product-price {
  margin-top: 0.8rem;
  font-size: 1.3rem;
  font-weight: 700;
  font-family: "Poppins";
  letter-spacing: 0;
  color: #333333;
}
.product.product-10 .new-price {
  font-size: 1.3rem;
  font-weight: 700;
  font-family: "Poppins";
  letter-spacing: 0;
}
.product.product-10 .old-price {
  font-size: 1.3rem;
  font-weight: 400;
  font-family: "Poppins";
  letter-spacing: 0;
  text-decoration: none;
}
.product.product-10 .product-label {
  left: 3rem;
  text-transform: uppercase;
  font-size: 1.3rem;
  font-weight: 700;
  font-family: "Poppins";
  letter-spacing: -0.01em;
}
.product.product-10 .product-label.label-deal {
  color: #fff;
  background-color: #ef837b;
  padding: 0.5rem 2rem;
  left: 0;
  box-shadow: 0 5px 10px rgba(34, 34, 34, 0.2);
}
.product.product-11 a:hover,
.product.product-11 a:focus {
  color: #cc9966;
}
.product.product-11 .btn-product-icon {
  color: #333;
  border: 0.1rem solid #ebebeb;
}
.product.product-11 .btn-product-icon:hover,
.product.product-11 .btn-product-icon:focus {
  color: #fff;
  background-color: #cc9966;
  border-color: #cc9966;
}
.product.product-11 .product-price {
  color: #333;
}
.product.product-11 .old-price {
  text-decoration: none;
}
.product.product-11 .product-body {
  padding-bottom: 7rem;
}
.product.product-11 .product-action {
  bottom: 2rem;
}
.product.product-11 .btn-product {
  text-transform: uppercase;
  color: #333;
  border: 0.1rem solid #ebebeb;
  margin-left: 2rem;
  margin-right: 2rem;
  padding-top: 0.8rem;
  padding-bottom: 0.8rem;
}
.product.product-11 .btn-product span {
  font-size: 1.4rem;
}
.product.product-11 .btn-product:hover,
.product.product-11 .btn-product:focus {
  color: #fff;
  border-color: #cc9966;
  background-color: #cc9966;
}
.product.product-11 .btn-product:hover span,
.product.product-11 .btn-product:focus span {
  color: #fff;
  box-shadow: none;
}
.product.product-11:hover,
.product.product-11:focus {
  z-index: 10;
}
.product.product-list {
  box-shadow: none;
  padding-bottom: 2rem;
  border-bottom: 0.1rem solid #ebebeb;
  margin-bottom: 2rem;
}
.product.product-list .product-media {
  height: 100%;
}
.product.product-list .product-media > a {
  height: 100%;
}
.product.product-list .product-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.product.product-list .product-body {
  padding: 1.6rem 0 0;
}
.product.product-list .product-body .btn-wishlist {
  top: 3.1rem;
}
.product.product-list .product-list-action {
  padding: 3.4rem 0 0;
}
.product.product-list .product-content {
  color: #777;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.43;
  padding-top: 1rem;
  margin-bottom: 3.4rem;
}
.product.product-list .product-content p {
  margin-bottom: 0;
}
.product.product-list .product-action {
  position: static;
  left: auto;
  right: auto;
  bottom: auto;
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
  margin-bottom: 1.2rem;
}
.product.product-list .ratings-container {
  margin-bottom: 2.6rem;
}
.product.product-list .btn-product {
  color: #777;
  padding-top: 0;
  padding-bottom: 0;
  line-height: 1.4;
  flex: 1 1 50%;
  max-width: 50%;
}
.product.product-list .btn-product:before {
  margin-right: 0.5rem;
}
.product.product-list .btn-product span {
  color: inherit;
  font-size: 1.2rem;
  transition: box-shadow 0.35s ease, color 0s ease;
}
.product.product-list .btn-product.disabled {
  pointer-events: none;
}
.product.product-list .btn-product:hover,
.product.product-list .btn-product:focus {
  color: #3aafa9;
}
.product.product-list .btn-product:hover span,
.product.product-list .btn-product:focus span {
  color: inherit;
}
.product.product-list .btn-product.btn-cart {
  color: #3aafa9;
  border: 0.1rem solid #3aafa9;
  flex: 1 1 100%;
  max-width: 100%;
  text-transform: uppercase;
  line-height: 1;
  padding-top: 1rem;
  padding-bottom: 1rem;
  transition: all 0.35s ease;
}
.product.product-list .btn-product.btn-cart span {
  font-size: 1.3rem;
}
.product.product-list .btn-product.btn-cart:hover,
.product.product-list .btn-product.btn-cart:focus {
  color: #fff;
  background-color: #3aafa9;
}
.product.product-list .btn-product.btn-cart:hover span,
.product.product-list .btn-product.btn-cart:focus span {
  box-shadow: none;
}
.product.product-list .btn-product.btn-cart.disabled {
  color: #ccc;
  border-color: #ebebeb;
  background-color: #fafafa;
}
.product.product-list .btn-product.btn-cart.disabled:before {
  display: none;
}
.product.product-list .product-nav {
  margin-bottom: 0;
}
.product.product-sm {
  display: flex;
  align-items: flex-start;
  margin-bottom: 2rem;
}
.product.product-sm:hover {
  box-shadow: none;
}
.product.product-sm .product-media {
  flex: 0 0 80px;
  max-width: 80px;
}
.product.product-sm .product-body {
  flex: 1 1 auto;
  padding: 1rem 0 0 2rem;
}
.product.product-sm .product-cat {
  color: #cccccc;
  font-weight: 400;
  font-size: 1.3rem;
  text-transform: uppercase;
  margin-bottom: 0.2rem;
}
.product.product-sm .product-title {
  font-size: 1.4rem;
}
.product.product-sm .product-price {
  font-size: 1.6rem;
}
.product.product-sm .product-title {
  margin-bottom: 0.2rem;
}
.product.product-sm .product-price {
  margin-bottom: 0;
}
.product.product-sm .product-price .old-price {
  text-decoration: none;
}
@media screen and (min-width: 480px) {
  .just-action-icons-sm .btn-product span {
    display: none;
  }
  .just-action-icons-sm .btn-product:before {
    margin-right: 0;
  }
}
@media screen and (min-width: 768px) {
  .just-action-icons-md .btn-product span {
    display: none;
  }
  .just-action-icons-md .btn-product:before {
    margin-right: 0;
  }
}
@media screen and (min-width: 992px) {
  .just-action-icons-lg .btn-product span {
    display: none;
  }
  .just-action-icons-lg .btn-product:before {
    margin-right: 0;
  }
}
@media screen and (min-width: 1200px) {
  .just-action-icons-xl .btn-product span {
    display: none;
  }
  .just-action-icons-xl .btn-product:before {
    margin-right: 0;
  }
}
@media screen and (max-width: 1200px) {
  .product.product-9:hover .product-body,
  .product.product-9:hover .product-action {
    transform: translateY(-60%);
  }
}
@media screen and (max-width: 991px) {
  .sticky-wrapper {
    z-index: 1;
  }
}
.banners-group {
  margin-bottom: 1.9rem;
}
.banner {
  display: block;
  position: relative;
  margin-bottom: 2rem;
  background-color: #ccc;
}
.banner > a {
  position: relative;
  display: block;
  outline: none !important;
}
.banner img {
  display: block;
  max-width: none;
  width: 100%;
  height: auto;
}
.banner.banner-menu img {
  height: 100%;
}
.banner-content {
  display: inline-block;
  position: absolute;
  padding-top: 0.4rem;
  left: 2rem;
  top: 50%;
  z-index: 2;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.banner-content a:hover,
.banner-content a:focus {
  text-decoration: underline;
}
.banner-big .banner-content.banner-content-center,
.banner-content-center.banner-content {
  max-width: none;
  left: 0;
  right: 0;
  text-align: center;
}
.banner-title {
  color: #333333;
  font-weight: 500;
  font-size: 2rem;
  line-height: 1.3;
  margin-bottom: 1.5rem;
  letter-spacing: -0.03em;
}
.banner-title a {
  color: inherit;
}
.banner-title a:hover,
.banner-title a:focus {
  text-decoration: none;
}
.banner-title.text-white a {
  color: #fff;
}
.banner-subtitle {
  color: #777;
  font-weight: 300;
  font-size: 1.6rem;
  line-height: 1.2;
  letter-spacing: 0;
  margin-bottom: 1rem;
}
.banner-subtitle a {
  color: inherit;
}
.banner-subtitle a:hover,
.banner-subtitle a:focus {
  text-decoration: none;
}
.banner-subtitle.text-white a {
  color: #fff;
}
.banner-link {
  font-weight: 400;
  display: inline-block;
}
.banner-big {
  color: #cccccc;
}
.banner-big .banner-content {
  max-width: 470px;
  left: 3rem;
}
.banner-big .banner-subtitle {
  font-size: 1.8rem;
  margin-bottom: 0.6rem;
}
.banner-big .banner-title {
  font-size: 3rem;
  line-height: 1.15;
  margin-bottom: 1rem;
}
.banner-big .banner-title + .btn {
  margin-top: 1rem;
}
.banner-big p:last-of-type {
  margin-bottom: 2.3rem;
}
@media screen and (min-width: 768px) {
  .banner-content {
    left: 3rem;
  }
  .banner-big .banner-content {
    left: 6rem;
  }
  .banner-big .banner-title {
    font-size: 4rem;
  }
}
@media screen and (min-width: 992px) {
  .banner-content {
    left: 4rem;
  }
  .banner-big .banner-content {
    left: 10rem;
  }
  .banner-big .banner-title {
    font-size: 5rem;
  }
}
.banner-display > a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 1;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(51, 51, 51, 0.4);
  transition: all 0.35s ease;
}
.banner-display:hover > a:before {
  visibility: visible;
  opacity: 1;
}
.banner-display .banner-content {
  padding-top: 0;
}
.banner-display .banner-title {
  font-weight: 600;
  font-size: 2rem;
}
.banner-display.banner-link-anim .banner-title {
  margin-bottom: 0;
}
.banner-display.banner-link-anim:hover .banner-content {
  padding-bottom: 4.5rem;
}
.btn.banner-link {
  font-size: 1.4rem;
  line-height: 1;
  padding: 0.8rem 1.4rem;
  min-width: 0;
  text-transform: uppercase;
  text-decoration: none !important;
}
.btn.banner-link i {
  margin-right: 0;
  margin-left: 0;
}
.btn.banner-link i:first-child {
  margin-right: 0;
}
.btn.banner-link i:last-child {
  margin-left: 0.9rem;
}
.banner-overlay > a {
  position: relative;
}
.banner-overlay > a:after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-color: rgba(51, 51, 51, 0.25);
  z-index: 1;
  opacity: 0;
  visibility: hidden;
  transition: all 0.4s ease;
}
.banner-overlay.banner-overlay-light > a:after {
  background-color: rgba(255, 255, 255, 0.3);
}
.banner-overlay:hover > a:after,
.banner-overlay:focus > a:after {
  visibility: visible;
  opacity: 1;
}
@media screen and (min-width: 768px) {
  .banner-display .banner-title {
    font-size: 2.4rem;
  }
}
.video-banner p {
  max-width: 500px;
}
.video-banner p:last-child {
  margin-bottom: 0;
}
.video-banner.text-center p {
  margin-left: auto;
  margin-right: auto;
}
.video-banner-bg {
  padding-top: 8.5rem;
  padding-bottom: 7.5rem;
}
.video-banner-title {
  letter-spacing: -0.025em;
  margin-bottom: 3.6rem;
}
.video-banner-title > span {
  display: block;
  font-weight: 400;
  font-size: 2rem;
  letter-spacing: -0.03em;
  margin-bottom: 1.6rem;
}
.video-fullheight {
  display: flex;
  align-items: center;
}
.btn-video {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 5.4rem;
  height: 5.4rem;
  font-size: 1.6rem;
  line-height: 1;
  color: #3aafa9;
  background-color: #fff;
  border-radius: 50%;
  box-shadow: 0 0 0 1.5rem rgba(255, 255, 255, 0.2);
  transition: all 0.35s ease;
}
.btn-video i {
  margin-right: -0.2rem;
}
.btn-video:hover,
.btn-video:focus {
  color: #fff;
  background-color: #2b7a78;
  box-shadow: 0 0 0 1rem rgba(255, 255, 255, 0.2);
}
.video-banner-poster .video-banner-title {
  font-weight: 400;
  margin-bottom: 1.6rem;
}
.video-banner-poster .video-banner-title span {
  font-weight: 300;
  font-size: 1.6rem;
}
.video-poster {
  position: relative;
}
.video-poster img {
  border-radius: 0.4rem;
}
.video-poster-content {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.video-poster-title {
  font-weight: 400;
  margin-bottom: 3rem;
  letter-spacing: -0.025em;
}
.video-banner-box {
  padding: 3rem;
}
.video-banner-box .video-poster img {
  border-radius: 0;
}
.video-box-content {
  padding-left: 0;
  max-width: 460px;
  font-size: 1.5rem;
  color: #777;
}
.video-box-content .video-banner-title {
  font-weight: 400;
  margin-bottom: 1.2rem;
}
.video-box-content .video-banner-title span {
  font-weight: 300;
  font-size: 1.8rem;
  margin-bottom: 0.6rem;
}
.video-box-content p:not(:last-child) {
  margin-bottom: 2rem;
}
@media screen and (min-width: 768px) {
  .video-banner-bg {
    padding-top: 14.5rem;
    padding-bottom: 13.5rem;
  }
  .video-banner-title > span {
    font-size: 2.4rem;
  }
  .video-box-content .video-banner-title span {
    font-size: 2rem;
  }
  .btn-video {
    width: 7rem;
    height: 7rem;
    font-size: 1.8rem;
  }
}
@media screen and (min-width: 992px) {
  .video-banner-bg {
    padding-top: 18.5rem;
    padding-bottom: 17.5rem;
  }
  .video-box-content {
    padding-left: 5rem;
  }
  .video-fullheight {
    height: 100vh;
    max-height: 900px;
  }
}
@media screen and (min-width: 992px) {
  .video-box-content {
    padding-left: 7rem;
  }
}
.banner-cat .banner-title {
  margin-bottom: 0.1rem;
}
.banner-cat .banner-subtitle {
  margin-bottom: 1.6rem;
}
.banner-content-overlay {
  overflow: hidden;
  padding: 1.8rem 2rem 0.7rem;
  background-color: rgba(255, 255, 255, 0.9);
  left: 0;
  right: 0;
  top: auto;
  bottom: 0;
  transform: translateY(0);
  -ms-transform: translateY(0);
  transition: all 0.3s ease;
}
.banner-content-overlay .banner-subtitle {
  margin-bottom: 0.9rem;
}
.banner-content-overlay .banner-link {
  opacity: 0;
  position: absolute;
  bottom: 12px;
  left: 0;
  right: 0;
  transition: all 0.3s ease;
  transform: translateY(30px);
  -ms-transform: translateY(30px);
}
.banner:hover .banner-content-overlay {
  padding-bottom: 3.7rem;
  background-color: #fff;
}
.banner:hover .banner-content-overlay .banner-link {
  opacity: 1;
  transform: translateY(0);
  -ms-transform: translateY(0);
}
.banner-content-static {
  overflow: hidden;
  display: block;
  width: 100%;
  margin-top: 0;
  padding: 1.2rem 2rem;
  background-color: #fff;
  position: static;
  left: auto;
  right: auto;
  top: auto;
  bottom: auto;
  transform: translateY(0);
  -ms-transform: translateY(0);
  transition: all 0.3s ease;
}
.banner-content-static .banner-subtitle {
  transition: all 0.25s ease;
  margin-bottom: 0.9rem;
}
.banner-content-static .banner-link {
  opacity: 0;
  position: absolute;
  bottom: 19px;
  left: 0;
  right: 0;
  transition: all 0.3s ease;
  transform: translateY(30px);
  -ms-transform: translateY(30px);
}
.banner:hover .banner-content-static {
  background-color: #fff;
}
.banner:hover .banner-content-static .banner-subtitle {
  opacity: 0;
}
.banner:hover .banner-content-static .banner-link {
  opacity: 1;
  transform: translateY(0);
  -ms-transform: translateY(0);
}
.banner-content.banner-content-top {
  top: 105px;
}
.banner-content.banner-content-bottom {
  top: auto;
  bottom: 60px;
  transform: translateY(0);
  -ms-transform: translateY(0);
}
.banner-content.banner-content-right {
  left: auto;
  right: 30px;
}
.banner-link-anim .banner-content {
  transition: all 0.3s ease;
}
.banner-link-anim .banner-subtitle {
  margin-bottom: 0;
}
.banner-link-anim .banner-link {
  opacity: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  min-width: 130px;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  transition: all 0.3s ease;
  transform: translateY(-20px);
  -ms-transform: translateY(-20px);
}
.banner-link-anim .banner-content-center .banner-link {
  left: 50%;
  transform: translateY(-20px) translateX(-50%);
  -ms-transform: translateY(-20px) translateX(-50%);
}
.banner-link-anim:hover .banner-content {
  padding-bottom: 4rem;
}
.banner-link-anim:hover .banner-link {
  opacity: 1;
  transform: translateY(0);
  -ms-transform: translateY(0);
}
.banner-link-anim:hover .banner-content-center .banner-link {
  transform: translateY(0) translateX(-50%);
  -ms-transform: translateY(0) translateX(-50%);
}
.banner-badge .banner-link {
  font-size: 1.6rem;
  display: inline-block;
  background-color: #fff;
  padding: 1.2rem 2rem;
  text-align: center;
  min-width: 170px;
  border-radius: 0.2rem;
  position: absolute;
  top: auto;
  bottom: 3.2rem;
  right: auto;
  left: 50%;
  transform: translateX(-50%) translateY(0);
  -ms-transform: translateX(-50%) translateY(0);
  overflow: hidden;
}
.banner-badge .banner-title,
.banner-badge .banner-subtitle {
  transition: all 0.3s ease;
}
.banner-badge .banner-subtitle {
  margin-bottom: 0;
}
.banner-badge .banner-link-text {
  opacity: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  color: #fff;
  transition: all 0.3s ease;
  transform: translateY(100%);
  -webkit-transform: translateY(100%);
}
.banner-badge .banner-link:hover,
.banner-badge .banner-link:focus {
  text-decoration: none;
}
.banner-badge .banner-link:hover .banner-title,
.banner-badge .banner-link:hover .banner-subtitle,
.banner-badge .banner-link:focus .banner-title,
.banner-badge .banner-link:focus .banner-subtitle {
  opacity: 0;
  transform: translateY(100%);
  -webkit-transform: translateY(100%);
}
.banner-badge .banner-link:hover .banner-link-text,
.banner-badge .banner-link:focus .banner-link-text {
  opacity: 1;
  background-color: #3aafa9;
  transform: translateY(0);
  -webkit-transform: translateY(0);
}
.social-icons {
  display: flex;
  align-items: center;
  flex-flow: row wrap;
}
.social-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.6rem;
  width: 4rem;
  height: 4rem;
  color: #777;
  margin: 0;
  background-color: transparent;
  border: 0.1rem solid #e1e2e6;
  border-radius: 50%;
  text-decoration: none;
  opacity: 1;
  transition: all 0.35s ease;
}
.social-icon:not(:last-child) {
  margin-right: 1rem;
}
.social-icon:hover,
.social-icon:focus {
  color: #3aafa9;
  border-color: #3aafa9;
  background-color: transparent;
}
.social-icon.social-facebook {
  color: #8f79ed;
}
.social-icon.social-twitter {
  color: #79c8ed;
}
.social-icon.social-instagram {
  color: #dd6d9a;
}
.social-icon.social-youtube {
  color: #e66262;
}
.social-icon.social-pinterest {
  color: #e66262;
}
.social-icon.social-linkedin {
  color: #3399cc;
}
.social-icons-color,
.social-icons-simple {
  line-height: 1;
}
.social-icons-color .social-icon,
.social-icons-simple .social-icon {
  width: auto;
  height: auto;
  border: none;
}
.social-icons-color .social-icon:not(:last-child),
.social-icons-simple .social-icon:not(:last-child) {
  margin-right: 2rem;
}
.social-label {
  margin-bottom: 0;
  margin-right: 2rem;
}
.social-icons-sm .social-icon {
  font-size: 1.2rem;
  width: 3rem;
  height: 3rem;
}
.social-icons-sm .social-icon:not(:last-child) {
  margin-right: 0.5rem;
}
.social-icons-sm .social-label {
  margin-right: 1rem;
}
.social-icons-colored .social-icon.social-facebook {
  color: #fff;
  border-color: #8f79ed;
  background-color: #8f79ed;
}
.social-icons-colored .social-icon.social-twitter {
  color: #fff;
  border-color: #79c8ed;
  background-color: #79c8ed;
}
.social-icons-colored .social-icon.social-instagram {
  color: #fff;
  border-color: #dd6d9a;
  background-color: #dd6d9a;
}
.social-icons-colored .social-icon.social-youtube {
  color: #fff;
  border-color: #e66262;
  background-color: #e66262;
}
.social-icons-colored .social-icon.social-pinterest {
  color: #fff;
  border-color: #e66262;
  background-color: #e66262;
}
.social-icons-colored .social-icon.social-linkedin {
  color: #fff;
  border-color: #3399cc;
  background-color: #3399cc;
}
.social-icons-colored .social-icon:hover,
.social-icons-colored .social-icon:focus {
  background-color: #fff !important;
  border-color: #d7d7d7 !important;
}
.social-icons-colored .social-icon:hover.social-facebook,
.social-icons-colored .social-icon:focus.social-facebook {
  color: #8f79ed;
}
.social-icons-colored .social-icon:hover.social-twitter,
.social-icons-colored .social-icon:focus.social-twitter {
  color: #79c8ed;
}
.social-icons-colored .social-icon:hover.social-instagram,
.social-icons-colored .social-icon:focus.social-instagram {
  color: #dd6d9a;
}
.social-icons-colored .social-icon:hover.social-youtube,
.social-icons-colored .social-icon:focus.social-youtube {
  color: #e66262;
}
.social-icons-colored .social-icon:hover.social-pinterest,
.social-icons-colored .social-icon:focus.social-pinterest {
  color: #e66262;
}
.social-icons-colored .social-icon:hover.social-linkedin,
.social-icons-colored .social-icon:focus.social-linkedin {
  color: #3399cc;
}
.testimonial-icon:before {
  font-family: "molla";
  content: "\f10d";
  display: inline-block;
  font-style: normal;
  font-weight: normal;
  font-size: 2.6rem;
  line-height: 1;
  color: #3aafa9;
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}
.testimonial img {
  display: inline-block !important;
  max-width: 70px;
  border-radius: 50%;
  margin-top: 1rem;
  margin-bottom: 2.1rem;
}
.owl-testimonials.owl-theme .owl-nav [class*="owl-"] {
  top: 65px;
}
.owl-testimonials-photo.owl-theme .owl-nav [class*="owl-"] {
  top: 110px;
}
.form-group {
  margin-bottom: 2rem;
}
.form-group .form-control,
.form-group .select-custom {
  margin-bottom: 0;
}
.form-control {
  height: 40px;
  padding: 0.85rem 2rem;
  font-size: 1.4rem;
  line-height: 1.5;
  font-weight: 300;
  color: #777;
  background-color: #fafafa;
  border: 1px solid #ebebeb;
  border-radius: 0;
  margin-bottom: 2rem;
  transition: all 0.3s;
  box-shadow: none;
}
select.form-control:not([size]):not([multiple]) {
  height: 40px;
}
.form-control-white {
  border-color: #fff;
}
.form-control:focus {
  color: #777;
  background-color: #fff;
  border-color: #3aafa9;
  box-shadow: none;
  outline: none !important;
}
.form-control::placeholder {
  color: #777;
}
textarea.form-control {
  min-height: 130px;
  padding-top: 1.1rem;
  padding-bottom: 1.1rem;
}
.form-control-rounded {
  border-radius: 0.2rem;
}
.input-group-round .form-control {
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
.input-group-round > .input-group-append > .btn {
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}
label {
  color: #666;
  font-weight: 300;
  font-size: 1.4rem;
  margin: 0 0 1.1rem;
}
.form-text {
  color: #999;
  line-height: 1.5;
  margin-top: 0;
}
.form-control + .form-text {
  margin-top: -0.5rem;
  margin-bottom: 0.6rem;
}
small.form-text {
  font-size: 85%;
}
.required-field > label::after {
  content: "*";
  color: #e02b27;
  font-size: 1.2rem;
  margin: 0 0 0 0.45rem;
}
.required {
  color: #e02b27;
  font-size: 1.2rem;
}
.required + .form-footer {
  margin-top: 0.8rem;
}
.form-footer {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  padding-top: 0.6rem;
}
.select-custom {
  position: relative;
  margin-bottom: 1rem;
}
.select-custom select {
  -webkit-appearance: none;
  appearance: none;
}
.select-custom::after {
  font-family: "molla";
  content: "\f110";
  position: absolute;
  display: inline-block;
  right: 1.9rem;
  top: 50%;
  font-size: 1.5rem;
  transform: translateY(-51%);
  color: #333;
}
.select-custom .form-control,
.select-custom .form-control-sm {
  padding-right: 4rem;
}
.form-group-custom-control {
  margin-top: 2rem;
}
.form-group-custom-control .custom-control {
  margin-top: 0;
  margin-bottom: 2rem;
}
.form-group-custom-control + .form-group-custom-control {
  margin-top: -0.5rem;
}
.form-group-custom-control .custom-control-label {
  text-transform: initial;
  letter-spacing: 0;
  font-weight: 400;
}
.custom-control {
  position: relative;
  padding-left: 2.6rem;
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.custom-control-label {
  position: static;
  margin-bottom: 0;
  margin-top: 0.1rem;
  font-size: 1.4rem;
  padding-left: 2.6rem;
  margin-left: -2.6rem;
}
.custom-control-label::before {
  left: 0;
  top: 0.6rem;
  width: 1.6rem;
  height: 1.6rem;
  background-color: #f9f9f9;
  border: 1px solid #dadada;
  box-shadow: none !important;
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dadada;
}
.custom-control-label::after {
  left: 0;
  top: 0.6rem;
  width: 1.6rem;
  height: 1.6rem;
}
.custom-checkbox .custom-control-label::before {
  border-radius: 0;
}
.custom-checkbox .custom-control-label::after {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  background-image: none;
  font-size: 1rem;
  font-family: "molla";
  content: "\ec2d";
  line-height: 1;
  text-align: center;
  opacity: 0;
  margin-top: 0.1rem;
  visibility: hidden;
  transition: opacity 0.01s;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #333;
  background-color: #333;
}
.custom-checkbox
  .custom-control-input:indeterminate
  ~ .custom-control-label::before {
  background-color: #333;
}
.custom-checkbox
  .custom-control-input:disabled:checked
  ~ .custom-control-label::before {
  background-color: rgba(51, 51, 51, 0.5);
}
.custom-checkbox
  .custom-control-input:disabled:indeterminate
  ~ .custom-control-label::before {
  background-color: rgba(51, 51, 51, 0.5);
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: none;
  opacity: 1;
  visibility: visible;
}
.custom-control.custom-radio .custom-control-label::before {
  top: 0.4rem;
  background-color: #f9f9f9;
  border-color: #dadada;
  border-radius: 50%;
}
.custom-control.custom-radio
  .custom-control-input:checked
  ~ .custom-control-label::before {
  border-color: #3aafa9;
  background-color: #fff;
}
.custom-control.custom-radio .custom-control-label::after {
  border-radius: 50%;
  width: 0.6rem;
  height: 0.6rem;
  top: 0.9rem;
  left: 0.5rem;
}
.custom-control.custom-radio
  .custom-control-input:checked
  ~ .custom-control-label::after {
  background-image: none !important;
  z-index: 2;
  background-color: #3aafa9;
}
.form-control-tooltip {
  position: relative;
  padding-right: 4rem;
}
.form-control-tooltip .input-tooltip {
  display: inline-block;
  position: absolute;
  right: 0;
  top: 50%;
  font-size: 2.4rem;
  color: #777;
  transform: translateY(-50%);
  transition: all 0.3s;
}
.form-control-tooltip .input-tooltip:hover,
.form-control-tooltip .input-tooltip:focus {
  color: #000;
}
.cta .input-group {
  margin-bottom: 0;
}
.cta .form-control {
  height: 46px;
  padding-top: 1.15rem;
  padding-bottom: 1.15rem;
  background-color: #fff;
}
.cta .form-control:not(:focus):not(.form-control-white) {
  border-color: #dadada;
}
.cta .btn {
  padding-top: 1.15rem;
  padding-bottom: 1.15rem;
}
.cta .btn:not(.btn-block) {
  min-width: 170px;
}
.cta.bg-image {
  background-color: #f5f5f5;
}
.cta-title {
  font-weight: 500;
  font-size: 2rem;
  line-height: 1.2;
  letter-spacing: -0.03em;
  margin-bottom: 0;
}
.cta-desc {
  margin-bottom: 1.5rem;
}
.cta-horizontal .form-control {
  flex-grow: 1;
  margin-right: 2rem;
}
.cta-horizontal .form-control,
.cta-horizontal .cta-desc {
  margin-bottom: 0;
}
.cta-horizontal-box {
  padding-top: 5.2rem;
  padding-bottom: 4.8rem;
}
.cta-heading {
  padding-top: 0.7rem;
  margin-bottom: 2.7rem;
}
.cta-heading .cta-title {
  margin-bottom: 0.5rem;
}
.cta-text {
  padding-top: 0.5rem;
}
.cta-text .cta-title {
  margin-bottom: 2.1rem;
}
.cta-text .cta-desc {
  margin-bottom: 2.3rem;
}
.cta-separator {
  position: relative;
}
.cta-separator [class*="col-"] + [class*="col-"]:before {
  content: "";
  width: 0.1rem;
  display: block;
  height: 80%;
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  background-color: #ebebeb;
}
.cta-separator.bg-image [class*="col-"] + [class*="col-"]:before {
  background-color: #dadada;
}
.cta-wrapper {
  padding-top: 5.6rem;
  padding-bottom: 5.6rem;
  max-width: 370px;
  margin-left: auto;
  margin-right: auto;
}
.cta-wrapper .cta-title {
  margin-bottom: 0.6rem;
}
.cta-wrapper .cta-desc {
  margin-bottom: 2rem;
}
.cta-wrapper.cta-text {
  max-width: 330px;
}
.cta-wrapper.cta-text .cta-title {
  margin-bottom: 1.6rem;
}
.cta-wrapper.cta-text .cta-desc {
  margin-bottom: 2.6rem;
}
.cta-border {
  padding: 3.9rem 2rem;
  border: 1rem solid #f5f5f5;
  text-align: center;
}
.cta-border .cta-content {
  display: flex;
  align-items: center;
  flex-direction: column;
}
.cta-border .cta-heading {
  width: 100%;
  flex: 0 0 100%;
  max-width: 100%;
  margin: 0;
  padding-top: 0;
  padding-right: 0;
}
.cta-border .cta-title {
  margin: 0 0 2rem;
}
.cta-border .cta-text {
  position: relative;
  padding: 0;
  flex-grow: 1;
  margin-bottom: 2rem;
}
.cta-border .cta-text::before {
  content: "";
  background-color: #f5f5f5;
  width: 0.5rem;
  height: 9rem;
  position: absolute;
  left: -3px;
  top: 50%;
  margin-top: -4.5rem;
  display: none;
}
.cta-border p {
  max-width: 460px;
  margin-bottom: 0;
}
@media screen and (min-width: 992px) {
  .cta-border {
    text-align: left;
    padding-left: 0;
    padding-right: 0;
  }
  .cta-border .cta-content {
    flex-direction: row;
    padding-left: 1.5rem;
  }
  .cta-border .cta-heading {
    flex: 0 0 24.7%;
    max-width: 24.7%;
    padding-right: 3rem;
  }
  .cta-border .cta-title {
    margin-bottom: 0;
  }
  .cta-border .cta-text {
    margin-right: 2rem;
    padding-left: 3rem;
    margin-bottom: 0;
  }
  .cta-border .cta-text::before {
    display: block;
  }
}
@media screen and (max-width: 1199px) {
  .cta-horizontal-box {
    padding-left: 3rem;
    padding-right: 3rem;
  }
}
@media screen and (max-width: 991px) {
  .cta-horizontal .cta-desc {
    margin-bottom: 1.5rem;
  }
  .cta-separator [class*="col-"] + [class*="col-"]:before {
    height: 0.1rem;
    width: 80%;
    left: 10%;
    top: 0;
    bottom: auto;
  }
  .cta-border .cta-title,
  .cta-border .cta-title.text-right {
    text-align: center !important;
  }
}
@media screen and (max-width: 767px) {
  .cta-horizontal .form-control {
    margin-right: 1rem;
  }
  .cta .btn:not(.btn-block) {
    min-width: 0;
  }
  .cta-wrapper {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
}
@media screen and (max-width: 575px) {
  .cta .input-group {
    flex-direction: column;
  }
  .cta .input-group .form-control {
    width: 100%;
    margin-right: 0;
  }
  .cta .input-group .btn {
    margin-left: 0;
    margin-top: 1rem;
  }
  .cta .input-group .input-group-append,
  .cta .input-group .input-group-prepend {
    justify-content: center;
  }
  .cta .input-group-round .form-control,
  .cta .input-group-round .btn {
    border-radius: 30px;
  }
  .cta .input-group-round .input-group-append {
    justify-content: center;
  }
}
.table {
  margin-bottom: 3rem;
}
.table th {
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.5;
  color: #999;
}
.table th,
.table thead th,
.table td {
  border-top: none;
  border-bottom: 0.1rem solid #ebebeb;
}
.table th,
.table td {
  padding-left: 0;
  padding-right: 0;
  padding-top: 1.4rem;
  padding-bottom: 1.4rem;
}
.table td {
  vertical-align: middle;
}
.count-container {
  margin-bottom: 3.3rem;
}
.count-wrapper {
  color: #3aafa9;
  font-weight: 400;
  font-size: 3rem;
  line-height: 1.2;
  margin-bottom: 0.6rem;
}
.count-title {
  font-weight: 400;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
}
.pagination {
  border-radius: 0;
  align-items: center;
  margin-bottom: 2rem;
}
.page-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 3rem;
  height: 4rem;
  font-weight: 400;
  font-size: 1.4rem;
  padding: 0 0.3rem;
  line-height: 1;
  color: #706f6c;
  border-radius: 0.3rem;
  background-color: transparent;
  border: 0.1rem solid transparent;
}
.page-link i {
  font-size: 1.5rem;
}
.page-link.page-link-prev {
  margin-right: 1.7rem;
}
.page-link.page-link-prev i {
  margin-left: 0;
  margin-right: 1rem;
}
.page-link.page-link-next {
  margin-left: 1.8rem;
}
.page-link.page-link-next i {
  margin-left: 1rem;
  margin-right: 0;
}
.page-link.page-link-prev,
.page-link.page-link-next {
  padding-left: 1rem;
  padding-right: 1rem;
  min-width: 70px;
}
.page-link:hover,
.page-link:focus {
  box-shadow: none;
  color: #3aafa9;
  border-color: #ebebeb;
  text-decoration: none;
  background-color: transparent;
  outline: none !important;
}
.page-item-total {
  color: #cccccc;
  font-size: 1.4rem;
  font-weight: 400;
  margin-left: 1.2rem;
}
.page-item + .page-item {
  margin-left: 0.4rem;
}
.page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}
.page-item.active .page-link {
  color: #3aafa9;
  background-color: transparent;
  border-color: #ebebeb;
}
.page-item.disabled .page-link {
  border-color: transparent;
  color: #eaeaea;
}
.modal-backdrop {
  background-color: #333;
}
.modal-backdrop.show {
  opacity: 0.4;
}
.modal-body {
  padding: 0;
}
.modal-body .close {
  position: absolute;
  right: 1.5rem;
  top: 1.5rem;
}
.modal-content {
  border: none;
  box-shadow: 5px 10px 16px rgba(51, 51, 51, 0.05),
    -5px 10px 16px rgba(51, 51, 51, 0.05);
}
.close {
  font-weight: normal;
  font-size: 1.8rem;
  color: #666;
  opacity: 1;
  transition: all 0.3s;
}
.close:hover,
.close:focus {
  color: #3aafa9;
}
@media screen and (min-width: 768px) {
  .modal-dialog {
    max-width: 575px;
  }
}
.alert {
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.43;
  letter-spacing: -0.01em;
  border-radius: 0;
  margin: 0;
  padding: 1rem 1.5rem;
  border: none;
}
.alert .container {
  position: relative;
}
.alert a {
  color: rgba(255, 255, 255, 0.7);
}
.alert a:hover,
.alert a:focus {
  color: rgba(255, 255, 255, 0.9);
}
.alert .close {
  color: rgba(255, 255, 255, 0.5);
  font-weight: 300;
  font-size: 1.6rem;
  line-height: 1;
  top: 50%;
  transform: translateY(-50%);
}
.alert .close span {
  display: inline-block;
  line-height: 1;
  padding-bottom: 0.2rem;
}
.alert-primary {
  color: #fff;
  background-color: #3aafa9;
}
.alert-dark {
  color: #fff;
  background-color: #333;
}
.alert-danger {
  color: #fff;
  background-color: #da2828;
}
.alert-info {
  color: #fff;
  background-color: #32b1d6;
}
.alert-success {
  color: #fff;
  background-color: #20cb55;
}
.alert-warning {
  color: #fff;
  background-color: #ea8745;
}
.instagram-feed {
  width: 100%;
  display: block;
  position: relative;
  background-color: #ccc;
  margin-bottom: 2rem;
}
.owl-carousel .instagram-feed {
  margin-bottom: 0;
}
.instagram-feed:after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-color: rgba(51, 51, 51, 0.4);
  transition: all 0.4s ease;
  opacity: 0;
  visibility: hidden;
  z-index: 1;
}
.instagram-feed:hover:after,
.instagram-feed:hover .instagram-feed-content {
  opacity: 1;
  visibility: visible;
}
.instagram-feed img {
  max-width: none;
  width: 100%;
}
.instagram-feed-content {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  color: #fff;
  font-weight: 400;
  font-size: 1.6rem;
  transition: all 0.45s ease;
  opacity: 0;
  visibility: hidden;
}
.instagram-feed-content i {
  font-weight: normal;
  margin-right: 0.8rem;
}
.instagram-feed-content a {
  color: inherit;
}
.instagram-feed-content a:hover,
.instagram-feed-content a:focus {
  color: #3aafa9;
}
.instagram-feed-content a + a {
  margin-left: 2rem;
}
.elements > div {
  padding: 1rem;
}
.elements > div:nth-child(1) .element-img {
  background-position: calc(-200px * calc(1 - 1)) 0;
}
.elements > div:nth-child(1) .element-hover-img {
  background-position: calc(-200px * 1 + 100px) 0;
}
.elements > div:nth-child(2) .element-img {
  background-position: calc(-200px * calc(2 - 1)) 0;
}
.elements > div:nth-child(2) .element-hover-img {
  background-position: calc(-200px * 2 + 100px) 0;
}
.elements > div:nth-child(3) .element-img {
  background-position: calc(-200px * calc(3 - 1)) 0;
}
.elements > div:nth-child(3) .element-hover-img {
  background-position: calc(-200px * 3 + 100px) 0;
}
.elements > div:nth-child(4) .element-img {
  background-position: calc(-200px * calc(4 - 1)) 0;
}
.elements > div:nth-child(4) .element-hover-img {
  background-position: calc(-200px * 4 + 100px) 0;
}
.elements > div:nth-child(5) .element-img {
  background-position: calc(-200px * calc(5 - 1)) 0;
}
.elements > div:nth-child(5) .element-hover-img {
  background-position: calc(-200px * 5 + 100px) 0;
}
.elements > div:nth-child(6) .element-img {
  background-position: calc(-200px * calc(6 - 1)) 0;
}
.elements > div:nth-child(6) .element-hover-img {
  background-position: calc(-200px * 6 + 100px) 0;
}
.elements > div:nth-child(7) .element-img {
  background-position: calc(-200px * calc(7 - 1)) 0;
}
.elements > div:nth-child(7) .element-hover-img {
  background-position: calc(-200px * 7 + 100px) 0;
}
.elements > div:nth-child(8) .element-img {
  background-position: calc(-200px * calc(8 - 1)) 0;
}
.elements > div:nth-child(8) .element-hover-img {
  background-position: calc(-200px * 8 + 100px) 0;
}
.elements > div:nth-child(9) .element-img {
  background-position: calc(-200px * calc(9 - 1)) 0;
}
.elements > div:nth-child(9) .element-hover-img {
  background-position: calc(-200px * 9 + 100px) 0;
}
.elements > div:nth-child(10) .element-img {
  background-position: calc(-200px * calc(10 - 1)) 0;
}
.elements > div:nth-child(10) .element-hover-img {
  background-position: calc(-200px * 10 + 100px) 0;
}
.elements > div:nth-child(11) .element-img {
  background-position: calc(-200px * calc(11 - 1)) 0;
}
.elements > div:nth-child(11) .element-hover-img {
  background-position: calc(-200px * 11 + 100px) 0;
}
.elements > div:nth-child(12) .element-img {
  background-position: calc(-200px * calc(12 - 1)) 0;
}
.elements > div:nth-child(12) .element-hover-img {
  background-position: calc(-200px * 12 + 100px) 0;
}
.elements > div:nth-child(13) .element-img {
  background-position: calc(-200px * calc(13 - 1)) 0;
}
.elements > div:nth-child(13) .element-hover-img {
  background-position: calc(-200px * 13 + 100px) 0;
}
.elements > div:nth-child(14) .element-img {
  background-position: calc(-200px * calc(14 - 1)) 0;
}
.elements > div:nth-child(14) .element-hover-img {
  background-position: calc(-200px * 14 + 100px) 0;
}
.elements > div > a {
  display: block;
}
.element {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border: 0.1rem solid #ebebeb;
  position: relative;
  transition: all 0.3s;
}
.element:hover,
.element:focus {
  box-shadow: 0 5px 20px rgba(234, 234, 234, 0.8);
}
.element:hover .element-hover-img,
.element:focus .element-hover-img {
  visibility: visible;
  opacity: 1;
}
.element:hover .element-img,
.element:focus .element-img {
  opacity: 0;
}
.element:hover p,
.element:focus p {
  color: #333;
}
.element p {
  margin-top: -1rem;
  padding-bottom: 1rem;
}
.element-img,
.element-hover-img {
  width: 100px;
  height: 100px;
  background-image: url(../images/elements.png);
  background-repeat: no-repeat;
  transition: all 0.3s;
}
.element-hover-img {
  position: absolute;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s;
}
.element-type {
  font-size: 1.3rem;
  font-weight: 400;
  font-family: "Poppins";
  letter-spacing: 0.01em;
  color: #666;
  text-transform: uppercase;
}
.intro-section {
  margin-top: -1px;
}
.intro-banners .banner {
  margin-bottom: 2rem;
}
.text-darkwhite {
  color: #ebebeb;
}
.banner-link-anim {
  background-color: transparent;
}
.banner-subtitle {
  margin-bottom: 0.5rem;
}
.intro-slider-container,
.intro-slide {
  background-color: #cccccc;
}
.intro-slider-container,
.intro-slide .slide-image {
  position: relative;
}
.intro-slider-container:before,
.intro-slide .slide-image:before {
  display: block;
  content: "";
  width: 100%;
}
.slider-container-1:before,
.intro-slider-1 .slide-image:before {
  padding-top: 56.5384615385%;
}
@media screen and (max-width: 479px) {
  .slider-container-1:before,
  .intro-slider-1 .slide-image:before {
    padding-top: 83.3333333333%;
  }
}
.slider-container-ratio .intro-slider,
.slide-image > picture,
.slide-image > img {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 2;
  width: 100%;
}
.slide-image img {
  display: block;
  width: 100%;
  max-width: none;
  height: auto;
}
.slider-loader {
  color: #333;
}
.slider-loader::after {
  content: "\f311";
  display: flex;
  align-items: center;
  justify-content: center;
  width: 5rem;
  height: 5rem;
  margin-top: -2.5rem;
  margin-left: -2.5rem;
  font-family: "molla";
  position: absolute;
  left: 50%;
  top: 50%;
  font-size: 4rem;
  transform-origin: center center;
  animation: rotating 3s linear infinite;
  z-index: 20;
}
.owl-loaded + .slider-loader {
  display: none;
}
button:focus {
  outline: none;
}
@keyframes rotating {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
.intro-content {
  position: absolute;
  left: 20px;
  top: 50%;
  z-index: 10;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.intro-content .btn {
  font-size: 1.2rem;
  min-width: 90px;
  padding: 0.65rem 1rem;
}
.intro-subtitle {
  color: #fff;
  font-weight: 300;
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  margin-bottom: 0.5rem;
}
.intro-title {
  color: #fff;
  font-weight: 700;
  font-size: 3rem;
  line-height: 1.2;
  letter-spacing: -0.03em;
  margin-bottom: 1.2rem;
  text-indent: -0.2rem;
}
.brand {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 48px;
}
.brand img {
  width: auto !important;
  max-width: 100% !important;
}
.brand:focus {
  outline: none !important;
}
.title-lg {
  letter-spacing: -0.025em;
}
.nav.nav-pills .nav-link {
  font-size: 1.6rem;
}
.mt-v3 {
  margin-top: -3rem;
}
.categories.container {
  position: relative;
}
.categories.container::before {
  content: "";
  position: absolute;
  left: 1rem;
  right: 1rem;
  height: 0.1rem;
  top: 0;
  background-color: #ebebeb;
}
.more-container {
  margin-bottom: 7rem;
}
.icon-box-card {
  background-color: transparent;
  padding: 2rem;
}
.icon-box-icon {
  color: #333;
  font-size: 3.4rem;
}
.carousel-with-shadow .owl-stage-outer {
  padding: 0 1rem 2rem;
  margin-left: -1rem;
  margin-right: -1rem;
  margin-top: -3rem;
  padding-top: 3rem;
}
.carousel-with-shadow.owl-simple .owl-nav [class*="owl-"] {
  margin-top: -31px;
}
.blog-posts .entry {
  color: #777;
  font-size: 1.5rem;
  line-height: 1.73;
  letter-spacing: -0.01em;
  margin-bottom: 3rem;
}
.blog-posts .entry-media {
  margin-bottom: 1.7rem;
}
.blog-posts .entry-meta {
  color: #cccccc;
  margin-bottom: 0.8rem;
}
.blog-posts .entry-title {
  font-weight: 500;
  font-size: 1.8rem;
  letter-spacing: -0.01em;
  margin-bottom: 0.5rem;
}
.blog-posts .read-more {
  padding-right: 0;
  font-weight: 400;
  text-transform: uppercase;
}
.blog-posts .read-more:after {
  display: none;
}
.blog-posts .read-more:hover,
.blog-posts .read-more:focus {
  padding-right: 0;
}
.entry.entry-display {
  transition: box-shadow 0.35s ease;
}
.entry.entry-display .entry-body {
  padding: 0 2rem 2.5rem;
}
.entry.entry-display:hover {
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.03),
    -5px 5px 10px rgba(0, 0, 0, 0.03);
}
.cta-display .cta-title {
  font-weight: 600;
  font-size: 2.6rem;
  letter-spacing: -0.01em;
}
.cta-display .cta-desc {
  font-size: 1.6rem;
  margin-bottom: 0;
}
.cta-display-content {
  max-width: 630px;
  margin-left: auto;
  margin-right: auto;
}
.footer .widget-title {
  font-weight: 600;
}
.widget-about p {
  max-width: 260px;
}
.cross-txt {
  position: absolute;
  left: -1px;
  right: -1px;
  transform: translateY(-50%);
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}
.cross-txt:before,
.cross-txt:after {
  content: "";
  -ms-flex: 1;
  flex: 1;
  height: 1px;
  background: #fff;
}
.cross-txt:before {
  margin-right: 2.5rem;
}
.cross-txt:after {
  margin-left: 2.5rem;
}
.mfp-ready.mfp-bg {
  opacity: 0.6;
}
.quickView-content {
  padding: 4rem 2rem;
  background-color: #fff;
}
.quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"] {
  border: none;
  font-size: 3rem;
  color: #fff;
}
.quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"]:hover,
.quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"]:focus {
  color: #3aafa9;
  background-color: transparent;
}
.quickView-content .owl-theme.owl-nav-inside .owl-nav .owl-prev {
  left: 30px;
  margin: 0;
}
.quickView-content .owl-theme.owl-nav-inside .owl-nav .owl-next {
  right: 30px;
  margin: 0;
}
.quickView-content .owl-theme .owl-nav [class*="owl-"] {
  top: 50%;
}
.quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"] {
  background-color: transparent;
}
.quickView-content .owl-theme.owl-nav-inside .owl-dots {
  left: 50%;
  transform: translateX(-50%);
  right: unset;
}
.quickView-content > .row {
  margin-left: 0;
  margin-right: 0;
}
.quickView-content > .row > div {
  padding-left: 2rem;
  padding-right: 2rem;
}
.quickView-content > .row > div .row {
  margin-left: 0;
  margin-right: 0;
}
.quickView-content .product-title {
  margin-top: 3rem;
}
.quickView-content .product-title,
.quickView-content .product-price {
  font-size: 2.4rem;
  font-weight: 400;
  letter-spacing: -0.025em;
  color: #333;
  margin-bottom: 1rem;
}
.quickView-content .rating-container {
  margin-bottom: 2rem;
}
.quickView-content p {
  color: #666;
  margin-bottom: 4rem;
}
.quickView-content .product-nav-thumbs a,
.quickView-content .product-nav-thumbs span {
  height: 5.4rem;
}
.quickView-content .details-filter-row label {
  font-size: 1.4rem;
  letter-spacing: 0;
  text-transform: uppercase;
  color: #333;
}
.quickView-content .product-details-action {
  margin-top: 5rem;
  flex-direction: column;
  align-items: normal;
  margin-bottom: 4rem;
}
.quickView-content .details-action-wrapper {
  margin-left: 0;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}
.quickView-content .btn-product {
  background-color: transparent;
}
.quickView-content .btn-product span {
  font-size: 1.3rem;
  letter-spacing: 0.01em;
  color: #777;
  text-transform: uppercase;
}
.quickView-content .btn-product.btn-cart {
  flex: 0 0 100%;
  max-width: 100%;
  padding: 1.2rem 1.5rem;
}
.quickView-content .btn-product.btn-cart:hover span,
.quickView-content .btn-product.btn-cart:focus span {
  color: #fff;
  box-shadow: none;
}
.quickView-content .btn-product.btn-cart span {
  font-size: 1.4rem;
  letter-spacing: 0.1em;
}
.quickView-content .product-details-footer {
  flex-direction: column;
  align-items: flex-start;
  padding-top: 4rem;
}
.quickView-content .product-details-footer .social-icons {
  margin-left: 0;
}
.quickView-content .product-cat {
  font-size: 1.4rem;
  font-weight: 400;
  letter-spacing: 0.01em;
  color: #777;
  margin-bottom: 4.5rem;
}
.quickView-content .product-cat span {
  margin-right: 0.7rem;
}
.quickView-content .product-cat a {
  color: #666;
}
.quickView-content .product-left {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  flex: 0 0 19.2%;
  max-width: 19.2%;
}
.quickView-content .product-left img {
  margin-bottom: 1rem;
}
.quickView-content .product-right {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  flex: 0 0 80.8%;
  max-width: 80.8%;
}
.quickView-content .intro-slider-container,
.quickView-content .intro-slide {
  height: unset;
}
.quickView-content .btn-wishlist:before {
  content: "\f234";
}
.quickView-content .btn-compare:before {
  content: "\f2d0";
}
.quickView-content .btn-wishlist,
.quickView-content .btn-compare {
  border: none;
}
.quickView-content .btn-wishlist:hover,
.quickView-content .btn-wishlist:focus,
.quickView-content .btn-compare:hover,
.quickView-content .btn-compare:focus {
  color: #3aafa9;
  background-color: transparent;
}
.quickView-content .btn-wishlist:hover span,
.quickView-content .btn-wishlist:focus span,
.quickView-content .btn-compare:hover span,
.quickView-content .btn-compare:focus span {
  color: #3aafa9;
}
.quickView-content .details-action-wrapper .btn-product + .btn-product {
  margin-left: 0;
  padding-left: 0;
}
.quickView-content .carousel-dot img {
  transition: all 0.3s;
  opacity: 0.6;
}
.quickView-content .carousel-dot.active img {
  opacity: 1;
  box-shadow: 0 0 0 1px #3aafa9;
}
.quickView-content .carousel-dot:hover img,
.quickView-content .carousel-dot:focus img {
  opacity: 1;
}
.quickView-content .btn-fullscreen {
  position: absolute;
  right: 2rem;
  bottom: 2rem;
  z-index: 49;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  width: 4rem;
  height: 4rem;
  color: #777;
  font-weight: normal;
  font-size: 2rem;
  line-height: 1;
  background-color: #fff;
  box-shadow: 2px 6px 16px rgba(51, 51, 51, 0.05);
  transition: all 0.35s ease;
}
.quickView-content .btn-fullscreen:hover,
.quickView-content .btn-fullscreen:focus {
  color: #fff;
  background-color: #3aafa9;
}
.container.quickView-container,
.fullscreen-container .container,
.container.newsletter-popup-container {
  width: 1188px;
  max-width: 100%;
}
.quickView-container,
.fullscreen-container {
  position: relative;
}
.quickView-container button.mfp-close,
.fullscreen-container button.mfp-close {
  color: #666;
  font-size: 1.8rem;
  top: 1.5rem;
  right: 2rem;
  display: block;
  width: 2rem;
  height: 2rem;
}
.fullscreen-container {
  margin-left: -0.8rem;
  margin-right: -0.8rem;
}
.fullscreen-container .carousel-dots {
  margin-top: 2rem;
  display: flex;
  padding-left: 6rem;
  padding-right: 6rem;
}
.fullscreen-container .carousel-dot {
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
.fullscreen-container .quickView-content {
  padding: 1rem 0 4rem;
}
.mfp-newsletter.mfp-bg {
  background: #222;
  opacity: 0.6;
}
.newsletter-popup-container {
  position: relative;
}
.newsletter-popup-container .newsletter-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.newsletter-popup-container .banner-content-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
}
.newsletter-popup-container .banner-content {
  position: static;
  transform: translateY(0);
  padding-top: 2.5rem;
  padding-left: 1rem;
  padding-right: 1rem;
  flex: 0 0 calc((100% + 20px) / 6 * 4);
  max-width: calc((100% + 20px) / 6 * 4);
}
.newsletter-popup-container .banner-title {
  font-size: 4.6rem;
  font-weight: 700;
  letter-spacing: -0.025em;
  color: #222;
  margin-bottom: 1rem;
  text-transform: uppercase;
  line-height: 1.4em;
}
.newsletter-popup-container .banner-title span {
  color: #3aafa9;
  font-weight: 700;
}
.newsletter-popup-container .banner-title light {
  font-weight: 400;
}
.newsletter-popup-container p {
  font-weight: 400;
  letter-spacing: 0.01em;
  margin-bottom: 3.3rem;
  line-height: 1.75em;
}
.newsletter-popup-container .logo {
  margin-left: auto;
  margin-right: auto;
  margin-top: 2.5rem;
  margin-bottom: 1.5rem;
  min-height: 0;
}
.newsletter-popup-container .form-control {
  background-color: #f5f5f5;
  border-color: #f5f5f5;
  border-radius: 0;
  height: 4.6rem;
  background-clip: border-box;
  color: #666;
}
.newsletter-popup-container .form-control::placeholder {
  color: #666;
}
.newsletter-popup-container .form-control:focus {
  border-color: #f5f5f5;
}
.newsletter-popup-container .input-group {
  border: none;
}
.newsletter-popup-container .input-group .btn {
  min-width: 7rem;
  background-color: #222;
  color: #fff;
  border-radius: 0;
  text-transform: uppercase;
}
.newsletter-popup-container .input-group .btn:hover,
.newsletter-popup-container .input-group .btn:focus {
  background-color: #3aafa9;
}
.newsletter-popup-container .custom-control {
  margin-top: 5rem;
  margin-left: auto;
  margin-right: auto;
  padding-left: 0;
  flex: 0 0 calc((100% + 20px) * 0.5 + 20px);
  max-width: calc((100% + 20px) * 0.5 + 20px);
}
.newsletter-popup-container .custom-control-label {
  font-size: 1.3rem;
  font-weight: 400;
  letter-spacing: 0.01em;
  padding-left: 4.4rem;
}
.newsletter-popup-container .custom-control-label:before,
.newsletter-popup-container .custom-control-label:after {
  left: -0.5rem;
  width: 1.4rem;
  height: 1.4rem;
  border-radius: 0.2rem;
}
.newsletter-popup-container .newsletter-popup-content {
  box-shadow: 0 10px 20px rgba(34, 34, 34, 0.3);
}
.newsletter-popup-container .mfp-close {
  top: 1rem;
  right: calc(100% / 12 + 2rem);
  font-size: 2rem;
  background-color: #fff;
  border-radius: 50%;
  width: 3rem;
  height: 3rem;
}
@media screen and (min-width: 1200px) {
  .quickView-content > .row .product-fullscreen {
    flex: 0 0 calc(50% + 2rem);
    max-width: calc(50% + 2rem);
    padding-left: 0;
    padding-right: 0;
  }
}
.mfp-wrap .mfp-content {
  transition: all 0.35s;
  opacity: 0;
}
.mfp-wrap.mfp-ready .mfp-content {
  opacity: 1;
}
@media screen and (min-width: 576px) {
  .intro-content {
    left: 50px;
  }
  .intro-content .btn {
    font-size: 1.2rem;
    min-width: 110px;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }
  .intro-subtitle {
    font-size: 1.6rem;
  }
  .intro-title {
    font-size: 3.6rem;
    margin-bottom: 1.3rem;
  }
}
@media screen and (min-width: 768px) {
  .intro-content {
    left: 70px;
  }
  .intro-content .btn {
    font-size: 1.3rem;
    min-width: 130px;
    padding: 0.95rem 1.5rem;
  }
  .intro-subtitle {
    font-size: 1.8rem;
  }
  .intro-title {
    font-size: 4.2rem;
    margin-bottom: 1.7rem;
  }
}
@media screen and (min-width: 992px) {
  .cta-display .cta-title {
    font-size: 3rem;
  }
}
@media screen and (min-width: 1200px) {
  .intro-content {
    left: 100px;
  }
  .intro-content .btn {
    font-size: 1.4rem;
    min-width: 150px;
    padding-top: 1.15rem;
    padding-bottom: 1.15rem;
  }
  .intro-subtitle {
    font-size: 2rem;
  }
  .intro-title {
    font-size: 5.2rem;
  }
}
@media screen and (max-width: 575px) {
  .cta-display .cta-desc {
    margin-bottom: 2rem;
  }
  .cta-display .btn {
    padding-top: 0.85rem;
    padding-bottom: 0.85rem;
  }
}
@media screen and (max-width: 991px) {
  .newsletter-img {
    display: none;
  }
  .newsletter-popup-container .banner-content {
    padding-bottom: 2rem;
  }
}
@media screen and (max-width: 900px) {
  .fullscreen-container {
    margin-left: -0.6rem;
    margin-right: -0.6rem;
  }
}
@media screen and (min-width: 768px) {
  .banner-display .banner-title {
    font-size: 1.8rem;
  }
}
@media screen and (max-width: 591px) {
  .newsletter-popup-container .banner-content {
    flex: 0 0 90%;
    max-width: 90%;
  }
}
@media screen and (max-width: 439px) {
  .quickView-content .details-action-wrapper {
    flex-direction: column;
  }
  .quickView-content .details-action-wrapper .btn-product + .btn-product {
    border: none;
    margin-top: 1rem;
  }
}
@media screen and (min-width: 992px) {
  .banners-sm .banner-link-anim {
    padding-left: 0;
    padding-right: 0;
  }
  .banners-sm .row {
    margin-left: 0;
    margin-right: 0;
  }
}
.toolbox {
  display: flex;
  align-items: center;
  flex-direction: column;
  flex-wrap: wrap;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.5;
  margin-top: 0;
  margin-bottom: 2rem;
}
.toolbox::after {
  display: block;
  clear: both;
  content: "";
}
.toolbox .select-custom {
  margin-bottom: 0;
}
.toolbox .select-custom::after {
  right: 0.9rem;
  font-size: 1rem;
}
.toolbox .select-custom .form-control {
  font-size: 1.3rem;
  padding-right: 2rem;
  max-width: 140px;
  min-width: 140px;
  background-color: #fff;
  border-color: #e4e4e4;
}
.toolbox label {
  font-weight: 400;
  color: #333;
  font-size: 1.2rem;
  letter-spacing: -0.01em;
  margin: 0;
}
.toolbox .form-control {
  color: #999;
  font-weight: 300;
  font-size: 1.2rem;
  padding: 0.45rem 1rem;
  height: 30px;
  margin-bottom: 0;
}
.toolbox .form-control:not(:focus) {
  border-color: #d7d7d7;
}
.toolbox select.form-control:not([size]):not([multiple]) {
  height: 30px;
}
.toolbox-left,
.toolbox-right {
  display: flex;
  align-items: center;
  flex: 1 1 0;
  flex-wrap: wrap;
}
.toolbox-center {
  margin-top: 1rem;
  flex: 0 1 auto;
}
.toolbox-right {
  margin-top: 1rem;
  flex-direction: column;
}
.toolbox-info {
  color: #ccc;
}
.toolbox-info span {
  color: #333;
}
.toolbox-sort {
  display: flex;
  align-items: center;
}
.toolbox-sort label {
  margin-right: 1.6rem;
}
.toolbox-layout {
  margin-top: 1rem;
}
.btn-layout {
  display: inline-flex;
  padding: 0.5rem;
}
.btn-layout + .btn-layout {
  margin-left: 0.5rem;
}
.btn-layout svg {
  fill: #dadada;
  transition: fill 0.35s;
}
.btn-layout:hover svg,
.btn-layout:focus svg,
.btn-layout.active svg {
  fill: #333;
}
.products > .row > [class*="col-"] {
  display: flex;
  align-items: stretch;
  align-content: stretch;
}
.products .product {
  width: 100%;
}
.product {
  overflow: hidden;
}
.carousel-equal-height .owl-stage,
.carousel-equal-height .owl-item {
  display: flex;
  align-items: stretch;
}
.carousel-equal-height .product {
  width: 100%;
}
.owl-carousel .entry {
  margin-bottom: 0;
}
.load-more-container {
  margin-top: 4rem;
  margin-bottom: 2rem;
}
.btn.btn-load-more {
  text-transform: uppercase;
  min-width: 190px;
  justify-content: space-between;
  padding-left: 2rem;
  padding-right: 2rem;
}
.btn.btn-load-more i {
  margin: 0 !important;
}
.sidebar-shop .widget {
  color: #333;
  margin: 0 0 2rem;
  border-bottom: 0.1rem solid #ebebeb;
}
.sidebar-shop .widget:last-child {
  border-bottom: none;
}
.sidebar-shop .widget-title {
  color: #333;
  font-weight: 400;
  font-size: 1.8rem;
  line-height: 1.15;
  letter-spacing: -0.01em;
  margin-bottom: 0.7rem;
}
.sidebar-shop .custom-control {
  padding-left: 2.7rem;
  margin: 0;
}
.sidebar-shop .custom-control-label {
  font-weight: 400;
  color: #333;
  cursor: pointer;
}
.sidebar-shop .custom-control-label::before {
  border-radius: 0.2rem;
}
.widget-clean {
  display: flex;
  align-items: center;
  padding-top: 0.6rem;
  padding-bottom: 2.1rem;
}
.widget-clean label {
  color: inherit;
  font-weight: 400;
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  margin: 0;
}
.widget-clean a {
  display: inline-block;
  font-weight: 400;
  font-size: 1.2rem;
  margin-left: auto;
}
.widget-collapsible .widget-title a {
  position: relative;
  display: block;
  color: inherit;
  text-decoration: none;
  padding-right: 3rem;
}
.widget-collapsible .widget-title a:after {
  color: #333;
  content: "\f110";
  display: block;
  font-family: "molla";
  font-size: 1.4rem;
  line-height: 1;
  position: absolute;
  top: 50%;
  right: 1.6rem;
  margin-top: -0.7rem;
}
.widget-collapsible .widget-title a.collapsed:after {
  content: "\e802";
}
.widget-collapsible .widget-title a:focus {
  outline: none !important;
}
.widget-collapsible .widget-body {
  padding-top: 1rem;
  padding-bottom: 2rem;
}
.filter-item {
  position: relative;
  margin-bottom: 0.3rem;
}
.filter-items-count .filter-item {
  padding-right: 4rem;
}
.filter-items-count .item-count {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 1rem;
  top: 50%;
  min-width: 2.5rem;
  height: 2rem;
  margin-top: -1rem;
  font-weight: 300;
  font-size: 1.3rem;
  line-height: 1;
  border-radius: 0.6rem;
  color: #777;
  background-color: #f8f8f8;
}
.sidebar-toggler {
  display: inline-flex;
  align-items: center;
  color: #333;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1;
  letter-spacing: -0.01em;
  text-transform: uppercase;
  margin-right: 3rem;
}
.sidebar-toggler i {
  font-size: 1.6rem;
  margin-right: 0.9rem;
}
.sidebar-toggler:hover,
.sidebar-toggler:focus {
  color: #3aafa9;
}
.sub-filter-items {
  padding-left: 2.7rem;
}
.filter-colors {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  padding-top: 0.7rem;
  padding-bottom: 0.5rem;
}
.filter-colors a {
  position: relative;
  display: block;
  width: 2.4rem;
  height: 2.4rem;
  border-radius: 50%;
  border: 0.2rem solid #fff;
  margin: 0 0.3rem 0.3rem;
  transition: box-shadow 0.35s ease;
}
.filter-colors a:after {
  color: #fff;
  font-family: "molla";
  content: "\ec2d";
  font-size: 1rem;
  line-height: 1;
  position: absolute;
  left: 50%;
  top: 50%;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.01s;
  margin-top: -0.4rem;
  margin-left: -0.5rem;
}
.filter-colors a.selected,
.filter-colors a:hover,
.filter-colors a:focus {
  box-shadow: 0 0 0 0.1rem #cccccc;
}
.filter-colors a.selected:after {
  visibility: visible;
  opacity: 1;
}
.filter-price {
  padding-top: 0.2rem;
  padding-bottom: 3rem;
}
.filter-price-text {
  margin-bottom: 2rem;
  letter-spacing: -0.01em;
}
#filter-price-range {
  color: #3aafa9;
}
@media screen and (min-width: 576px) {
  .toolbox-right {
    flex-direction: row;
  }
  .toolbox-layout {
    margin-top: 0;
    margin-right: -0.5rem;
    margin-left: 1rem;
  }
}
@media screen and (min-width: 768px) {
  .toolbox {
    flex-direction: row;
  }
  .toolbox-center {
    margin-top: 0;
  }
  .toolbox-right {
    margin-top: 0;
    justify-content: flex-end;
  }
}
.product-details-top {
  margin-bottom: 1rem;
}
.product-gallery {
  margin-bottom: 2rem;
}
.product-main-image {
  position: relative;
  margin-bottom: 1rem;
}
.product-main-image img {
  max-width: none;
  width: 100%;
}
.btn-product-gallery {
  position: absolute;
  right: 2rem;
  bottom: 2rem;
  z-index: 49;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  width: 4rem;
  height: 4rem;
  color: #777;
  font-weight: normal;
  font-size: 2rem;
  line-height: 1;
  background-color: #fff;
  box-shadow: 2px 6px 16px rgba(51, 51, 51, 0.05);
  transition: all 0.35s ease;
}
.btn-product-gallery:hover,
.btn-product-gallery:focus {
  color: #fff;
  background-color: #3aafa9;
}
.product-image-gallery {
  display: flex;
  flex-flow: row wrap;
  margin-left: -0.5rem;
  margin-right: -0.5rem;
}
.product-gallery-item {
  position: relative;
  display: block;
  flex: 0 0 25%;
  max-width: 25%;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
  margin-bottom: 1rem;
}
.max-col-6 .product-gallery-item {
  flex: 0 0 16.66%;
  max-width: 16.66%;
}
.product-gallery-item img {
  max-width: none;
  width: 100%;
}
.product-gallery-item:before,
.product-gallery-item:after {
  content: "";
  display: block;
  position: absolute;
  left: 0.5rem;
  right: 0.5rem;
  top: 0;
  bottom: 0;
  transition: all 0.35s ease;
}
.product-gallery-item:before {
  opacity: 0;
  visibility: hidden;
  border: 0.1rem solid #3aafa9;
}
.product-gallery-item:after {
  visibility: visible;
  opacity: 1;
  background-color: rgba(255, 255, 255, 0.4);
}
.product-gallery-item.active:before {
  visibility: visible;
  opacity: 1;
}
.product-gallery-item:hover:after,
.product-gallery-item.active:after {
  opacity: 0;
  visibility: hidden;
}
.product-gallery-vertical .row {
  margin-left: 0;
  margin-right: 0;
}
.product-gallery-vertical .product-image-gallery,
.product-gallery-vertical .product-main-image {
  width: 100%;
}
.product-gallery-vertical .product-image-gallery {
  width: calc(100% + 10px);
}
.product-gallery-masonry {
  position: relative;
  display: block !important;
}
.product-gallery-masonry .product-gallery-item {
  max-width: 50%;
  width: 50%;
}
.product-gallery-carousel.owl-carousel {
  z-index: initial;
}
.product-gallery-carousel.owl-carousel .owl-item:not(.active) {
  pointer-events: none;
}
.product-gallery-image {
  margin-bottom: 0;
  padding-right: 1rem;
}
.product-gallery-separated {
  position: relative;
}
.product-separated-item {
  position: relative;
  display: block;
  margin-bottom: 1rem;
}
.product-separated-item img {
  max-width: none;
  width: 100%;
}
.product-pager {
  display: flex;
  align-items: center;
}
.product-pager-link {
  color: #ccc;
  display: flex;
  align-items: center;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.3;
  letter-spacing: 0;
}
.product-pager-link i {
  color: #666;
  font-size: 2rem;
  line-height: 1;
  transition: color 0.3s;
}
.product-pager-link span {
  display: inline-block;
  transition: box-shadow 0.3s ease;
}
.product-pager-link:hover,
.product-pager-link:focus {
  color: #3aafa9;
}
.product-pager-link:hover i,
.product-pager-link:focus i {
  color: inherit;
}
.product-pager-link:hover span,
.product-pager-link:focus span {
  box-shadow: 0 1px 0 #3aafa9;
}
.product-pager-link + .product-pager-link {
  margin-left: 3rem;
}
.product-pager-prev i {
  margin-right: 0.5rem;
}
.product-pager-next i {
  margin-left: 0.5rem;
}
.product-details {
  margin-bottom: 2rem;
}
.product-details .product-title {
  font-weight: 400;
  font-size: 2.4rem;
  letter-spacing: -0.025em;
  margin-bottom: 1.2rem;
  margin-top: -0.5rem;
  padding-right: 1rem;
}
.product-details .ratings-container {
  margin-bottom: 1.3rem;
}
.product-details .product-price {
  font-size: 2.4rem;
}
.product-details .new-price {
  margin-right: 1rem;
}
.product-details .product-content {
  margin-bottom: 1.6rem;
}
.product-details .product-content p:last-child {
  margin-bottom: 0;
}
.product-details .product-countdown {
  position: static;
  left: auto;
  right: auto;
  bottom: auto;
  top: auto;
  max-width: 260px;
  margin-left: -5px;
  margin-bottom: 2rem;
}
.product-details .product-countdown .countdown-section {
  background-color: #fafafa;
}
.product-details .product-nav-dots a,
.product-details .product-nav-dots span {
  width: 2rem;
  height: 2rem;
}
.product-details .product-cat {
  font-weight: 400;
  font-size: 1.4rem;
}
.product-details .product-cat span {
  margin-right: 0.7rem;
}
.product-details .product-cat a {
  color: #666;
  box-shadow: none;
  transition: all 0.35s ease;
}
.product-details .product-cat a:hover,
.product-details .product-cat a:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.product-details .product-size {
  flex-flow: row wrap;
  padding-top: 0;
  margin-bottom: 0;
}
.product-details .product-size a {
  color: #666;
  width: 4rem;
  height: 4rem;
  font-weight: 400;
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  border: 0.1rem solid #d7d7d7;
  background-color: transparent;
  border-radius: 0;
  margin-right: 1rem;
}
.product-details .product-size a.active,
.product-details .product-size a:hover,
.product-details .product-size a:focus {
  color: #3aafa9;
  border-color: #3aafa9;
  background-color: transparent;
}
.product-details .product-size a.disabled {
  color: #dadada;
  border-color: #ebebeb;
  background-color: transparent;
}
.details-filter-row {
  display: flex;
  align-items: center;
  flex-flow: row wrap;
  margin-bottom: 2rem;
}
.details-filter-row .form-control {
  font-weight: 400;
  margin-bottom: 0;
  padding-left: 1rem;
  padding-right: 1rem;
  background-color: #fff;
  border-color: #d7d7d7;
  min-width: 131px;
}
.details-filter-row .select-custom {
  margin-bottom: 0;
  margin-right: 3.9rem;
}
.details-filter-row .select-custom .form-control {
  padding-right: 3rem;
}
.details-filter-row .select-custom::after {
  font-size: 1rem;
  right: 0.9rem;
}
.details-filter-row label {
  display: inline-block;
  width: 67px;
  font-weight: 400;
  font-size: 1.4rem;
  margin-bottom: 0;
}
.details-filter-row .product-nav {
  margin-bottom: 0;
}
.details-filter-row .product-nav-thumbs {
  padding-top: 0;
}
.size-guide {
  color: #777;
  display: inline-flex;
  align-items: center;
}
.size-guide i {
  font-size: 1.8rem;
  margin-right: 0.7rem;
}
.size-guide:hover,
.size-guide:focus {
  color: #3aafa9;
}
.product-details-quantity {
  max-width: 131px;
}
.product-details-quantity .form-control {
  padding-left: 2.6rem;
  padding-right: 2.6rem;
  text-align: center;
  margin-bottom: 0;
}
.product-details-action {
  display: flex;
  align-items: center;
  flex-flow: row wrap;
  margin-bottom: 3rem;
}
.product-details-action .btn-cart {
  padding: 1rem 1.5rem;
  max-width: 198px;
  color: #3aafa9;
  border: 0.1rem solid #3aafa9;
}
.product-details-action .btn-cart span {
  font-size: 1.4rem;
  color: inherit;
  text-transform: uppercase;
  box-shadow: none;
  transition: box-shadow 0.35s ease, color 0s ease;
}
.product-details-action .btn-cart:before {
  margin-right: 0.4rem;
}
.product-details-action .btn-cart:hover,
.product-details-action .btn-cart:focus {
  color: #fff;
  border-color: #3aafa9;
  background-color: #3aafa9;
}
.details-action-wrapper {
  display: flex;
  align-items: center;
  margin-left: 4rem;
}
.details-action-wrapper .btn-product {
  padding-top: 0;
  padding-bottom: 0;
  white-space: nowrap;
  align-self: stretch;
  line-height: 1.4;
}
.details-action-wrapper .btn-product:before {
  margin-right: 1rem;
}
.details-action-wrapper .btn-product.btn-wishlist:before {
  margin-top: -0.2rem;
}
.details-action-wrapper .btn-product span {
  font-size: 1.4rem;
}
.details-action-wrapper .btn-product + .btn-product {
  padding-left: 1.3rem;
  margin-left: 1.6rem;
}
.product-details-footer {
  color: #777;
  display: flex;
  font-weight: 400;
  align-items: center;
  flex-wrap: wrap;
  padding-top: 1.7rem;
  border-top: 0.1rem solid #ebebeb;
  padding-bottom: 1.7rem;
}
.product-details-footer .social-icons {
  margin-left: auto;
}
.product-details-footer .social-icon {
  margin-bottom: 0;
}
@media screen and (min-width: 992px) {
  .container-fluid .product-details-top .col-lg-7 {
    -ms-flex: 0 0 56.5%;
    flex: 0 0 56.5%;
    max-width: 56.5%;
  }
  .container-fluid .product-details-top .col-lg-5 {
    -ms-flex: 0 0 43.5%;
    flex: 0 0 43.5%;
    max-width: 43.5%;
  }
}
@media screen and (min-width: 1700px) {
  .container-fluid .product-details-action .btn-cart {
    min-width: 240px;
  }
  .container-fluid .details-filter-row .form-control {
    min-width: 171px;
  }
}
.product-details-tab {
  margin-bottom: 5rem;
}
.product-details-tab .nav.nav-pills .nav-link {
  color: #333333;
  font-size: 1.6rem;
  padding: 0.55rem 3rem;
  border-bottom-width: 0.2rem;
  text-transform: capitalize;
}
.product-details-tab .nav.nav-pills .nav-link:hover,
.product-details-tab .nav.nav-pills .nav-link:focus {
  color: #3aafa9;
  border-bottom-color: #3aafa9;
}
.product-details-tab .nav.nav-pills .nav-item + .nav-item {
  margin-left: 2rem;
}
.product-details-tab .tab-content {
  border: 0.1rem solid #dadada;
  margin-top: -0.1rem;
  border-radius: 0.3rem;
}
.product-details-tab .tab-content .tab-pane {
  padding: 2.7rem 3rem;
}
.product-desc-content h2 {
  font-weight: 400;
  font-size: 2.4rem;
  letter-spacing: -0.01em;
  margin-bottom: 1.8rem;
}
.product-desc-content h3 {
  font-weight: 400;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-bottom: 1.8rem;
}
.product-desc-content ul {
  color: #333333;
}
.product-desc-content ul li {
  position: relative;
  padding-left: 1.3rem;
}
.product-desc-content ul li:before {
  content: "•";
  position: absolute;
  display: block;
  top: 0;
  left: 0.2rem;
}
.product-desc-content a {
  color: #333;
  border-bottom: 0.1rem solid #b8b8b8;
  transition: all 0.35s ease;
}
.product-desc-content a:hover,
.product-desc-content a:focus {
  color: #3aafa9;
  border-bottom-color: #3aafa9;
}
.product-desc-content blockquote {
  color: #333;
  font-style: normal;
  font-weight: 400;
  font-size: 2.4rem;
  line-height: 1.25;
  letter-spacing: -0.01em;
  margin-bottom: 1.6rem;
}
.product-desc-content blockquote p {
  margin-bottom: 0;
}
.product-desc-content blockquote cite {
  font-weight: 300;
  font-size: 1.4rem;
  letter-spacing: 0;
}
.reviews h3 {
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-bottom: 2.3rem;
}
.review {
  padding-bottom: 1.3rem;
  margin-bottom: 2rem;
  border-bottom: 0.1rem solid #ebebeb;
}
.review:last-child {
  margin-bottom: 0;
}
.review .col-auto {
  width: 120px;
  padding-right: 2rem;
}
.review h4 {
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.25;
  letter-spacing: -0.01em;
  margin-bottom: 0.8rem;
}
.review h4 a {
  color: inherit;
}
.review h4 a:hover,
.review h4 a:focus {
  color: #3aafa9;
}
.review .ratings-container {
  padding-top: 0.7rem;
  margin-bottom: 0.5rem;
}
.review .review-date {
  color: #ccc;
}
.review-content {
  margin-bottom: 0.8rem;
}
.review-action {
  font-size: 1.2rem;
}
.review-action a {
  color: #777;
  transition: all 0.35s ease;
}
.review-action a:hover,
.review-action a:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.review-action a + a {
  margin-left: 1.6rem;
}
.review-action i {
  font-size: 1.4rem;
  margin-right: 0.6rem;
}
.product-details-centered {
  text-align: center;
}
.product-details-centered .ratings-container,
.product-details-centered .product-price,
.product-details-centered .details-filter-row {
  justify-content: center;
}
.product-details-centered .product-content {
  max-width: 470px;
  margin-left: auto;
  margin-right: auto;
}
.product-details-centered .details-row-size .select-custom {
  margin-right: 2rem;
}
.product-details-centered .details-filter-row label {
  width: auto;
  margin-right: 1rem;
}
.product-details-centered .details-filter-row .form-control {
  min-width: 104px;
}
.product-details-centered .product-details-action {
  flex-direction: column;
  align-items: center;
}
.product-details-centered .product-details-action .btn-cart {
  min-width: 218px;
}
.product-details-centered .details-action-wrapper {
  margin-left: 0;
}
.product-details-centered .details-action-wrapper .btn-product + .btn-product {
  border-left-width: 0;
}
.product-details-centered .product-details-quantity {
  max-width: 100px;
}
.details-action-col {
  display: flex;
  align-items: center;
  margin-bottom: 2.2rem;
}
.details-action-col .product-details-quantity {
  margin-right: 2rem;
}
.details-action-col label {
  display: inline-block;
  width: 67px;
  font-weight: 400;
  font-size: 1.4rem;
  margin-bottom: 0;
}
.product-details-extended .nav.nav-pills {
  border-top: 0.1rem solid #ebebeb;
}
.product-details-extended .nav.nav-pills .nav-link {
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
  border-top: 0.2rem solid transparent;
  border-bottom: none;
  margin-top: -0.1rem;
}
.product-details-extended .nav.nav-pills .nav-link.active,
.product-details-extended .nav.nav-pills .nav-link:hover,
.product-details-extended .nav.nav-pills .nav-link:focus {
  border-color: #3aafa9;
}
.product-details-extended .tab-content {
  border: none;
}
.product-details-extended .tab-content .tab-pane {
  padding: 0;
}
.product-desc-row {
  display: flex;
  align-items: center;
  padding-top: 5rem;
  padding-bottom: 5rem;
  min-height: 500px;
}
.product-desc-row.text-white h2,
.product-desc-row.text-white h3,
.product-desc-row.text-white h4 {
  color: inherit;
}
.product-details-separator {
  margin-bottom: 6rem;
}
.product-details-separator .details-filter-row label {
  margin-right: 2.4rem;
}
.product-details-separator .details-filter-row .product-size {
  margin-right: 2rem;
}
@media screen and (min-width: 768px) {
  .product-details-separator [class*="col-"] {
    padding-top: 1rem;
  }
  .product-details-separator [class*="col-"] + [class*="col-"]:before {
    content: "";
    width: 0.1rem;
    display: block;
    height: 100%;
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    background-color: #ebebeb;
  }
}
.details-footer-col {
  padding-top: 0;
  padding-bottom: 0;
  flex-direction: column;
  align-items: flex-start;
  border-top: none;
}
.product-details-centered .details-footer-col {
  align-items: center;
}
.details-footer-col .product-cat {
  margin-bottom: 2.6rem;
}
.details-footer-col .social-icons {
  margin-left: 0;
}
.product-details-accordion .card {
  border: 0.1rem solid #ebebeb;
}
.product-details-accordion .card .card-title {
  font-weight: 400;
}
.product-details-accordion .card .card-title a {
  background-color: #fafafa;
}
.product-details-accordion .card .card-title a:not(.collapsed) {
  background-color: #fff;
}
.product-details-accordion .card .card-body {
  padding-top: 0;
}
.product-details-accordion .card .card-body p:last-child {
  margin-bottom: 0.2rem;
}
.product-details-sidebar {
  margin-bottom: 3rem;
}
.product-details-sidebar .details-filter-row .select-custom {
  margin-right: 1.9rem;
}
.product-details-sidebar .product-details-action {
  flex-direction: column;
  align-items: flex-start;
}
.product-details-sidebar .details-action-wrapper {
  margin-left: 0;
}
.product-details-sidebar .details-action-col {
  width: 100%;
}
.product-details-sidebar .details-action-col .btn-product {
  flex: 1 1 auto;
  max-width: 230px;
}
.product-details-sidebar .product-details-action {
  margin-bottom: 2.6rem;
}
.sidebar-product {
  max-width: 280px;
  margin-left: auto;
  margin-right: auto;
}
.sidebar-product .widget {
  margin-bottom: 4.5rem;
}
.sidebar-product .widget-title {
  font-size: 2.4rem;
  letter-spacing: -0.025em;
  margin-bottom: 2.4rem;
}
.sidebar-product .products {
  margin-bottom: 3rem;
}
.sidebar-product .btn {
  display: block;
  width: 100%;
  text-align: center;
  text-transform: uppercase;
}
.sticky-bar {
  display: none;
}
@media screen and (min-width: 992px) {
  .product-gallery-vertical .row {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
    flex-direction: row-reverse;
  }
  .product-gallery-vertical .btn-product-gallery {
    right: 2.5rem;
  }
  .product-gallery-vertical .product-image-gallery,
  .product-gallery-vertical .product-main-image {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }
  .product-gallery-vertical .product-main-image {
    flex: 0 0 80%;
    max-width: 80%;
  }
  .product-gallery-vertical .product-image-gallery {
    width: auto;
    flex: 0 0 20%;
    max-width: 20%;
    margin-left: 0;
    margin-right: 0;
  }
  .product-gallery-vertical .product-gallery-item {
    flex: 0 0 100%;
    max-width: 100%;
    padding-left: 0;
    padding-right: 0;
    margin-bottom: 1rem;
  }
  .product-gallery-vertical .product-gallery-item:before,
  .product-gallery-vertical .product-gallery-item:after {
    left: 0;
    right: 0;
  }
  .sticky-bar {
    display: block;
    width: 100%;
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 500;
    padding-top: 1rem;
    padding-bottom: 1rem;
    background-color: #fff;
    box-shadow: -15px 0 43px rgba(51, 51, 51, 0.15);
  }
  .sticky-bar .row {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
  .sticky-bar .col-6 {
    display: flex;
    align-items: center;
  }
  .sticky-bar .product-media {
    max-width: 60px;
    margin-right: 2rem;
    margin-bottom: 0;
    flex-shrink: 0;
  }
  .sticky-bar .product-title {
    margin-bottom: 0;
    letter-spacing: -0.025em;
  }
  .sticky-bar .product-price {
    margin-bottom: 0;
    margin-right: 2rem;
  }
  .sticky-bar .product-details-quantity {
    margin-right: 2rem;
    max-width: 100px;
  }
  .sticky-bar .product-details-action {
    margin-bottom: 0;
  }
  .sticky-bar .btn-cart {
    min-width: 200px;
    margin-right: 2rem;
  }
  .sticky-bar .btn-product + .btn-product {
    border: none;
  }
  .sticky-bar .btn-wishlist {
    font-size: 1.8rem;
    margin-right: 2rem;
  }
  .sticky-bar .btn-wishlist span {
    display: none;
  }
  .sticky-bar .btn-wishlist:before {
    margin-right: 0;
  }
}
@media screen and (min-width: 992px) and (max-width: 1199px) {
  .details-action-wrapper {
    margin-left: 1rem;
  }
  .product-details-sidebar .product-details-quantity {
    max-width: 91px;
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .product-details-action {
    flex-direction: column;
    align-items: flex-start;
  }
  .details-action-wrapper {
    margin-left: 0;
    margin-top: 1.5rem;
  }
  .product-details-action .btn-cart {
    min-width: 198px;
  }
  .product-details-tab .nav.nav-pills .nav-item + .nav-item {
    margin-left: 1rem;
  }
  .product-details-tab .nav.nav-pills .nav-item .nav-link {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }
}
@media screen and (max-width: 767px) {
  .product-desc-row {
    min-height: 380px;
  }
  .product-desc-content h2,
  .product-details .product-title {
    font-size: 2.2rem;
  }
  .product-gallery-separated {
    margin-bottom: 3rem;
  }
}
@media screen and (max-width: 575px) {
  .breadcrumb-nav .d-flex {
    flex-direction: column;
    align-items: flex-start !important;
  }
  .product-pager {
    margin-right: auto;
    margin-top: 1rem;
  }
  .product-details-tab .nav.nav-pills .nav-item + .nav-item {
    margin-left: 0;
  }
}
@media screen and (max-width: 580px) {
  .product-details-action {
    flex-direction: column;
    align-items: flex-start;
  }
  .details-action-wrapper {
    margin-left: 0;
    margin-top: 1.5rem;
  }
  .product-details-footer {
    flex-direction: column;
    align-items: flex-start;
  }
  .product-details-footer .social-icons {
    margin-left: 0;
    margin-top: 1rem;
  }
  .review .row {
    flex-direction: column;
  }
  .details-filter-row .select-custom {
    margin-right: 1.5rem;
  }
  .product-details-action .btn-cart,
  .product-details-centered .product-details-action .btn-cart {
    min-width: 198px;
  }
  .product-details-sidebar .details-action-col .btn-product {
    min-width: 168px;
  }
}
.entry {
  position: relative;
  margin-bottom: 3rem;
  font-size: 1.4rem;
  line-height: 1.85;
}
.entry-media {
  position: relative;
  background-color: #ccc;
  margin-bottom: 2.4rem;
}
.entry-media > a {
  position: relative;
  display: block;
}
.entry-media img {
  display: block;
  max-width: none;
  width: 100%;
  height: auto;
}
.entry-video a:after {
  content: "\ec2c";
  font-family: "molla";
  display: -ms-inline-flexbox;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 7rem;
  height: 7rem;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -3.5rem;
  margin-top: -3.5rem;
  font-size: 1.8rem;
  line-height: 1;
  color: #fff;
  background-color: transparent;
  border-radius: 50%;
  border: 0.2rem solid #fff;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.entry-video a:hover:after,
.entry-video a:focus:after {
  color: #3aafa9;
  background-color: #fff;
  box-shadow: 0 0 0 1.6rem rgba(255, 255, 255, 0.2);
}
.entry-meta {
  display: flex;
  align-items: center;
  flex-flow: wrap;
  color: #777;
  font-size: 1.4rem;
  line-height: 1.5;
  margin-bottom: 0.5rem;
}
.text-center .entry-meta {
  justify-content: center;
}
.entry-meta a {
  color: inherit;
  transition: all 0.3s ease;
}
.entry-meta a:hover,
.entry-meta a:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.meta-separator {
  margin-left: 1.1rem;
  margin-right: 1.1rem;
}
.entry-title {
  color: #333333;
  font-weight: 600;
  font-size: 2.2rem;
  line-height: 1.25;
  letter-spacing: -0.025em;
  margin-bottom: 0.6rem;
}
.entry-title a {
  color: inherit;
}
.entry-title a:hover,
.entry-title a:focus {
  color: #3aafa9;
}
.entry-cats {
  color: #777;
  font-size: 1.4rem;
  line-height: 1.5;
  margin-bottom: 1.5rem;
}
.entry-cats a {
  color: inherit;
  transition: all 0.3s ease;
}
.entry-cats a:hover,
.entry-cats a:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.entry-content p {
  margin-bottom: 1.3rem;
}
.read-more {
  display: inline-block;
  position: relative;
  font-weight: 400;
  letter-spacing: -0.01em;
  padding-bottom: 0.1rem;
  transition: all 0.3s ease;
}
.read-more:after {
  font-family: "molla";
  content: "\f274";
  font-size: 1.5rem;
  line-height: 1;
  display: block;
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -0.75rem;
  opacity: 0;
  transition: all 0.25s ease;
  transform: translateX(-6px);
}
.read-more:hover,
.read-more:focus {
  padding-right: 2.2rem;
  box-shadow: 0 1px 0 0 #3aafa9;
}
.read-more:hover:after,
.read-more:focus:after {
  opacity: 1;
  transform: translateX(0);
}
.menu-cat {
  margin: 0 0 2rem;
  padding: 0;
  display: flex;
  align-items: center;
  flex-flow: wrap;
}
.menu-cat li {
  margin-right: 3.6rem;
}
.menu-cat li:last-child {
  margin-right: 0;
}
.menu-cat.justify-content-center li {
  margin-left: 1.8rem;
  margin-right: 1.8rem;
}
.menu-cat.justify-content-center li:lat-child {
  margin-right: 1.8rem;
}
.menu-cat a {
  display: inline-block;
  color: #333333;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  padding-top: 0.4rem;
  padding-bottom: 0.4rem;
}
.menu-cat a span {
  color: #cccccc;
  font-weight: 400;
  margin-left: 0.8rem;
}
.menu-cat a:hover,
.menu-cat a:focus {
  color: #3aafa9;
}
.menu-cat li.active a {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.entry-grid .entry-title {
  font-size: 1.8rem;
}
.entry-grid .entry-media {
  margin-bottom: 1.4rem;
}
.entry-grid .entry-cats {
  margin-bottom: 0.9rem;
}
.entry-container {
  position: relative;
  margin: 0 -1rem 0.5rem;
  transition: height 0.4s;
}
.entry-container::after {
  display: block;
  clear: both;
  content: "";
}
.entry-item {
  float: left;
  padding: 0 10px;
}
.entry-list p {
  margin-bottom: 1rem;
}
.entry-mask.entry {
  margin-bottom: 2rem;
}
.entry-mask:before {
  content: "";
  display: block;
  height: 50%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 3;
  background: -moz-linear-gradient(top, rgba(125, 185, 232, 0) 0%, #000 100%);
  background: -webkit-linear-gradient(
    top,
    rgba(125, 185, 232, 0) 0%,
    #000 100%
  );
  background: linear-gradient(to bottom, rgba(125, 185, 232, 0) 0%, #000 100%);
  opacity: 0.75;
  transition: all 0.3s;
  pointer-events: none;
}
.entry-mask .entry-media {
  margin-bottom: 0;
}
.entry-mask .entry-video a:after,
.entry-mask .entry-gallery a:after {
  width: auto;
  height: auto;
  left: 3rem;
  top: 3rem;
  margin-left: 0;
  margin-top: 0;
  font-size: 1.6rem;
  line-height: 1;
  border: none;
}
.entry-mask .entry-video a:hover:after,
.entry-mask .entry-video a:focus:after,
.entry-mask .entry-gallery a:hover:after,
.entry-mask .entry-gallery a:focus:after {
  color: #fff;
  background-color: transparent;
  box-shadow: none;
}
.entry-mask .entry-gallery a:after {
  color: #fff;
  position: absolute;
  content: "\f24d";
  font-family: "molla";
  top: 2.6rem;
}
.entry-mask .entry-body {
  position: absolute;
  left: 0;
  bottom: 0;
  padding: 1.7rem 1.8rem 2.7rem 2.8rem;
  z-index: 5;
}
.entry-mask .entry-meta,
.entry-mask .entry-cats {
  color: #ebebeb;
}
.entry-mask .entry-cats {
  margin-bottom: 0;
}
.entry-mask .entry-title {
  color: #fff;
  font-size: 2rem;
}
.entry-mask:hover:before {
  opacity: 0.9;
}
.widget {
  margin-bottom: 4.5rem;
}
.sidebar {
  margin-top: 3rem;
}
.sidebar .widget:last-child {
  margin-bottom: 1.5rem;
}
.widget-title {
  color: #333;
  font-weight: 400;
  font-size: 1.8rem;
  line-height: 1.1;
  letter-spacing: -0.01em;
  margin-bottom: 2rem;
}
.widget-search .widget-title {
  margin-bottom: 1.3rem;
}
.widget-search form {
  position: relative;
}
.widget-search .form-control {
  height: 40px;
  padding: 0.95rem 5rem 0.95rem 1.4rem;
  font-weight: 300;
  font-size: 1.3rem;
  background-color: transparent;
  margin-bottom: 0;
}
.widget-search .btn {
  position: absolute;
  right: 0.8rem;
  top: 50%;
  min-width: 0;
  font-weight: normal;
  font-size: 1.8rem;
  color: #666;
  padding: 0;
  width: 3rem;
  height: 3rem;
  margin-top: -1.4rem;
}
.widget-search .btn i {
  margin: 0 !important;
}
.widget-search .btn:hover,
.widget-search .btn:focus {
  color: #3aafa9;
}
.widget-cats ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.widget-cats li:not(:last-child) {
  margin-bottom: 1rem;
}
.widget-cats a {
  color: #333;
  display: block;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
}
.widget-cats a span {
  float: right;
}
.widget-cats a:hover,
.widget-cats a:focus {
  color: #3aafa9;
}
.widget-banner-sidebar {
  position: relative;
}
.banner-sidebar-title {
  color: #777;
  text-align: center;
  font-weight: 300;
  font-size: 1.3rem;
  line-height: 1;
  letter-spacing: -0.01em;
  margin-bottom: 0.8rem;
  text-transform: uppercase;
}
.posts-list {
  list-style: none;
  padding: 0.4rem 0 0.2rem;
  margin: 0;
}
.posts-list li {
  margin-bottom: 2rem;
}
.posts-list li::after {
  display: block;
  clear: both;
  content: "";
}
.posts-list li:last-child {
  margin-bottom: 0;
}
.posts-list figure {
  float: left;
  max-width: 80px;
  margin-right: 2rem;
  margin-bottom: 0;
}
.posts-list figure a {
  display: block;
}
.posts-list div {
  padding-top: 0.6rem;
}
.posts-list span {
  display: block;
  color: #cccccc;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.25;
  letter-spacing: -0.01em;
  margin-bottom: 0.5rem;
}
.posts-list h4 {
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.4;
  letter-spacing: 0;
  margin-bottom: 0;
}
.posts-list a {
  color: #333;
}
.posts-list a:hover,
.posts-list a:focus {
  color: #3aafa9;
}
.banner-sidebar {
  position: relative;
  text-align: center;
  line-height: 0;
}
.banner-sidebar > a {
  display: inline-block;
}
.tagcloud {
  display: flex;
  align-items: center;
  flex-flow: wrap;
  padding-top: 0.3rem;
  margin-right: -1rem;
  margin-bottom: -1rem;
}
.tagcloud a {
  display: block;
  color: #777;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.4;
  border-radius: 0.3rem;
  padding: 0.65rem 0.9rem;
  background-color: #fafafa;
  border: 0.1rem solid #ebebeb;
  margin-right: 1rem;
  margin-bottom: 1rem;
  transition: all 0.3s ease;
}
.tagcloud a:hover,
.tagcloud a:focus {
  color: #3aafa9;
  background-color: #fff;
}
.widget-text p:last-child {
  margin-bottom: 0;
}
@media screen and (min-width: 768px) {
  .entry-title {
    font-size: 2.4rem;
  }
  .entry-list {
    margin-bottom: 5rem;
  }
  .entry-list .col-md-5 {
    -ms-flex: 0 0 45%;
    flex: 0 0 45%;
    max-width: 45%;
  }
  .entry-list .entry-media {
    max-width: 376px;
    margin-bottom: 0;
  }
  .entry-list .col-md-7 {
    -ms-flex: 0 0 55%;
    flex: 0 0 55%;
    max-width: 55%;
  }
}
@media screen and (min-width: 992px) {
  .sidebar {
    margin-top: -0.3rem;
  }
  .entry {
    margin-bottom: 6rem;
  }
  .entry-grid {
    margin-bottom: 4rem;
  }
  .max-col-2 .entry-grid .entry-media {
    margin-bottom: 2.4rem;
  }
  .max-col-2 .entry-grid .entry-title {
    font-size: 2.4rem;
  }
  .max-col-2 .entry-grid .entry-cats {
    margin-bottom: 1.5rem;
  }
  .max-col-4 .entry-grid .entry-video a:after {
    width: 5rem;
    height: 5rem;
    margin-left: -2.5rem;
    margin-top: -2.5rem;
  }
  .max-col-4 .entry-grid .entry-video a:hover:after,
  .max-col-4 .entry-grid .entry-video a:focus:after {
    box-shadow: 0 0 0 1rem rgba(255, 255, 255, 0.2);
  }
  .entry-list {
    margin-bottom: 7rem;
  }
  .entry-list:last-of-type {
    margin-bottom: 6rem;
  }
  .entry-list .entry-body {
    padding-left: 1.5rem;
  }
  .entry-mask .entry-title {
    font-size: 2.4rem;
  }
}
.entry.single-entry {
  margin-bottom: 4rem;
}
.single-entry .entry-body {
  margin-bottom: 4rem;
}
.single-entry .entry-meta,
.single-entry .entry-cats {
  color: #ccc;
}
.single-entry .entry-meta a:not(:hover):not(:focus),
.single-entry .entry-cats a:not(:hover):not(:focus) {
  color: #666;
}
.single-entry .entry-title-big {
  font-weight: 400;
  font-size: 2.8rem;
}
.editor-content::after {
  display: block;
  clear: both;
  content: "";
}
.editor-content .float-left {
  margin-right: 2.8rem;
  margin-bottom: 1.5rem;
}
.editor-content .float-right {
  margin-left: 2.8rem;
  margin-bottom: 1.5rem;
}
.editor-content img {
  margin-bottom: 2rem;
}
.editor-content p {
  margin-bottom: 2.4rem;
}
.editor-content h3 {
  font-weight: 400;
  font-size: 2.2rem;
  margin-bottom: 2rem;
}
.editor-content a {
  color: #333;
  box-shadow: 0 1px 0 #333;
  transition: all 0.35s ease;
}
.editor-content a:hover,
.editor-content a:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.editor-content blockquote {
  position: relative;
  color: #333333;
  font-style: normal;
  font-weight: 400;
  font-size: 1.8rem;
  line-height: 1.67;
  padding: 7rem 3rem 4rem 3rem;
  border-left: 0.1rem solid #3aafa9;
  background-color: #fafafa;
  margin-top: 4.2rem;
  margin-bottom: 4.2rem;
}
.editor-content blockquote p:last-child {
  margin-bottom: 0;
}
.editor-content blockquote:before {
  color: #ebebeb;
  content: "\f10e";
  font-weight: normal;
  font-size: 3rem;
  line-height: 1;
  font-family: "molla";
  position: absolute;
  left: 3rem;
  top: 4rem;
  margin-top: -1.5rem;
}
.editor-content ul li {
  position: relative;
  margin-bottom: 2.7rem;
}
.editor-content ul li:before {
  display: inline-block;
  content: "•";
  font-size: 1.8rem;
  line-height: 1;
  margin-right: 1rem;
  vertical-align: middle;
  margin-top: -1px;
}
.entry-footer {
  margin-top: 3.6rem;
  margin-bottom: 5rem;
  align-items: center;
}
.entry-footer .social-icon {
  font-size: 1.3rem;
}
.entry-tags {
  display: flex;
  align-items: center;
  flex-flow: wrap;
  padding-top: 0.2rem;
}
.entry-tags span {
  margin-right: 1rem;
}
.entry-tags a {
  display: block;
  color: #777;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.4;
  border-radius: 0.3rem;
  padding: 0.45rem 0.9rem;
  background-color: #fafafa;
  border: 0.1rem solid #ebebeb;
  margin-right: 0.5rem;
  margin-bottom: 0;
  transition: all 0.3s ease;
}
.entry-tags a:hover,
.entry-tags a:focus {
  color: #3aafa9;
  background-color: #fff;
}
.entry-author-details {
  display: flex;
  align-items: flex-start;
  padding: 5rem 3rem 4.6rem;
  background-color: #fafafa;
}
.entry-author-details h4 {
  color: #333;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 1;
  letter-spacing: -0.01em;
  margin-bottom: 0;
}
.entry-author-details h4 a {
  color: inherit;
}
.entry-author-details h4 a:hover,
.entry-author-details h4 a:focus {
  color: #3aafa9;
}
.author-media,
.comment-media {
  flex: 0 0 50px;
  max-width: 50px;
}
.author-media img,
.comment-media img {
  border-radius: 50%;
}
.author-content p:last-child,
.comment-content p:last-child {
  margin-bottom: 0;
}
.author-body {
  position: relative;
  flex: 1 1 auto;
  padding-left: 2rem;
}
.author-header {
  align-items: flex-start;
  line-height: 1;
  margin-bottom: 2rem;
}
.author-link {
  color: #777;
  letter-spacing: -0.01em;
  transition: all 0.35s ease;
}
.author-link:hover,
.author-link:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.pager-nav {
  width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
  margin-bottom: 4.5rem;
  padding-bottom: 1rem;
}
.pager-link {
  position: relative;
  color: #3aafa9;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  flex: 0 0 100%;
  max-width: 100%;
  width: 100%;
  font-weight: 400;
  padding-top: 0.95rem;
  padding-bottom: 0.95rem;
  font-size: 1.4rem;
  line-height: 1.5;
  transition: all 0.35s ease;
}
.pager-link + .pager-link {
  border-top: 0.1rem solid #ebebeb;
}
.pager-link:after {
  color: #333;
  display: block;
  font-family: "molla";
  font-size: 1.5rem;
  line-height: 1;
  position: absolute;
  top: 50%;
  transition: all 0.35s ease 0.05s;
  margin-top: -0.8rem;
}
.pager-link.pager-link-prev {
  padding-left: 10rem;
  padding-right: 1rem;
}
.pager-link.pager-link-prev:after {
  content: "\f273";
  left: 3rem;
}
.pager-link.pager-link-next {
  padding-left: 1rem;
  padding-right: 10rem;
  align-items: flex-end;
  text-align: right;
}
.pager-link.pager-link-next:after {
  content: "\f274";
  right: 3rem;
}
.pager-link:hover,
.pager-link:focus {
  color: #3aafa9;
}
.pager-link:hover:after,
.pager-link:focus:after {
  color: #3aafa9;
}
.pager-link:hover.pager-link-prev,
.pager-link:focus.pager-link-prev {
  padding-left: 7rem;
}
.pager-link:hover.pager-link-prev:after,
.pager-link:focus.pager-link-prev:after {
  left: 0;
}
.pager-link:hover.pager-link-next,
.pager-link:focus.pager-link-next {
  padding-right: 7rem;
}
.pager-link:hover.pager-link-next:after,
.pager-link:focus.pager-link-next:after {
  right: 0;
}
.pager-link:hover .pager-link-title,
.pager-link:focus .pager-link-title {
  box-shadow: 0 0.1rem 0 #333;
}
.pager-link-title {
  display: inline-block;
  margin-top: 0.6rem;
  flex: 0 0 auto;
  color: #333;
  font-size: 1.5rem;
  transition: all 0.35s ease;
  max-width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.related-posts {
  padding-bottom: 4.5rem;
  margin-bottom: 4.5rem;
  border-bottom: 0.1rem solid #ebebeb;
}
.related-posts .title {
  font-weight: 600;
  font-size: 1.8rem;
  letter-spacing: -0.025em;
  margin-bottom: 3rem;
}
.related-posts .entry.entry-grid {
  margin-bottom: 0;
}
.related-posts .entry-grid .entry-title {
  font-weight: 400;
}
.comments {
  margin-bottom: 5rem;
}
.comments .title {
  font-weight: 600;
  font-size: 1.8rem;
  letter-spacing: -0.025em;
  margin-bottom: 4.5rem;
}
.comments ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.comments ul ul {
  margin-top: 4rem;
  margin-left: 8rem;
  padding-top: 4.5rem;
  border-top: 0.1rem solid #ebebeb;
}
.comments li {
  border-bottom: 0.1rem solid #ebebeb;
  padding-bottom: 4rem;
  margin-bottom: 5rem;
}
.comments li:last-child {
  border-bottom-width: 0;
  margin-bottom: 0;
  padding-bottom: 0;
}
.comment {
  position: relative;
  display: flex;
  align-items: flex-start;
}
.comment-body {
  position: relative;
  flex: 1 1 auto;
  padding-left: 3rem;
}
.comment-reply {
  display: flex;
  align-items: center;
  color: #777;
  position: absolute;
  right: 0;
  top: 0;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1;
  letter-spacing: -0.01em;
  padding-bottom: 0.4rem;
  transition: all 0.35s ease;
}
.comment-reply:after {
  font-family: "molla";
  content: "\f279";
  font-size: 1.5rem;
  margin-left: 0.7rem;
}
.comment-reply:hover,
.comment-reply:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.comment-user {
  margin-bottom: 1rem;
}
.comment-user h4 {
  color: #333;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 1;
  letter-spacing: -0.01em;
  margin-bottom: 0;
}
.comment-user h4 a {
  color: inherit;
}
.comment-user h4 a:hover,
.comment-user h4 a:focus {
  color: #3aafa9;
}
.comment-user h4 span {
  display: block;
}
.comment-date {
  color: #ccc;
  font-weight: 300;
  font-size: 1.3rem;
  line-height: 1;
}
.reply {
  background-color: #fafafa;
  padding: 4rem 3rem 5rem;
  margin-bottom: 2rem;
}
.reply .heading {
  margin-bottom: 2.4rem;
}
.reply .title {
  font-weight: 600;
  font-size: 1.8rem;
  letter-spacing: -0.025em;
  margin-bottom: 0.9rem;
}
.reply .title-desc {
  color: #ccc;
  font-size: 1.3rem;
  letter-spacing: -0.01em;
}
.reply .form-control {
  background-color: #fff;
}
.reply textarea.form-control {
  min-height: 100px;
}
.entry-fullwidth .entry-body {
  position: relative;
}
@media screen and (min-width: 1200px) {
  .entry-fullwidth .entry-body {
    padding-left: 2rem;
  }
}
.entry-fullwidth .author-body {
  padding-left: 4rem;
}
.entry-fullwidth .social-icons.social-icons-vertical {
  margin-bottom: 2rem;
}
@media screen and (min-width: 576px) {
  .pager-nav {
    flex-direction: row;
    padding-bottom: 3.5rem;
    border-bottom: 0.1rem solid #ebebeb;
  }
  .pager-link {
    flex: 0 0 50%;
    max-width: 50%;
    padding-top: 0.55rem;
    padding-bottom: 0.55rem;
  }
  .pager-link + .pager-link {
    border-top: none;
    border-left: 0.1rem solid #ebebeb;
  }
}
@media screen and (min-width: 768px) {
  .single-entry .entry-title-big {
    font-size: 3.4rem;
  }
  .editor-content::after {
    display: block;
    clear: both;
    content: "";
  }
  .editor-content .float-left {
    margin-right: 4.8rem;
    margin-bottom: 2rem;
  }
  .editor-content .float-right {
    margin-left: 4.8rem;
    margin-bottom: 2rem;
  }
  .editor-content h3 {
    font-size: 2.4rem;
  }
  .editor-content blockquote {
    padding: 4rem 6rem 4rem 12rem;
  }
  .editor-content blockquote:before {
    left: 4rem;
    top: 50%;
  }
}
@media screen and (min-width: 992px) {
  .single-entry .entry-title-big {
    font-size: 4rem;
  }
  .social-icons.social-icons-vertical {
    flex-direction: column;
    text-align: center;
    padding-bottom: 4rem;
  }
  .entry-fullwidth .social-icons.social-icons-vertical {
    margin-bottom: 0;
  }
  .social-icons.social-icons-vertical .social-label {
    margin-right: 0;
    margin-bottom: 1.1rem;
  }
  .social-icons.social-icons-vertical .social-icon {
    margin-bottom: 1rem;
    margin-right: 0;
  }
  .social-icons.social-icons-vertical .social-icon + .social-icon {
    margin-left: 0;
  }
}
@media screen and (max-width: 991px) {
  .sticky-content.is_stuck {
    position: static !important;
    top: auto !important;
    width: auto !important;
    bottom: auto !important;
  }
}
.nav-filter {
  display: flex;
  margin-bottom: 3rem;
}
.nav-filter a {
  display: inline-block;
  color: #777;
  padding: 0.4rem 1rem;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  text-transform: uppercase;
  border-bottom: 0.1rem solid transparent;
}
.nav-filter a:hover,
.nav-filter a:focus {
  color: #3aafa9;
}
.nav-filter .active a {
  color: #3aafa9;
  border-bottom-color: #3aafa9;
}
.portfolio-container {
  position: relative;
  margin: 0 -1rem 4rem;
  transition: height 0.4s;
}
.portfolio-container::after {
  display: block;
  clear: both;
  content: "";
}
.portfolio-nogap {
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 1rem;
}
.portfolio-nogap .col,
.portfolio-nogap [class*="col-"] {
  padding-left: 0;
  padding-right: 0;
}
.portfolio-nogap .portfolio-item {
  margin-bottom: 0;
}
.portfolio-item {
  float: left;
  margin-bottom: 2rem;
}
.portfolio {
  position: relative;
}
.portfolio-media {
  background-color: #ccc;
  margin: 0;
}
.portfolio-media > a {
  position: relative;
  display: block;
  overflow: hidden;
  outline: none !important;
}
.portfolio-media > a:after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 1;
  background-color: #444444;
  visibility: hidden;
  opacity: 0;
  transition: all 0.45s ease;
}
.portfolio-media img {
  display: block;
  max-width: none;
  width: 100%;
  height: auto;
}
.portfolio-item:hover .portfolio-media > a:after {
  visibility: visible;
  opacity: 0.4;
}
.portfolio-item:hover .portfolio-content {
  background-color: #f6f6f6;
}
.portfolio-content {
  padding: 1.6rem 2rem;
  transition: all 0.45s ease;
}
.portfolio-title {
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.3;
  letter-spacing: -0.01em;
  margin-bottom: 0.1rem;
}
.portfolio-title a {
  color: inherit;
}
.portfolio-title a:hover,
.portfolio-title a:focus {
  color: #3aafa9;
}
.portfolio-tags {
  font-weight: 300;
  font-size: 1.3rem;
  letter-spacing: -0.01em;
}
.portfolio-tags a {
  color: #3aafa9;
  transition: all 0.35s ease;
}
.portfolio-tags a:hover,
.portfolio-tags a:focus {
  color: #3aafa9;
  box-shadow: 0 1px 0 #3aafa9;
}
.portfolio-overlay {
  overflow: hidden;
}
.portfolio-overlay .portfolio-content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem 3rem;
  opacity: 0;
  z-index: 2;
  visibility: hidden;
  -webkit-backface-visibility: hidden;
}
.portfolio-overlay .portfolio-content.portfolio-content-center {
  bottom: auto;
  top: 50%;
  text-align: center;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.portfolio-overlay .portfolio-title {
  color: #fff;
}
.portfolio-overlay .portfolio-title a:hover,
.portfolio-overlay .portfolio-title a:focus {
  color: #f1f1f1;
}
.portfolio-overlay .portfolio-tags a {
  color: #ccc;
}
.portfolio-overlay .portfolio-tags a:hover,
.portfolio-overlay .portfolio-tags a:focus {
  color: #fff;
  box-shadow: 0 1px 0 #fff;
}
.portfolio-overlay:hover .portfolio-content {
  visibility: visible;
  opacity: 1;
  background-color: transparent;
}
@media screen and (max-width: 575px) {
  .nav-filter {
    flex-wrap: wrap;
    justify-content: center;
  }
}
.about-images {
  position: relative;
  text-align: right;
  padding-top: 4rem;
}
.about-img-front {
  position: relative;
  z-index: 2;
  border: 2rem solid #f9f9f9;
}
.about-img-back {
  position: absolute;
  right: 0;
  top: 0;
  z-index: 1;
}
.brands-text {
  max-width: 430px;
  margin-top: 0.5rem;
  margin-bottom: 3rem;
}
.brands-text .title {
  line-height: 1.5;
}
.brands-display {
  margin-top: 0.5rem;
}
.brands-display .brand {
  min-height: 0;
  margin-bottom: 4rem;
}
.brands-display [class*="col-"] {
  display: flex;
}
.brands-display [class*="col-"] .brand {
  width: 100%;
}
.about-testimonials blockquote {
  color: #666;
  max-width: 850px;
  margin-left: auto;
  margin-right: auto;
  font-style: normal;
  line-height: 1.875;
}
.member {
  margin-bottom: 2rem;
  max-width: 376px;
  margin-left: auto;
  margin-right: auto;
}
.member p {
  max-width: 240px;
  color: #999;
}
.member.text-center p {
  margin-left: auto;
  margin-right: auto;
}
.member.text-center .social-icons {
  justify-content: center;
}
.member-media {
  position: relative;
  margin: 0;
}
.member-content {
  padding-top: 2.4rem;
  padding-bottom: 2.4rem;
  overflow: hidden;
}
.member-title {
  font-weight: 400;
  font-size: 1.6rem;
  letter-spacing: 0;
  margin-bottom: 0;
}
.member-title span {
  display: block;
  color: #999;
  font-weight: 300;
  font-size: 1.4rem;
  margin-top: 0.3rem;
}
.member-overlay {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgba(102, 102, 102, 0.7);
  color: #fff;
  opacity: 0;
  visibility: hidden;
  overflow: hidden;
}
.member-overlay .member-title {
  color: inherit;
  margin-bottom: 1.5rem;
}
.member-overlay .member-title span {
  color: #ebebeb;
}
.member-overlay .social-icons {
  margin-top: 2.7rem;
}
.member-overlay .social-icon {
  font-size: 1.5rem;
}
.member-overlay .social-icon + .social-icon {
  margin-left: 2.8rem;
}
.member-overlay .social-icon:not(:hover) {
  color: inherit;
}
.member-content,
.member-overlay {
  transition: all 0.45s ease;
}
.member:hover .member-content {
  opacity: 0;
}
.member:hover .member-overlay {
  visibility: visible;
  opacity: 1;
}
.member:hover.member-anim .member-overlay .member-title,
.member:hover.member-anim .member-overlay p,
.member:hover.member-anim .member-overlay .social-icons {
  animation-name: fadeInUpShort;
  animation-duration: 0.65s;
  animation-fill-mode: both;
}
.member:hover.member-anim .member-overlay p {
  animation-delay: 0.1s;
}
.member:hover.member-anim .member-overlay .social-icons {
  animation-delay: 0.2s;
}
.member:hover.member-anim .member-content .member-title {
  animation-name: fadeOutUpShort;
  animation-duration: 0.65s;
  animation-fill-mode: both;
}
@keyframes fadeInUpShort {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100px, 0);
    transform: translate3d(0, 100px, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
@keyframes fadeOutUpShort {
  from {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
  }
}
.member.member-2 {
  background-color: #fff;
  max-width: 277px;
  margin-left: auto;
  margin-right: auto;
}
.member.member-2 .member-content {
  visibility: visible;
  opacity: 1;
  padding-top: 1.7rem;
  padding-bottom: 2.7rem;
}
.member.member-2 .member-overlay {
  color: #333;
  background-color: rgba(249, 249, 249, 0.7);
}
.member.member-2 .member-overlay .social-icons {
  margin-top: 0;
  margin-bottom: 0;
}
#map {
  height: 280px;
  background-color: #ccc;
}
.gm-style .gm-style-iw-c {
  border-radius: 0 !important;
}
#map address {
  color: #666;
  font-style: normal;
  font-weight: 400;
  margin: 0 0 1rem;
  font-size: 1.4rem;
  padding: 0.5rem 0.75rem 0.2rem 0.75rem;
  line-height: 1.5;
  margin: 0;
}
.direction-link {
  display: inline-block;
  margin-top: 1rem;
  line-height: 1;
}
.contact-info {
  margin-bottom: 3rem;
}
.contact-info h3 {
  margin-top: 0.5rem;
  font-weight: 400;
  font-size: 1.8rem;
  letter-spacing: -0.025em;
  margin-bottom: 1.5rem;
}
.contact-list {
  max-width: 270px;
  list-style: none;
  padding-left: 0;
}
.contact-list li {
  position: relative;
  padding-left: 3rem;
  margin-bottom: 1.4rem;
}
.contact-list a {
  color: inherit;
}
.contact-list a:hover,
.contact-list a:focus {
  color: #3aafa9;
}
.contact-list i {
  display: inline-block;
  position: absolute;
  left: 0;
  top: 0.3rem;
  font-size: 2rem;
  line-height: 1;
  color: #3aafa9;
}
.store {
  margin-bottom: 3rem;
  color: #777;
}
.store address,
.store div {
  font-weight: 300;
  font-style: normal;
  margin-bottom: 0;
}
.store a:not(.btn) {
  color: inherit;
}
.store a:not(.btn):hover,
.store a:not(.btn):focus {
  color: #3aafa9;
}
.store .btn.btn-link {
  padding-left: 0;
  padding-right: 0;
  margin-top: 2.1rem;
}
.store-media {
  margin-bottom: 0;
}
.store-title {
  font-weight: 400;
  font-size: 1.6rem;
  letter-spacing: 0;
  margin-bottom: 0.8rem;
  margin-top: -0.2rem;
}
.store-subtitle {
  font-weight: 400;
  font-size: 1.4rem;
  letter-spacing: 0;
  margin-bottom: 0.4rem;
  margin-top: 3.2rem;
}
@media screen and (min-width: 768px) {
  #map {
    height: 380px;
  }
}
@media screen and (min-width: 992px) {
  #map {
    height: 492px;
  }
}
.contact-box {
  margin-bottom: 3rem;
}
.contact-box h3 {
  font-weight: 400;
  font-size: 1.6rem;
  letter-spacing: -0.025em;
  margin-bottom: 1.6rem;
}
.contact-box address,
.contact-box div {
  font-weight: 300;
  font-style: normal;
}
.contact-box a {
  color: inherit;
}
.contact-box a:hover,
.contact-box a:focus {
  color: #3aafa9;
}
.contact-box .social-icons {
  padding-top: 1.5rem;
}
.contact-box .social-icon {
  font-size: 1.3rem;
}
.touch-container .lead {
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}
.form-box {
  max-width: 575px;
  margin-left: auto;
  margin-right: auto;
  background-color: #fff;
  padding: 2.2rem 2rem 4.4rem;
  box-shadow: 0 3px 16px rgba(51, 51, 51, 0.1);
}
.form-box .btn {
  min-width: 115px;
}
.form-tab .nav.nav-pills {
  color: #333;
  border-bottom: 0.1rem solid #ebebeb;
}
.form-tab .nav.nav-pills .nav-item {
  margin-bottom: -0.1rem;
}
.form-tab .nav.nav-pills .nav-item + .nav-item {
  margin-left: 0;
}
.form-tab .nav.nav-pills .nav-link {
  text-transform: capitalize;
  font-weight: 400;
  font-size: 2rem;
  letter-spacing: -0.025em;
  color: inherit;
  border-bottom-width: 0.2rem;
  padding: 0.9rem 1rem;
}
.form-tab .nav.nav-pills .nav-link.active {
  color: inherit;
}
.form-tab .nav-fill .nav-item {
  flex: 1 1 0;
}
.form-tab .tab-content .tab-pane {
  padding: 2rem 0 0;
}
.form-tab .form-group {
  margin-bottom: 1.3rem;
}
.form-tab .form-footer {
  padding-top: 0.6rem;
  padding-bottom: 3rem;
  border-bottom: 0.1rem solid #ebebeb;
  margin-bottom: 2.3rem;
}
.form-tab .form-footer .btn {
  margin-left: auto;
  margin-top: 1rem;
  order: 2;
  width: 100%;
}
.form-tab .form-footer a {
  color: inherit;
}
.form-tab .form-footer a:hover,
.form-tab .form-footer a:focus {
  color: #3aafa9;
}
.form-tab .form-footer a:not(.forgot-link) {
  text-decoration: underline;
}
.form-tab .form-footer .custom-control {
  margin: 0;
}
.form-tab .form-footer .forgot-link {
  order: -1;
  width: 100%;
  margin-bottom: 0.6rem;
}
.form-choice {
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.5;
  letter-spacing: -0.025em;
}
.form-choice p {
  margin-bottom: 2.7rem;
}
.btn.btn-login {
  color: #333;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0.85rem 1rem;
  border: 0.1rem solid #ebebeb;
  min-width: 0;
}
.btn.btn-login i {
  text-align: left;
  display: inline-block;
  margin-right: 0 !important;
  margin-left: 0 !important;
  min-width: 2rem;
}
.btn.btn-login.btn-g i {
  color: #cc3333;
  min-width: 2.6rem;
}
.btn.btn-login.btn-f i {
  color: #3366cc;
}
.btn.btn-login:hover,
.btn.btn-login:focus {
  background-color: #f5f6f9;
}
.form-choice .col-sm-6:not(:last-child) {
  margin-bottom: 0.6rem;
}
@media screen and (min-width: 576px) {
  .form-choice .col-sm-6:not(:last-child) {
    margin-bottom: 0;
  }
  .form-tab .form-footer .btn {
    width: auto;
    margin-top: 0;
  }
}
@media screen and (min-width: 768px) {
  .form-box {
    padding: 3.7rem 6rem 6.4rem;
  }
  .form-tab .nav.nav-pills .nav-link {
    font-size: 2.4rem;
  }
  .form-tab .form-footer .btn {
    margin-left: 0;
    margin-right: 1.6rem;
    order: -1;
  }
  .form-tab .form-footer .forgot-link {
    order: 2;
    width: auto;
    margin-bottom: 0;
    margin-left: auto;
  }
}
.categories-page .banner {
  overflow: hidden;
}
.categories-page .banner > a:not(.banner-link):after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all 0.35s ease;
  background-color: rgba(25, 25, 25, 0.3);
  z-index: 1;
  visibility: hidden;
  opacity: 0;
}
.categories-page .banner-badge .banner-link {
  padding-top: 1.45rem;
  padding-bottom: 1.45rem;
  background-color: rgba(255, 255, 255, 0.9);
  z-index: 5;
  bottom: 2rem;
}
.categories-page .banner-badge .banner-title {
  font-size: 1.6rem;
  margin-bottom: 0.5rem;
}
.categories-page .banner-badge .banner-subtitle {
  font-size: 1.4rem;
}
.categories-page .banner:hover > a:not(.banner-link):after {
  visibility: visible;
  opacity: 1;
}
.sidebar-filter-overlay {
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  background-color: rgba(25, 25, 25, 0.25);
  z-index: 1000;
  transition: all 0.4s;
  visibility: hidden;
  opacity: 0;
}
.sidebar-filter-active .sidebar-filter-overlay {
  visibility: visible;
  opacity: 1;
}
.sidebar-filter {
  position: fixed;
  left: -350px;
  top: 0;
  bottom: 0;
  z-index: 1001;
  background-color: #fff;
  width: 100%;
  max-width: 350px;
  overflow-y: scroll;
  box-shadow: 0.1rem 0 0.6rem 0 rgba(51, 51, 51, 0.5);
  will-change: transform;
  visibility: hidden;
  transition: all 0.35s;
}
.sidebar-filter-active .sidebar-filter {
  visibility: visible;
  transform: translateX(350px);
}
.sidebar-filter .widget {
  padding-left: 1rem;
  padding-right: 1rem;
}
.sidebar-filter .widget:last-child {
  border-bottom: none;
}
.sidebar-filter .widget-clean {
  color: #333;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 1.4rem;
  line-height: 1.5;
  letter-spacing: -0.01em;
  border-bottom: 0.1rem solid #ebebeb;
  padding: 0 1rem 2.4rem;
  margin-bottom: 2rem;
}
.sidebar-filter .widget-clean i {
  font-size: 1.6rem;
  line-height: 1;
  margin-right: 1rem;
}
.sidebar-filter .widget-clean a {
  font-size: 1.4rem;
}
.sidebar-filter-banner.sidebar-shop .widget:not(.widget-clean) {
  border-bottom: none;
  margin-bottom: 4rem;
}
.sidebar-filter-banner.sidebar-shop .widget-title {
  margin-bottom: 1.7rem;
}
.sidebar-filter-wrapper {
  position: relative;
  padding: 3.5rem 2.7rem 1.5rem;
}
.sidebar-filter-clear {
  text-transform: capitalize;
  margin-left: auto;
}
@media screen and (max-width: 380px) {
  .sidebar-filter {
    left: -300px;
    max-width: 300px;
  }
  .sidebar-filter-active .sidebar-filter {
    -webkit-transform: translateX(300px);
    transform: translateX(300px);
  }
  .sidebar-filter-wrapper {
    padding-left: 1.7rem;
    padding-right: 1.7rem;
  }
}
@media screen and (min-width: 992px) {
  .checkout .col-lg-3 {
    -ms-flex: 0 0 30%;
    flex: 0 0 30%;
    max-width: 30%;
  }
  .checkout .col-lg-9 {
    -ms-flex: 0 70%;
    flex: 0 0 70%;
    max-width: 70%;
  }
}
.checkout label {
  margin-bottom: 0.2rem;
}
.checkout .form-control {
  margin-bottom: 1.3rem;
}
.checkout .form-control + .form-control {
  margin-top: 2rem;
}
.checkout .form-control:not(:focus) {
  background-color: #f9f9f9;
}
.checkout textarea.form-control {
  min-height: 150px;
}
.checkout .custom-control {
  margin-top: 2.5rem;
}
.checkout .custom-control + .custom-control {
  margin-top: 1.8rem;
}
.checkout .custom-control + label {
  margin-top: 1rem;
}
.checkout .custom-control .custom-control-label {
  font-weight: 400;
  color: #333;
}
.checkout-title {
  font-weight: 500;
  font-size: 1.6rem;
  letter-spacing: 0;
  margin-top: 2.2rem;
  margin-bottom: 1.8rem;
}
.checkout-discount {
  position: relative;
  max-width: 340px;
  margin-bottom: 0.5rem;
}
.checkout-discount label {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  padding-left: 1.1rem;
  padding-right: 1.1rem;
  font-weight: 400;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  opacity: 1;
  transition: all 0.3s;
}
.checkout-discount label span {
  color: #3aafa9;
}
.checkout-discount .form-control {
  background-color: transparent !important;
  border-radius: 0.3rem;
  border: 0.1rem dashed #d7d7d7;
  padding-left: 1.1rem;
  padding-right: 1.1rem;
}
.checkout-discount .form-control:focus {
  border-color: #3aafa9;
  outline: none !important;
}
.summary {
  padding: 2.5rem 3rem 3rem;
  border: 0.1rem dashed #d7d7d7;
  background-color: #f9f9f9;
  border-radius: 0.3rem;
  margin-top: 2rem;
  margin-bottom: 2rem;
}
.summary-title {
  font-weight: 500;
  font-size: 1.6rem;
  letter-spacing: 0;
  padding-bottom: 1.7rem;
  border-bottom: 0.1rem solid #cccccc;
  margin-bottom: 2.1rem;
}
.table.table-summary {
  line-height: 1.43;
  color: #666;
  border: none;
  margin-bottom: 0;
}
.table.table-summary a {
  color: inherit;
}
.table.table-summary a:hover,
.table.table-summary a:focus {
  color: #3aafa9;
}
.table.table-summary thead th,
.table.table-summary .summary-subtotal td {
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
}
.table.table-summary thead th {
  border-bottom: none;
  padding: 0 0 0.3rem;
}
.table.table-summary tbody td {
  padding: 0;
  height: 70px;
  border-bottom: 0.1rem solid #ebebeb;
}
.table.table-summary thead th,
.table.table-summary tbody td {
  vertical-align: middle;
  border-top: none;
}
.table.table-summary thead th:last-child,
.table.table-summary tbody td:last-child {
  text-align: right;
  min-width: 100px;
}
.table.table-summary .summary-total td {
  font-weight: 400;
  font-size: 1.6rem;
  color: #3aafa9;
  border-bottom: none;
}
.accordion-summary {
  margin-bottom: 3.2rem;
}
.accordion-summary .card {
  color: #999;
  font-weight: 300;
  font-size: 1.2rem;
  line-height: 1.67;
  border: none;
  background-color: transparent;
}
.accordion-summary .card-title {
  font-weight: 300;
  font-size: 1.4rem;
  color: #333;
  letter-spacing: 0;
}
.accordion-summary .card-title a {
  color: inherit;
  padding: 0.7rem 0 0.7rem 3rem;
}
.accordion-summary .card-title a img {
  margin-top: 1rem;
}
.accordion-summary .card-title a:hover,
.accordion-summary .card-title a:focus {
  color: inherit;
}
.accordion-summary .card-title a small {
  font-size: 1.1rem;
  color: #999;
}
.accordion-summary .card-title a:before {
  content: "";
  width: 1.6rem;
  height: 1.6rem;
  border-radius: 50%;
  border: 0.1rem solid #3aafa9;
  right: auto;
  left: 0;
  top: 0.7rem;
  transform: translateY(0);
  -ms-transform: translateY(0);
}
.accordion-summary .card-title a:after {
  content: "";
  display: block;
  width: 0.6rem;
  height: 0.6rem;
  position: absolute;
  left: 0.5rem;
  top: 1.2rem;
  border-radius: 50%;
  background-color: #3aafa9;
  visibility: visible;
  opacity: 1;
  transition: all 0.3s;
}
.accordion-summary .card-title a.collapsed:before {
  border-color: #dadada;
}
.accordion-summary .card-title a.collapsed:after {
  opacity: 0;
  visibility: hidden;
}
.accordion-summary .card-body {
  padding: 0.4rem 0 0.8rem 3rem;
}
.paypal-link {
  cursor: pointer;
  margin-top: 0.2rem;
}
.paypal-link:hover,
.paypal-link:focus {
  color: #3aafa9 !important;
}
@media screen and (min-width: 992px) {
  .summary {
    margin-top: 0;
  }
}
.table td {
  padding-top: 3rem;
  padding-bottom: 3rem;
}
.table .price-col {
  width: 180px;
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
}
.table .stock-col {
  width: 160px;
  font-weight: 400;
  font-size: 1.6rem;
}
.table .action-col {
  width: 202px;
}
.table .action-col .btn {
  height: 40px;
  padding-top: 0.55rem;
  padding-bottom: 0.55rem;
  font-size: 1.3rem;
  text-transform: uppercase;
}
.table .action-col .btn i {
  font-size: 1.8rem;
  margin-right: 1rem !important;
  margin-left: 0 !important;
}
.table .action-col .btn.disabled {
  opacity: 1 !important;
  color: #cccccc !important;
  cursor: default;
  pointer-events: none;
  background-color: #fafafa !important;
  border-color: #ebebeb !important;
}
.table .remove-col {
  padding-right: 0;
  padding-left: 0;
  width: 38px;
  text-align: right;
}
.table .remove-col .btn-remove {
  margin-right: -0.7rem;
}
.product-col .product {
  display: flex;
  align-items: center;
  margin: 0;
  padding-right: 2rem;
  box-shadow: none;
}
.product-col .product-media {
  display: inline-block;
  margin: 0;
  margin-right: 2.8rem;
  flex-shrink: 0;
  max-width: 60px;
}
.product-col .product-title {
  display: inline-block;
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
  line-height: 1.25;
  margin: 0;
}
.product-col .product-title a {
  color: inherit;
}
.product-col .product-title a:hover,
.product-col .product-title a:focus {
  color: #3aafa9;
}
.in-stock {
  color: #2b7a78;
}
.out-of-stock {
  color: #ef837b;
}
.btn-remove {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  color: #cccccc;
  background-color: transparent;
  font-size: 1.7rem;
  line-height: 1;
  border: none;
  outline: none;
  transition: all 0.35s;
}
.btn-remove:hover,
.btn-remove:focus {
  color: #333;
}
.action-col .dropdown-menu {
  color: #666;
  border-radius: 0;
  width: 100%;
  font-size: 1.3rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.action-col .dropdown-item {
  padding: 0.5rem 1.5rem;
  transition: background 0.35s ease, color 0.1s ease;
}
.action-col .dropdown-item.active,
.action-col .dropdown-item:active,
.action-col .dropdown-item:hover,
.action-col .dropdown-item:focus {
  color: #fff;
  background-color: #3aafa9;
}
@media screen and (max-width: 991px) {
  .table-mobile,
  .table-mobile tbody,
  .table-mobile tr,
  .table-mobile td {
    width: 100% !important;
    display: block !important;
  }
  .table-mobile thead {
    display: none !important;
  }
  .table-mobile tr {
    position: relative;
    padding-top: 4.2rem;
    padding-bottom: 4rem;
  }
  .table-mobile .remove-col {
    position: absolute;
    right: 1.5rem;
    top: 0.5rem;
    padding: 0.5rem !important;
    width: auto !important;
  }
  .table-mobile tr td {
    text-align: center;
    padding: 0.1rem 3rem;
    border-bottom: none;
  }
  .table-mobile tr .product-col {
    padding-bottom: 0.6rem;
  }
  .table-mobile tr .action-col {
    padding-top: 1.5rem;
  }
  .table-mobile tr .action-col .btn,
  .table-mobile tr .action-col .dropdown {
    max-width: 220px;
    margin-left: auto;
    margin-right: auto;
  }
  .table-mobile .product-col .product {
    justify-content: center;
  }
  .table-mobile .product-col .product-title {
    text-align: left;
  }
  .table-mobile {
    border: 0.1rem solid #ebebeb;
  }
  .table-mobile tr:not(:last-child) {
    border-bottom: 0.1rem solid #ebebeb;
  }
  .table-mobile .cart-product-quantity {
    margin: 0.5rem auto;
  }
  .product-col .product {
    padding-right: 0;
  }
}
@media screen and (max-width: 767px) {
  .table-mobile .product-col .product-media {
    margin-right: 1.5rem;
  }
}
@media screen and (max-width: 575px) {
  .cart-bottom {
    flex-direction: column;
    margin-bottom: 4rem;
  }
  .cart-bottom .cart-discount .btn {
    margin-top: 0;
  }
  .cart-bottom .btn {
    margin-left: 0 !important;
    margin-top: 1rem;
  }
}
@media screen and (min-width: 992px) {
  .cart .col-lg-3 {
    -ms-flex: 0 0 30%;
    flex: 0 0 30%;
    max-width: 30%;
  }
  .cart .col-lg-9 {
    -ms-flex: 0 70%;
    flex: 0 0 70%;
    max-width: 70%;
  }
}
.table .total-col {
  color: #3aafa9;
  font-weight: 400;
  font-size: 1.6rem;
}
.table.table-cart .price-col {
  width: 120px;
}
.table.table-cart .total-col {
  width: 80px;
}
.table.table-cart .quantity-col {
  width: 135px;
}
.cart-product-quantity {
  width: 100px;
}
.cart-product-quantity .form-control {
  padding: 0.85rem 2.6rem;
  height: 40px;
  max-width: 100%;
  border-color: #dadada;
  background-color: #fff;
  margin: 0;
}
.input-spinner {
  position: relative;
}
.input-spinner .input-group-prepend,
.input-spinner .input-group-append {
  position: absolute;
  top: 0;
}
.input-spinner .input-group-prepend {
  left: 0;
}
.input-spinner .input-group-append {
  right: 0;
}
.input-spinner .form-control {
  padding: 0.85rem 2.6rem;
  height: auto;
  border-color: #dadada;
  background-color: #fff;
  margin: 0;
}
.input-spinner .form-control[disabled] {
  background-color: #f9f9f9;
}
.btn.btn-spinner {
  min-width: 0;
  color: #333333;
  padding: 1.25rem 0.4rem;
  font-size: 1rem;
  border: none;
  background: none;
}
.btn.btn-spinner i {
  margin: 0 !important;
}
.btn.btn-spinner:hover,
.btn.btn-spinner:focus {
  color: #3aafa9;
}
.cart-bottom {
  display: flex;
  align-items: flex-start;
  margin-bottom: 5rem;
}
.cart-bottom .btn {
  margin-left: auto;
  min-width: 152px;
}
.cart-discount {
  flex: 0 0 50%;
  max-width: 326px;
}
.cart-discount .form-control {
  margin-right: 1.1rem;
}
.cart-discount .btn {
  min-width: 40px;
  padding-left: 0;
  padding-right: 0;
}
.summary.summary-cart {
  margin-bottom: 3rem;
}
.summary.summary-cart .summary-title {
  margin-bottom: 0;
}
.table.table-summary .summary-shipping {
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
}
.table.table-summary .summary-shipping td {
  padding-top: 2rem;
  padding-bottom: 1.3rem;
  height: auto;
  border-bottom: none;
}
.table.table-summary .summary-shipping-row {
  color: #333;
}
.table.table-summary .summary-shipping-row label {
  color: inherit;
}
.table.table-summary .summary-shipping-row td {
  height: auto;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  border-bottom: none;
}
.table.table-summary .custom-control {
  margin: 0;
}
.table.table-summary .summary-shipping-estimate {
  color: #333;
  font-weight: 400;
  font-size: 1.6rem;
}
.table.table-summary .summary-shipping-estimate td {
  height: auto;
  padding-top: 1.4rem;
  padding-bottom: 2.3rem;
}
.table.table-summary .summary-shipping-estimate a {
  margin-top: 0.6rem;
  display: inline-block;
  font-weight: 300;
  color: #999;
  font-size: 1.4rem;
  border-bottom: 0.1rem solid #999;
}
.table.table-summary .summary-shipping-estimate a:hover,
.table.table-summary .summary-shipping-estimate a:focus {
  color: #3aafa9;
  border-bottom-color: #3aafa9;
}
.summary-cart .table.table-summary thead th:last-child,
.summary-cart .table.table-summary tbody td:last-child {
  min-width: 0;
}
@media screen and (min-width: 992px) {
  .dashboard .col-lg-3 {
    -ms-flex: 0 0 30%;
    flex: 0 0 30%;
    max-width: 30%;
  }
  .dashboard .col-lg-9 {
    -ms-flex: 0 70%;
    flex: 0 0 70%;
    max-width: 70%;
  }
}
.dashboard label {
  margin-bottom: 0.2rem;
}
.dashboard .form-control {
  margin-bottom: 1.3rem;
}
.dashboard .form-control + .form-control {
  margin-top: 2rem;
}
.dashboard .form-control:not(:focus) {
  background-color: #f9f9f9;
}
.dashboard .tab-pane {
  padding: 0;
  border: none;
  line-height: 2.15;
  padding-bottom: 2rem;
}
.dashboard .tab-pane p {
  margin-bottom: 1rem;
}
.dashboard .btn {
  min-width: 123px;
}
.nav-dashboard {
  margin-top: -1rem;
}
.nav-dashboard .nav-link {
  overflow: hidden;
  position: relative;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.5;
  padding: 1.4rem 0;
  color: #333;
  border-bottom: 0.1rem solid #ebebeb;
}
.nav-dashboard .nav-link:before {
  font-family: "molla";
  content: "\f274";
  display: block;
  font-size: 1.5rem;
  line-height: 1;
  position: absolute;
  top: 50%;
  left: -15px;
  margin-top: -7.5px;
  transition: all 0.3s;
  opacity: 0;
}
.nav-dashboard .nav-link:hover,
.nav-dashboard .nav-link:focus,
.nav-dashboard .nav-link.active {
  color: #3aafa9;
}
.nav-dashboard .nav-link.active {
  padding-left: 2rem;
}
.nav-dashboard .nav-link.active:before {
  left: 0;
  opacity: 1;
}
.card-dashboard {
  margin-bottom: 3rem;
  background-color: #f9f9f9;
  border: 0.1rem solid #ebebeb;
}
.card-dashboard .card-title {
  letter-spacing: 0;
  margin-bottom: 0.5rem;
}
.card-dashboard .card-body {
  padding: 4rem 2.8rem 2rem;
}
.error-content {
  color: #777;
  font-weight: 400;
  font-size: 1.8rem;
  line-height: 1.5;
  letter-spacing: -0.025em;
  padding-top: 8.5rem;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  min-height: 480px;
  background-color: #fdfdfd;
}
.error-content p {
  margin-bottom: 2.5rem;
}
.error-title {
  letter-spacing: -0.025em;
  margin-bottom: 1.4rem;
}
@media screen and (min-width: 768px) {
  .error-content {
    padding-top: 12.5rem;
    min-height: 540px;
  }
  .error-content {
    min-height: 620px;
  }
}
.soon {
  position: relative;
  background-color: #fff;
}
.soon-content {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  padding-top: 8rem;
  padding-bottom: 9rem;
  min-height: 100vh;
  background-color: #fff;
  z-index: 2;
  color: #999;
  font-weight: 400;
  font-size: 1.5rem;
  line-height: 1.875;
}
.soon-content form,
.soon-content hr {
  max-width: 496px;
}
.soon-content.text-center p {
  max-width: 680px;
  margin-left: auto;
  margin-right: auto;
}
.soon-content.text-center form,
.soon-content.text-center hr,
.soon-content.text-center .coming-countdown {
  margin-left: auto;
  margin-right: auto;
}
.soon-content form {
  padding-top: 0.5rem;
}
.soon-content .input-group {
  flex-direction: column;
  align-items: center;
}
.soon-content .btn {
  min-width: 140px;
  margin-top: 1rem;
}
.soon-content .form-control {
  width: 100%;
}
.soon-content .form-control:not(:focus) {
  border-color: #dadada;
}
.soon-bg {
  display: none;
  height: 100%;
  width: 50%;
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  z-index: 1;
}
.soon-logo {
  margin-bottom: 2.3rem;
}
.soon-title {
  font-weight: 400;
  letter-spacing: -0.025em;
  margin-bottom: 4.2rem;
}
.coming-countdown {
  max-width: 476px;
  min-height: 53px;
  padding-bottom: 0.7rem;
}
.coming-countdown .countdown-section {
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1;
  letter-spacing: 0;
}
.coming-countdown .countdown-amount {
  color: #3aafa9;
  font-weight: 400;
  font-size: 2.4rem;
  letter-spacing: -0.025em;
}
.coming-countdown.countdown-separator
  .countdown-section:not(:last-child):after {
  font-size: 30px;
  margin-left: 8px;
  color: #3aafa9;
  margin-top: -1rem;
}
@media screen and (min-width: 576px) {
  .soon-content {
    font-size: 1.6rem;
  }
  .soon-content .input-group {
    flex-direction: row;
  }
  .soon-content .btn {
    margin-left: 1rem;
    margin-top: 0;
  }
  .soon-content .form-control {
    width: auto;
  }
  .coming-countdown .countdown-section {
    font-size: 1.6rem;
  }
  .coming-countdown .countdown-amount {
    font-size: 3rem;
  }
}
@media screen and (min-width: 768px) {
  .soon-content {
    padding-right: 3rem;
  }
  .soon-bg {
    display: block;
  }
}
@media screen and (min-width: 1200px) {
  .soon-content {
    padding-right: 0;
  }
}
.mt-0 {
  margin-top: 0rem !important;
}
.mb-0 {
  margin-bottom: 0rem !important;
}
.pt-0 {
  padding-top: 0rem !important;
}
.pb-0 {
  padding-bottom: 0rem !important;
}
.mt-1 {
  margin-top: 1rem !important;
}
.mb-1 {
  margin-bottom: 1rem !important;
}
.pt-1 {
  padding-top: 1rem !important;
}
.pb-1 {
  padding-bottom: 1rem !important;
}
.mt-2 {
  margin-top: 2rem !important;
}
.mb-2 {
  margin-bottom: 2rem !important;
}
.pt-2 {
  padding-top: 2rem !important;
}
.pb-2 {
  padding-bottom: 2rem !important;
}
.mt-3 {
  margin-top: 3rem !important;
}
.mb-3 {
  margin-bottom: 3rem !important;
}
.pt-3 {
  padding-top: 3rem !important;
}
.pb-3 {
  padding-bottom: 3rem !important;
}
.mt-4 {
  margin-top: 4rem !important;
}
.mb-4 {
  margin-bottom: 4rem !important;
}
.pt-4 {
  padding-top: 4rem !important;
}
.pb-4 {
  padding-bottom: 4rem !important;
}
.mt-5 {
  margin-top: 5rem !important;
}
.mb-5 {
  margin-bottom: 5rem !important;
}
.pt-5 {
  padding-top: 5rem !important;
}
.pb-5 {
  padding-bottom: 5rem !important;
}
.mt-6 {
  margin-top: 6rem !important;
}
.mb-6 {
  margin-bottom: 6rem !important;
}
.pt-6 {
  padding-top: 6rem !important;
}
.pb-6 {
  padding-bottom: 6rem !important;
}
.mt-7 {
  margin-top: 7rem !important;
}
.mb-7 {
  margin-bottom: 7rem !important;
}
.pt-7 {
  padding-top: 7rem !important;
}
.pb-7 {
  padding-bottom: 7rem !important;
}
.mt-8 {
  margin-top: 8rem !important;
}
.mb-8 {
  margin-bottom: 8rem !important;
}
.pt-8 {
  padding-top: 8rem !important;
}
.pb-8 {
  padding-bottom: 8rem !important;
}
.mt-9 {
  margin-top: 9rem !important;
}
.mb-9 {
  margin-bottom: 9rem !important;
}
.pt-9 {
  padding-top: 9rem !important;
}
.pb-9 {
  padding-bottom: 9rem !important;
}
.mt-10 {
  margin-top: 10rem !important;
}
.mb-10 {
  margin-bottom: 10rem !important;
}
.pt-10 {
  padding-top: 10rem !important;
}
.pb-10 {
  padding-bottom: 10rem !important;
}
.mt-11 {
  margin-top: 11rem !important;
}
.mb-11 {
  margin-bottom: 11rem !important;
}
.pt-11 {
  padding-top: 11rem !important;
}
.pb-11 {
  padding-bottom: 11rem !important;
}
.mt-12 {
  margin-top: 12rem !important;
}
.mb-12 {
  margin-bottom: 12rem !important;
}
.pt-12 {
  padding-top: 12rem !important;
}
.pb-12 {
  padding-bottom: 12rem !important;
}
.mt-13 {
  margin-top: 13rem !important;
}
.mb-13 {
  margin-bottom: 13rem !important;
}
.pt-13 {
  padding-top: 13rem !important;
}
.pb-13 {
  padding-bottom: 13rem !important;
}
.mt-14 {
  margin-top: 14rem !important;
}
.mb-14 {
  margin-bottom: 14rem !important;
}
.pt-14 {
  padding-top: 14rem !important;
}
.pb-14 {
  padding-bottom: 14rem !important;
}
.mt-15 {
  margin-top: 15rem !important;
}
.mb-15 {
  margin-bottom: 15rem !important;
}
.pt-15 {
  padding-top: 15rem !important;
}
.pb-15 {
  padding-bottom: 15rem !important;
}
@media screen and (min-width: 768px) {
  .mt-md-0 {
    margin-top: 0rem !important;
  }
  .mt-md-1 {
    margin-top: 1rem !important;
  }
  .mt-md-2 {
    margin-top: 2rem !important;
  }
  .mt-md-3 {
    margin-top: 3rem !important;
  }
  .mt-md-4 {
    margin-top: 4rem !important;
  }
  .mt-md-5 {
    margin-top: 5rem !important;
  }
  .mt-md-6 {
    margin-top: 6rem !important;
  }
  .mt-md-7 {
    margin-top: 7rem !important;
  }
  .mt-md-8 {
    margin-top: 8rem !important;
  }
  .mt-md-9 {
    margin-top: 9rem !important;
  }
  .mt-md-10 {
    margin-top: 10rem !important;
  }
  .mt-md-11 {
    margin-top: 11rem !important;
  }
  .mt-md-12 {
    margin-top: 12rem !important;
  }
  .mt-md-13 {
    margin-top: 13rem !important;
  }
  .mt-md-14 {
    margin-top: 14rem !important;
  }
  .mt-md-15 {
    margin-top: 15rem !important;
  }
  .mb-md-0 {
    margin-bottom: 0rem !important;
  }
  .mb-md-1 {
    margin-bottom: 1rem !important;
  }
  .mb-md-2 {
    margin-bottom: 2rem !important;
  }
  .mb-md-3 {
    margin-bottom: 3rem !important;
  }
  .mb-md-4 {
    margin-bottom: 4rem !important;
  }
  .mb-md-5 {
    margin-bottom: 5rem !important;
  }
  .mb-md-6 {
    margin-bottom: 6rem !important;
  }
  .mb-md-7 {
    margin-bottom: 7rem !important;
  }
  .mb-md-8 {
    margin-bottom: 8rem !important;
  }
  .mb-md-9 {
    margin-bottom: 9rem !important;
  }
  .mb-md-10 {
    margin-bottom: 10rem !important;
  }
  .mb-md-11 {
    margin-bottom: 11rem !important;
  }
  .mb-md-12 {
    margin-bottom: 12rem !important;
  }
  .mb-md-13 {
    margin-bottom: 13rem !important;
  }
  .mb-md-14 {
    margin-bottom: 14rem !important;
  }
  .mb-md-15 {
    margin-bottom: 15rem !important;
  }
  .pt-md-0 {
    padding-top: 0rem !important;
  }
  .pt-md-1 {
    padding-top: 1rem !important;
  }
  .pt-md-2 {
    padding-top: 2rem !important;
  }
  .pt-md-3 {
    padding-top: 3rem !important;
  }
  .pt-md-4 {
    padding-top: 4rem !important;
  }
  .pt-md-5 {
    padding-top: 5rem !important;
  }
  .pt-md-6 {
    padding-top: 6rem !important;
  }
  .pt-md-7 {
    padding-top: 7rem !important;
  }
  .pt-md-8 {
    padding-top: 8rem !important;
  }
  .pt-md-9 {
    padding-top: 9rem !important;
  }
  .pt-md-10 {
    padding-top: 10rem !important;
  }
  .pt-md-11 {
    padding-top: 11rem !important;
  }
  .pt-md-12 {
    padding-top: 12rem !important;
  }
  .pt-md-13 {
    padding-top: 13rem !important;
  }
  .pt-md-14 {
    padding-top: 14rem !important;
  }
  .pt-md-15 {
    padding-top: 15rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0rem !important;
  }
  .pb-md-1 {
    padding-bottom: 1rem !important;
  }
  .pb-md-2 {
    padding-bottom: 2rem !important;
  }
  .pb-md-3 {
    padding-bottom: 3rem !important;
  }
  .pb-md-4 {
    padding-bottom: 4rem !important;
  }
  .pb-md-5 {
    padding-bottom: 5rem !important;
  }
  .pb-md-6 {
    padding-bottom: 6rem !important;
  }
  .pb-md-7 {
    padding-bottom: 7rem !important;
  }
  .pb-md-8 {
    padding-bottom: 8rem !important;
  }
  .pb-md-9 {
    padding-bottom: 9rem !important;
  }
  .pb-md-10 {
    padding-bottom: 10rem !important;
  }
  .pb-md-11 {
    padding-bottom: 11rem !important;
  }
  .pb-md-12 {
    padding-bottom: 12rem !important;
  }
  .pb-md-13 {
    padding-bottom: 13rem !important;
  }
  .pb-md-14 {
    padding-bottom: 14rem !important;
  }
  .pb-md-15 {
    padding-bottom: 15rem !important;
  }
}
@media screen and (min-width: 992px) {
  .mt-lg-0 {
    margin-top: 0rem !important;
  }
  .mt-lg-1 {
    margin-top: 1rem !important;
  }
  .mt-lg-2 {
    margin-top: 2rem !important;
  }
  .mt-lg-3 {
    margin-top: 3rem !important;
  }
  .mt-lg-4 {
    margin-top: 4rem !important;
  }
  .mt-lg-5 {
    margin-top: 5rem !important;
  }
  .mt-lg-6 {
    margin-top: 6rem !important;
  }
  .mt-lg-7 {
    margin-top: 7rem !important;
  }
  .mt-lg-8 {
    margin-top: 8rem !important;
  }
  .mt-lg-9 {
    margin-top: 9rem !important;
  }
  .mt-lg-10 {
    margin-top: 10rem !important;
  }
  .mt-lg-11 {
    margin-top: 11rem !important;
  }
  .mt-lg-12 {
    margin-top: 12rem !important;
  }
  .mt-lg-13 {
    margin-top: 13rem !important;
  }
  .mt-lg-14 {
    margin-top: 14rem !important;
  }
  .mt-lg-15 {
    margin-top: 15rem !important;
  }
  .mb-lg-0 {
    margin-bottom: 0rem !important;
  }
  .mb-lg-1 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 2rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 4rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 5rem !important;
  }
  .mb-lg-6 {
    margin-bottom: 6rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 7rem !important;
  }
  .mb-lg-8 {
    margin-bottom: 8rem !important;
  }
  .mb-lg-9 {
    margin-bottom: 9rem !important;
  }
  .mb-lg-10 {
    margin-bottom: 10rem !important;
  }
  .mb-lg-11 {
    margin-bottom: 11rem !important;
  }
  .mb-lg-12 {
    margin-bottom: 12rem !important;
  }
  .mb-lg-13 {
    margin-bottom: 13rem !important;
  }
  .mb-lg-14 {
    margin-bottom: 14rem !important;
  }
  .mb-lg-15 {
    margin-bottom: 15rem !important;
  }
  .pt-lg-0 {
    padding-top: 0rem !important;
  }
  .pt-lg-1 {
    padding-top: 1rem !important;
  }
  .pt-lg-2 {
    padding-top: 2rem !important;
  }
  .pt-lg-3 {
    padding-top: 3rem !important;
  }
  .pt-lg-4 {
    padding-top: 4rem !important;
  }
  .pt-lg-5 {
    padding-top: 5rem !important;
  }
  .pt-lg-6 {
    padding-top: 6rem !important;
  }
  .pt-lg-7 {
    padding-top: 7rem !important;
  }
  .pt-lg-8 {
    padding-top: 8rem !important;
  }
  .pt-lg-9 {
    padding-top: 9rem !important;
  }
  .pt-lg-10 {
    padding-top: 10rem !important;
  }
  .pt-lg-11 {
    padding-top: 11rem !important;
  }
  .pt-lg-12 {
    padding-top: 12rem !important;
  }
  .pt-lg-13 {
    padding-top: 13rem !important;
  }
  .pt-lg-14 {
    padding-top: 14rem !important;
  }
  .pt-lg-15 {
    padding-top: 15rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0rem !important;
  }
  .pb-lg-1 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 2rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 3rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 4rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 5rem !important;
  }
  .pb-lg-6 {
    padding-bottom: 6rem !important;
  }
  .pb-lg-7 {
    padding-bottom: 7rem !important;
  }
  .pb-lg-8 {
    padding-bottom: 8rem !important;
  }
  .pb-lg-9 {
    padding-bottom: 9rem !important;
  }
  .pb-lg-10 {
    padding-bottom: 10rem !important;
  }
  .pb-lg-11 {
    padding-bottom: 11rem !important;
  }
  .pb-lg-12 {
    padding-bottom: 12rem !important;
  }
  .pb-lg-13 {
    padding-bottom: 13rem !important;
  }
  .pb-lg-14 {
    padding-bottom: 14rem !important;
  }
  .pb-lg-15 {
    padding-bottom: 15rem !important;
  }
}
@media screen and (min-width: 1200px) {
  .mt-xl-0 {
    margin-top: 0rem !important;
  }
  .mt-xl-1 {
    margin-top: 1rem !important;
  }
  .mt-xl-2 {
    margin-top: 2rem !important;
  }
  .mt-xl-3 {
    margin-top: 3rem !important;
  }
  .mt-xl-4 {
    margin-top: 4rem !important;
  }
  .mt-xl-5 {
    margin-top: 5rem !important;
  }
  .mt-xl-6 {
    margin-top: 6rem !important;
  }
  .mt-xl-7 {
    margin-top: 7rem !important;
  }
  .mt-xl-8 {
    margin-top: 8rem !important;
  }
  .mt-xl-9 {
    margin-top: 9rem !important;
  }
  .mt-xl-10 {
    margin-top: 10rem !important;
  }
  .mt-xl-11 {
    margin-top: 11rem !important;
  }
  .mt-xl-12 {
    margin-top: 12rem !important;
  }
  .mt-xl-13 {
    margin-top: 13rem !important;
  }
  .mt-xl-14 {
    margin-top: 14rem !important;
  }
  .mt-xl-15 {
    margin-top: 15rem !important;
  }
  .mb-xl-0 {
    margin-bottom: 0rem !important;
  }
  .mb-xl-1 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 2rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 4rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 5rem !important;
  }
  .mb-xl-6 {
    margin-bottom: 6rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 7rem !important;
  }
  .mb-xl-8 {
    margin-bottom: 8rem !important;
  }
  .mb-xl-9 {
    margin-bottom: 9rem !important;
  }
  .mb-xl-10 {
    margin-bottom: 10rem !important;
  }
  .mb-xl-11 {
    margin-bottom: 11rem !important;
  }
  .mb-xl-12 {
    margin-bottom: 12rem !important;
  }
  .mb-xl-13 {
    margin-bottom: 13rem !important;
  }
  .mb-xl-14 {
    margin-bottom: 14rem !important;
  }
  .mb-xl-15 {
    margin-bottom: 15rem !important;
  }
}
@media screen and (min-width: 1600px) {
  .mt-xxl-0 {
    margin-top: 0rem !important;
  }
  .mt-xxl-1 {
    margin-top: 1rem !important;
  }
  .mt-xxl-2 {
    margin-top: 2rem !important;
  }
  .mt-xxl-3 {
    margin-top: 3rem !important;
  }
  .mt-xxl-4 {
    margin-top: 4rem !important;
  }
  .mt-xxl-5 {
    margin-top: 5rem !important;
  }
  .mt-xxl-6 {
    margin-top: 6rem !important;
  }
  .mt-xxl-7 {
    margin-top: 7rem !important;
  }
  .mt-xxl-8 {
    margin-top: 8rem !important;
  }
  .mt-xxl-9 {
    margin-top: 9rem !important;
  }
  .mt-xxl-10 {
    margin-top: 10rem !important;
  }
  .mt-xxl-11 {
    margin-top: 11rem !important;
  }
  .mt-xxl-12 {
    margin-top: 12rem !important;
  }
  .mt-xxl-13 {
    margin-top: 13rem !important;
  }
  .mt-xxl-14 {
    margin-top: 14rem !important;
  }
  .mt-xxl-15 {
    margin-top: 15rem !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0rem !important;
  }
  .mb-xxl-1 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 2rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 4rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 5rem !important;
  }
  .mb-xxl-6 {
    margin-bottom: 6rem !important;
  }
  .mb-xxl-7 {
    margin-bottom: 7rem !important;
  }
  .mb-xxl-8 {
    margin-bottom: 8rem !important;
  }
  .mb-xxl-9 {
    margin-bottom: 9rem !important;
  }
  .mb-xxl-10 {
    margin-bottom: 10rem !important;
  }
  .mb-xxl-11 {
    margin-bottom: 11rem !important;
  }
  .mb-xxl-12 {
    margin-bottom: 12rem !important;
  }
  .mb-xxl-13 {
    margin-bottom: 13rem !important;
  }
  .mb-xxl-14 {
    margin-bottom: 14rem !important;
  }
  .mb-xxl-15 {
    margin-bottom: 15rem !important;
  }
}
@font-face {
  font-family: "molla";
  src: url("../fonts/molla0ab2.eot?74273691");
  src: url("../fonts/molla0ab2.eot?74273691#iefix") format("embedded-opentype"),
    url("../fonts/molla0ab2.woff2?74273691") format("woff2"),
    url("../fonts/molla0ab2.woff?74273691") format("woff"),
    url("../fonts/molla0ab2.ttf?74273691") format("truetype"),
    url("../fonts/molla0ab2.svg?74273691#molla") format("svg");
  font-weight: normal;
  font-style: normal;
}
[class^="icon-"]:before,
[class*=" icon-"]:before {
  font-family: "molla";
  font-style: normal;
  font-weight: normal;
  display: inline-block;
  text-decoration: inherit;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.icon-google:before {
  content: "\e800";
}
.icon-check:before {
  content: "\e801";
}
.icon-angle-up:before {
  content: "\e802";
}
.icon-life-ring:before {
  content: "\e803";
}
.icon-phone-square:before {
  content: "\e804";
}
.icon-euro:before {
  content: "\e805";
}
.icon-phone:before {
  content: "\e806";
}
.icon-life-bouy:before {
  content: "\e807";
}
.icon-rmb:before {
  content: "\e808";
}
.icon-creative-commons-1:before {
  content: "\e809";
}
.icon-comment-o:before {
  content: "\e80a";
}
.icon-check-circle-o:before {
  content: "\e80b";
}
.icon-info-circle:before {
  content: "\e80c";
}
.icon-cog:before {
  content: "\e80d";
}
.icon-cogs:before {
  content: "\e80e";
}
.icon-gift:before {
  content: "\e80f";
}
.icon-cart-arrow-down:before {
  content: "\e810";
}
.icon-home:before {
  content: "\e811";
}
.icon-cart-plus:before {
  content: "\e812";
}
.icon-refresh:before {
  content: "\e813";
}
.icon-eye:before {
  content: "\e814";
}
.icon-map-marker:before {
  content: "\e815";
}
.icon-headphones:before {
  content: "\e816";
}
.icon-comments:before {
  content: "\e817";
}
.icon-list-alt:before {
  content: "\e818";
}
.icon-list-ol:before {
  content: "\e819";
}
.icon-clone-1:before {
  content: "\e81a";
}
.icon-plus-square-o:before {
  content: "\e81b";
}
.icon-rotate-left:before {
  content: "\e81c";
}
.icon-tv:before {
  content: "\e81d";
}
.icon-play:before {
  content: "\ec2c";
}
.icon-check:before {
  content: "\ec2d";
}
.icon-music:before {
  content: "\f001";
}
.icon-gift-1:before {
  content: "\f06b";
}
.icon-twitter-square:before {
  content: "\f081";
}
.icon-facebook-square:before {
  content: "\f082";
}
.icon-linkedin:before {
  content: "\f08c";
}
.icon-github-square:before {
  content: "\f092";
}
.icon-twitter:before {
  content: "\f099";
}
.icon-facebook:before {
  content: "\f09a";
}
.icon-github:before {
  content: "\f09b";
}
.icon-pinterest:before {
  content: "\f0d2";
}
.icon-pinterest-square:before {
  content: "\f0d3";
}
.icon-google-plus-square:before {
  content: "\f0d4";
}
.icon-google-plus-g:before {
  content: "\f0d5";
}
.icon-linkedin-in:before {
  content: "\f0e1";
}
.icon-laptop:before {
  content: "\f109";
}
.icon-quote-left:before {
  content: "\f10d";
}
.icon-quote-right:before {
  content: "\f10e";
}
.icon-angle-down:before {
  content: "\f110";
}
.icon-angle-left:before {
  content: "\f111";
}
.icon-angle-right:before {
  content: "\f112";
}
.icon-github-alt:before {
  content: "\f113";
}
.icon-arrow-down:before {
  content: "\f11f";
}
.icon-arrow-left:before {
  content: "\f120";
}
.icon-arrow-right:before {
  content: "\f121";
}
.icon-arrow-up:before {
  content: "\f122";
}
.icon-arrows:before {
  content: "\f123";
}
.icon-balance-scale:before {
  content: "\f12b";
}
.icon-bars:before {
  content: "\f131";
}
.icon-maxcdn:before {
  content: "\f136";
}
.icon-html5:before {
  content: "\f13b";
}
.icon-css3:before {
  content: "\f13c";
}
.icon-binoculars:before {
  content: "\f145";
}
.icon-bookmark-o:before {
  content: "\f150";
}
.icon-btc:before {
  content: "\f15a";
}
.icon-calendar:before {
  content: "\f15c";
}
.icon-youtube:before {
  content: "\f167";
}
.icon-xing:before {
  content: "\f168";
}
.icon-xing-square:before {
  content: "\f169";
}
.icon-dropbox:before {
  content: "\f16b";
}
.icon-stack-overflow:before {
  content: "\f16c";
}
.icon-instagram:before {
  content: "\f16d";
}
.icon-flickr:before {
  content: "\f16e";
}
.icon-adn:before {
  content: "\f170";
}
.icon-bitbucket:before {
  content: "\f171";
}
.icon-tumblr:before {
  content: "\f173";
}
.icon-tumblr-square:before {
  content: "\f174";
}
.icon-certificate:before {
  content: "\f178";
}
.icon-apple:before {
  content: "\f179";
}
.icon-windows:before {
  content: "\f17a";
}
.icon-android:before {
  content: "\f17b";
}
.icon-linux:before {
  content: "\f17c";
}
.icon-dribbble:before {
  content: "\f17d";
}
.icon-skype:before {
  content: "\f17e";
}
.icon-foursquare:before {
  content: "\f180";
}
.icon-trello:before {
  content: "\f181";
}
.icon-gratipay:before {
  content: "\f184";
}
.icon-vk:before {
  content: "\f189";
}
.icon-weibo:before {
  content: "\f18a";
}
.icon-renren:before {
  content: "\f18b";
}
.icon-pagelines:before {
  content: "\f18c";
}
.icon-stack-exchange:before {
  content: "\f18d";
}
.icon-clock-o:before {
  content: "\f18f";
}
.icon-close:before {
  content: "\f191";
}
.icon-vimeo-square:before {
  content: "\f194";
}
.icon-slack:before {
  content: "\f198";
}
.icon-wordpress:before {
  content: "\f19a";
}
.icon-openid:before {
  content: "\f19b";
}
.icon-yahoo:before {
  content: "\f19e";
}
.icon-reddit:before {
  content: "\f1a1";
}
.icon-reddit-square:before {
  content: "\f1a2";
}
.icon-stumbleupon-circle:before {
  content: "\f1a3";
}
.icon-stumbleupon:before {
  content: "\f1a4";
}
.icon-delicious:before {
  content: "\f1a5";
}
.icon-digg:before {
  content: "\f1a6";
}
.icon-pied-piper-pp:before {
  content: "\f1a7";
}
.icon-pied-piper-alt:before {
  content: "\f1a8";
}
.icon-drupal:before {
  content: "\f1a9";
}
.icon-joomla:before {
  content: "\f1aa";
}
.icon-behance:before {
  content: "\f1b4";
}
.icon-behance-square:before {
  content: "\f1b5";
}
.icon-steam:before {
  content: "\f1b6";
}
.icon-steam-square:before {
  content: "\f1b7";
}
.icon-dollar:before {
  content: "\f1bb";
}
.icon-spotify:before {
  content: "\f1bc";
}
.icon-deviantart:before {
  content: "\f1bd";
}
.icon-soundcloud:before {
  content: "\f1be";
}
.icon-edit:before {
  content: "\f1c1";
}
.icon-envelope:before {
  content: "\f1c6";
}
.icon-vine:before {
  content: "\f1ca";
}
.icon-codepen:before {
  content: "\f1cb";
}
.icon-jsfiddle:before {
  content: "\f1cc";
}
.icon-exclamation-circle:before {
  content: "\f1ce";
}
.icon-rebel:before {
  content: "\f1d0";
}
.icon-empire:before {
  content: "\f1d1";
}
.icon-git:before {
  content: "\f1d3";
}
.icon-hacker-news:before {
  content: "\f1d4";
}
.icon-tencent-weibo:before {
  content: "\f1d5";
}
.icon-qq:before {
  content: "\f1d6";
}
.icon-weixin:before {
  content: "\f1d7";
}
.icon-slideshare:before {
  content: "\f1e7";
}
.icon-twitch:before {
  content: "\f1e8";
}
.icon-yelp:before {
  content: "\f1e9";
}
.icon-paypal:before {
  content: "\f1ed";
}
.icon-google-wallet:before {
  content: "\f1ee";
}
.icon-cc-visa:before {
  content: "\f1f0";
}
.icon-cc-mastercard:before {
  content: "\f1f1";
}
.icon-cc-discover:before {
  content: "\f1f2";
}
.icon-cc-amex:before {
  content: "\f1f3";
}
.icon-cc-paypal:before {
  content: "\f1f4";
}
.icon-cc-stripe:before {
  content: "\f1f5";
}
.icon-lastfm:before {
  content: "\f202";
}
.icon-lastfm-square:before {
  content: "\f203";
}
.icon-ioxhost:before {
  content: "\f208";
}
.icon-angellist:before {
  content: "\f209";
}
.icon-buysellads:before {
  content: "\f20d";
}
.icon-connectdevelop:before {
  content: "\f20e";
}
.icon-dashcube:before {
  content: "\f210";
}
.icon-forumbee:before {
  content: "\f211";
}
.icon-leanpub:before {
  content: "\f212";
}
.icon-sellsy:before {
  content: "\f213";
}
.icon-shirtsinbulk:before {
  content: "\f214";
}
.icon-simplybuilt:before {
  content: "\f215";
}
.icon-skyatlas:before {
  content: "\f216";
}
.icon-heartbeat:before {
  content: "\f21e";
}
.icon-pinterest-p:before {
  content: "\f231";
}
.icon-whatsapp:before {
  content: "\f232";
}
.icon-heart:before {
  content: "\f233";
}
.icon-heart-o:before {
  content: "\f234";
}
.icon-viacoin:before {
  content: "\f237";
}
.icon-medium:before {
  content: "\f23a";
}
.icon-y-combinator:before {
  content: "\f23b";
}
.icon-optin-monster:before {
  content: "\f23c";
}
.icon-opencart:before {
  content: "\f23d";
}
.icon-expeditedssl:before {
  content: "\f23e";
}
.icon-cc-jcb:before {
  content: "\f24b";
}
.icon-cc-diners-club:before {
  content: "\f24c";
}
.icon-clone:before {
  content: "\f24d";
}
.icon-jpy:before {
  content: "\f253";
}
.icon-creative-commons:before {
  content: "\f25e";
}
.icon-gg:before {
  content: "\f260";
}
.icon-gg-circle:before {
  content: "\f261";
}
.icon-tripadvisor:before {
  content: "\f262";
}
.icon-odnoklassniki:before {
  content: "\f263";
}
.icon-odnoklassniki-square:before {
  content: "\f264";
}
.icon-get-pocket:before {
  content: "\f265";
}
.icon-wikipedia-w:before {
  content: "\f266";
}
.icon-safari:before {
  content: "\f267";
}
.icon-chrome:before {
  content: "\f268";
}
.icon-firefox:before {
  content: "\f269";
}
.icon-opera:before {
  content: "\f26a";
}
.icon-internet-explorer:before {
  content: "\f26b";
}
.icon-list:before {
  content: "\f26c";
}
.icon-contao:before {
  content: "\f26d";
}
.icon-500px:before {
  content: "\f26e";
}
.icon-list-ul:before {
  content: "\f26f";
}
.icon-amazon:before {
  content: "\f270";
}
.icon-long-arrow-down:before {
  content: "\f272";
}
.icon-long-arrow-left:before {
  content: "\f273";
}
.icon-long-arrow-right:before {
  content: "\f274";
}
.icon-long-arrow-up:before {
  content: "\f275";
}
.icon-magic:before {
  content: "\f276";
}
.icon-map-signs:before {
  content: "\f277";
}
.icon-mail-reply:before {
  content: "\f279";
}
.icon-houzz:before {
  content: "\f27c";
}
.icon-vimeo-v:before {
  content: "\f27d";
}
.icon-black-tie:before {
  content: "\f27e";
}
.icon-fonticons:before {
  content: "\f280";
}
.icon-reddit-alien:before {
  content: "\f281";
}
.icon-edge:before {
  content: "\f282";
}
.icon-codiepie:before {
  content: "\f284";
}
.icon-modx:before {
  content: "\f285";
}
.icon-fort-awesome:before {
  content: "\f286";
}
.icon-usb:before {
  content: "\f287";
}
.icon-product-hunt:before {
  content: "\f288";
}
.icon-mixcloud:before {
  content: "\f289";
}
.icon-scribd:before {
  content: "\f28a";
}
.icon-minus:before {
  content: "\f28e";
}
.icon-shopping-bag:before {
  content: "\f290";
}
.icon-bluetooth:before {
  content: "\f293";
}
.icon-bluetooth-b:before {
  content: "\f294";
}
.icon-gitlab:before {
  content: "\f296";
}
.icon-wpbeginner:before {
  content: "\f297";
}
.icon-wpforms:before {
  content: "\f298";
}
.icon-envira:before {
  content: "\f299";
}
.icon-glide:before {
  content: "\f2a5";
}
.icon-glide-g:before {
  content: "\f2a6";
}
.icon-viadeo:before {
  content: "\f2a9";
}
.icon-viadeo-square:before {
  content: "\f2aa";
}
.icon-snapchat:before {
  content: "\f2ab";
}
.icon-snapchat-ghost:before {
  content: "\f2ac";
}
.icon-snapchat-square:before {
  content: "\f2ad";
}
.icon-pied-piper:before {
  content: "\f2ae";
}
.icon-first-order:before {
  content: "\f2b0";
}
.icon-yoast:before {
  content: "\f2b1";
}
.icon-themeisle:before {
  content: "\f2b2";
}
.icon-google-plus:before {
  content: "\f2b3";
}
.icon-font-awesome:before {
  content: "\f2b4";
}
.icon-linode:before {
  content: "\f2b8";
}
.icon-play-outline:before {
  content: "\f2be";
}
.icon-plus:before {
  content: "\f2c2";
}
.icon-quora:before {
  content: "\f2c4";
}
.icon-free-code-camp:before {
  content: "\f2c5";
}
.icon-telegram:before {
  content: "\f2c6";
}
.icon-puzzle-piece:before {
  content: "\f2c8";
}
.icon-question-circle:before {
  content: "\f2cc";
}
.icon-random:before {
  content: "\f2d0";
}
.icon-bandcamp:before {
  content: "\f2d5";
}
.icon-grav:before {
  content: "\f2d6";
}
.icon-etsy:before {
  content: "\f2d7";
}
.icon-imdb:before {
  content: "\f2d8";
}
.icon-ravelry:before {
  content: "\f2d9";
}
.icon-sellcast:before {
  content: "\f2da";
}
.icon-superpowers:before {
  content: "\f2dd";
}
.icon-wpexplorer:before {
  content: "\f2de";
}
.icon-rocket:before {
  content: "\f2df";
}
.icon-meetup:before {
  content: "\f2e0";
}
.icon-rotate-right:before {
  content: "\f2e1";
}
.icon-rupee:before {
  content: "\f2e7";
}
.icon-search:before {
  content: "\f2eb";
}
.icon-search-plus:before {
  content: "\f2ed";
}
.icon-shopping-cart:before {
  content: "\f2fa";
}
.icon-spinner:before {
  content: "\f311";
}
.icon-star:before {
  content: "\f318";
}
.icon-star-o:before {
  content: "\f31b";
}
.icon-tag:before {
  content: "\f330";
}
.icon-tags:before {
  content: "\f331";
}
.icon-th-list:before {
  content: "\f33b";
}
.icon-thumbs-down:before {
  content: "\f33d";
}
.icon-thumbs-up:before {
  content: "\f340";
}
.icon-times:before {
  content: "\f342";
}
.icon-times-circle-o:before {
  content: "\f344";
}
.icon-trophy:before {
  content: "\f351";
}
.icon-truck:before {
  content: "\f352";
}
.icon-turkish-lira:before {
  content: "\f357";
}
.icon-font-awesome-alt:before {
  content: "\f35c";
}
.icon-unlock:before {
  content: "\f360";
}
.icon-usd:before {
  content: "\f363";
}
.icon-user:before {
  content: "\f364";
}
.icon-accessible-icon:before {
  content: "\f368";
}
.icon-accusoft:before {
  content: "\f369";
}
.icon-adversal:before {
  content: "\f36a";
}
.icon-affiliatetheme:before {
  content: "\f36b";
}
.icon-algolia:before {
  content: "\f36c";
}
.icon-amilia:before {
  content: "\f36d";
}
.icon-angrycreative:before {
  content: "\f36e";
}
.icon-app-store:before {
  content: "\f36f";
}
.icon-app-store-ios:before {
  content: "\f370";
}
.icon-apper:before {
  content: "\f371";
}
.icon-asymmetrik:before {
  content: "\f372";
}
.icon-audible:before {
  content: "\f373";
}
.icon-avianex:before {
  content: "\f374";
}
.icon-aws:before {
  content: "\f375";
}
.icon-bimobject:before {
  content: "\f378";
}
.icon-bitcoin:before {
  content: "\f379";
}
.icon-bity:before {
  content: "\f37a";
}
.icon-blackberry:before {
  content: "\f37b";
}
.icon-blogger:before {
  content: "\f37c";
}
.icon-blogger-b:before {
  content: "\f37d";
}
.icon-buromobelexperte:before {
  content: "\f37f";
}
.icon-centercode:before {
  content: "\f380";
}
.icon-cloudscale:before {
  content: "\f383";
}
.icon-cloudsmith:before {
  content: "\f384";
}
.icon-cloudversify:before {
  content: "\f385";
}
.icon-cpanel:before {
  content: "\f388";
}
.icon-yen:before {
  content: "\f38a";
}
.icon-css3-alt:before {
  content: "\f38b";
}
.icon-cuttlefish:before {
  content: "\f38c";
}
.icon-d-and-d:before {
  content: "\f38d";
}
.icon-deploydog:before {
  content: "\f38e";
}
.icon-deskpro:before {
  content: "\f38f";
}
.icon-digital-ocean:before {
  content: "\f391";
}
.icon-discord:before {
  content: "\f392";
}
.icon-discourse:before {
  content: "\f393";
}
.icon-dochub:before {
  content: "\f394";
}
.icon-docker:before {
  content: "\f395";
}
.icon-draft2digital:before {
  content: "\f396";
}
.icon-dribbble-square:before {
  content: "\f397";
}
.icon-dyalog:before {
  content: "\f399";
}
.icon-earlybirds:before {
  content: "\f39a";
}
.icon-erlang:before {
  content: "\f39d";
}
.icon-facebook-f:before {
  content: "\f39e";
}
.icon-facebook-messenger:before {
  content: "\f39f";
}
.icon-firstdraft:before {
  content: "\f3a1";
}
.icon-fonticons-fi:before {
  content: "\f3a2";
}
.icon-fort-awesome-alt:before {
  content: "\f3a3";
}
.icon-freebsd:before {
  content: "\f3a4";
}
.icon-gitkraken:before {
  content: "\f3a6";
}
.icon-gofore:before {
  content: "\f3a7";
}
.icon-goodreads:before {
  content: "\f3a8";
}
.icon-goodreads-g:before {
  content: "\f3a9";
}
.icon-google-drive:before {
  content: "\f3aa";
}
.icon-google-play:before {
  content: "\f3ab";
}
.icon-gripfire:before {
  content: "\f3ac";
}
.icon-grunt:before {
  content: "\f3ad";
}
.icon-gulp:before {
  content: "\f3ae";
}
.icon-hacker-news-square:before {
  content: "\f3af";
}
.icon-hire-a-helper:before {
  content: "\f3b0";
}
.icon-hotjar:before {
  content: "\f3b1";
}
.icon-hubspot:before {
  content: "\f3b2";
}
.icon-itunes:before {
  content: "\f3b4";
}
.icon-itunes-note:before {
  content: "\f3b5";
}
.icon-jenkins:before {
  content: "\f3b6";
}
.icon-joget:before {
  content: "\f3b7";
}
.icon-js:before {
  content: "\f3b8";
}
.icon-js-square:before {
  content: "\f3b9";
}
.icon-keycdn:before {
  content: "\f3ba";
}
.icon-kickstarter:before {
  content: "\f3bb";
}
.icon-kickstarter-k:before {
  content: "\f3bc";
}
.icon-laravel:before {
  content: "\f3bd";
}
.icon-line:before {
  content: "\f3c0";
}
.icon-lyft:before {
  content: "\f3c3";
}
.icon-magento:before {
  content: "\f3c4";
}
.icon-medapps:before {
  content: "\f3c6";
}
.icon-medium-m:before {
  content: "\f3c7";
}
.icon-medrt:before {
  content: "\f3c8";
}
.icon-microsoft:before {
  content: "\f3ca";
}
.icon-mix:before {
  content: "\f3cb";
}
.icon-mizuni:before {
  content: "\f3cc";
}
.icon-mobile-alt:before {
  content: "\f3cd";
}
.icon-monero:before {
  content: "\f3d0";
}
.icon-napster:before {
  content: "\f3d2";
}
.icon-node-js:before {
  content: "\f3d3";
}
.icon-npm:before {
  content: "\f3d4";
}
.icon-ns8:before {
  content: "\f3d5";
}
.icon-nutritionix:before {
  content: "\f3d6";
}
.icon-page4:before {
  content: "\f3d7";
}
.icon-palfed:before {
  content: "\f3d8";
}
.icon-patreon:before {
  content: "\f3d9";
}
.icon-periscope:before {
  content: "\f3da";
}
.icon-phabricator:before {
  content: "\f3db";
}
.icon-phoenix-framework:before {
  content: "\f3dc";
}
.icon-playstation:before {
  content: "\f3df";
}
.icon-pushed:before {
  content: "\f3e1";
}
.icon-python:before {
  content: "\f3e2";
}
.icon-red-river:before {
  content: "\f3e3";
}
.icon-wpressr:before {
  content: "\f3e4";
}
.icon-replyd:before {
  content: "\f3e6";
}
.icon-resolving:before {
  content: "\f3e7";
}
.icon-rocketchat:before {
  content: "\f3e8";
}
.icon-rockrms:before {
  content: "\f3e9";
}
.icon-schlix:before {
  content: "\f3ea";
}
.icon-searchengin:before {
  content: "\f3eb";
}
.icon-servicestack:before {
  content: "\f3ec";
}
.icon-sistrix:before {
  content: "\f3ee";
}
.icon-slack-hash:before {
  content: "\f3ef";
}
.icon-speakap:before {
  content: "\f3f3";
}
.icon-staylinked:before {
  content: "\f3f5";
}
.icon-steam-symbol:before {
  content: "\f3f6";
}
.icon-sticker-mule:before {
  content: "\f3f7";
}
.icon-studiovinari:before {
  content: "\f3f8";
}
.icon-supple:before {
  content: "\f3f9";
}
.icon-telegram-plane:before {
  content: "\f3fe";
}
.icon-uber:before {
  content: "\f402";
}
.icon-uikit:before {
  content: "\f403";
}
.icon-uniregistry:before {
  content: "\f404";
}
.icon-untappd:before {
  content: "\f405";
}
.icon-ussunnah:before {
  content: "\f407";
}
.icon-vaadin:before {
  content: "\f408";
}
.icon-viber:before {
  content: "\f409";
}
.icon-vimeo:before {
  content: "\f40a";
}
.icon-vnv:before {
  content: "\f40b";
}
.icon-whatsapp-square:before {
  content: "\f40c";
}
.icon-whmcs:before {
  content: "\f40d";
}
.icon-wordpress-simple:before {
  content: "\f411";
}
.icon-xbox:before {
  content: "\f412";
}
.icon-yandex:before {
  content: "\f413";
}
.icon-yandex-international:before {
  content: "\f414";
}
.icon-apple-pay:before {
  content: "\f415";
}
.icon-cc-apple-pay:before {
  content: "\f416";
}
.icon-fly:before {
  content: "\f417";
}
.icon-nintendo-switch:before {
  content: "\f418";
}
.icon-node:before {
  content: "\f419";
}
.icon-osi:before {
  content: "\f41a";
}
.icon-react:before {
  content: "\f41b";
}
.icon-autoprefixer:before {
  content: "\f41c";
}
.icon-less:before {
  content: "\f41d";
}
.icon-sass:before {
  content: "\f41e";
}
.icon-vuejs:before {
  content: "\f41f";
}
.icon-angular:before {
  content: "\f420";
}
.icon-aviato:before {
  content: "\f421";
}
.icon-ember:before {
  content: "\f423";
}
.icon-font-awesome-flag:before {
  content: "\f425";
}
.icon-gitter:before {
  content: "\f426";
}
.icon-hooli:before {
  content: "\f427";
}
.icon-strava:before {
  content: "\f428";
}
.icon-stripe:before {
  content: "\f429";
}
.icon-stripe-s:before {
  content: "\f42a";
}
.icon-typo3:before {
  content: "\f42b";
}
.icon-amazon-pay:before {
  content: "\f42c";
}
.icon-cc-amazon-pay:before {
  content: "\f42d";
}
.icon-ethereum:before {
  content: "\f42e";
}
.icon-korvue:before {
  content: "\f42f";
}
.icon-elementor:before {
  content: "\f430";
}
.icon-youtube-square:before {
  content: "\f431";
}
.icon-flipboard:before {
  content: "\f44d";
}
.icon-hips:before {
  content: "\f452";
}
.icon-php:before {
  content: "\f457";
}
.icon-quinscape:before {
  content: "\f459";
}
.icon-couch:before {
  content: "\f4b8";
}
.icon-readme:before {
  content: "\f4d5";
}
.icon-java:before {
  content: "\f4e4";
}
.icon-pied-piper-hat:before {
  content: "\f4e5";
}
.icon-creative-commons-by:before {
  content: "\f4e7";
}
.icon-creative-commons-nc:before {
  content: "\f4e8";
}
.icon-creative-commons-nc-eu:before {
  content: "\f4e9";
}
.icon-creative-commons-nc-jp:before {
  content: "\f4ea";
}
.icon-creative-commons-nd:before {
  content: "\f4eb";
}
.icon-creative-commons-pd:before {
  content: "\f4ec";
}
.icon-creative-commons-pd-alt:before {
  content: "\f4ed";
}
.icon-creative-commons-remix:before {
  content: "\f4ee";
}
.icon-creative-commons-sa:before {
  content: "\f4ef";
}
.icon-creative-commons-sampling:before {
  content: "\f4f0";
}
.icon-creative-commons-sampling-plus:before {
  content: "\f4f1";
}
.icon-creative-commons-share:before {
  content: "\f4f2";
}
.icon-creative-commons-zero:before {
  content: "\f4f3";
}
.icon-ebay:before {
  content: "\f4f4";
}
.icon-keybase:before {
  content: "\f4f5";
}
.icon-mastodon:before {
  content: "\f4f6";
}
.icon-r-project:before {
  content: "\f4f7";
}
.icon-researchgate:before {
  content: "\f4f8";
}
.icon-teamspeak:before {
  content: "\f4f9";
}
.icon-first-order-alt:before {
  content: "\f50a";
}
.icon-fulcrum:before {
  content: "\f50b";
}
.icon-galactic-republic:before {
  content: "\f50c";
}
.icon-galactic-senate:before {
  content: "\f50d";
}
.icon-jedi-order:before {
  content: "\f50e";
}
.icon-mandalorian:before {
  content: "\f50f";
}
.icon-old-republic:before {
  content: "\f510";
}
.icon-phoenix-squadron:before {
  content: "\f511";
}
.icon-sith:before {
  content: "\f512";
}
.icon-trade-federation:before {
  content: "\f513";
}
.icon-wolf-pack-battalion:before {
  content: "\f514";
}
.icon-blender:before {
  content: "\f517";
}
.icon-shoe-prints:before {
  content: "\f54b";
}
.icon-tshirt:before {
  content: "\f553";
}
.icon-concierge-bell:before {
  content: "\f562";
}
.icon-hornbill:before {
  content: "\f592";
}
.icon-mailchimp:before {
  content: "\f59e";
}
.icon-megaport:before {
  content: "\f5a3";
}
.icon-nimblr:before {
  content: "\f5a8";
}
.icon-rev:before {
  content: "\f5b2";
}
.icon-shopware:before {
  content: "\f5b5";
}
.icon-squarespace:before {
  content: "\f5be";
}
.icon-themeco:before {
  content: "\f5c6";
}
.icon-weebly:before {
  content: "\f5cc";
}
.icon-wix:before {
  content: "\f5cf";
}
.icon-ello:before {
  content: "\f5f1";
}
.icon-hackerrank:before {
  content: "\f5f7";
}
.icon-kaggle:before {
  content: "\f5fa";
}
.icon-markdown:before {
  content: "\f60f";
}
.icon-neos:before {
  content: "\f612";
}
.icon-zhihu:before {
  content: "\f63f";
}
.icon-alipay:before {
  content: "\f642";
}
.icon-the-red-yeti:before {
  content: "\f69d";
}
.icon-acquisitions-incorporated:before {
  content: "\f6af";
}
.icon-critical-role:before {
  content: "\f6c9";
}
.icon-d-and-d-beyond:before {
  content: "\f6ca";
}
.icon-dev:before {
  content: "\f6cc";
}
.icon-fantasy-flight-games:before {
  content: "\f6dc";
}
.icon-penny-arcade:before {
  content: "\f704";
}
.icon-wizards-of-the-coast:before {
  content: "\f730";
}
.icon-think-peaks:before {
  content: "\f731";
}
.icon-reacteurope:before {
  content: "\f75d";
}
.icon-adobe:before {
  content: "\f778";
}
.icon-artstation:before {
  content: "\f77a";
}
.icon-atlassian:before {
  content: "\f77b";
}
.icon-canadian-maple-leaf:before {
  content: "\f785";
}
.icon-centos:before {
  content: "\f789";
}
.icon-confluence:before {
  content: "\f78d";
}
.icon-dhl:before {
  content: "\f790";
}
.icon-diaspora:before {
  content: "\f791";
}
.icon-fedex:before {
  content: "\f797";
}
.icon-fedora:before {
  content: "\f798";
}
.icon-figma:before {
  content: "\f799";
}
.icon-intercom:before {
  content: "\f7af";
}
.icon-invision:before {
  content: "\f7b0";
}
.icon-jira:before {
  content: "\f7b1";
}
.icon-mendeley:before {
  content: "\f7b3";
}
.icon-raspberry-pi:before {
  content: "\f7bb";
}
.icon-redhat:before {
  content: "\f7bc";
}
.icon-sketch:before {
  content: "\f7c6";
}
.icon-sourcetree:before {
  content: "\f7d3";
}
.icon-suse:before {
  content: "\f7d6";
}
.icon-ubuntu:before {
  content: "\f7df";
}
.icon-ups:before {
  content: "\f7e0";
}
.icon-usps:before {
  content: "\f7e1";
}
.icon-yarn:before {
  content: "\f7e3";
}
/*# sourceMappingURL=style.css.map */

.menu.sf-arrows .sf-with-ul#sf-with-ul-home::after{
    content: none;
}

.header-bottom .menu > li > .sf-with-ul#sf-with-ul-home{
    padding-right: 1rem;
}

.menu.sf-arrows .sf-with-ul#sf-with-ul-blog::after{
    content: none;
}

.header-bottom .menu > li > .sf-with-ul#sf-with-ul-blog{
    padding-right: 1rem;
}

.cta-content .btn:hover, .input-group-append .btn:hover {
  background-color: #2b7a78;
  border: #2b7a78;
}

a.sf-with-ul#About:after, a.sf-with-ul#Contact::after {
  content: none;
}

::-moz-selection {
    background-color: #3aafa9;
  }
  ::selection {
    background-color: #3aafa9;
  }
  .bg-primary {
    background-color: #3aafa9 !important;
  }
  .bg-secondary {
    background-color: #2b7a78 !important;
  }
  a {
    color: #3aafa9;
  }
  a:hover,
  a:focus {
    color: #2b7a78;
  }
  .link-underline {
    box-shadow: 0 1px 0 0 #3aafa9;
  }
  .text-primary {
    color: #3aafa9 !important;
  }
  .text-secondary {
    color: #2b7a78 !important;
  }
  .alert-primary {
    background-color: #3aafa9;
  }
  .banner-badge .banner-link:hover .banner-link-text,
  .banner-badge .banner-link:focus .banner-link-text {
    background-color: #3aafa9;
  }
  .header-3 .header-search-extended .btn,
  .header-4 .header-search-extended .btn {
    background-color: transparent;
    color: #333;
  }
  .header-3 .header-search-extended .btn:hover,
  .header-3 .header-search-extended .btn:focus,
  .header-4 .header-search-extended .btn:hover,
  .header-4 .header-search-extended .btn:focus {
    color: #3aafa9;
  }
  .btn-video {
    color: #3aafa9;
  }
  .btn-video:hover,
  .btn-video:focus {
    background-color: #2b7a78;
  }
  .breadcrumb-item a:hover,
  .breadcrumb-item a:focus {
    color: #3aafa9;
  }
  .btn-link {
    color: #3aafa9;
  }
  .btn-link:hover,
  .btn-link:focus,
  .btn-link .btn-link-dark:hover,
  .btn-link .btn-link-dark:focus {
    color: #3aafa9;
    border-color: #3aafa9;
  }
  .btn-primary {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-primary:hover,
  .btn-primary:focus,
  .btn-primary.focus,
  .btn-primary:not(:disabled):not(.disabled):active,
  .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #2b7a78;
    border-color: #2b7a78;
    box-shadow: none;
  }
  .btn-primary.disabled,
  .btn-primary:disabled {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
  }
  .btn-secondary {
    color: #fff;
    background-color: #2b7a78;
    border-color: #2b7a78;
    box-shadow: none;
  }
  .btn-secondary:hover,
  .btn-secondary:focus,
  .btn-secondary.focus,
  .btn-secondary:not(:disabled):not(.disabled):active,
  .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-secondary.disabled,
  .btn-secondary:disabled {
    color: #fff;
    background-color: #2b7a78;
    border-color: #2b7a78;
  }
  .btn-white {
    color: #333;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-white:hover,
  .btn-white:focus,
  .btn-white.focus,
  .btn-white:not(:disabled):not(.disabled):active,
  .btn-white:not(:disabled):not(.disabled).active,
  .show > .btn-white.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-white.disabled,
  .btn-white:disabled {
    color: #333;
    background-color: #fff;
    border-color: #fff;
  }
  .btn-white-2 {
    color: #333;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-white-2:hover,
  .btn-white-2:focus,
  .btn-white-2.focus,
  .btn-white-2:not(:disabled):not(.disabled):active,
  .btn-white-2:not(:disabled):not(.disabled).active,
  .show > .btn-white-2.dropdown-toggle {
    color: #fff;
    background-color: #2b7a78;
    border-color: #2b7a78;
    box-shadow: none;
  }
  .btn-white-2.disabled,
  .btn-white-2:disabled {
    color: #333;
    background-color: #fff;
    border-color: #fff;
  }
  .btn-primary-white {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-primary-white:hover,
  .btn-primary-white:focus,
  .btn-primary-white.focus,
  .btn-primary-white:not(:disabled):not(.disabled):active,
  .btn-primary-white:not(:disabled):not(.disabled).active,
  .show > .btn-primary-white.dropdown-toggle {
    color: #3aafa9;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-primary-white.disabled,
  .btn-primary-white:disabled {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
  }
  .btn-white-primary {
    color: #3aafa9;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-white-primary:hover,
  .btn-white-primary:focus,
  .btn-white-primary.focus,
  .btn-white-primary:not(:disabled):not(.disabled):active,
  .btn-white-primary:not(:disabled):not(.disabled).active,
  .show > .btn-white-primary.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-white-primary.disabled,
  .btn-white-primary:disabled {
    color: #3aafa9;
    background-color: #fff;
    border-color: #fff;
  }
  .btn-dark {
    color: #fff;
    background-color: #333;
    border-color: #333;
    box-shadow: none;
  }
  .btn-dark:hover,
  .btn-dark:focus,
  .btn-dark.focus,
  .btn-dark:not(:disabled):not(.disabled):active,
  .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-dark.disabled,
  .btn-dark:disabled {
    color: #fff;
    background-color: #333;
    border-color: #333;
  }
  .btn-outline {
    color: #3aafa9;
    background-color: transparent;
    background-image: none;
    border-color: #ebebeb;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
  }
  .btn-outline:hover,
  .btn-outline:focus,
  .btn-outline.focus,
  .btn-outline:not(:disabled):not(.disabled):active,
  .btn-outline:not(:disabled):not(.disabled).active,
  .show > .btn-outline.dropdown-toggle {
    color: #3aafa9;
    background-color: transparent;
    border-color: #ebebeb;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  }
  .btn-outline.disabled,
  .btn-outline:disabled {
    color: #3aafa9;
    background-color: transparent;
  }
  .btn-outline-primary {
    color: #3aafa9;
    background-color: transparent;
    background-image: none;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-primary:hover,
  .btn-outline-primary:focus,
  .btn-outline-primary.focus,
  .btn-outline-primary:not(:disabled):not(.disabled):active,
  .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #3aafa9;
    background-color: transparent;
    border-color: #ebebeb;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
  }
  .btn-outline-primary.disabled,
  .btn-outline-primary:disabled {
    color: #3aafa9;
    background-color: transparent;
  }
  .btn-outline-primary-2 {
    color: #3aafa9;
    background-color: transparent;
    background-image: none;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-primary-2:hover,
  .btn-outline-primary-2:focus,
  .btn-outline-primary-2.focus,
  .btn-outline-primary-2:not(:disabled):not(.disabled):active,
  .btn-outline-primary-2:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary-2.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-primary-2.disabled,
  .btn-outline-primary-2:disabled {
    color: #3aafa9;
    background-color: transparent;
  }
  .btn-outline-light {
    color: #fff;
    background-color: transparent;
    background-image: none;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-outline-light:hover,
  .btn-outline-light:focus,
  .btn-outline-light.focus,
  .btn-outline-light:not(:disabled):not(.disabled):active,
  .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #3aafa9;
    background-color: transparent;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-outline-light.disabled,
  .btn-outline-light:disabled {
    color: #fff;
    background-color: transparent;
  }
  .btn-outline-dark {
    color: #333;
    background-color: transparent;
    background-image: none;
    border-color: #d7d7d7;
    box-shadow: none;
  }
  .btn-outline-dark:hover,
  .btn-outline-dark:focus,
  .btn-outline-dark.focus,
  .btn-outline-dark:not(:disabled):not(.disabled):active,
  .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #3aafa9;
    background-color: transparent;
    border-color: #ebebeb;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
  }
  .btn-outline-dark.disabled,
  .btn-outline-dark:disabled {
    color: #333;
    background-color: transparent;
  }
  .btn-outline-dark-2 {
    color: #333;
    background-color: transparent;
    background-image: none;
    border-color: #ebebeb;
    box-shadow: none;
  }
  .btn-outline-dark-2:hover,
  .btn-outline-dark-2:focus,
  .btn-outline-dark-2.focus,
  .btn-outline-dark-2:not(:disabled):not(.disabled):active,
  .btn-outline-dark-2:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark-2.dropdown-toggle {
    color: #3aafa9;
    background-color: #fafafa;
    border-color: #ebebeb;
    box-shadow: none;
  }
  .btn-outline-dark-2.disabled,
  .btn-outline-dark-2:disabled {
    color: #333;
    background-color: transparent;
  }
  .btn-outline-dark-3 {
    color: #333;
    background-color: transparent;
    background-image: none;
    border-color: #d7d7d7;
    box-shadow: none;
  }
  .btn-outline-dark-3:hover,
  .btn-outline-dark-3:focus,
  .btn-outline-dark-3.focus,
  .btn-outline-dark-3:not(:disabled):not(.disabled):active,
  .btn-outline-dark-3:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark-3.dropdown-toggle {
    color: #3aafa9;
    background-color: transparent;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-dark-3.disabled,
  .btn-outline-dark-3:disabled {
    color: #333;
    background-color: transparent;
  }
  .btn-outline-darker {
    color: #333;
    background-color: transparent;
    background-image: none;
    border-color: #d7d7d7;
    box-shadow: none;
  }
  .btn-outline-darker:hover,
  .btn-outline-darker:focus,
  .btn-outline-darker.focus,
  .btn-outline-darker:not(:disabled):not(.disabled):active,
  .btn-outline-darker:not(:disabled):not(.disabled).active,
  .show > .btn-outline-darker.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-darker.disabled,
  .btn-outline-darker:disabled {
    color: #333;
    background-color: transparent;
  }
  .btn-outline-gray {
    color: #333;
    background-color: transparent;
    background-image: none;
    border-color: #959595;
    box-shadow: none;
  }
  .btn-outline-gray:hover,
  .btn-outline-gray:focus,
  .btn-outline-gray.focus,
  .btn-outline-gray:not(:disabled):not(.disabled):active,
  .btn-outline-gray:not(:disabled):not(.disabled).active,
  .show > .btn-outline-gray.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-gray.disabled,
  .btn-outline-gray:disabled {
    color: #333;
    background-color: transparent;
  }
  .btn-outline-lightgray {
    color: #333;
    background-color: transparent;
    background-image: none;
    border-color: #ebebeb;
    box-shadow: none;
  }
  .btn-outline-lightgray:hover,
  .btn-outline-lightgray:focus,
  .btn-outline-lightgray.focus,
  .btn-outline-lightgray:not(:disabled):not(.disabled):active,
  .btn-outline-lightgray:not(:disabled):not(.disabled).active,
  .show > .btn-outline-lightgray.dropdown-toggle {
    color: #3aafa9;
    background-color: #f5f6f9;
    border-color: #ebebeb;
    box-shadow: none;
  }
  .btn-outline-lightgray.disabled,
  .btn-outline-lightgray:disabled {
    color: #333;
    background-color: transparent;
  }
  .btn-outline-white {
    color: #fff;
    background-color: transparent;
    background-image: none;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-outline-white:hover,
  .btn-outline-white:focus,
  .btn-outline-white.focus,
  .btn-outline-white:not(:disabled):not(.disabled):active,
  .btn-outline-white:not(:disabled):not(.disabled).active,
  .show > .btn-outline-white.dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
    border-color: #3aafa9;
    box-shadow: none;
  }
  .btn-outline-white.disabled,
  .btn-outline-white:disabled {
    color: #fff;
    background-color: transparent;
  }
  .btn-outline-white-2 {
    color: #fff;
    background-color: transparent;
    background-image: none;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-outline-white-2:hover,
  .btn-outline-white-2:focus,
  .btn-outline-white-2.focus,
  .btn-outline-white-2:not(:disabled):not(.disabled):active,
  .btn-outline-white-2:not(:disabled):not(.disabled).active,
  .show > .btn-outline-white-2.dropdown-toggle {
    color: #fff;
    background-color: #2b7a78;
    border-color: #2b7a78;
    box-shadow: none;
  }
  .btn-outline-white-2.disabled,
  .btn-outline-white-2:disabled {
    color: #fff;
    background-color: transparent;
  }
  .btn-outline-white-4 {
    color: #fff;
    background-color: transparent;
    background-image: none;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-outline-white-4:hover,
  .btn-outline-white-4:focus,
  .btn-outline-white-4.focus,
  .btn-outline-white-4:not(:disabled):not(.disabled):active,
  .btn-outline-white-4:not(:disabled):not(.disabled).active,
  .show > .btn-outline-white-4.dropdown-toggle {
    color: #3aafa9;
    background-color: #fff;
    border-color: #fff;
    box-shadow: none;
  }
  .btn-outline-white-4.disabled,
  .btn-outline-white-4:disabled {
    color: #fff;
    background-color: transparent;
  }
  .newsletter-popup-container .input-group .btn:hover,
  .newsletter-popup-container .input-group .btn:focus {
    background-color: #3aafa9;
  }
  .bg-image .btn-link-dark:hover,
  .bg-image .btn-link-dark:focus {
    color: #3aafa9;
    border-color: #3aafa9;
  }
  .bg-image .btn-outline-primary:hover,
  .bg-image .btn-outline-primary:focus,
  .bg-image .btn-outline-primary.focus,
  .bg-image .btn-outline-primary:not(:disabled):not(.disabled):active,
  .bg-image .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .bg-image .btn-outline-primary.dropdown-toggle {
    background-color: #3aafa9;
    border-color: #3aafa9;
  }
  .bg-image .btn-outline-dark:hover,
  .bg-image .btn-outline-dark:focus,
  .bg-image .btn-outline-dark.focus,
  .bg-image .btn-outline-dark:not(:disabled):not(.disabled):active,
  .bg-image .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .bg-image .btn-outline-dark.dropdown-toggle {
    color: #3aafa9;
  }
  .card-title a {
    color: #3aafa9;
  }
  .card-title a:before {
    color: #3aafa9;
  }
  .card-title a.collapsed:hover,
  .card-title a.collapsed:focus {
    color: #3aafa9;
  }
  .count-wrapper {
    color: #3aafa9;
  }
  .feature-box i {
    color: #3aafa9;
  }
  .feature-box-simple i {
    color: #3aafa9;
  }
  .form-control:focus {
    border-color: #3aafa9;
  }
  .custom-control.custom-radio
    .custom-control-input:checked
    ~ .custom-control-label::before {
    border-color: #3aafa9;
  }
  .custom-control.custom-radio
    .custom-control-input:checked
    ~ .custom-control-label::after {
    background-color: #3aafa9;
  }
  .icon-box-icon {
    color: #3aafa9;
  }
  .icon-box-circle .icon-box-icon {
    background-color: #3aafa9;
  }
  .instagram-feed-content a:hover,
  .instagram-feed-content a:focus {
    color: #3aafa9;
  }
  .close:hover,
  .close:focus {
    color: #3aafa9;
  }
  .page-header h1 span {
    color: #3aafa9;
  }
  .page-link:hover,
  .page-link:focus {
    color: #3aafa9;
  }
  .page-item.active .page-link {
    color: #3aafa9;
  }
  .social-icon:hover,
  .social-icon:focus {
    color: #3aafa9;
    border-color: #3aafa9;
  }
  .testimonial-icon:before {
    color: #3aafa9;
  }
  .nav.nav-tabs .nav-link:hover,
  .nav.nav-tabs .nav-link:focus {
    color: #3aafa9;
  }
  .nav.nav-tabs .nav-item.show .nav-link,
  .nav.nav-tabs .nav-item .nav-link.active {
    color: #3aafa9;
  }
  .nav.nav-pills .nav-link:hover,
  .nav.nav-pills .nav-link:focus {
    color: #3aafa9;
  }
  .nav.nav-pills .nav-item.show .nav-link,
  .nav.nav-pills .nav-item .nav-link.active {
    color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .nav.nav-border-anim .nav-link:before {
    background-color: #3aafa9;
  }
  .title-link:hover,
  .title-link:focus {
    box-shadow: 0 1px 0 0 #3aafa9;
  }
  .product-countdown.countdown-primary .countdown-amount {
    color: #3aafa9;
  }
  .product-title a:hover,
  .product-title a:focus {
    color: #3aafa9;
  }
  .product-price {
    color: #3aafa9;
  }
  .product-label.label-primary {
    background-color: #3aafa9;
  }
  .product-label.label-secondary {
    background-color: #2b7a78;
  }
  .product-label-text {
    color: #3aafa9;
  }
  .ratings-primary .ratings-val {
    color: #3aafa9;
  }
  .ratings-text a:hover,
  .ratings-text a:focus {
    color: #3aafa9;
  }
  .btn-product {
    color: #3aafa9;
  }
  .btn-product:hover span,
  .btn-product:focus span {
    color: #3aafa9;
    box-shadow: 0 1px 0 0 #3aafa9;
  }
  .btn-product-icon {
    color: #3aafa9;
  }
  .btn-product-icon:hover,
  .btn-product-icon:focus {
    background-color: #3aafa9;
  }
  .product-body .btn-wishlist:hover,
  .product-body .btn-wishlist:focus {
    color: #3aafa9;
  }
  .btn-expandable span {
    background-color: #3aafa9;
  }
  .product.product-4 .btn-product:hover,
  .product.product-4 .btn-product:focus {
    background-color: #2b7a78;
  }
  .product.product-5 .btn-product {
    color: #3aafa9;
  }
  .product.product-5 .btn-product:hover,
  .product.product-5 .btn-product:focus {
    background-color: #3aafa9;
  }
  .product.product-7 .btn-product {
    color: #3aafa9;
  }
  .product.product-7 .btn-product span {
    color: #3aafa9;
  }
  .product.product-7 .btn-product:hover,
  .product.product-7 .btn-product:focus {
    background-color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .product.product-8 .new-price {
    color: #3aafa9;
  }
  .product.product-8 .btn-product:before {
    color: #3aafa9;
  }
  .product.product-8 .btn-product:hover,
  .product.product-8 .btn-product:focus {
    background-color: #3aafa9;
  }
  .product.product-list .btn-product:hover,
  .product.product-list .btn-product:focus {
    color: #3aafa9;
  }
  .product.product-list .btn-product.btn-cart {
    color: #3aafa9;
    border-color: #3aafa9;
  }
  .product.product-list .btn-product.btn-cart:hover,
  .product.product-list .btn-product.btn-cart:focus {
    background-color: #3aafa9;
  }
  .footer a:hover,
  .footer a:focus {
    color: #3aafa9;
  }
  .footer-dark.footer-2 .widget-about-title {
    color: #3aafa9;
  }
  .header-top a:hover,
  .header-top a:focus {
    color: #3aafa9;
  }
  .top-menu span {
    color: #3aafa9;
  }
  .header-menu a:hover,
  .header-menu a:focus {
    color: #3aafa9;
  }
  .account a:hover,
  .account a:focus {
    color: #3aafa9;
  }
  .wishlist a:hover,
  .wishlist a:focus {
    color: #3aafa9;
  }
  .wishlist a .wishlist-count {
    background-color: #3aafa9;
  }
  .cart-dropdown:hover .dropdown-toggle,
  .cart-dropdown.show .dropdown-toggle,
  .compare-dropdown:hover .dropdown-toggle,
  .compare-dropdown.show .dropdown-toggle {
    color: #3aafa9;
  }
  .compare-product-title a:hover,
  .compare-product-title a:focus {
    color: #3aafa9;
  }
  .compare-actions .action-link:hover,
  .compare-actions .action-link:focus {
    color: #3aafa9;
  }
  .cart-dropdown .cart-count {
    background-color: #3aafa9;
  }
  .cart-dropdown .product-title a:hover,
  .cart-dropdown .product-title a:focus {
    color: #3aafa9;
  }
  .wishlist-link .wishlist-count {
    background-color: #3aafa9;
  }
  .wishlist-link:hover,
  .wishlist-link:focus {
    color: #3aafa9;
  }
  .search-toggle:hover,
  .search-toggle:focus,
  .search-toggle.active {
    color: #3aafa9;
  }
  .menu li:hover > a,
  .menu li.show > a,
  .menu li.active > a {
    color: #3aafa9;
  }
  .demo-item a:hover,
  .demo-item a:focus {
    color: #3aafa9;
  }
  .tip {
    background-color: #3aafa9;
  }
  .header-bottom .menu > li > a:before {
    background-color: #3aafa9;
  }
  .category-dropdown .dropdown-toggle:before {
    background-color: #3aafa9;
  }
  .category-dropdown .dropdown-toggle:hover,
  .category-dropdown .dropdown-toggle:focus {
    color: #fff;
    background-color: #3aafa9;
  }
  .category-dropdown:not(.is-on):hover .dropdown-toggle {
    background-color: #3aafa9;
  }
  .category-dropdown.show .dropdown-toggle {
    color: #fff;
    background-color: #3aafa9;
  }
  .category-dropdown .dropdown-item:hover,
  .category-dropdown .dropdown-item:focus {
    color: #3aafa9;
  }
  .menu-vertical li:hover > a,
  .menu-vertical li.show > a,
  .menu-vertical li.active > a {
    color: #3aafa9;
  }
  .menu-vertical > li:hover > a,
  .menu-vertical > li.show > a,
  .menu-vertical > li.active > a {
    color: #3aafa9;
  }
  .mobile-menu-close:hover,
  .mobile-menu-close:focus {
    color: #3aafa9;
  }
  .mobile-menu li a:hover,
  .mobile-menu li a:focus {
    color: #3aafa9;
  }
  .mobile-menu li.open > a,
  .mobile-menu li.active > a {
    color: #3aafa9;
  }
  .mmenu-btn:hover,
  .mmenu-btn:focus {
    color: #3aafa9;
  }
  .mobile-search .form-control:focus {
    border-color: #3aafa9;
  }
  .nav.nav-pills-mobile .nav-link.active,
  .nav.nav-pills-mobile .nav-link:hover,
  .nav.nav-pills-mobile .nav-link:focus {
    color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .mobile-cats-menu li a:hover,
  .mobile-cats-menu li a:focus {
    color: #3aafa9;
  }
  .mobile-menu-light .mobile-menu li.open > a,
  .mobile-menu-light .mobile-menu li.active > a {
    color: #3aafa9;
  }
  .mobile-menu-light .mobile-search .form-control:focus {
    border-color: #3aafa9;
  }
  .header-4 .header-search .header-search-wrapper {
    border-color: #3aafa9;
  }
  .header-4 .dropdown.category-dropdown .dropdown-toggle:not(:hover):not(:focus) {
    color: #3aafa9;
  }
  @media screen and (max-width: 991px) {
    .header-4 .header-search-visible .header-search-wrapper:before {
      border-bottom-color: #3aafa9;
    }
  }
  .header-6 .header-middle a:hover,
  .header-6 .header-middle a:focus {
    color: #3aafa9;
  }
  .header-8 .header-top {
    color: #fef2dd;
    background-color: #3aafa9;
  }
  .header-10 .header-search .header-search-wrapper {
    border-color: #3aafa9;
  }
  .header-10 .category-dropdown .dropdown-toggle {
    background-color: #3aafa9;
  }
  .header-10 .menu-vertical .menu-title {
    color: #3aafa9;
  }
  .header-12 .dropdown.category-dropdown .dropdown-toggle {
    background-color: #3aafa9;
  }
  .header-13 .dropdown.category-dropdown .dropdown-toggle {
    background-color: #3aafa9;
  }
  .header-14 .header-search .header-search-wrapper {
    border-color: #3aafa9;
  }
  .header-14 .dropdown.category-dropdown .dropdown-toggle {
    background-color: #3aafa9;
  }
  .entry-video a:hover:after,
  .entry-video a:focus:after {
    color: #3aafa9;
  }
  .entry-meta a:hover,
  .entry-meta a:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .entry-title a:hover,
  .entry-title a:focus {
    color: #3aafa9;
  }
  .entry-cats a:hover,
  .entry-cats a:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .read-more:hover,
  .read-more:focus {
    box-shadow: 0 1px 0 0 #3aafa9;
  }
  .menu-cat a:hover,
  .menu-cat a:focus {
    color: #3aafa9;
  }
  .menu-cat li.active a {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .widget-search .btn:hover,
  .widget-search .btn:focus {
    color: #3aafa9;
  }
  .widget-cats a:hover,
  .widget-cats a:focus {
    color: #3aafa9;
  }
  .posts-list a:hover,
  .posts-list a:focus {
    color: #3aafa9;
  }
  .tagcloud a:hover,
  .tagcloud a:focus {
    color: #3aafa9;
  }
  .table .total-col {
    color: #3aafa9;
  }
  .btn.btn-spinner:hover,
  .btn.btn-spinner:focus {
    color: #3aafa9;
  }
  .table.table-summary .summary-shipping-estimate a:hover,
  .table.table-summary .summary-shipping-estimate a:focus {
    color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .sidebar-toggler:hover,
  .sidebar-toggler:focus {
    color: #3aafa9;
  }
  #filter-price-range {
    color: #3aafa9;
  }
  .checkout-discount label span {
    color: #3aafa9;
  }
  .checkout-discount .form-control:focus {
    border-color: #3aafa9;
  }
  .table.table-summary a:hover,
  .table.table-summary a:focus {
    color: #3aafa9;
  }
  .table.table-summary .summary-total td {
    color: #3aafa9;
  }
  .accordion-summary .card-title a:before {
    border-color: #3aafa9;
  }
  .accordion-summary .card-title a:after {
    background-color: #3aafa9;
  }
  .paypal-link:hover,
  .paypal-link:focus {
    color: #3aafa9 !important;
  }
  .coming-countdown .countdown-amount {
    color: #3aafa9;
  }
  .coming-countdown.countdown-separator
    .countdown-section:not(:last-child):after {
    color: #3aafa9;
  }
  .contact-box a:hover,
  .contact-box a:focus {
    color: #3aafa9;
  }
  .contact-list a:hover,
  .contact-list a:focus {
    color: #3aafa9;
  }
  .contact-list i {
    color: #3aafa9;
  }
  .store a:not(.btn):hover,
  .store a:not(.btn):focus {
    color: #3aafa9;
  }
  .nav-dashboard .nav-link:hover,
  .nav-dashboard .nav-link:focus,
  .nav-dashboard .nav-link.active {
    color: #3aafa9;
  }
  .form-tab .form-footer a:hover,
  .form-tab .form-footer a:focus {
    color: #3aafa9;
  }
  .nav-filter a:hover,
  .nav-filter a:focus {
    color: #3aafa9;
  }
  .nav-filter .active a {
    color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .portfolio-title a:hover,
  .portfolio-title a:focus {
    color: #3aafa9;
  }
  .portfolio-tags a {
    color: #3aafa9;
  }
  .portfolio-tags a:hover,
  .portfolio-tags a:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .btn-product-gallery:hover,
  .btn-product-gallery:focus {
    background-color: #3aafa9;
  }
  .product-gallery-item:before {
    border-color: #3aafa9;
  }
  .product-pager-link:hover,
  .product-pager-link:focus {
    color: #3aafa9;
  }
  .product-pager-link:hover span,
  .product-pager-link:focus span {
    box-shadow: 0 1px 0 #3aafa9;
  }
  .product-details .product-cat a:hover,
  .product-details .product-cat a:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .product-details .product-size a.active,
  .product-details .product-size a:hover,
  .product-details .product-size a:focus {
    color: #3aafa9;
    border-color: #3aafa9;
  }
  .size-guide:hover,
  .size-guide:focus {
    color: #3aafa9;
  }
  .product-details-action .btn-cart {
    color: #3aafa9;
    border-color: #3aafa9;
  }
  .product-details-action .btn-cart:hover,
  .product-details-action .btn-cart:focus {
    border-color: #3aafa9;
    background-color: #3aafa9;
  }
  .product-details-tab .nav.nav-pills .nav-link:hover,
  .product-details-tab .nav.nav-pills .nav-link:focus {
    color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .product-desc-content a:hover,
  .product-desc-content a:focus {
    color: #3aafa9;
    border-bottom-color: #3aafa9;
  }
  .review h4 a:hover,
  .review h4 a:focus {
    color: #3aafa9;
  }
  .review-action a:hover,
  .review-action a:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .product-details-extended .nav.nav-pills .nav-link.active,
  .product-details-extended .nav.nav-pills .nav-link:hover,
  .product-details-extended .nav.nav-pills .nav-link:focus {
    border-color: #3aafa9;
  }
  .editor-content a:hover,
  .editor-content a:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .editor-content blockquote {
    border-left-color: #3aafa9;
  }
  .entry-tags a:hover,
  .entry-tags a:focus {
    color: #3aafa9;
  }
  .entry-author-details h4 a:hover,
  .entry-author-details h4 a:focus {
    color: #3aafa9;
  }
  .author-link:hover,
  .author-link:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .pager-link {
    color: #3aafa9;
  }
  .pager-link:hover,
  .pager-link:focus {
    color: #3aafa9;
  }
  .pager-link:hover:after,
  .pager-link:focus:after {
    color: #3aafa9;
  }
  .comment-reply:hover,
  .comment-reply:focus {
    color: #3aafa9;
    box-shadow: 0 1px 0 #3aafa9;
  }
  .comment-user h4 a:hover,
  .comment-user h4 a:focus {
    color: #3aafa9;
  }
  .product-col .product-title a:hover,
  .product-col .product-title a:focus {
    color: #3aafa9;
  }
  .owl-theme .owl-nav [class*="owl-"] {
    color: #3aafa9;
  }
  .owl-theme .owl-nav [class*="owl-"]:not(.disabled):hover {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .owl-theme.owl-light .owl-nav [class*="owl-"]:not(.disabled):hover {
    border-color: #3aafa9;
  }
  .owl-theme.owl-light .owl-dots .owl-dot:hover span {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .owl-theme.owl-light .owl-dots .owl-dot.active span {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .owl-full .owl-nav [class*="owl-"] {
    color: #3aafa9;
  }
  .owl-full .owl-nav [class*="owl-"]:hover,
  .owl-full .owl-nav [class*="owl-"]:focus {
    color: #3aafa9;
  }
  .owl-full .owl-dots .owl-dot span {
    border-color: #3aafa9;
  }
  .owl-full .owl-dots .owl-dot:hover span {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .owl-full .owl-dots .owl-dot.active span {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .owl-full.owl-nav-dark .owl-nav [class*="owl-"]:hover,
  .owl-full.owl-nav-dark .owl-nav [class*="owl-"]:focus {
    color: #3aafa9;
  }
  .owl-simple .owl-nav [class*="owl-"]:not(.disabled):hover {
    color: #3aafa9;
  }
  .owl-simple.owl-light .owl-dots .owl-dot:hover span {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .owl-simple.owl-light .owl-dots .owl-dot.active span {
    border-color: #3aafa9;
    background: #3aafa9;
  }
  .quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"] {
    border: none;
    font-size: 3rem;
    color: #fff;
  }
  .quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"]:hover,
  .quickView-content .owl-theme.owl-light .owl-nav [class*="owl-"]:focus {
    color: #3aafa9;
    background-color: transparent;
  }
  .quickView-content .details-action-wrapper .btn-product:hover span,
  .quickView-content .details-action-wrapper .btn-product:focus span {
    color: #3aafa9;
    box-shadow: 0 1px 0 0 #3aafa9;
  }
  .quickView-content .product-details-action .btn-cart {
    transition: color 0.3s;
  }
  .quickView-content .product-details-action .btn-cart:hover,
  .quickView-content .product-details-action .btn-cart:focus {
    border-color: #3aafa9;
    background-color: #3aafa9;
    color: #fff;
  }
  .quickView-content .btn-wishlist,
  .quickView-content .btn-compare {
    border: none;
  }
  .quickView-content .btn-wishlist:before,
  .quickView-content .btn-compare:before {
    color: #3aafa9;
  }
  .quickView-content .btn-wishlist:hover,
  .quickView-content .btn-wishlist:focus,
  .quickView-content .btn-compare:hover,
  .quickView-content .btn-compare:focus {
    color: #3aafa9;
    background-color: transparent;
  }
  .quickView-content .btn-wishlist:hover span,
  .quickView-content .btn-wishlist:focus span,
  .quickView-content .btn-compare:hover span,
  .quickView-content .btn-compare:focus span {
    color: #3aafa9;
  }
  .quickView-content .btn-fullscreen:hover,
  .quickView-content .btn-fullscreen:focus {
    color: #fff;
    background-color: #3aafa9;
  }
  .quickView-content .product-left .carousel-dot.active img {
    opacity: 1;
    box-shadow: 0 0 0 1px #3aafa9;
  }
  .quickView-content .product-left .carousel-dot:hover img,
  .quickView-content .product-left .carousel-dot:focus img {
    opacity: 1;
  }
  .newsletter-popup-container .banner-title span {
    color: #3aafa9;
  }
  /*# sourceMappingURL=skin-demo-3.css.map */


  @import url("https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800");
.bg-light {
  background-color: #f4f7ff !important;
}
.title {
  font-weight: 600;
  font-size: 2.4rem;
  letter-spacing: -0.03em;
}
.title-desc {
  font-size: 1.6rem;
  font-weight: 300;
  letter-spacing: -0.01em;
}
@media screen and (min-width: 1200px) {
  .intro-section .col-lg-4 {
    -ms-flex: 0 0 32.77%;
    flex: 0 0 32.77%;
    max-width: 32.77%;
  }
  .intro-section .col-lg-8 {
    -ms-flex: 0 0 67.23%;
    flex: 0 0 67.23%;
    max-width: 67.23%;
  }
}
.intro-slider-container,
.intro-slide,
.banner {
  background-color: #f1f1f1;
}
.intro-slider-container:before,
.intro-slider .slide-image:before {
  padding-top: 51.2820512821%;
}
@media screen and (max-width: 479px) {
  .intro-slider-container:before,
  .intro-slider .slide-image:before {
    padding-top: 83.3333333333%;
  }
}
.intro-subtitle {
  margin-bottom: 0.5rem;
}
.intro-title {
  color: #333;
  letter-spacing: -0.025em;
  margin-bottom: 0.7rem;
}
.intro-price {
  color: #333333;
  font-weight: 700;
  font-size: 3rem;
  line-height: 1.2;
  letter-spacing: -0.025em;
  margin-bottom: 1rem;
}
.intro-price sup {
  top: -0.8em;
  font-weight: 400;
  font-size: 1.4rem;
  letter-spacing: -0.03em;
}
.intro-old-price {
  position: relative;
}
.intro-old-price:after {
  content: "";
  display: block;
  width: 100%;
  height: 1px;
  position: absolute;
  top: 50%;
  left: 0;
  background-color: #333333;
}
.intro-banners .banner-subtitle {
  font-size: 1.4rem;
  letter-spacing: -0.01em;
  margin-bottom: 0.2rem;
}
.intro-banners .banner-title {
  font-weight: 600;
  font-size: 1.8rem;
  line-height: 1.22;
  letter-spacing: -0.01em;
  margin-bottom: 0.6rem;
}
.intro-banners .banner-title span {
  display: block;
  font-weight: 300;
}
.intro-banners .banner-link {
  display: inline-block;
  line-height: 1.3;
  padding: 0.3rem 1rem;
  border-radius: 20px;
  letter-spacing: -0.01em;
  margin-left: -1rem;
  text-align: center;
}
.intro-banners .banner-link i {
  margin-left: 0.7rem;
}
.intro-banners .banner-link:hover,
.intro-banners .banner-link:focus {
  color: #fff;
  background-color: #3aafa9;
  text-decoration: none;
}
.featured .nav.nav-border-anim .nav-link:before {
  background-color: #333;
}
.top .nav.nav-pills .nav-link,
.trending .nav.nav-pills .nav-link {
  font-size: 1.4rem;
  font-weight: 400;
  letter-spacing: -0.01em;
}
.top .nav.nav-pills .nav-item + .nav-item,
.trending .nav.nav-pills .nav-item + .nav-item {
  margin-left: 0.6rem;
}
.icon-box-side .icon-box-title {
  font-weight: 600;
  font-size: 1.6rem;
  letter-spacing: -0.01em;
  margin-bottom: 0.5rem;
}
.icon-box-side p {
  font-size: 1.6rem;
  font-weight: 300;
  letter-spacing: -0.01em;
}
.icon-box-icon {
  font-size: 4rem;
}
.owl-simple .owl-nav [class*="owl-"] {
  font-size: 2.6rem;
}
.owl-simple.owl-nav-inside .owl-nav .owl-prev {
  left: 5px;
}
.owl-simple.owl-nav-inside .owl-nav .owl-next {
  right: 5px;
}
.owl-simple.owl-nav-inside .owl-dots {
  bottom: 20px;
}
.nav-pills.nav-big .nav-item + .nav-item {
  margin-left: 1.5rem;
}
.nav-pills.nav-big .nav-link {
  padding-top: 0.8rem;
  padding-bottom: 0.8rem;
  color: #ccc;
  font-weight: 600;
  font-size: 4rem;
  text-transform: capitalize;
}
.nav-pills.nav-big .nav-link:hover,
.nav-pills.nav-big .nav-link:focus,
.nav-pills.nav-big .nav-link.active {
  color: #3aafa9;
}
.nav-pills.nav-big .nav-item.show .nav-link,
.nav-pills.nav-big .nav-item .nav-link.active {
  color: #333;
}
.product.product-2 {
  background-color: #fff;
  border: 0.1rem solid #ebebeb;
  overflow: hidden;
}
.product.product-2 .product-nav-dots {
  margin-bottom: 1.5rem;
}
.product-cat {
  color: #ccc;
}
.btn-product + .btn-product {
  border-left-style: solid;
}
.product-action:not(.product-action-dark) {
  background-color: #f6f7fa;
}
.product-action:not(.product-action-dark) .btn-product + .btn-product {
  border-left-color: #d1d1d3;
}
.product-action:not(.product-action-dark) .btn-product:not(:hover):not(:focus) {
  color: #333;
}
.product-action-dark .btn-product:not(:hover):not(:focus) {
  color: #fff;
}
.product-price {
  margin-bottom: 1.2rem;
}
.ratings-container {
  margin-bottom: 1.5rem;
}
.old-price {
  text-decoration: none;
}
.btn-product-icon {
  color: #333;
  background-color: #3aafa9;
}
.btn-product-icon span {
  color: #333;
  background-color: #3aafa9;
}
.btn-product-icon:hover,
.btn-product-icon:focus {
  color: #333;
  background-color: #3aafa9;
}
.deal-container .heading {
  padding-bottom: 0.5rem;
}
.deal-container .heading .title {
  margin-bottom: 1rem;
}
.deal-container .product {
  border: none;
  margin-bottom: 2rem;
}
.deal-container .btn-more {
  text-transform: capitalize;
}
.deal-col {
  display: flex;
  align-items: stretch;
}
.deal {
  width: 100%;
  display: flex;
  flex-flow: row wrap;
  padding: 3.6rem 4rem 4.8rem;
  background-color: #fff;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  margin-bottom: 2rem;
  min-height: 380px;
}
.deal > div {
  width: 100%;
}
.deal .btn {
  padding: 0 0 0.2rem;
}
.deal h4 {
  color: #777;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 1.25;
  letter-spacing: 0;
  margin-bottom: 0.5rem;
  max-width: 240px;
}
.deal h2 {
  color: #ef837b;
  font-weight: 500;
  font-size: 2rem;
  line-height: 1.1;
  letter-spacing: -0.01em;
  margin-bottom: 0.2rem;
  max-width: 240px;
}
.deal .product-title {
  max-width: 240px;
  margin-bottom: 0.7rem;
}
.deal .product-price {
  font-weight: 300;
  font-size: 2rem;
  margin-bottom: 0.4rem;
}
.deal-content {
  align-self: center;
}
.deal-bottom {
  align-self: flex-end;
}
.btn.btn-outline-dark-2 {
  border-color: #d7d7d7;
}
.btn.btn-outline-dark-2:hover,
.btn.btn-outline-dark-2:focus {
  background-color: #fff;
}
.deal-countdown {
  margin-bottom: 0;
  margin-left: -0.8rem;
  max-width: 180px;
}
.deal-countdown .countdown-show3 .countdown-section {
  width: calc(33.33% - 16px);
}
.deal-countdown .countdown-section {
  position: relative;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1;
  padding: 0.9rem 0 0.3rem;
  margin-left: 0.8rem;
  margin-right: 0.8rem;
  background-color: #3aafa9;
  border-radius: 0.3rem;
  border: none;
  margin-bottom: 2rem;
}
.deal-countdown .countdown-section:not(:last-child):after {
  color: #333333;
  content: ":";
  display: inline-block;
  font-weight: 400;
  font-size: 20px;
  line-height: 1;
  position: absolute;
  left: 100%;
  margin-left: 6px;
  margin-top: -1px;
  top: 50%;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.deal-countdown .countdown-period {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  bottom: -2rem;
  display: block;
  font-weight: 400;
  color: #333333;
  text-transform: lowercase;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.deal-countdown .countdown-amount {
  display: inline-block;
  color: #fff;
  font-weight: 500;
  font-size: 2.4rem;
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: 0.4rem;
}
.cta-border-image {
  background-size: cover;
  background-repeat: no-repeat;
  border: none;
  padding: 1rem;
}
.cta-border-image.cta-border .cta-border-wrapper {
  padding-top: 3.9rem;
  padding-bottom: 3.9rem;
}
.cta-border-wrapper {
  padding-top: 0.9rem;
  padding-bottom: 0.9rem;
}
.cta-half .cta-title {
  font-weight: 400;
  font-size: 2.6rem;
  letter-spacing: -0.025em;
  margin-bottom: 0;
}
.cta-half .cta-wrapper .cta-title,
.cta-half .cta-wrapper.cta-text .cta-title {
  margin-bottom: 0;
}
.cta-half .cta-wrapper.cta-text .cta-desc {
  margin-bottom: 2rem;
}
.cta-half .cta-desc {
  color: #999;
  font-size: 1.6rem;
  line-height: 1.5;
}
.cta-half .cta-wrapper.cta-text {
  max-width: 380px;
}
.cta-half .social-icon {
  width: 4.6rem;
  height: 4.6rem;
  font-size: 1.8rem;
}
.cta-half .form-control:not(:focus) {
  border-color: #e1e1e1;
}
.cta-half .input-group .form-control {
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
.cta-half .input-group .btn {
  min-width: 70px;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
}
.cta-half .input-group .btn i {
  margin: 0 !important;
}
.cta-title {
  font-weight: 600;
  letter-spacing: -0.01em;
}
.cta-title span {
  font-weight: 600;
  letter-spacing: -0.01em;
}
.cta-border .cta-text {
  flex-grow: 0.5;
  margin-right: 0;
}
.cta-border .cta-text p {
  font-size: 1.6rem;
  letter-spacing: 0;
  font-weight: 400;
}
.cta-content .btn {
  padding: 1.1rem 3rem;
}
.cta-content .btn i {
  margin-left: 2rem;
}
.footer .footer-middle {
  border-top: none;
  padding-bottom: 3rem;
}
.footer .widget-title {
  font-weight: 600;
}
.widget-list a {
  position: relative;
}
.widget-list a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 0.1rem;
  background-color: #3aafa9;
  transform-origin: right center;
  transform: scale(0, 1);
  transition: transform 0.3s ease;
}
.widget-list a:hover:before,
.widget-list a:focus:before {
  transform-origin: left center;
  transform: scale(1, 1);
}
.widget-about p:last-of-type {
  margin-bottom: 1.2rem;
}
.widget-call {
  position: relative;
  font-size: 1.3rem;
  padding: 2.1rem 2rem 1.6rem 7rem;
  border: 0.1rem solid #ebebeb;
  border-radius: 0.3rem;
  line-height: 1.25;
  max-width: 270px;
}
.widget-call i {
  display: inline-block;
  color: #3aafa9;
  font-size: 3rem;
  line-height: 1;
  position: absolute;
  left: 2rem;
  top: 50%;
  transform: translateY(-50%);
  -ms-transform: translateY(-50%);
}
.widget-call a {
  display: block;
  font-weight: 400;
  font-size: 2rem;
  color: #333333;
}
.widget-call a:hover,
.widget-call a:focus {
  color: #3aafa9;
  box-shadow: none;
}
.footer-bottom .container {
  padding-top: 1.75rem;
  padding-bottom: 1.75rem;
}
@media screen and (min-width: 576px) {
  .intro-title {
    font-size: 3.2rem;
  }
  .intro-price {
    font-size: 3.2rem;
  }
  .intro-price sup {
    font-size: 1.5rem;
  }
}
@media screen and (min-width: 768px) {
  .intro-title {
    font-size: 4rem;
  }
  .intro-price {
    font-size: 4rem;
    margin-bottom: 1.2rem;
  }
  .intro-price sup {
    font-size: 1.8rem;
  }
  .intro-banners .banner-content {
    left: 3rem;
  }
  .nav-pills.nav-big .nav-link {
    font-size: 2.4rem;
  }
  .cta-half .cta-title {
    font-size: 3rem;
  }
}
@media screen and (min-width: 992px) {
  .cta-border .cta-heading {
    flex: 0 0 26.5%;
    max-width: 26.5%;
  }
}
@media screen and (min-width: 1200px) {
  .intro-content .btn {
    min-width: 170px;
  }
  .intro-subtitle {
    font-size: 2rem;
  }
  .intro-title {
    font-size: 5rem;
  }
  .intro-price {
    font-size: 5rem;
    margin-bottom: 1.7rem;
  }
  .intro-price sup {
    top: -1.1em;
    font-size: 2rem;
  }
  .deal-container .btn-more {
    min-width: 270px;
  }
}
@media screen and (max-width: 991px) {
  .heading {
    text-align: center;
  }
  .heading .title {
    margin-bottom: 1rem;
  }
}
@media screen and (max-width: 575px) {
  .cta .cta-wrapper .input-group {
    flex-direction: row;
    align-items: center;
    flex-wrap: nowrap;
  }
  .cta .cta-wrapper .input-group .form-control {
    width: 1%;
    margin-bottom: 0;
  }
  .cta .cta-wrapper .input-group .btn {
    margin-top: 0;
  }
}
/*# sourceMappingURL=demo-3.css.map */