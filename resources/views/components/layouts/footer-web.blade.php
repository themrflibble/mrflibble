<footer class="web-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mb-2">
                <a href="">TBC</a>

                @if (config('app.env') != 'production')
                <div>
                    <span class="d-block d-sm-none">Breakpoint: xs</span>
                    <span class="d-none d-sm-block d-md-none">Breakpoint: sm</span>
                    <span class="d-none d-md-block d-lg-none">Breakpoint: md</span>
                    <span class="d-none d-lg-block d-xl-none">Breakpoint: lg</span>
                    <span class="d-none d-xl-block">Breakpoint: xl</span>
                </div>
                @endif
            </div>

            <div itemscope="" itemtype="http://schema.org/LocalBusiness" class="col-md-4 mb-2">
                <p>All Rights Reserved.</p>
                <p>&copy; TBC <?php echo date('Y');?></p>
                <p class="small">Company registration number: ########</p>
                <a href="#" class="toTop footer-title">Back To Top</a>
            </div>
            <div class="col-md-4 follow mb-2">
                <a href="" class="social-blk" target="blank">
                    <img src="/img/logo/icon-fb-opt.png" class="social-blk" alt="Facebook logo">
                </a>
                <a href="" class="social-blk" target="blank">
                    <img src="/img/logo/icon-twitter-opt.png" class="social-blk" alt="Twitter logo">
                </a>
                <a href="" class="social-blk" target="blank">
                    <img src="/img/logo/icon-instagram-opt.png" class="social-blk" alt="Instagram logo">
                </a>
            </div>
        </div>
    </div>
</footer>
