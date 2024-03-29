<?php
$pageTitle = "Welcome to the Creature Identity Test";
require_once 'header.php';

// Initialize a flag to determine what to display
$showResult = false;
$resultHTML = '';

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Initialize scores for each creature
    $scores = [
        'Zyliorix' => 0, 'Verdanthe' => 0, 'Sylaqus' => 0,
        'Vulquixar' => 0, 'Nephelgon' => 0, 'Obscurix' => 0,
        'Alpinor' => 0, 'Desolynx' => 0, 'Niveusar' => 0, 'Phaedron' => 0
    ];

    $answerPoints = [
        'q1' => [
            'A' => ['Vulquixar' => 3, 'Nephelgon' => 2.5, 'Alpinor' => 0.1],
            'B' => ['Verdanthe' => 3, 'Nephelgon' => 2, 'Phaedron' => 0.2],
            'C' => ['Obscurix' => 3, 'Sylaqus' => 2, 'Desolynx' => 0.3],
            'D' => ['Niveusar' => 3, 'Verdanthe' => 1, 'Alpinor' => 0.4],
            'E' => ['Phaedron' => 3, 'Zyliorix' => 1, 'Nephelgon' => 0.5],
        ],
        'q2' => [
            'A' => ['Alpinor' => 3, 'Verdanthe' => 2, 'Nephelgon' => 0.2],
            'B' => ['Verdanthe' => 3, 'Obscurix' => 1, 'Sylaqus' => 0.1],
            'C' => ['Zyliorix' => 2, 'Desolynx' => 3, 'Vulquixar' => 0.3],
            'D' => ['Sylaqus' => 3, 'Niveusar' => 2, 'Phaedron' => 0.4],
            'E' => ['Obscurix' => 3, 'Zyliorix' => 1, 'Vulquixar' => 0.5],
        ],
        'q3' => [
            'A' => ['Phaedron' => 3, 'Alpinor' => 2, 'Zyliorix' => 0.3],
            'B' => ['Phaedron' => 2, 'Niveusar' => 3, 'Verdanthe' => 0.4],
            'C' => ['Niveusar' => 2, 'Sylaqus' => 3, 'Obscurix' => 0.1],
            'D' => ['Obscurix' => 3, 'Desolynx' => 2, 'Vulquixar' => 0.5],
            'E' => ['Zyliorix' => 3, 'Obscurix' => 1, 'Phaedron' => 0.2],
        ],
        'q4' => [
            'A' => ['Verdanthe' => 3, 'Phaedron' => 2, 'Alpinor' => 0.4],
            'B' => ['Zyliorix' => 3, 'Obscurix' => 2, 'Phaedron' => 0.1],
            'C' => ['Vulquixar' => 3, 'Desolynx' => 2, 'Nephelgon' => 0.5],
            'D' => ['Sylaqus' => 3, 'Obscurix' => 1, 'Niveusar' => 0.3],
            'E' => ['Niveusar' => 3, 'Verdanthe' => 2, 'Alpinor' => 0.2],
        ],
        'q5' => [
            'A' => ['Nephelgon' => 3, 'Alpinor' => 2, 'Vulquixar' => 0.1],
            'B' => ['Zyliorix' => 3, 'Verdanthe' => 2, 'Obscurix' => 0.4],
            'C' => ['Phaedron' => 3, 'Sylaqus' => 2, 'Desolynx' => 0.2],
            'D' => ['Verdanthe' => 3, 'Niveusar' => 1, 'Phaedron' => 0.5],
            'E' => ['Desolynx' => 3, 'Vulquixar' => 2, 'Nephelgon' => 0.3],
        ],
        'q6' => [
            'A' => ['Alpinor' => 3, 'Nephelgon' => 2, 'Vulquixar' => 0.5],
            'B' => ['Verdanthe' => 3, 'Niveusar' => 2, 'Phaedron' => 0.1],
            'C' => ['Desolynx' => 3, 'Sylaqus' => 2, 'Obscurix' => 0.4],
            'D' => ['Sylaqus' => 3, 'Niveusar' => 1, 'Phaedron' => 0.2],
            'E' => ['Vulquixar' => 3, 'Zyliorix' => 2, 'Desolynx' => 0.3],
        ],
        'q7' => [
            'A' => ['Vulquixar' => 3, 'Nephelgon' => 2, 'Alpinor' => 0.4],
            'B' => ['Verdanthe' => 3, 'Niveusar' => 2, 'Phaedron' => 0.1],
            'C' => ['Obscurix' => 3, 'Desolynx' => 2, 'Zyliorix' => 0.5],
            'D' => ['Sylaqus' => 3, 'Phaedron' => 1, 'Niveusar' => 0.3],
            'E' => ['Verdanthe' => 2, 'Alpinor' => 3, 'Vulquixar' => 0.2],
        ],
        'q8' => [
            'A' => ['Nephelgon' => 3, 'Vulquixar' => 2, 'Alpinor' => 0.1],
            'B' => ['Obscurix' => 3, 'Zyliorix' => 2, 'Sylaqus' => 0.4],
            'C' => ['Phaedron' => 3, 'Niveusar' => 2, 'Verdanthe' => 0.3],
            'D' => ['Zyliorix' => 3, 'Phaedron' => 1, 'Verdanthe' => 0.2],
            'E' => ['Alpinor' => 3, 'Obscurix' => 2, 'Vulquixar' => 0.5],
        ],
        'q9' => [
            'A' => ['Phaedron' => 3, 'Verdanthe' => 2, 'Niveusar' => 0.1],
            'B' => ['Zyliorix' => 3, 'Alpinor' => 2, 'Obscurix' => 0.4],
            'C' => ['Desolynx' => 3, 'Sylaqus' => 1, 'Vulquixar' => 0.5],
            'D' => ['Vulquixar' => 3, 'Nephelgon' => 2, 'Obscurix' => 0.3],
            'E' => ['Alpinor' => 3, 'Desolynx' => 2, 'Zyliorix' => 0.2],
        ],
        'q10' => [
            'A' => ['Verdanthe' => 3, 'Alpinor' => 2, 'Niveusar' => 0.4],
            'B' => ['Zyliorix' => 3, 'Obscurix' => 2, 'Phaedron' => 0.5],
            'C' => ['Phaedron' => 3, 'Desolynx' => 1, 'Sylaqus' => 0.3],
            'D' => ['Niveusar' => 3, 'Verdanthe' => 2, 'Alpinor' => 0.1],
            'E' => ['Phaedron' => 2, 'Niveusar' => 3, 'Verdanthe' => 0.2],
        ],
    ];

    // Define creature descriptions and image paths
    $creaturesInfo = [
        'Zyliorix' => [
            'description' => "<strong>Appearance:</strong> Zyliorix, an ethereal being, appears as a majestic swirling mass of cosmic dust and starlight. Its core, a vibrant nexus of energy, pulses rhythmically like a heartbeat, casting a soft, otherworldly glow. Streams of luminous particles and shimmering light trails orbit around it, mirroring the celestial dance of galaxies.<br><strong>Nature:</strong> As a benevolent cosmic entity, Zyliorix roams the infinite expanse of space, seeding the dark void with the essence of new stars. It represents the eternal cycle of creation and destruction in the cosmos, nurturing life and light across vast galaxies. The presence of Zyliorix is a beacon of new beginnings and hope, inspiring awe and wonder.",
            'image' => 'media/Zyliorix.png'
        ],
        'Verdanthe' => [
            'description' => "<strong>Appearance:</strong> Verdanthe is a colossal guardian, it forms a harmonious blend of lush greenery, vibrant blooms, and ancient, twisting vines. Its eyes, resembling morning dew, radiate a soothing, emerald glow, inviting and warm. The creature's presence is a testament to the boundless vitality of nature, with flowering plants and foliage seamlessly woven into its being.<br><strong>Nature:</strong> As the protector of ancient forests and wildlands, Verdanthe embodies the resilience and nurturing spirit of nature. It heals ravaged lands with a mere touch, encouraging growth and rejuvenation. Through its actions, the natural cycle of life flourishes, uninterrupted and vibrant, under its watchful gaze.",
            'image' => 'media/Verdanthe.png'
        ],
        'Sylaqus' => [
            'description' => "<strong>Appearance:</strong> Sylaqus, a sinister aquatic creature, possesses a sleek, serpentine body adorned with luminescent markings that emit an eerie glow underwater. Its scales glisten with a dark sheen, reflecting the faintest light from the abyss, while its eyes, cold and calculating, hypnotize the unwary.<br><strong>Nature:</strong> Lurking in the darkest depths, Sylaqus is a predator of the seas, ensnaring both marine life and adventurers with its mesmeric luminescence. It embodies the treacherous allure of the ocean's abyss, drawing its victims into the depths with promises of wonders, only to trap them in eternal darkness.",
            'image' => 'media/Sylaqus.png'
        ],
        'Vulquixar' => [
            'description' => "<strong>Appearance:</strong> Vulquixar is a fearsome fusion of molten lava and jagged, volcanic rock. Its body pulses with an inner fire, veins of liquid flame coursing through it, illuminating cracks and crevices. Its eyes, deep pits of smoldering coals, burn with a relentless fury, casting a menacing light.<br><strong>Nature:</strong> Embodiment of volcanic wrath, Vulquixar thrives on chaos and destruction. Its passage leaves behind a trail of scorched earth and devastation, yet also the promise of renewal, as new life springs from the ashes of its fury. This creature is a testament to the destructive and creative forces of fire.",
            'image' => 'media/Vulquixar.jpg'
        ],
        'Nephelgon' => [
            'description' => "<strong>Appearance:</strong> Nephelgon manifests as a colossal dragon, its scales a tumultuous blend of dark storm clouds and lightning. Its formidable presence is crowned with eyes that flash with cruel, electric light, mirroring the tempests it commands.<br><strong>Nature:</strong> Sovereign of the storm-laden skies, Nephelgon wields the power to summon violent tempests and hurricanes, not as acts of purification but as demonstrations of its sheer dominance over the aerial realms. Its roar echoes with the sound of thunder, a harbinger of devastation from above.",
            'image' => 'media/Nephelgon.jpg'
        ],
        'Obscurix' => [
            'description' => "<strong>Appearance:</strong> Obscurix, a shadow incarnate, has a form that defies definition, flickering at the edge of perception. It absorbs light, creating a void where its heart should be. Its eyes, however, burn with a dark, unsettling light, piercing through the gloom.<br><strong>Nature:</strong> Dwelling in the deepest shadows, Obscurix guards the secrets that lie in the dark. It is the threshold keeper between life and death, embodying the enigmatic and often feared aspects of darkness. Its presence is both a warning and a guide through the mysteries that lie beyond the light.",
            'image' => 'media/Obscurix.png'
        ],
        'Alpinor' => [
            'description' => "<strong>Appearance:</strong> Alpinor, resembling a majestic bear, is sculpted entirely from sparkling quartz. Its crystalline form catches the light, casting prismatic rainbows with every movement. Its gentle eyes reflect the serene beauty of the mountain landscapes it roams, a shimmering guardian amidst the peaks.<br><strong>Nature:</strong> Tranquil and wise, Alpinor traverses the rugged mountain paths, offering protection and guidance. It embodies the healing power of nature, its presence bringing calm and serenity. Those lucky enough to encounter Alpinor feel a deep sense of peace and are often blessed with newfound clarity and strength.",
            'image' => 'media/Alpinor.png'
        ],
        'Desolynx' => [
            'description' => "<strong>Appearance:</strong> Desolynx takes the form of a sinuous, serpentine creature made from swirling sand and dust. Its eyes, glowing like embers, pierce through the storms it conjures, a beacon of malice in a world of shifting dunes.<br><strong>Nature:</strong> A trickster spirit of the desert, Desolynx conjures mirages to disorient and lure travelers deeper into its domain. It embodies the harsh, unforgiving nature of the desert, ensnaring those who dare to traverse its sands with illusions of salvation that lead only to despair.",
            'image' => 'media/Desolynx.png'
        ],
        'Niveusar' => [
            'description' => "<strong>Appearance:</strong> Niveusar, with its sleek, wolf-like form, is adorned with fur that glimmers like freshly fallen snow under moonlight. Its piercing eyes reflect the clear, icy blue of the winter sky, exuding an aura of otherworldly grace.<br><strong>Nature:</strong> Roaming the silent, frozen landscapes, Niveusar brings the serene beauty of winter wherever it goes. It is a protector of the cold realms, guarding those who respect the harshness of its domain with a quiet, formidable presence.",
            'image' => 'media/Niveusar.png'
        ],
        'Phaedron' => [
            'description' => "<strong>Appearance:</strong> Phaedron appears as a small, ethereal being, with delicate wings that emit a soft, warm glow. Its light illuminates the surrounding darkness, casting gentle shadows and bringing comfort to those nearby. Its form is fragile yet radiant, a beacon of hope in the darkest places.<br><strong>Nature:</strong> Phaedron symbolizes the enduring power of light and hope. It ventures into the darkest corners, offering solace and guidance. To those lost in darkness, Phaedron is a reminder that light, no matter how small, can dispel the shadows and lead the way forward.",
            'image' => 'media/Phaedron.png'
        ],
    ];


    // Loop through each question's answer
    foreach ($_POST as $question => $answer) {
        if (isset($answerPoints[$question][$answer])) {
            foreach ($answerPoints[$question][$answer] as $creature => $points) {
                $creature = (string)$creature; // Explicitly cast key to string
                $points = (float)$points; // Explicitly cast value to float, assuming points are decimal-friendly
                if (!isset($scores[$creature])) {
                    $scores[$creature] = 0;
                }
                $scores[$creature] += $points;
            }
        }
    }



    // Determine the creature with the highest score
    $maxScore = max($scores);
    $creaturesWithMaxScore = array_keys($scores, $maxScore);
    $creatureMatch = $creaturesWithMaxScore[0]; // Taking the first in case of ties

    // Fetch the matched creature's info for display
    $matchDescription = $creaturesInfo[$creatureMatch]['description'];
    $matchImage = $creaturesInfo[$creatureMatch]['image'];

    // Prepare the result for output
    $resultHTML = "<div class='result'>
                    <h3>Your creature is: $creatureMatch.</h3>
                    <p>$matchDescription</p>
                    <img src='$matchImage' alt='Image of $creatureMatch' style='max-width:100%;height:auto;'>
                   </div>";

    // Insert the user's name and their matched creature into the database
    $username = htmlspecialchars($_POST['username']);
    $stmt = $pdo->prepare("INSERT INTO quiz_results (username, creature) VALUES (?, ?)");
    $stmt->execute([$username, $creatureMatch]);

    $showResult = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creature Identity Test</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<main>
    <?php if (!$showResult): ?>
    <div id="welcomeScreen">
        <h1>Welcome to the Creature Identity Test</h1>
        <p>Discover which mythical creature aligns with your personality by taking our test.</p>
        <button onclick="startTest()">Start Test</button>
    </div>
    <div id="quiz" style="display:none;">
        <form action="index.php" method="post">
            <label for="username">Your Name:</label>
            <input type="text" id="username" name="username" required>
                <fieldset>
                    <legend>1. When faced with a difficult problem, you:</legend>
                    <label><input type="radio" name="q1" value="A" required> A) Tackle it head-on with courage.</label><br>
                    <label><input type="radio" name="q1" value="B"> B) Analyze it carefully before acting.</label><br>
                    <label><input type="radio" name="q1" value="C"> C) Look for creative and unconventional solutions.</label><br>
                    <label><input type="radio" name="q1" value="D"> D) Seek harmony and avoid conflict.</label><br>
                    <label><input type="radio" name="q1" value="E"> E) Rely on intuition and feelings.</label><br>
                </fieldset>
                <fieldset>
                    <legend>2. Your ideal vacation spot is:</legend>
                    <label><input type="radio" name="q2" value="A" required> A) A secluded mountain retreat.</label><br>
                    <label><input type="radio" name="q2" value="B"> B) An ancient and mystical forest.</label><br>
                    <label><input type="radio" name="q2" value="C"> C) A vibrant and bustling city full of history.</label><br>
                    <label><input type="radio" name="q2" value="D"> D) A peaceful beach on a deserted island.</label><br>
                    <label><input type="radio" name="q2" value="E"> E) A magical castle filled with secrets.</label><br>
                </fieldset>
                <fieldset>
                    <legend>3. Your favorite time of day is:</legend>
                    <label><input type="radio" name="q3" value="A" required> A) Dawn, as the world awakes.</label><br>
                    <label><input type="radio" name="q3" value="B"> B) Midday, when the sun is brightest.</label><br>
                    <label><input type="radio" name="q3" value="C"> C) Dusk, as light fades and evening begins.</label><br>
                    <label><input type="radio" name="q3" value="D"> D) Night, under the cover of darkness.</label><br>
                    <label><input type="radio" name="q3" value="E"> E) Midnight, when all is quiet and magical.</label><br>
                </fieldset>
                <fieldset>
                    <legend>4. If you found a treasure chest, you would:</legend>
                    <label><input type="radio" name="q4" value="A" required> A) Donate it to those in need.</label><br>
                    <label><input type="radio" name="q4" value="B"> B) Study it to learn about its origins.</label><br>
                    <label><input type="radio" name="q4" value="C"> C) Use it to fund an adventurous expedition.</label><br>
                    <label><input type="radio" name="q4" value="D"> D) Hide it somewhere only you know.</label><br>
                    <label><input type="radio" name="q4" value="E"> E) Share it with your closest friends and family.</label><br>
                </fieldset>
                <fieldset>
                    <legend>5. In your free time, you prefer to:</legend>
                    <label><input type="radio" name="q5" value="A" required> A) Practice a physical activity or sport.</label><br>
                    <label><input type="radio" name="q5" value="B"> B) Read and acquire new knowledge.</label><br>
                    <label><input type="radio" name="q5" value="C"> C) Create art or music.</label><br>
                    <label><input type="radio" name="q5" value="D"> D) Meditate or practice mindfulness.</label><br>
                    <label><input type="radio" name="q5" value="E"> E) Socialize and attend gatherings.</label><br>
                </fieldset>
                <fieldset>
                    <legend>6. Your dream home would be:</legend>
                    <label><input type="radio" name="q6" value="A" required> A) A fortress atop a mountain.</label><br>
                    <label><input type="radio" name="q6" value="B"> B) A cozy cottage in the woods.</label><br>
                    <label><input type="radio" name="q6" value="C"> C) A luxurious city mansion.</label><br>
                    <label><input type="radio" name="q6" value="D"> D) A serene house by the sea.</label><br>
                    <label><input type="radio" name="q6" value="E"> E) A traveling caravan that goes wherever you do.</label><br>
                </fieldset>
                <fieldset>
                    <legend>7. In times of conflict, you:</legend>
                    <label><input type="radio" name="q7" value="A" required> A) Stand your ground and fight for what you believe.</label><br>
                    <label><input type="radio" name="q7" value="B"> B) Seek a peaceful resolution that benefits everyone.</label><br>
                    <label><input type="radio" name="q7" value="C"> C) Use wit and cunning to outsmart the opposition.</label><br>
                    <label><input type="radio" name="q7" value="D"> D) Withdraw to avoid confrontation.</label><br>
                    <label><input type="radio" name="q7" value="E"> E) Look for a compromise that satisfies all parties.</label><br>
                </fieldset>
                <fieldset>
                    <legend>8. Your favorite kind of story is:</legend>
                    <label><input type="radio" name="q8" value="A" required> A) An epic tale of heroism and adventure.</label><br>
                    <label><input type="radio" name="q8" value="B"> B) A mystery filled with puzzles and intrigue.</label><br>
                    <label><input type="radio" name="q8" value="C"> C) A romance that sweeps you off your feet.</label><br>
                    <label><input type="radio" name="q8" value="D"> D) A fantasy with magical creatures and lands.</label><br>
                    <label><input type="radio" name="q8" value="E"> E) A historical account that teaches you something new.</label><br>
                </fieldset>
                <fieldset>
                    <legend>9. When it comes to rules, you:</legend>
                    <label><input type="radio" name="q9" value="A" required> A) Follow them to the letter.</label><br>
                    <label><input type="radio" name="q9" value="B"> B) Question them and their purpose.</label><br>
                    <label><input type="radio" name="q9" value="C"> C) Bend them if you can get away with it.</label><br>
                    <label><input type="radio" name="q9" value="D"> D) Break them if you disagree with them.</label><br>
                    <label><input type="radio" name="q9" value="E"> E) Make your own rules.</label><br>
                </fieldset>
                <fieldset>
                    <legend>10. You feel most energized when:</legend>
                    <label><input type="radio" name="q10" value="A" required> A) You're in nature, surrounded by the earth's beauty.</label><br>
                    <label><input type="radio" name="q10" value="B"> B) You're learning something new and challenging.</label><br>
                    <label><input type="radio" name="q10" value="C"> C) You're creatively expressing yourself.</label><br>
                    <label><input type="radio" name="q10" value="D"> D) You're in a quiet and comfortable space.</label><br>
                    <label><input type="radio" name="q10" value="E"> E) You're surrounded by people you love.</label><br>
                </fieldset>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php else: ?>
        <?php echo $resultHTML; ?>
        <form action="index.php" method="post">
            <input type="submit" value="Take Again">
        </form>
    <?php endif; ?>

<script>
    function startTest() {
        document.getElementById('welcomeScreen').style.display = 'none';
        document.getElementById('quiz').style.display = 'block';
    }
</script>

<?php
require_once 'footer.php';
?>


