<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Luxury Stay - Hotel Booking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hero {
            background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c'); /* Replace with your own hotel image if you want */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .btn {
            background: #ffb400;
            color: #fff;
            padding: 12px 24px;
            border: none;
            font-size: 1em;
            cursor: pointer;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #e0a200;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0; top: 0;
            width: 100%; height: 100%;
            background-color: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            text-align: left;
        }

        .modal-content h3 {
            margin-bottom: 20px;
        }

        .modal-content label {
            display: block;
            margin: 10px 0 5px;
        }

        .modal-content input, .modal-content select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .modal-content button {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 1em;
            border-radius: 5px;
        }

        .close {
            float: right;
            font-size: 22px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Welcome to Luxury Stay</h1>
        <p>Your dream hotel experience awaits</p>
        <button class="btn" onclick="showModal()">Apply Now</button>
    </div>
</div>

<!-- Modal -->
<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3>Book Your Room</h3>
        <form action="booking.php" method="post">
            <label for="room_type">Room Type:</label>
            <select name="room_type" required>
                <option value="">Select a Room</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Suite">Suite</option>
            </select>

            <label for="num_rooms">Number of Rooms:</label>
            <input type="number" name="num_rooms" min="1" required>

            <button type="submit">Book Now</button>
        </form>
    </div>
</div>

<script>
    function showModal() {
        document.getElementById('bookingModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('bookingModal').style.display = 'none';
    }

    window.onclick = function(e) {
        const modal = document.getElementById('bookingModal');
        if (e.target === modal) {
            closeModal();
        }
    }
</script>

</body>
</html>
