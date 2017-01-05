        <footer>
            ©Portfolio | Circé Grand, created on 2016.
        </footer>

        <!-- Include scripts -->
        <script src="assets/js/script.js"></script>
        <script src="assets/js/particles.js"></script>
        <script src="assets/js/app.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
		<script src="assets/js/imagesloaded.js"></script>
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>

        <script>
            $( ".losange-home" ).mouseenter(function() {
                $( ".p-home" ).slideDown( "fast" );
            });
            $( ".losange-home" ).mouseleave(function() {
                $( ".p-home" ).slideUp( "fast" );
            });

            $( ".losange-about" ).mouseenter(function() {
                $( ".p-about" ).slideDown( "fast" );
            });
            $( ".losange-about" ).mouseleave(function() {
                $( ".p-about" ).slideUp( "fast" );
            });

            $( ".losange-skills" ).mouseenter(function() {
                $( ".p-skills" ).slideDown( "fast" );
            });
            $( ".losange-skills" ).mouseleave(function() {
                $( ".p-skills" ).slideUp( "fast" );
            });

            $( ".losange-projects" ).mouseenter(function() {
                $( ".p-projects" ).slideDown( "fast" );
            });
            $( ".losange-projects" ).mouseleave(function() {
                $( ".p-projects" ).slideUp( "fast" );
            });

            $( ".losange-contact" ).mouseenter(function() {
                $( ".p-contact" ).slideDown( "fast" );
            });
            $( ".losange-contact" ).mouseleave(function() {
                $( ".p-contact" ).slideUp( "fast" );
            });
        </script>

        <script>
          var count_particles, stats, update;
          stats = new Stats;
          stats.setMode(0);
          stats.domElement.style.position = 'absolute';
          stats.domElement.style.left = '0px';
          stats.domElement.style.top = '0px';
          document.body.appendChild(stats.domElement);
          count_particles = document.querySelector('.js-count-particles');
          update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
              count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
          };
          requestAnimationFrame(update);
        </script>

        <!-- Initialize scripts -->
        <script type="text/javascript">

            $(document).ready(function(){
                $('.landing').parallax("center", 0.6, 0.1, true);
            })

        </script>
    </body>
</html>
