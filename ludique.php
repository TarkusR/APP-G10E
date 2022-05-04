<?php

session_start();
if(isset($_GET['logout']))
    session_destroy();
?>

<!DOCTYPE html >
<html lang ="en">
<head>
    <title>Section ludique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  include('header.php'); ?>
<div class="ludique-container">
    <div class="ludique-title-container">
        <h1>Quelles sont les causes du stress</h1>
    </div>
    <div class="ludique-title-container">
        <h3>Découvrez les 5 causes majeures du stress</h3>
    </div>
    <div class="ludique-content-container-right">
        <div class="ludique-content-text-container">
            <p>Repérer les symptômes du stress isolant les causes, cette article vous aidera à mieux comprendre votre stress et à vous poser les bonnes questions pour y trouver vos solutions.
            <br> Cliquez sur l'image pour accéder à l'article</p>
        </div>
        <div class="ludique-content-media-container">
            <a href="https://www.theraserena.com/stress/dossiers/decouvrez-les-5-causes-majeures-du-stress"><img src="https://media-exp1.licdn.com/dms/image/C4E0BAQFe3-i_jLQZuw/company-logo_200_200/0/1594378233349?e=2147483647&v=beta&t=FeqiewjeK0gVcKLS7u26MC0s0K8FfdH6koimqP3oE9Q">
            </a>
        </div>
    </div>
    <div class="ludique-title-container-left">
        <h3>Les aliments anti-stress</h3>
    </div>
    <div class="ludique-content-container-left">
        <div class="ludique-content-text-container-left">
            <p>Certains aliments ont des effets particulièrement intéressants pour vous aider à gérer votre stress, l'avocat, le chocolat, les poissons gras. Vous pouvez découvrir la liste complète ainsi que leurs effets en cliquant sur le logo.  </p>
        </div>
        <div class="ludique-content-media-container-left">
            <a href="https://www.cuisineaz.com/diaporamas/aliments-anti-stress-1435/interne/1.aspx">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfsAAABjCAMAAACrF1l6AAAAt1BMVEX///8rLjHjbm4mKSzhY2MhJSgkJyv54eHjbGz7+/vHyMgZHSEeIiV3eHpydHXiaWlgYWOLjY4ABg7m5+f329vb3NxYWVtNUFLOzs8PFRkVGR66urs4Oz331tbhYGDz8/PldnbnhIT88fHyv7/h4eLvrq46PUBHSkwGDhS+v8D0ysoAAACFhocxNDfoioqoqartpaWlpqeam5z77OzmfHzrmprpkpJnaWvxurqTlZb0zs7tqaldXmArXvmDAAAVPUlEQVR4nO1dbXuiPBOVRqhIFJWigrZYtaBdrdXaUvv0//+uh3fyMkG6Wu79wPmy15YwhpxkMpnMJI1GjRo1atSoUaNGjRrVQV2a4/HYdH5FqnFdqTWuCXXtuxK2sDLcmFcUO+mGUjU0uqrUGtfEZGspSAqB8KpzrVEaSJVTqfbVpNa4JpwNjimKgafjq0jt01K9q0itcV30NIkCQuvLhaq+xUjF7cul1rgu+rYksTRdPj33NU6qVE/6/xjGLEcB5J56oVST61DXkFrjuhgpAPnW5DKhak8GpOILpda4LsYYIElCwwulIkiqcqHUGtfFCeRe2l42N/dhqYN6ofcPwelBKj9Qz7uLxLrguJfsy6TWuCqMKcySdrhI7AAUKuHTlapd4wowYOolvLlEqiPi/iKpNa4LEfdy5xKpIu4vk1rjujCmghHav0jsn3rc//twhrCtp11mlW0FVsT+StWucQ1s4NUYusz53oVcO8Ear/bq/ktow76d0YVSQe6Rd50617gSwKW4faFydoaQ1AsnkhrXxoTbcAuH/aWxW5MVL1XxrhwRVuNCqB2efPvyTRdgxteuEBZQ46pwXHbKt66wFDM4qfZly8YavwHDp0a+gg/X2GdfflNSEaqp/xfhHFZaapsplnsl1eycbJxL3dbhev8onJOn2RrWrK1/xfgKZzOKpUq9OmrjH4ZhTg79fXt5XVPcWIZSx1eWWqNGjRo1gqX6lcr8Fkr+9uVVVI0Al84z8xAXV+WncAzDNJc/qn0wXXe3Z5blhrnuuN1zLeuY7c2ZUmn9jPIsOea6736fK6Ua451Pef9Us93/dmVFUZDn78fnWkRdjk++p8gRJK+z+3ly6fzt/vP15UZv6RGOH0/3b3yp28/FYvF1Vx5fi8XZn1bXp863522lqef1OqdJieZ11ofuULFlrWAFrbYPnaFkybhTJDAotRlubYzF3IeCfM+TwvqN/M5pd5aPhjred4ZbC+Ne8WdM+r6HNUxw7+z94D2UJPUpmtIr3GcIirsallFQNHoFyZoy7C/P1Y/A/Pn1ZdZs6q2bFEEXaB7fv9iCTw9Bv2jyeHh4AP4aPflf8U8vJ8OVhWVF1mzL0oJ/sb0a7USVd5Zme3L63g5sLcp5hOItHCMoc/C3AysuI4Pch6XWB98NSkVLclnAvTPpakGRYNVmWcHiLaygZg28zQTsALHU7nQVfkq4yIe5j6p4+kYDO6RNQhn3Zn+lMdEFij0Vbi6PO6vkG21pNLUTtyLC1rBdTj/dLl5CjvTZTTPnPua/eWTYf6RLJKWax5f39xn3JIT+UliJZceNXSzY60zWk40XfbiiuR1y21t1HCegc9P9HrlbWSMSHnPuwzLjuIy3VTSctyDJfVRqve93eiNvqmianImCuXcOIywHP+P2TpP1etfvubFghLWt11k7KvHbiVRESqW4T348riL5GSn3zmkKbS8jCXYVmF0pZbtrGo6z7EuZY0nxz8cNzO8/ZoGev3m/f5vPb19YalutJ7JJ1CZH/M3j69fbXG08870i4v624MeXnaQBkLZPvn5vJ10Xb9KxYJx8VxlEgw4hZp805d7Ydz1ZUCbnXg1KbeNSClcK4F7dTcOeKUv7LMjemAxtlA0vqRuw4uy6rrSCpebcq+t+z5PgKibcTzwbjv0Bczqdk5Z2lGyjuJ37lGVtXzz01cWxqQcEPSYMzflx3Xwlyt/R3OvN2SJ9E6a++ST+cWeTdVs3937u08/H26S3TwaaILoy537yR1wm5345XYlL8dwvvahn4h6dXjHx8v067VsNioml5twb7koRFYu4DwaCWAy/wTz2Mp5xHlw+IfQGHhaYJfPPWTTDt46ZVfek8yOXMNaox/rNx3325J1/MZRcoPHNYVZ5jejW6ihtAWT147fHvRUWNEum89feCo7EonT+co8EQwvgfreNJyBuC94YZlmXSphruTxJIqmEzl/6tojckPt2oO6RgjEc+YXZ3IFdrjrQlpjTfMJawCNhTtD9YzK/65/Z355ZpR7wN8tXfATDreZjznzjGaT+pnkn+vHG3spqSecrEtF09jCpvHPaCtokt/XGGxluWtrWW38DgRsSwP3JisVBqVqnNNFeSfJs1yNYKjXfOwdPECk4MjYrhGzX75+yOZzGgK4dGYBA5ZSsySMA5C1M/tv7Q6qmmzm5tzz3N3qm9d+OmWbXH58JYQKNT3QqFkT2mkzbwgfis+Ss5xojkHzKzh97YBnGzldPcCmG+wNO34aqn8pIuQ9nX0gqY+cbQNBIiOkQIzzahc4DdelD9aNCS9QTybBCdU7q+Ae5B6n9u2M+Uh+KuW8d0+e32Tv6O+X+eYU1/lHkI1J7RK46ogcWyb2EvzM7DWwSeo0HR19za7wdNLIY7iecHUWjH7exkufXHyCtw63xNrD+QrK8yyRBHUTukkIo6r8pfumoQRvwfS3I5dwZ7m/0r+ythNTWMyUNmCmi9+4bMJwu8XVs8gLFPfHUgIYMs743oTL8+n4E0ERzb2SrJUEsV9IVCe4bPtDxOO6dHjgx4W/Co2F4fBnk5gX2VN9l2o9uPklhIxNU2jI7y33qnvmIX2vN6IXbfAaqfF1o41NBMzazfmFymVfZY6htWd8O0GoA93twYJGlcqNDFMdnRLkYJPcHQCrv24FKSdinxi6Uzq1lSyEmxJxJIV3T8tGU/nj1lWb4IX8Mct96TJ4m/50xFtz/YI1/I7LxmamRedqhtWK+vIEYY7mHWo3nHlIPFPdE8wpzqqJgX5L7scVL5blfAtG87LEPUBxxRjGbRmzTI3u8pd9jQs9Zrpr5MAa5v7lJHkbv6TPGz//1AL7TEmn8NUUuZ0ux2fFZUtMEOM+G5R4c0Tz3W6AUyT1hWyBPsFBSw4qS3BtQjDbHvQrkbLLcL8GvSB52mO69os2lJZN8gKiF3j3LL7ESg7lPFEO0kGsdGU8d4A+KushrA4ZBJ65xUczfjNpGbvKgDPdQGYB7vhDFvUHyg0FbOcDYprmHWP077iHTJk0barPvM6s/LkWEPPzhjZudm/kILeQ+suZbrJNW4NWZiTQ+kw3HLZ9Z7iWc9I4y3EN69+fc76i2l70dzP63QnEPZWFfkft4CDjfrNUzoN/luCezwnjXXTP33MHcx5PCPPT2t9gtWU6LJNw/N2C0aXYQ53vi1mnpyRXVcc+YHEhzD9DOSGBWVce9pMSNwBk0W+YHOJPYylYIgFFelnud8e5HfxRo/HegraJPZ6ZzhdWoDmeqp0Uq4553EyAsDyfcvB8MsQq5R9Ej7ryYbEpMwXGfeyi+eK5Kch+s4lsvrLfmp16dNlMzymcRtSDHfZopVxn3BpSriWxvw+6m9XHV3PPfh6bMD3Dc59b0gierJPcBzU12sr+D/fi6MFiHHVKcmc9zLyVe6eq4B5YBUrxnexqTssxB1dzza1jERoV1WM9hvlL5BLg/Z+vFlB9bnH9e/aHG59dBHPcq53RDbtXjHuY+hCYND0TI3kgjVv8VcO/wHknFZ36AP1liW8B964xfL+b+baZzGh/Y8g3lsR6AHNz6m98q4ex8NKyY+yXwOK+NZvuT1EZZ/yE8JxVwDzilkO8YJBxu3OfGHq/zyVFawP2Xzu3I3kGFg+IiGx/YkOG55+qeclfduIf8/WRReXtK7H6HEF0B95DrSprS4JWWldopb/wwJRxwBdw/NVlNLtL4L+z35h/FWVGcrdeYsPSl3szq7HzBwZs5kCZ1uFVfBdyDe5lIoYA45KdEs74YitIC7j90dth/wkv7mThEr82bqd+s38Rh+4ecqKzq1vcHUQgQ+cuWzwQTV8A9tFWFvNEZeJnrdP5Ikd98J1umgPsFuy33Y40PnWLM+3bYrZ4sxL067vkuCgG7J0rw73OvQqfBWmN6wgeQV/PtUU8D8Vv6zf/I+r/Bxhu3tItw/KnGB7dhp5zuVIdkD5GzFUp13Dek4gk/ZUPzyBX/73MPngrJ7OOdw/3ro/7QbD7cvHwSFvnt4uVBEHYHcS/Q+DdCG78BHnCF+QMKlnkUJ3mLUYXc855TGIpEbJ7/PvfQfR8/P7xRnc9vb+fz/HPnzx8zXdfhBAuI+1uBxheH6AWAqg7ERDldG4c2i4JX3XxSrZB71S9JvrTKyf+PuL/00Nb711lTbzVbCzj6CuL+BVQRxWk40CnG8HUVZr838kZ+n1QKFXLfMOCwTwB5RuB/xD23I/IT3D4FIz6MyfhUC/16FAAXUQSu5IJQBOAJ1hpcK4fLea2S+8aSOzNLhFXaP/8j7qXpTzIvqao8f9zE4Tgv4URdlnveSxAX5EL0bps68U3geZZlbZVKuW8YXXGaDIVs3P0+91C8UWDo/91BUXevelMnWSvJvVpW46sf+mP+P5D70vNVtdw31D2YGMnDTgZ+BXY+yD3vHjsP9evlJqUwjaktyT2wGQjrh3udjN0S3FpQ8jahyrhXJ/ERAEbHKjPr48QtXcH6XnAnz08nfPX52CRSLZK/luP+TbBzy6fav+iUqwesuVbyRpnq9nIGaWC42d2eH/tp9EQFfj14o+HcJU8GPbjmiyNx0EKelVWOe1HiJRewcd+ik7Ahn6SEBFljLCrj3lzl85C5GbCHIXBI6v9f+fOpwDEAzpTK4r1/oY5Z0D/SB6W4FyVe8kHZ7zqR4yuse8kZv0LuEREE5+x6WJQGnLASuyYr4H4HPQiWGkXHOKq+hvKl8vz1gXbH5slTZbifCzKw+DSc+4eb1gfZ8IJbCeXCw0fVREKF3EuIrJFjblxUQH9SuIr9e6AJpIIcghB7jLbZKvD2yI7bfOetBPeqQOM/8iF6HzoTpj+G6154yvxuVfX+fcA9m++ujjeuJcjxrpB7UWQBFl/GNcZElPbXjOWOoK0E9+UTL8PVQJOK3GOTRoCGZ9HW0hOwquQemEKdddcVLPkrm+9FF69KtuheR3OK8p5xe8Ntv/2Iez61I6aet/GjpHx6uoATqQNYorPSHA+l8flr4Lt/i3tJg5xly527gj6gOu6Fu8sItvWX4bEFVjqBPQLxej/hXqDxgcTLKO3vgf4bNHYjaF1Y7ftYSg8aYsO7Q/wa96LL8todxMXBVrfGE966G9h70NFK4/BUsOw2mAVA7k+4/4HGD0u2jsyXA/mKMfAQGmkHOQ9AXwOf/WvcI6EJYrKHtqR+tUq4F1j6YVN0uBqfojiEVG+CaTQ/4H4uCNjgg7Jvo4JcRmZfWHcFn9jKLzsrIgGezS6OPvi3uC+64IpJoU/D4SrhHr6NK24L7UTGwRg7NxZjJYsAMM6KWIOf416UeMnZ+LexWcAFcImsvRDa6EDEvarL01TOI7ThV3+Pe+SJHSaUxYXSfbRKuKcPU2JbY9s7tcMgreXk5LvJqhSn7n7YLVN6jfdVNvEyW0dyB22JB34U/trdtc2g8uZ639Uiq3qQhUUBGTu/yL1kiR0m1KEomRVdDfeNXpGXWcHWKkQY+5K8lh3WAsfjlfXtlNb46UlOtFcv/nbQr5tTkBy0KScHzZE+P2CRwO5hXZH7IocJOfCzsw8q4r5IcwLIz92AUyfzXKti7stq/EW6jmx9NDiUjYWL244kADjGjMlEVKFLaf+S+yJXM2Fx5W6VirgH72AUQh5lnyVgL7PGC7kvm3i5yLaJgFV/sdZnv5c6f20JDOoV6XwlgzyJz/9L7qWB0NW8zpaqyM06Z1Xcw9k5MAh3rijUqpmcojaH+0aSfy/Q+MzYfnvM+w8Yq++UDoSUFGrOdUb8Cl/2ibB6+NjKv+YeyB1IkLspiCNjfvfMFYL7xqY0+TivXuML5j45ROfuUQfpzXKwoVfpNBx1QbqMm2DAtiM4WpQDez3xHvLspZrZ6FtIgrxu5bgn7sNNuZc0Nsc1RbYnRR5wBp+gxUUy/fW5G/kKWO2XU/uIPGtH5JG9abVeF58vzebsCRzagTE3h81ExmF/R28OCw7dWQ7LkI+4JbazBcwczTcNxxj3t1hSpnwSKhTI2ga8i4TyzrgPOhb4AZlZgcmwE8hnyRuMJjBxsY6kMTh1kdMffC4sK1aiGxAevCG/4YUYH2/Q7Qjh4D5yO0DJa0Qajnr30aJKsdNBBgOcmGkoMu9dOUAuYVnzhq6Ng14+MqGWZQ9t5Y9xi6Bl80vOvWCfIYmZRCsq4giyMyWZXSmC29hofL4MvbU4ATcW6Bcs5pyQOb+VkxHcDO9JgJy+oV4QvZVpfPX5Q2f6R8FZyqdzUbAaNNmqXbDPRHcRyNsDvMYL+z8xrpy2QOvIh+QXCe7hfYZh1O7ydEJKHcFSrQP5HUv4PF00Jch3BFEO2ob0ep+LI0ZWl2vAe9HAb75ENKofogLgS4nGv71/15vciy3uvp0c7cIAeFnhHLxxu4hMBRn3wtENch8023CTHJYy3gxlUQyW5nWiUxXMP4h8lbX21ehkC6QRGxDj/ki0uR/dBhN/izrpuAJ9h6TuOq6g2Rd0ojA/rUt0YnXiiuNJEJ7ugOlqAdlzga5eJGXfBNodQnQ3wu3z08eMHfIRCrKxw9PksajnylpXdNuLs1nx1CF55ccGrYD7oC1W4aUzxnBQFH6FsGXt1WDgkXEayOpQ7I/DM8AVzcsHvTMS3u2QSQ2KbWxb2EGCb7ZC88bxiyqIZI28q92ZjMB4EqRY0wO8FXV7ZO5ECrT97Cn3z7x9sM8LuH+cPTw0dXh5wG7isTD6rsarQKRtfbMg+LDdk8joyaA9kNdJj0AKuEfhTVY2zo8ewHaEQWDymVr6R2VLHVYhZYWj7QOn3fFQVjcsfZ9MJ4Rh7PxgLYHlEXlnumkJpCJS6vKPhnFSF9tW6MrZwTPLDSqILepxDjkuZ2HqKr11x1PoWFKENfd7IoyDmn8ec7ZaenP28kl55lTyeVQmhJ4hvPosHuYzGgz3QlMvZ3/iW+EFacltcEjB2gA+x5Cs3vjgo0Hkth4MpFFn184ntvEfxfU7/f1k3c6wnsQww1ezv45NEnnpVJE7431XGSQXIMnaausOhyNpZWmaZXfWdN8sJ3Vy6vf7SV0mbOV2/f5pHF7FRz8mkL7INmF770urVdwzVoNwhiluP/Xr6bEV3mj30Dy+P/OaeX7/v5dgQCcIKD7Ojh8B3p8CfD4H+LoPcUvjnkFROnZWlfWpO3Qj7t2Rv9mXzTNYho3LFXaufKf1+rDp9rygelrQ0VYIucPu6R+81V41oz60NkumuTTUgK3qLz+F4EREmssfXDhaIRwjqN44RFDF+mbzGjVq1KhRo0aNGjVy/B9iURRyIsitZwAAAABJRU5ErkJggg==">
            </a>
        </div>
    </div>
    <!-- Pour alex, tu peux copier les container de droite de ici --!>
    <div class="ludique-title-container">
        <h3>Les bienfaits de la méditation</h3>
    </div>
    <div class="ludique-content-container-right">
        <div class="ludique-content-text-container">
            <p>L'origine de la méditation, en quoi ça consiste, les bienfaits ou encore comment pratiquer la méditation, vous pouvez vous renseigner en cliquant sur le logo</p>
        </div>
        <div class="ludique-content-media-container">
            <a href="https://www.santemagazine.fr/medecines-alternatives/autres-pratiques/meditation/tout-savoir-sur-les-bienfaits-de-la-meditation-177043#:~:text=La%20méditation%20est%20une%20pratique%20visant%20à%20accorder%20une%20pause,le%20stress%20et%20l%27anxiété">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMpCr-K799PEb58jURBLskMbr2iAVtJbuGjg&usqp=CAU">
            </a>
        </div>
    </div>
    <!-- à là --!>
    <!-- pour alex, tu peux copier pour les container de gauche de ici --!>
    <div class="ludique-title-container-left">
        <h3>Gestes simples pour se détendre</h3>
    </div>
    <div class="ludique-content-container-left">
        <div class="ludique-content-text-container-left">
            <p>Si vous avez une, deux voire une trentaine de minutes devant vous, cette article vous propose différents exercices simples et efficaces afin de gérer votre stress, n'hésitez pas à cliquer sur le logo pour consulter l'article.</p>
        </div>
        <div class="ludique-content-media-container-left">
            <a href="https://www.marieclaire.fr/,comment-se-detendre-en-1-2-5-10-30-minutes,837024.asp#:~:text=Frictionnez%2C%20martelez%2C%20pressez%20et%20massez,le%20nez%2C%20bien%20sûr" >
                <img src="https://compagnieaffable.files.wordpress.com/2018/06/logo-marie-claire.png?w=323">
            </a>
        </div>
    </div>
    <!-- à là --!>
</div>
<?php include_once "footer.php" ?>
</body>
</html>