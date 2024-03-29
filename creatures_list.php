<?php
require_once 'header.php';

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

?>

<div class="creatures-list">
    <?php foreach ($creaturesInfo as $creatureName => $details): ?>
        <div class="creature">
            <h2><?php echo $creatureName; ?></h2>
            <div><?php echo $details['description']; ?></div>
            <img src="<?php echo $details['image']; ?>" alt="Image of <?php echo $creatureName; ?>" style="max-width: 100%; height: auto;">
        </div>
    <?php endforeach; ?>
</div>

<?php
require_once 'footer.php';
?>
