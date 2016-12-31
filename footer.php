        <footer>
            ©Portfolio | Circé Grand, created on 2016. 
        </footer>

        <!-- Include scripts -->
        <script src="assets/js/script.js"></script>
        <script src="assets/js/particles.js"></script>
        <script src="assets/js/app.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>

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
