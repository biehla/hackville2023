
<h1>Dashboard</h1>

<span><p>Welcome, <?php echo $_SESSION['username'] ?>!</p></span>

<div>
    <h2>Requests</h2>
    <ul>
        <li>Help my cat is gone (0.2 km) <i class="fa-xl fa-solid fa-square-check"></i><i class="fa-xl fa-solid fa-square-xmark"></i></li>
        <li>Hey Siri (0.4 km) <i class="fa-xl fa-solid fa-square-check"></i><i class="fa-xl fa-solid fa-square-xmark"></i></li>
        <li>You Tube (0.4 km) <i class="fa-xl fa-solid fa-square-check"></i><i class="fa-xl fa-solid fa-square-xmark"></i></li>
    </ul>
</div>
<div>
    <h2>Ratings</h2>
    <ul>
        <li><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <p><?php echo $_SESSION['username'] ?> was very nice and my cat liked them too</p></li>
        <li><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <p>Siri works now</p></li>
    </ul>
</div>