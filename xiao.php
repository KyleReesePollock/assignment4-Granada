<!-- include html top for links and doctype -->
<?php include "inc/html-top.inc";?>

    <body>
        <!--header-->

        <!-- navigation bar-->

        <section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section> 

        <article> <!-- Article-->
             <h2>Xiao Cheng- Computer Science</h2>
             <!-- pic of Xiao -->
                <div class="info">
                    <!--no bullet points, just a list next to the picture-->
                    <ul class="basic-info">
                        <li>Graduation Year: 2019</li>
                        <li>Hometown: China</li>
                    </ul>
                </div>

                <div class="pic">
                    <!--images of place where each person is from, round-->
                    <figure class="place"> 
                        <img class="scale" src="images/aa.jpg" alt="Alejandro Abreu Picture">
                    </figure>
                </div>

            <div class="article-info">

            <!--About and their work experience, two seperate headings-->
            <h3>About</h3>
                <p>My name is Xiao Cheng, and my friends all call me Katherine/Kat. I am currently studying at the University of Rochester, majoring in Computer Science and minoring in Philosophy. Comparing to other CS students, my progress is kind of slower, because I transferred to this major in my Sophomore year. Originally, I was considering majoring in Audio and Music Engineering. The reasons why I changed my major were complicated, but mostly because AME was not something I thought it would be. After taking several CS classes, I realized that I am really interested in UI/UX design, 3D modeling, game design, and front-end stuffs. I enjoy seeing the beautiful results that my work turned out to be. I guess I am more of a visual person anyways.</p>

            <h3>Work Experience</h3>
                <p>Minoring in Philosophy is something that I never thought I would be doing. Taking my first Philosophy class was a complete coincidence - I was just trying to fulfill my minimum credits requirement after dropping one of the classes I took in my freshman year. I feel so happy about this coincidence because I met one of my favorite professors in this university. He made Philosophy so interesting. I always question myself about whether I would choose this path if my first Philosophy professor was not him. I doubt that I would. Philosophy has helped me develop my critical thinking skill and logical processing skill. I feel very proud of my minor because it makes me who I am.</p>

                <p>I have not had any internships yet. Being a workshop leader last semester was technically my first job. As an international student, I always felt nervous when talking to a group of people in English. Before my first workshop last semester, I stayed up late the entire night worrying that I might not do well for that position. Despite that, I stepped out of my comfort zone. At the end of that semester, I got used to getting up early every Thursday and stepping into that room confidently. It became my routine. Thanks to that experience, I had grown more confident and I believed in myself more. Making up my mind applying for this position is the one of the best decisions I have ever made.</p>

        </div>       
        </article>

        <!--Aside-->    
        <aside>
            <h3>Miscellaneous</h3>
                <p>I am originally from Changsha, Hu'nan, China, a city that is famous for its spicy food. But I spent most of my life in Guangzhou, Canton. It is where the cantonese dim sum comes from. I have a very strong emotional attachment to Guangzhou and I feel very proud every time I talk about it. There is a slang in Chinese called "Shi Zai Guang Zhou", which means that "If you want the greatest food, come to Guangzhou". There is no place I feel more like home in the world. (P.S. it never snows in Guangzhou. Most of the time during winter, the average temperature is 59 Fahrenheit. So you could imagine how hard it is for me to survive in Rochester.)</p>
                
        </aside>
        <!--Include footer and js-->
        <?php include "inc/footer.inc";?>

        </div><!--.container -->

        <?php include "inc/scripts.inc";?>
        
    </body>
</html>