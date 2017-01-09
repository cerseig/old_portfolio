        <footer>
            ©Portfolio | Circé Grand, created on 2016.
        </footer>

    </main>

        <!-- Include scripts -->
        <script src="assets/js/script.js"></script>
        <script src="assets/js/particles.js"></script>
        <script src="assets/js/app.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-58d22c749295bca52f487966e382a94a495ac103faca9206cbd160bdf8aedf2a.js'></script>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script>
            (function($) {
                $( ".losange-home" ).mouseenter(function() {
                    $( "span.home" ).slideDown( "fast" );
                });
                $( ".losange-home" ).mouseleave(function() {
                    $( "span.home" ).slideUp( "fast" );
                });

                $( ".losange-about" ).mouseenter(function() {
                    $( "span.about" ).slideDown( "fast" );
                });
                $( ".losange-about" ).mouseleave(function() {
                    $( "span.about" ).slideUp( "fast" );
                });

                $( ".losange-skills" ).mouseenter(function() {
                    $( "span.skills" ).slideDown( "fast" );
                });
                $( ".losange-skills" ).mouseleave(function() {
                    $( "span.skills" ).slideUp( "fast" );
                });

                $( ".losange-projects" ).mouseenter(function() {
                    $( "span.projects" ).slideDown( "fast" );
                });
                $( ".losange-projects" ).mouseleave(function() {
                    $( "span.projects" ).slideUp( "fast" );
                });

                $( ".losange-contact" ).mouseenter(function() {
                    $( "span.contact" ).slideDown( "fast" );
                });
                $( ".losange-contact" ).mouseleave(function() {
                    $( "span.contact" ).slideUp( "fast" );
                });
            })(jQuery);
        </script>

        <script>
            /* Demo purposes only */
            $("figure").mouseleave(
              function() {
                $(this).removeClass("hover");
              }
            );
        </script>

        <script>
            var ctx = document.getElementById("myChart");

            var data = {
                labels: ["Scale","HTML5", "CSS3", "Bootstrap", "PHP", "MySQL", "JavaScript", "Symfony3", "Photoshop", "Illustrator", "InDesign"],
                datasets: [
                    {
                        label: "PÔLE DÉVELOPPEMENT",
                        backgroundColor: "rgba(29,49,76,0.2)",
                        borderColor: "rgba(29,49,76,1)",
                        pointBackgroundColor: "rgba(179,181,198,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(179,181,198,1)",
                        data: [0, 90, 85, 70, 60, 60, 40, 40, 0, 0, 0]
                    },
                    {
                        label: "PÔLE GRAPHIQUE",
                        backgroundColor: "rgba(204,53,84,0.2)",
                        borderColor: "rgba(204,53,84,1)",
                        pointBackgroundColor: "rgba(255,99,132,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(255,99,132,1)",
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 70, 80, 60]
                    }
                ]
            };

            var myRadarChart = new Chart(ctx, {
                type: 'radar',
                data: data,
                options: {
                    legend: {
                        display: true,
                        labels: {
                            fontColor: 'rgb(0, 0, 0)',
                            fontFamily: 'Montserrat',
                        }
                    },
                    scale: {
                        reverse: false,
                        ticks: {
                            beginAtZero: true
                        }
                    }
                }
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
