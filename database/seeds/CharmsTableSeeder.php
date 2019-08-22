<?php

use Illuminate\Database\Seeder;

class CharmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Charm::create([
            'name' => 'Unobstructed Hunter\'s Aim',
            'mins' => 'Archery 1, Essence 1',
            'cost' => '1m per die;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Uniform, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Sighting along the flow of living Essence, the Dragon-Blood unleashes a flawless shot. She may add bonus dice to an Archery roll for one mote each. As long as she attacks a living target — or an undead one, which stands out as a void in the Essence of the world — each added die negates one point of penalty from visual obstruction such as poor lighting or smoke. '
        ]);
        
        App\Charm::create([
            'name' => 'Sky-Calming Draw',
            'mins' => 'Archery 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Air, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s focus quells the wind that would divert her arrow, ensuring her shot flies true. She extends the range of a withering or decisive attack by one range band, maximum long (including those made with Flame weapons), and ignores penalties from wind or inclement weather. If her weapon already has long range, she instead adds an automatic success on the attack roll.'
        ]);
        
        App\Charm::create([
            'name' => 'Death From Nowhere',
            'mins' => 'Archery 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Air/Water, Balanced, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Sky-Calming Draw ',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood draws back her arrow against her bowstring, she withdraws and disperses its weightiness, sending it flying like an ephemeral phantom to pierce her foe\'s heart. Her withering attack ignores (lower of Essence or Perception) points of soak from armor. If her attack benefits from aiming, she ignores (higher of Essence or Perception) soak instead. '
        ]);
        
        App\Charm::create([
            'name' => 'Harvest of the Hunter',
            'mins' => 'Archery 2, Essence 1',
            'cost' => '1m;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may go to hunt with an empty quiver yet never lack for arrows. Anything that grows will yield up arrows to the archer\'s gathering hands. She can create useable ammunition for a bow or crossbow from any kind of plant, whether it\'s a marsh reed or a stalk of corn. In combat, she doubles 8s on an ammunition check for an Archery weapon (Exalted, p. 202). As long as she rolls a single success, she\'s guaranteed to scavenge a single arrow. Outside of combat, she may use this Charm to gather enough arrows to fill her quiver as long as there\'s sufficient plant life to draw her harvest from, although the Storyteller may require a special ammunition check to create arrows in barren deserts or other areas devoid of plant life. '
        ]);
        
        App\Charm::create([
            'name' => 'Arrow Thorn Technique',
            'mins' => 'Archery 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Dual, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Harvest of the Hunter ',
            'book' => 'DB???',
            'description' => 'Thorns grow to wreathe the shaft of the DragonBlood\'s arrow in flight. On a withering attack, she adds +1 Overwhelming, or (Essence) Overwhelming if the attack benefits from aiming. Decisive attacks add (Essence/2, rounded up) threshold successes on the attack roll as dice of damage, or (Essence) threshold successes if she aimed. '
        ]);
        
        App\Charm::create([
            'name' => 'Boughs of Burning Autumn',
            'mins' => 'Archery 4, Essence 1',
            'cost' => '2m, 1i;',
            'element' => 'Archery',
            'type' => 'Reflexive',
            'effect' => 'Fire/Wood, Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'Harvest of the Hunter ',
            'book' => 'DB???',
            'description' => 'Flame is born from wood. The Dragon-Blood may reflexively reload a firewand or similar flame weapon with the Slow tag on her turn. This permits her to use it in combination with Charms that make multiple attacks, such as Seven-Year Swarm Volley, as long as she pays this Charm\'s cost before each additional attack past the first. '
        ]);
        
        App\Charm::create([
            'name' => 'Life-Swelling Sap Strike',
            'mins' => 'Archery 3, Essence 2',
            'cost' => '3m (+1wp);',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Harvest of the Hunter ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s arrow bursts into a crush of ever-growing roots or vines in midflight, entangling her enemy in thick plants. She makes a distract gambit (Exalted, p. 200). On a success, her projectile bursts into growing vines, inflicting a −1 mobility penalty on the distracted character — which stacks with penalties from armor — for the rest of the scene. He or one of his allies can cut away the vines with a difficulty 3 gambit using an edged weapon, or the Storyteller might deem other actions or conditions sufficient. At the end of each round in which he remains entangled, he loses a point of Initiative (which the Dragon-Blood doesn\'t gain). Battle groups lose one Magnitude instead. If the Dragon-Blood pays a one-Willpower surcharge, an undead crashed by this attack is incapacitated, crumbling into soil. This surcharge is waived against trivial foes. This doesn\'t apply to stronger undead, such as nephwracks, Deathlords, or undead Exalted. The body of any living mortal slain while covered in vines won\'t harbor a hungry ghost. Outside of combat, the Dragon-Blood may use this Charm on dying mortals to ensure they leave no hungry ghosts, waiving the Willpower cost for willing targets. In Wood Aura, the Dragon-Blood may use this Charm to make a standard decisive attack instead of a distract gambit.'
        ]);
        
        App\Charm::create([
            'name' => 'Arbor Sentinel Technique',
            'mins' => 'Archery 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One scene',
            'prerequisite' => 'Life-Swelling Sap Strike ',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood lowers her bow to the ground, its once-living wood remembers what it once was, sprouting roots that dive into the soil. In a matter of seconds, the weapon grows into a small tree, less than a range band high, its branches replete with arrows. It\'s still perfectly curved and weighted to allow the Dragon-Blood to attack with it, provides her with the benefits of heavy cover (Exalted, p. 199), and cannot be disarmed. It provides a never-ending supply of ammunition, ensuring she won\'t run out of arrows even in a daylong battle. However, she cannot move the weapon in its tree form, and this Charm ends if she moves further than close range from it. '
        ]);
        
        App\Charm::create([
            'name' => 'Drawing Lightning Style',
            'mins' => 'Archery 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Air, Aura, Perilous, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Death From Nowhere ',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood takes aim, her arrow crackles with gathering lightning, shining as a glowing anima banner (p. 154). On her next turn, she may make a decisive attack, adding the bonus from aiming to her damage roll instead of the attack roll. An Archery 4, Essence 3 repurchase lets the DragonBlood expend her Aura to apply the aim bonus on both the attack and damage rolls. '
        ]);
        
        App\Charm::create([
            'name' => 'Spring Follows Winter',
            'mins' => 'Archery 5, Essence 3',
            'cost' => '2m (+1i per die);',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Aura, Perilous, Uniform, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Death From Nowhere ',
            'book' => 'DB???',
            'description' => 'Like green leaves reborn after the harshest winter, the Dragon-Blood\'s arrow must inevitably strike its mark. After an attack roll, she can reroll up to (Essence) non-1 failures for one Initiative each. This Charm must be declared before the attack roll, but the Initiative isn\'t paid until after the roll. '
        ]);
        
        App\Charm::create([
            'name' => 'Horizon-Spanning Arc',
            'mins' => 'Archery 5, Essence 3',
            'cost' => '4m, 1wp, expend Air Aura;',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood bends the winds to her bowstring, loosing a shot that could fly from heaven to earth. After spending two consecutive rounds aiming, she makes a decisive attack out to extreme range (Exalted, p. 197), converting the bonus dice from aiming to non-Charm successes. She must be able to clearly see her enemy, and cannot attack a foe from more than five range bands away. If she hits and incapacitates her foe, she may reflexively take aim at another enemy within long range. This Charm can only be used once per scene, unless reset by crashing an enemy whose Initiative was higher than the Dragon-Blood\'s. '
        ]);
        
        App\Charm::create([
            'name' => 'Earth\'s Judgment Awakened',
            'mins' => 'Archery 5, Essence 3',
            'cost' => '6m, 3i, 1wp;',
            'element' => 'Archery',
            'type' => 'Reflexive',
            'effect' => 'Counterattack, Decisive-only, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Standing calm and centered on the earth, the Dragon-Blood rebukes an attacker with an arrow weighted with the unrelenting force of her will. When she\'s standing on an earthen surface and successfully dodges an attack from an enemy within her weapon\'s range, she may unleash a decisive counterattack, rolling against the lower of her target\'s Defense or Resolve. It deals (Presence + attack roll threshold successes) dice of lethal damage, ignoring Hardness. It doesn\'t include her Initiative or reset her to base. This counterattack is incompatible with any effect that lets her move away from her attacker, such as Hopping Firecracker Evasion. This Charm can only be used once per scene, unless reset by successfully disengaging from a nontrivial foe and beginning her next turn at short range or further from all enemies. '
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Phoenix Pinion',
            'cost' => '8m, 1a, 1wp, expend Fire Aura;',
            'mins' => 'Archery 5, Essence 3',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Threading incendiary anima through her arrow, the Dragon-Blood unleashes a shot that erupts in a glorious blaze upon impact. After spending a turn aiming, she makes a decisive attack, adding (Essence) dice of damage. On a hit, as long as she rolls at least one 10 on her attack or damage roll, the arrow explodes in an unblockable blast that extends out to short range from her target. All characters caught within it, including allies, must dodge her original attack roll or suffer dice of Hardness-ignoring lethal damage equal to the total 10s on both her attack roll and the original damage roll. The original target of her attack cannot dodge the blast. Any character that takes damage from the explosion is knocked prone and catches fire, suffering (Essence) further dice of lethal damage each turn until he extinguishes himself.'
        ]);
        
        App\Charm::create([
            'name' => 'Fang-of-the-Depths Draw',
            'mins' => 'Archery 5, Essence 3',
            'cost' => '2m;',
            'element' => 'Archery',
            'type' => 'Supplemental',
            'effect' => 'Signature (Water), Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Lurking beneath her victims, the Dragon-Blood unleashes death from the depths. She ignores penalties for firing into water or similar liquids, or for firing while submerged — she may even discharge a firewand while underwater. In Water Aura, if the Dragon-Blood uses this Charm to attack while underwater after aiming, she may reflexively roll (Wits + Stealth) against her target\'s (Perception + Awareness) roll to establish concealment against him before she attacks, rendering her attack unexpected (Exalted, p. 203) on success. Once she does so, she cannot use this effect for the rest of the scene unless reset by landing an attack using any combat Ability against a nontrivial foe at close range. '
        ]);
        
        App\Charm::create([
            'name' => 'Heartbeats Before Death',
            'mins' => 'Archery 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Archery',
            'type' => 'Reflexive',
            'effect' => 'Aura, Signature (Wood), Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Sensing the interconnected web of life that surrounds her, the Dragon-Blood opens her eyes to deal out death. She may reflexively aim against a living or undead enemy before attacking it, and ignores any light or heavy cover it benefits from. If she already aimed the previous turn, she may attack an enemy behind full cover, though it grants him +3 Defense. This Charm can only be used once per scene, unless reset by aiming normally against an enemy before hitting him with a decisive attack. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragonfly Finds Mate',
            'mins' => 'Archery 4, Essence 3',
            'cost' => '5m, 1i;',
            'element' => 'Archery',
            'type' => 'Reflexive',
            'effect' => 'Clash, Perilous, Withering-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Spring Follows Winter ',
            'book' => 'DB???',
            'description' => 'Sensing the path of an enemy projectile, the Dragon-Blood strikes it aside with an arrow of her own. She may reflexively clash any ranged attack against her with a withering attack, without needing to aim. Winning the clash knocks the enemy\'s attack away harmlessly, but doesn\'t roll damage. She still gains Initiative from a successful attack, and her attacker suffers both an onslaught penalty and the −2 Defense penalty for losing a clash. '
        ]);
        
        App\Charm::create([
            'name' => 'Salamander Swallows Flames',
            'mins' => 'Archery 4, Essence 3',
            'cost' => '—;',
            'element' => 'Archery',
            'type' => 'Permanent',
            'effect' => 'Clash, Fire',
            'duration' => 'Permanent',
            'prerequisite' => 'Boughs of Burning Autumn, Dragonfly Finds Mate ',
            'book' => 'DB???',
            'description' => 'Catching her enemy\'s flame with the barrel of her own firewand, the Dragon-Blood steals it for herself. When she uses Dragonfly Finds Mate with a firewand, she adds (Essence) dice to clash attacks made using another firewand, a fire-based attack, or a magical attack made of pure Essence or other energy such as Blazing Solar Bolt, and may do so even if her weapon is unloaded. Winning the clash reloads her weapon, which visibly burns with stolen flame until she discharges it. Such uses of Dragonfly Finds Mate are both Fire- and Wood-aspected.'
        ]);
        
        App\Charm::create([
            'name' => 'Seven-Year Swarm Volley',
            'mins' => 'Archery 5, Essence 3',
            'cost' => '6m, 1wp, expend Wood Aura;',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Dragonfly Finds Mate ',
            'book' => 'DB???',
            'description' => 'The Terrestrial\'s hands move to swiftly nock and draw as Wood Essence strengthens her sinew and toughens her ligaments. She makes ([lower of Dexterity or Perception] / 2, rounded up) decisive attacks distributed against one or more enemies. Each attack has a base damage of (Essence − 2), and she divides her Initiative evenly among each of them, rounded up, to determine their total damage. Once she\'s completed these attacks, she resets to base Initiative, even if they all missed. '
        ]);
        
        App\Charm::create([
            'name' => 'Sparrow Dives at Hawk',
            'mins' => 'Archery 5, Essence 4',
            'cost' => '—(1wp);',
            'element' => 'Archery',
            'type' => 'Permanent',
            'effect' => 'Aura, Clash, Decisive-only, Wood',
            'duration' => 'Permanent',
            'prerequisite' => 'Dragonfly Finds Mate ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strikes down arrow and archer with a single shot. When she wins a clash with Dragonfly Finds Mate while in Wood Aura, she may spend one Willpower to send her arrow flying toward the enemy who attacked her as a decisive attack that uses the same attack roll. This Charm can only be used once per scene, unless reset by using Dragonfly Finds Mate to successfully clash a decisive attack made by a nontrivial foe with 15+ Initiative. '
        ]);
        
        App\Charm::create([
            'name' => 'Swallows Defend the Nest',
            'mins' => 'Archery 5, Essence 5',
            'cost' => '8m, 3i, 1wp;',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Aura, Clash, Decisive-only, Wood',
            'duration' => 'Aura',
            'prerequisite' => 'Sparrow Dives at Hawk ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood sights along every possible line of attack, readying her arrows to strike anywhere and everywhere in defense of her allies. Whenever an enemy makes a ranged attack against the Dragon-Blood or one of her allies within her weapon\'s range, she may reflexively clash it with a special decisive attack, without needing to aim. Unlike a normal clash, success doesn\'t prevent the enemy attack from hitting, nor does it deal decisive damage or reset the Dragon-Blood\'s Initiative. Instead, every threshold success subtracts one success from the enemy\'s attack roll against his original target. The attacker still suffers the onslaught penalty of her attack, and if he misses his target, the −2 Defense penalty for losing a clash. The Dragon-Blood gains three Initiative if the clash removes all successes from the attack, or one Initiative if she lowers the attack successes from an amount the original target couldn\'t have dodged or parried to one that he can. This doesn\'t count as her combat action, and she may clash any number of attacks each round. This Charm ends if the Dragon-Blood attempts to dodge or parry, or if she makes an attack on her own turn (although she may use other Charms to clash, counterattack, or make reflexive attacks normally). This Charm can only be used once per scene.'
        ]);
        
        App\Charm::create([
            'name' => 'Arrow Rain Tempest',
            'mins' => 'Archery 5, Essence 5',
            'cost' => '6m, 5i, 1wp, expend Water Aura;',
            'element' => 'Archery',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Swallows Defend the Nest ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood fires a volley of arrows skyward, each one doubling and redoubling to unleash a descending storm of death. They hang fixed at the apex of their arc for a moment before falling in a storm of flashing blue streaks of light. To use this Charm, she must spend two consecutive turns aiming and maintain her Initiative at 12+ throughout. She targets a point within her weapon\'s range, and rolls a single undodgeable decisive attack against all characters within short range of it, even allies. Each enemy hit suffers the Dragon-Blood\'s full Initiative in damage dice. Battle groups instead take levels of damage equal to her Initiative. This Charm can only be used once per scene. '
        ]);
        
        
        App\Charm::create([
            'name' => 'Effortlessly Rising Flame',
            'mins' => 'Athletics 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Fire fills the Dragon-Blood\'s body, suffusing her with power. She may add automatic successes to an Athletics roll for two motes each, and rolls an additional nonCharm die for every 10. '
        ]);
        
        App\Charm::create([
            'name' => 'Bellows-Pumping Stride',
            'mins' => 'Athletics 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood darts forward with an explosive burst of speed to pursue her foes. She rolls an additional non-Charm die on a rush for every 1 that appears in the rushed character\'s opposing roll. With Athletics 5, Essence 3, the Dragon-Blood may expend her Fire Aura when she reflexively moves to pursue an enemy after successfully rushing him with this Charm to ignite a fiery trail behind her, an environmental hazard with difficulty 3 and Damage (Essence/2, rounded up)L/round. It burns until the end of the round unless the Dragon-Blood crossed over a flammable surface such as a wooden floor or grass, which ignites until extinguished or end of scene. '
        ]);
        
        App\Charm::create([
            'name' => 'Verdant Dragon\'s Footsteps',
            'mins' => 'Athletics 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Bellows-Pumping Stride ',
            'book' => 'DB???',
            'description' => 'The pulse of life bolsters the Dragon-Blood\'s endurance. She may move through plant-based difficult terrain, such as dense forests or brambles, unimpeded, and ignores fatigue penalties on a single movement-based Athletics roll. In Wood Aura, this Charm\'s duration is extended for as long as the Dragon-Blood remains in Aura.'
        ]);
        
        App\Charm::create([
            'name' => 'Soaring Leap Technique',
            'mins' => 'Athletics 3, Essence 1',
            'cost' => '1m;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood takes to the air in a single bound, letting the motion of wind around her guide her leap. Every 10 on an Athletics roll to jump (including rushing or disengaging with a leap) rerolls a single non-1 failed die. '
        ]);
        
        App\Charm::create([
            'name' => 'Strength of Stone Technique',
            'mins' => 'Athletics 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Athletics',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood reinforces her body with unyielding Earth Essence to accomplish mighty deeds. She gains one bonus dot of Strength as long as she remains standing on the ground or a natural stone surface. This increases her effective Strength to determine what feats of strength she can attempt, as well as adding one bonus die on Strength-based rolls and to withering damage rolls. '
        ]);
        
        App\Charm::create([
            'name' => 'Grandmother Oak Exertion',
            'mins' => 'Athletics 4, Essence 1',
            'cost' => '3m;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Strength of Stone Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s strength is inexorable, finding points of leverage like an ancient tree digging roots into stone. She adds a bonus success on a feat of strength, and may use her Stamina in place of her Strength rating to determine if she qualifies to attempt it. If she has Strength of Stone Technique active, she counts the dot of Strength it grants as a dot of Stamina for the purposes of the feat. In Wood Aura, the added success is a non-Charm bonus. An Athletics 5, Essence 4 repurchase lets the DragonBlood spend one Willpower to add her Stamina to her Strength to determine if she may attempt a feat, rather than substituting it'
        ]);
        
        App\Charm::create([
            'name' => 'Perfect Climbing Attitude',
            'mins' => 'Athletics 2, Essence 1',
            'cost' => '4m;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood scales sheer rock faces and perilous mountains with effortless grace, her fingers carving handholds from unyielding stone. She may use her reflexive move action to climb a single range band up or down a stone or earthen surface without needing to make an Athletics roll, and can even ascend sheer surfaces. Any handholds carved with this Charm close as soon as the Dragon-Blood has moved on from them, denying the advantage to her pursuers. With Athletics 3, Essence 2, she may choose to leave them in place, acting as exceptional equipment (Exalted, p. 580) for any others who wish to climb up that path'
        ]);
        
        App\Charm::create([
            'name' => 'Incense Smoke Ladder',
            'mins' => 'Athletics 4, Essence 2',
            'cost' => '3m;',
            'element' => 'Athletics',
            'type' => 'Reflexive',
            'effect' => 'Air/Fire, Balanced',
            'duration' => 'Until next turn',
            'prerequisite' => 'Bellows-Pumping Stride, Soaring Leap Technique ',
            'book' => 'DB???',
            'description' => 'Like a burning ember, the Dragon-Blood drifts upwards through the air. She can run up walls and other vertical surfaces, even upside-down along a ceiling, as long as she maintains constant movement. However, she cannot disengage or withdraw up walls. If she ends her movement somewhere she couldn\'t normally stand and then fails to renew this Charm on her next turn, she falls and suffers damage normally'
        ]);
        
        App\Charm::create([
            'name' => 'Mountain-Toppling Might',
            'mins' => 'Athletics 5, Essence 2',
            'cost' => '3m;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Strength of Stone Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is capable of hefting huge boulders or toppling wagons, drawing from the strength of the earth. She adds (Essence/2, rounded up) to her Strength rating to determine if she may attempt a feat of strength'
        ]);
        
        App\Charm::create([
            'name' => 'Soaring Zephyr Flight',
            'cost' => '5m, 1wp (4i per round);',
            'mins' => 'Athletics 5, Essence 3',
            'element' => 'Athletics',
            'type' => 'Simple',
            'effect' => 'Aura, Perilous, Signature (Air)',
            'duration' => 'Aura',
            'prerequisite' => 'Incense Smoke Ladder ',
            'book' => 'DB???',
            'description' => 'Outracing even herself, the Dragon-Blood surpasses the bounds of gravity. She moves two range bands upwards with a mighty leap, hovering in place at the apex of her jump. She can subsequently fly through the air with her normal movement actions, moving vertically or horizontally, and hover in place while not moving. In combat, each round after the first that she maintains this Charm, she must pay four Initiative to remain in the air. This Charm ends if she\'s crashed or incapacitated, leaves Air Aura, or ends her mote commitment, causing her to drift harmlessly to the ground.'
        ]);
        
        App\Charm::create([
            'name' => 'Unshakable Mountain Spine',
            'mins' => 'Athletics 5, Essence 3',
            'cost' => '5m, 1wp, expend Earth Aura;',
            'element' => 'Athletics',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'Mountain-Toppling Might ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood braces her muscles with the strength and solidity of earth, becoming an unshakable pillar of stone. To use this Charm, she must be in contact with the earth — she could use it while standing on the lowest floor of a building that\'s directly atop earth, but not on that building\'s upper stories or roof. She doubles her Strength rating to determine whether she qualifies to attempt a feat of strength, and doubles 9s on the roll. If this would raise her Strength above the necessary minimum, each excess point adds a single non-Charm die. This Charm may only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Inescapable Blazing Advance',
            'mins' => 'Athletics 5, Essence 3',
            'cost' => '5m, 1wp, expend Fire Aura;',
            'element' => 'Athletics',
            'type' => 'Supplemental',
            'effect' => 'Aura, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'Bellows-Pumping Stride ',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood runs, flames streak behind her like scarlet ribbons as she builds to her utmost speed, incinerating those left in her wake. She adds (Essence) non-Charm dice on a rush. (Essence) 1s on the opposing character\'s roll strip one point of Initiative each from him, which the Dragon-Blood gains. When this Initiative loss crashes an enemy, the DragonBlood\'s speed is such that her fiery wake literally sets him ablaze. He catches fire, suffering (the Initiative he lost) dice of Hardness-ignoring lethal damage on each of his turns. This lasts until he successfully extinguishes himself.'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Surmounts the Waterfall',
            'mins' => 'Athletics 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Athletics',
            'type' => 'Reflexive',
            'effect' => 'Signature (Water)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is a legendary swimmer, drawing on both her body\'s well-honed strength and unyielding endurance and on her affinity for the elemental flow of Water Essence. She doubles 8s on movement rolls while swimming, and may ignore any penalties or difficult terrain from swimming against the current, through waves, across whirlpools, or through similar obstacles. She may even ascend waterfalls and similar vertical flows of water, though she treats these as difficult terrain. Any feats of strength the Dragon-Blood attempts while underwater, such as dragging the survivors of a shipwreck to safety or breaching the hull of an enemy warship, benefit from double 9s. She adds (Essence/2, rounded up) to her Strength to determine what feats she qualifies for'
        ]);
        
        App\Charm::create([
            'name' => 'Graceful Dryad Dance',
            'mins' => 'Athletics 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Athletics',
            'type' => 'Reflexive',
            'effect' => 'Signature (Wood)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood moves through forests with unfettered grace, scaling the highest trees and dancing effortlessly along the leaves of the canopy. She can walk on branches, leaves, or similar living plant-based surfaces with perfect balance, able to stand and cross over them even if they couldn\'t normally bear her weight and never needing a roll to maintain her balance no matter how narrow they are. As long as she\'s standing on such a plantbased surface, she gains +1 Evasion. In addition, she may use her reflexive move action to move one or two range bands up or down a tree or similar plant-based surface, as long as there\'s a horizontal surface on which she can stand at the end of her movement (or if she uses Incense Smoke Ladder to continue moving up it)'
        ]);
        
        App\Charm::create([
            'name' => 'Dancing Ember Stride',
            'mins' => 'Athletics 5, Essence 3',
            'cost' => '4m, 2i;',
            'element' => 'Athletics',
            'type' => 'Simple',
            'effect' => 'Fire, Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'Incense Smoke Ladder ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is as inevitable in her pursuit as a raging wildfire, yet elegant as a dancing tongue of flame. She rolls to rush an enemy from short range with double 9s. On a success, she instantly moves into close range with her foe, instead of the usual effect of a rush. The Dragon-Blood may pay one Willpower and expend her Fire Aura when she uses this Charm to rush a foe from medium range'
        ]);
        
        App\Charm::create([
            'name' => 'Seething Dragon Footprint',
            'mins' => 'Athletics 5, Essence 4',
            'cost' => '5i;',
            'element' => 'Athletics',
            'type' => 'Reflexive',
            'effect' => 'Fire, Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'Dancing Ember Stride ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s burning footprints burst into a roaring conflagration, drawing in the light and heat of her anima as she speeds away. When she ignites a trail of fire with Bellows-Pumping Stride, she may use this Charm to stoke it into a bonfire (difficulty 4, Damage 5L/round). Essence fuels the bonfire for the scene even if there\'s no flammable material underfoot'
        ]);
        
        App\Charm::create([
            'name' => 'Falling Star Maneuver',
            'mins' => 'Athletics 5, Essence 5',
            'cost' => '6m, 1wp;',
            'element' => 'Athletics',
            'type' => 'Reflexive',
            'effect' => 'Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Dancing Ember Stride ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s speed builds into an all-sundering force, burning red around her as she crosses the battlefield. She may use this Charm when she successfully rushes an enemy with Dancing Ember Stride, or when she descends from the air into close range with an enemy, to make a reflexive decisive attack at close range with Brawl, Martial Arts, or Melee. This counts as her combat action for the turn. A successful attack creates a shockwave as a one-time environmental hazard stretching out to short range from her foe. Its difficulty is (Strength), and its Damage is equal to the total levels of damage she rolled on her attack, to a maximum of (Essence)L. The Dragon-Blood is immune to this hazard, but other characters, including her allies, are subject to it. A character that takes damage falls prone and is knocked one range band away from the Exalt.'
        ]);
        
        
        
        App\Charm::create([
            'name' => 'Precision Observation Method',
            'mins' => 'Awareness 1, Essence 1',
            'cost' => '1m per die or 2m per success;',
            'element' => 'Awareness',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The serenity of earth focuses and heightens all of the senses. The Exalt may add dice to an Awareness roll for one mote each, or automatic successes for two motes each'
        ]);
        
        App\Charm::create([
            'name' => 'Cloud-Piercing Focus',
            'mins' => 'Awareness 2, Essence 1',
            'cost' => '1m;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth or Fire or Water',
            'duration' => 'One tick',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Neither ocean depths nor raging flame nor swirling sands can hinder a keen Terrestrial eye. As an Earth Charm, this negates visual penalties from dust storms, sandstorms, or similar obstructions. As a Fire Charm, it negates such penalties from smoke, fire, or volcanic fumes. As a Water Charm, it negates penalties from mist, rain, or being underwater. Regardless of the version used, the Dragon-Blood\'s sight is extended to its full normal range'
        ]);
        
        App\Charm::create([
            'name' => 'Deep-Listening Palm',
            'mins' => 'Awareness 2, Essence 1',
            'cost' => '5m;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Touching a surface, the Dragon-Blood displaces her sense of hearing through the Essence of earth. She can listen through that barrier as though it weren\'t there. Obstructions made of stone, wood, or weaker materials don\'t require a roll to hear through, while metal or similarly durable materials may require a (Perception + Awareness) roll at difficulty 3+. On a failed roll, she\'s only able to hear fragments of conversation or certain noises determined by the Storyteller with this Charm for the rest of the scene'
        ]);
        
        App\Charm::create([
            'name' => 'All-Encompassing Earth Sense',
            'mins' => 'Awareness 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Deep-Listening Palm ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can sense the vibrations that move through the earth when a soldier takes a step or a leaf falls from a branch. When she comes within short range of a hidden enemy or danger, she rolls (Perception + Awareness) with double 9s to detect it. In order for her to perceive concealed characters, they must be standing on the same surface that she stands on, or no more than one vertical range band up on structures or scenery that rest on that surface (such as the roof beams of a low ceiling or the understory of a forest). She cannot sense enemies who are airborne, in or on water, or taking other measures to avoid moving across a solid surface. If she fails her initial roll, she may reactivate this Charm once per subsequent round to detect the same threat. With Awareness 4, Essence 2, the Dragon-Blood may purchase elemental variants of this effect for three experience points each. Air: The Dragon-Blood can sense hidden threats through air motion out to close range while in an enclosed space such as a room. This extends to short range at Awareness 5, Essence 5. Fire: The Dragon-Blood can sense hidden threats out to long range while both are standing in a fire, a burning building, or similar circumstances, sensing their cooler temperature against the heat of the flames. Water:While submerged in water, the Dragon-Blood can sense hidden threats that are at least partially immersed out to medium range. In driving rain or similar weather, she can sense hidden characters out to short range. Wood: While in undergrowth, foliage, or similar vegetative terrain, the Dragon-Blood may sense hidden threats in the same terrain out to short range. This extends to medium range at Awareness 5, Essence 5. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Crushing Gaze',
            'mins' => 'Awareness 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth or Water',
            'duration' => 'Instant',
            'prerequisite' => 'Cloud-Piercing Focus ',
            'book' => 'DB???',
            'description' => 'The Terrestrial\'s attention falls on thieves and cowards like a lead weight dropping into one\'s stomach. She may use this as an Earth Charm when she rolls to oppose a character\'s Stealth, or as a Water Charm against a disguise. She subtracts one success either from the total successes of the opposing character\'s concealment as the crushing weight of earth pins him down, or from his disguise successes as the pounding force of the tide washes away his facade. In Earth or Water Aura, using the appropriate elemental variant strips an additional success from the opposing character for every two threshold successes the Dragon-Blood rolls.'
        ]);
        
        App\Charm::create([
            'name' => 'Hesiesh\'s Discerning Tongue',
            'mins' => 'Awareness 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'When the Dragon-Blood places potentially harmful food or drink in her mouth, she may roll (Perception + Awareness) to detect poison or other harmful ingredients. Most common poisons are difficulty 1-3 to detect, while an odorless or tasteless poison would be difficulty 4-5. Successfully identifying the danger immediately ignites the offending item in the Terrestrial\'s mouth, letting her spit it out before it can harm her. With Awareness 5, Essence 3, if detecting a poison causes the Dragon-Blood to roll Join Battle against a foe she believed poisoned her, she adds any threshold successes from her (Perception + Awareness) roll as non-Charm dice on her Join Battle roll. '
        ]);
        
        App\Charm::create([
            'name' => 'Feeling the Dragon\'s Bones',
            'mins' => 'Awareness 4, Essence 2',
            'cost' => '5m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'All-Encompassing Earth Sense ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood extends her senses through the earth, constructing an accurate image of her surroundings from vibrations. The Dragon-Blood rolls (Perception + Awareness) to sense characters and objects out to medium range, even things that are behind walls or underground. A single success is sufficient both to hear and to visualize a black-and-white image of anything that is moving or creating vibrations, such as a person walking or an underground spring\'s water. In underground locales or structures made entirely of stone, this extends to long range. In Earth Aura, the Dragon-Blood may commit this Charm\'s mote cost for as long as she remains in Aura state. Doing so waives the mote cost of AllEncompassing Earth Sense.'
        ]);
        
        App\Charm::create([
            'name' => 'Horizon-Spanning Echoes',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Closing her eyes to the world, the Dragon-Blood casts her senses out onto the winds. Upon using this Charm, she specifies either a specific individual whose voice she wishes to listen for, or a specific sound to search for such as a particular phrase being spoken by any individual, a wagon\'s wheels moving across a road, or a sword being drawn. She enters a trance in which she can hear the specified sound from (Essence) miles away, or (Essence x5) miles if it\'s extremely loud, such as a tyrant lizard\'s roar or an army on the march. If the specified sound occurs, she rolls to detect it with double 7s. Even on a failed roll, she\'s able to hear the sound; success pinpoints its exact location The Charm ends after she rolls'
        ]);
        
        App\Charm::create([
            'name' => 'One-With-Earth Embodiment',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Earth)',
            'duration' => 'One round',
            'prerequisite' => 'Feeling the Dragon\'s Bones ',
            'book' => 'DB???',
            'description' => 'At one with Creation, the Dragon-Blood may flow through earth unimpeded. Touching an earthen surface, she may move into and through it as though moving in water. This counts as her movement action in combat. If she doesn\'t emerge from the earth upon completing her movement, she must either use this Charm again on her next turn, waiving its Willpower cost, or be ejected from the earth at the point where she entered, falling prone and suffering an unpreventable level of bashing damage. However, while moving through stone, she gains the benefit of full cover (Exalted, p. 199) against all attacks unless an enemy uses a feat of strength, gambit, or appropriate stunt to create an opening through the stone'
        ]);
        
        App\Charm::create([
            'name' => 'Eye of Blazing Truth',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '4m, 2i, 1wp;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Perilous, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s eyes burn with intense flame, incinerating shadows and whatever hides within them. When she makes a vision-based Awareness roll, she rolls an additional non-Charm die for each 10 that appears, and ignores penalties from poor lighting, seeing even in total darkness. If she succeeds on a roll opposing the Larceny or Stealth of an enemy within medium range, she may send twin lances of flame streaking from her eyes to strike him, rolling (Essence) dice of lethal damage against him, ignoring Hardness. If a hidden enemy takes damage while hiding in an area of low lighting, his concealment is disrupted as flame illuminates him, forcing him to change hiding places, making a new Stealth roll subject to the −3 penalty for moving. This doesn\'t require a move action if he can find new concealment in the same range band; if not, he must reflexively move, consuming his movement action for the round (or his next turn, if he\'s already moved this round). If his hiding place is flammable, such as a tree or wooden crate, it\'s set ablaze, likewise forcing him to make a new roll. Mundane disguises burn away if any damage is dealt, laying bare the impostor\'s identity. This Charm can only be used once per scene, unless reset by beating a hidden opponent\'s Stealth roll and subsequently, while he\'s still in concealment, either landing a decisive attack against him or crashing him with a withering attack'
        ]);
        
        App\Charm::create([
            'name' => 'Serpent-of-the-Depths Discernment',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Attuning her senses to the subtle flow of water and Essence, the Dragon-Blood spies from the depths. While submerged in a body of water such as a lake or river, she may displace her sense of hearing to another point within the same body of water no more than (Essence) range bands away from her. She\'s able to hear everything around the chosen point as though she were physically there. She doubles 9s on Awareness rolls she makes through the water, as well as on Socialize rolls to read the intentions of characters she\'s eavesdropping on. This Charm doesn\'t enable the Dragon-Blood to breathe underwater, requiring her to hold her breath or use magic such as the Water Aspect anima power (p. 155) or Unbreathing Earth Meditation (p. 248) to make extended use of it. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Flaring Nostrils',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Signature (Wood)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s keen nose can pick out the fragrance of a lone rose in a field of lilies, or the poisonous scent of hemlock diluted a hundredfold. She doubles 9s on scent-based Awareness rolls, as well as Survival rolls to track by scent, Medicine rolls to diagnose diseases or poisons, and Socialize rolls to read the intentions of a character she can smell. The range of her sense of smell extends to (Essence) range bands. She can distinguish individuals by scent, and can gauge how recently a scent was left. In combat, successfully scenting a concealed enemy or danger grants her two Initiative.'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Twitching Whisker',
            'mins' => 'Awareness 4, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Dragon\'s Crushing Gaze, Feeling the Dragon\'s Bones ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s senses are keenly attuned to the presence of those she disfavors, piercing their deceptions to reveal them to all. When a character that the Dragon-Blood has a negative Major or Defining Tie to comes within long range of her, she may automatically activate this Charm to strip away a single success from any Stealth or disguise rolls that character has made and then make a (Perception + Awareness) roll against him. An Awareness 5, Essence 4 repurchase of this Charm extends this Charm\'s effect to (Essence) range bands'
        ]);
        
        App\Charm::create([
            'name' => 'Sense the Hidden Ember',
            'mins' => 'Awareness 4, Essence 3',
            'cost' => '1m;',
            'element' => 'Awareness',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Feeling the Dragon\'s Bones ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can feel the lingering traces of supernatural power left by the might of gods and Exalted. When she comes within close range of a location where an Exalt\'s anima has reached the bonfire level or where a spirit has used one of its greater miracles (Exalted, p. 311) during the current story, she may use this Charm to roll (Perception + Awareness), gaining information based on the number of successes. 1-2 successes: The Dragon-Blood gains a general sense of how long ago the trace was left — minutes, hours, days, months, or longer. 3-4 successes: The Dragon-Blood can determine precisely how long ago the trace was left. 5+ successes: As above, and the Dragon-Blood can determine whether the trace was left by a spirit or by an Exalt, as well as whether its Essence rating is greater or lower than her own. If she\'s personally witnessed an Exalt or spirit of the type that left the trace using its overt supernatural power, she recognizes its nature, able to identify the anima of a Solar Anathema or to tell the greater miracles of a god from those of a demon'
        ]);
        
        App\Charm::create([
            'name' => 'Sense-Riding Technique',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => '(Essence + Manipulation) days',
            'prerequisite' => 'Feeling the Dragon\'s Bones ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood etches an imprint of her Essence onto another living character\'s consciousness, riding his senses from afar to see what he sees and hear what he hears. The Dragon-Blood touches a character and rolls (Manipulation + Awareness) against his Resolve, unmodified by Intimacies. Success establishes a link, allowing the Dragon-Blood to ride the target\'s senses by meditating. While using his senses, she may make Perception-based rolls using her own dice pools and Charms, but benefits from any of the target\'s Merits that enhance his senses. Depending on her rolls, she may notice details that the target overlooked, or vice versa. This Charm ends if the sense-ridden character goes more than (Essence x5) miles from the Dragon-Blood'
        ]);
        
        App\Charm::create([
            'name' => 'Sense-Destroying Method',
            'mins' => 'Awareness 5, Essence 3',
            'cost' => '5m, 2i;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'One day',
            'prerequisite' => 'Sense-Riding Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may cast down her enemies into a void as dark as the earth\'s depths, stripping them of their senses. Like its prerequisite, this Charm requires her to touch her target and roll (Manipulation + Awareness) against his Resolve, unmodified by Intimacies. In combat, touching an unwilling character is a difficulty 1 Brawl or Martial Arts gambit. On a success, she may seal away one of the following sets of senses as a crippling effect. Every two threshold successes on her (Manipulation + Awareness) roll allow her to seal an additional set of senses. Sight: An enemy stripped of sight suffers blindness (Exalted, p. 168). Hearing and Touch: In addition to deafness (Exalted, p. 168), the victim cannot make touch-based Perception rolls. He can still feel pain, although in a numbly debilitating way. Smell and Taste: The character cannot make Perception-based rolls to discern any level of detail with his senses of smell or taste. He also takes a −3 penalty on Awareness rolls to detect tainted food or drink, poisonous vapors, or similar harmful substances.'
        ]);
        
        App\Charm::create([
            'name' => 'Essence Disruption Attack',
            'mins' => 'Awareness 5, Essence 5',
            'cost' => '5m, 1wp, expend Earth Aura;',
            'element' => 'Awareness',
            'type' => 'Simple',
            'effect' => 'Aura, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Sense-Destroying Method ',
            'book' => 'DB???',
            'description' => 'Having mastered disruption of the five mortal senses, the Dragon-Blood now learns to strike at the spiritual faculty that allows gods and the Exalted to sense and channel Essence. Like its prerequisite, this Charm requires her to touch her target and roll (Manipulation + Awareness) against his Resolve, unmodified by Intimacies. Success seals the target\'s Essence. Whenever he spends Essence to use Charms or other magic in a single instant, the total cost is increased by (the Dragon-Blood\'s Perception + threshold successes). The seal breaks once the target has paid this surcharge (6 − his Integrity) times, or a day passes'
        ]);
        
        
        App\Charm::create([
            'name' => 'Become the Hammer',
            'mins' => 'Brawl 1, Essence 1',
            'cost' => '1m per die or 2m per +1 Parry;',
            'element' => 'Brawl',
            'type' => 'Supplemental or Reflexive',
            'effect' => 'Balanced, Excellency, Uniform, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Force flows through the Dragon-Blood with every strike. She may add bonus dice to a Brawl or Martial Arts attack or the control roll of a clinch for one mote each, and deals lethal damage unarmed. She rerolls 6s on the damage roll until they cease to appear. Alternatively, she may raise her Brawl- or Martial Artsbased Parry by two motes per point, and block lethal damage unarmed'
        ]);
        
        App\Charm::create([
            'name' => 'Pounding Surf Style',
            'mins' => 'Brawl 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Water, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Water strikes with inexorable power, like pounding waves that erode stone. The Dragon-Blood adds her opponent\'s current onslaught penalty to the Overwhelming value of a withering attack. In Water Aura, this bonus also adds to the attack\'s raw damage. '
        ]);
        
        App\Charm::create([
            'name' => 'Water Dragon\'s Coils',
            'mins' => 'Brawl 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Balanced, Decisive-only, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s grasp is as sudden and inescapable as the riptide. She makes a grapple gambit, rolling (Strength + Brawl) to attack. Bonus dots of Strength granted by magic such as Strength of Stone Technique don\'t add to her attack roll. Every two threshold successes on her attack roll add a bonus die to the gambit\'s Initiative roll'
        ]);
        
        App\Charm::create([
            'name' => 'Inescapable Whirlpool Hold',
            'mins' => 'Brawl 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Decisive-only, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Water Dragon\'s Coils ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s grasp is a prison that brooks no escape. She rerolls 6s until they cease to appear on both the Initiative roll and the control roll of a grapple. In Water Aura, succeeding on the control roll of a grapple refunds the gambit\'s Initiative cost'
        ]);
        
        App\Charm::create([
            'name' => 'Oaken Thew Exertion',
            'mins' => 'Brawl 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Dual, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Pounding Surf Style or Water Dragon\'s Coils ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood channels her boundless vitality into her limbs as she strikes. She adds (Stamina) either to the raw damage of a withering attack, or as bonus dice to the control roll of a clinch. In Wood Aura, if the Dragon-Blood reaches her dice limit (p. 162) on a grapple control roll, she adds an additional non-Charm success.'
        ]);
        
        App\Charm::create([
            'name' => 'Blade-Deflecting Palm',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '1m per die, 1i;',
            'element' => 'Brawl',
            'type' => 'Reflexive',
            'effect' => 'Perilous, Uniform, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood channels Water Essence into her defense to disperse even the deadliest blows. When she uses Brawl or Martial Arts to block, after the attack is rolled she may pay one mote per 1 in the roll, maximum (Essence), to reroll that many of the attacker\'s successful dice, beginning with 7s and moving up'
        ]);
        
        App\Charm::create([
            'name' => 'Crushing Avalanche Grasp',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '5m, 1i;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Decisive-only, Earth',
            'duration' => 'Until the grapple ends',
            'prerequisite' => 'Inescapable Whirlpool Hold ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s grip is sure and unshakable as stone. If she hits an enemy with a grapple attack roll and successfully establishes a clinch, she doesn\'t lose rounds of control over it from attacks against her that miss. In Earth Aura, attacks that hit her but fail to deal any damage also don\'t cause her to lose rounds of control'
        ]);
        
        App\Charm::create([
            'name' => 'Currents Sweep to Sea',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '4m (+1a);',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Water Dragon\'s Coils ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood reaches through water, shaping it into a flowing torrent that can constrict foes and drag them across the battlefield. As long as there\'s a source of water on the battlefield, such as a small pool, cistern, river, or recent rainfall, she creates a grasping limb or tendril of water, rolling a grapple gambit against an enemy at short range. If she wins control of the grapple, her foe is dragged into close range with her. If there\'s no source of water to use, she may expend a level of her anima instead. In Water Aura, this Charm\'s range extends to medium.'
        ]);
        
        App\Charm::create([
            'name' => 'Entangling Roots Embrace',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Until the grapple ends',
            'prerequisite' => 'Oaken Thew Exertion ',
            'book' => 'DB???',
            'description' => 'Like a sapling whose roots draw sustenance from the soil as it grows skyward, the Terrestrial\'s hold saps the strength of her foe, breaking his fighting spirit. If a grapple enhanced by this Charm succeeds, she steals one point of Initiative from the clinched enemy at the end of each of her turns'
        ]);
        
        App\Charm::create([
            'name' => 'Hammering Wave Technique',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Dual, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Pounding Surf Style ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood batters her foe like a wave hammering against the shore. She doubles her Strength to calculate the raw damage of a withering attack, or doubles 10s on a decisive damage roll. In Water Aura, if the Dragon-Blood deals 3+ withering damage or 1+ decisive damage, the onslaught penalty inflicted by her attack doesn\'t fade on her enemy\'s next turn, but the turn after'
        ]);
        
        App\Charm::create([
            'name' => 'Stone Fist Strike',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Dual, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Seizing on martial instinct, the Dragon-Blood hardens her limbs with Essence. She grants an unarmed attack the Smashing tag (Exalted, p. 586). An unarmed withering attack roll adds an automatic success on the attack roll and (Essence/2, rounded up) Overwhelming. In Earth Aura, the Overwhelming bonus increases to (Essence)'
        ]);
        
        App\Charm::create([
            'name' => 'Rolling Boulder Blow',
            'mins' => 'Brawl 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Brawl',
            'type' => 'Supplemental',
            'effect' => 'Aura, Decisive-only, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Stone Fist Strike ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strikes with the force of a falling mountain, sending her foes flying. She adds (Strength) threshold successes on the attack roll of a decisive smash attack as dice of damage, and may both knock her enemy prone and send him one range band back'
        ]);
        
        App\Charm::create([
            'name' => 'Flying Whirlwind Razor',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '5m, 5i, 1wp;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood becomes one with the unseen flow of air that moves through Creation, unleashing a chop or kick that hones the wind into a swirling vortex. She makes a decisive attack against an enemy within medium range. She may choose to unleash the wind in a blast, remaining where she is, or to throw herself into the whirlwind as it flies towards her foe, instantly moving into close range with him. The latter counts as her movement for the turn. The damage of the attack equals (Dexterity + attack roll threshold successes)L, ignoring Hardness. It doesn\'t include her Initiative, nor does it reset her to base. This Charm can only be used once per scene, unless reset by crashing an enemy whose Initiative was higher than the Dragon-Blood\'s with a single withering attack'
        ]);
        
        App\Charm::create([
            'name' => 'Crater-Making Impact',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Sensing the seismic forces that move beneath Creation and aligning her martial prowess with them, the Dragon-Blood unleashes devastating force upon a foe, sending him flying like a meteor crashing down to earth. She makes either a decisive smash attack against a crashed enemy or a decisive throw against a clinched foe. Success allows her to both fling her foe one range band back and knock him prone, shattering the ground where he lands to create difficult terrain and/or smash through destructible scenery. If she deals 3+ levels of decisive damage, she may hurl her victim to medium range, causing him to take damage as though from a short-range fall (Exalted, p. 232). With 7+ levels of damage, she may fling him to long range, causing him to take damage as though from a medium-range fall.'
        ]);
        
        App\Charm::create([
            'name' => 'Erupting Fury Barrage',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '10m, 3i, 1wp, expend Fire Aura;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood erupts into a swift barrage of violence, her fists burning with raging Essence. To use this Charm, she must have Initiative 15+. She unleashes a rapid series of strikes, making a single decisive attack roll to launch (1 + the number of 10s on the attack roll) attacks against a single enemy, using the successes on her roll to determine if each attack hits. She doesn\'t reset to base Initiative normally — instead, each successful attack reduces her Initiative by one for each die that shows a success on the damage roll, to a minimum of (Essence). Once she\'s completed making all attacks, she resets to base Initiative, even if they all missed. Every hit the Dragon-Blood lands inflames its victim\'s Essence with inward fire, creating an ignition point that lasts until end of scene. Once the barrage of attacks has been completed, the Dragon-Blood or any of her allies can detonate a single ignition point by landing a decisive attack against this enemy. The first ignition point detonated deals one die of lethal damage, ignoring Hardness, the second deals two dice, and so on. If the Dragon-Blooded subsequently uses this Charm against an enemy still carrying undetonated ignition points, she cannot inflict any new ignition points on him. Once all his ignition points have been ignited, the damage of ignition points from a subsequent activation starts at one die, as usual'
        ]);
        
        App\Charm::create([
            'name' => 'Embracing the Violent Flow',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '10m, 1wp (+1a);',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Aura, Dual, Signature (Water)',
            'duration' => 'Aura',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s violent prowess is fluid and formless, matched only by that of her weapon — the water itself. As long as she\'s within short range of a large source of water such as a river or a cistern, she may draw it to herself, engulfing her body in a fluid mantle. If no source of water is available, she may expend a level of anima instead. With a thought, countless lashing tendrils of water extend to strike, allowing her to make unarmed attacks out to short range, adding a non-Charm success on both attack and damage rolls, and adding (Strength) Overwhelming. The water tendrils also grant her natural attacks the Disarming and Flexible tags (Exalted, p. 586). The Dragon-Blood takes no penalties for flurrying unarmed attacks with other physical actions using the tendrils, such as scaling a palace\'s walls or using a feat of strength to lift a portcullis. This Charm is compatible with Martial Arts styles that use unarmed attacks'
        ]);
        
        App\Charm::create([
            'name' => 'Body of Deadly Thorns',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '10m, 1a, 1wp;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Wood)',
            'duration' => 'Until the grapple ends',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood seizes her foe, she draws her anima banner into her body and lets it bloom from her limbs into a hedge of barbed thorns, skewering and impaling her victim. She makes a grapple gambit, doubling 9s on both the attack roll and the control roll. The thorns burrow into her foe\'s flesh as she wrestles him, allowing her to combine a restrain action with a decisive savaging attack against him on each round of the clinch. Additionally, the thorns deflect attacks away from her, negating the grappling-induced Defense penalty to her Parry and granting her bonus soak equal to the successes she rolled on the (Strength + Brawl) roll to establish control of the clinch. This counts as soak from armor, and doesn\'t stack with any armor she\'s wearing. This Charm can only be used once per scene, unless reset by incapacitating a nontrivial foe by landing a decisive savaging attack, slam, or throw against him'
        ]);
        
        App\Charm::create([
            'name' => 'Become the Wave',
            'mins' => 'Brawl 4, Essence 3',
            'cost' => '2m, 2i;',
            'element' => 'Brawl',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Perilous, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Hammering Wave Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood lunges for a foe in the same instant that her ally forces him off guard with a feint or harrying strike, turning her ally\'s stillness into her speed. Upon receiving the benefit of a successful distract gambit from an ally who hasn\'t used his movement action, the Dragon-Blood may reflexively leap one range band towards the gambit\'s victim. If she\'s already in close range with another enemy, she must reflexively roll to disengage in order to take this reflexive movement. This doesn\'t count as her movement for the round, but it does count as the movement action of her ally.'
        ]);
        
        App\Charm::create([
            'name' => 'Swift-Striking Tide',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Brawl',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Become the Wave ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s fluid offense constantly tests her enemy\'s guard, waiting for him to show weakness. At the opportune moment, she flows into a deadly swift strike. Once per round, if an ally uses a distract gambit to benefit the Dragon-Blood, she may reflexively make a decisive attack against the gambit\'s target. This doesn\'t count as her attack for the round'
        ]);
        
        App\Charm::create([
            'name' => 'Waves Swallow the Mountain',
            'mins' => 'Brawl 4, Essence 3',
            'cost' => '2m, 1i, one round of control;',
            'element' => 'Brawl',
            'type' => 'Reflexive',
            'effect' => 'Perilous, Water',
            'duration' => 'One tick',
            'prerequisite' => 'Currents Sweep to Sea ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood uses her hold over an enemy to wear down his defenses, leaving him vulnerable to attack. She expends one round of control over a grapple to set the clinched foe\'s Hardness to 0 for a single tick'
        ]);
        
        App\Charm::create([
            'name' => 'Fist-Spinning Maelstrom',
            'mins' => 'Brawl 5, Essence 3',
            'cost' => '4m, 1wp;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Aura, Water, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Hammering Wave Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood moves with the fury of the waves to strike away enemies on all sides. She rolls a single withering attack against up to (Essence) enemies in close range, moving through a fluid sequence of blows to attack and pummel them all. If her Initiative is higher than that of at least one target, she can instead attack (Essence + 2) enemies. She rolls withering damage separately against each enemy, but only gains Initiative from the single highest damage roll. If she crashes at least one foe, a geyser of water erupts from beneath her feet and traces the arc of her blows, knocking all crashed enemies hit by the attack prone'
        ]);
        
        App\Charm::create([
            'name' => 'Drowning Embrace',
            'mins' => 'Brawl 5, Essence 4',
            'cost' => '5m, 5i, 1wp;',
            'element' => 'Brawl',
            'type' => 'Reflexive',
            'effect' => 'Aura, Dual, Perilous, Water',
            'duration' => 'Until the grapple ends',
            'prerequisite' => 'Waves Swallow the Mountain ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood wrestles foes into submission, breaking them with a powerful hold whose intensity and pressure can drown men on dry land. Upon successfully grappling a crashed foe, or crashing an enemy she\'s clinching with a withering savaging attack, she may overflow his lungs with Water Essence, causing him to begin asphyxiating (Exalted, p. 232) and subtracting one success from all actions he takes for as long as she maintains control over the grapple. Even if he recovers from crash, he continues to drown. She may choose not to kill a foe who runs out of breath, leaving him unconscious instead. This Charm can only be used once per scene, unless reset by successfully grappling a nontrivial enemy with 5+ threshold successes on the control roll'
        ]);
        
        App\Charm::create([
            'name' => 'Hanging Tree Technique',
            'mins' => 'Brawl 5, Essence 4',
            'cost' => '10m, 3i, 1wp;',
            'element' => 'Brawl',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Until the grapple ends',
            'prerequisite' => 'Entangling Roots Embrace, Fist-Spinning Maelstrom ',
            'book' => 'DB???',
            'description' => 'Arms and legs twist as the Dragon-Blood throws her entire body into an attack, lunging with each of her limbs to grapple and pin down foes. She makes a grapple gambit against up to (Dexterity) enemies in close range, clinching one or even two foes at a time with each of her limbs. She makes only one attack roll and Initiative roll against all enemies, but rolls (Strength + Brawl) separately to establish control against each enemy. On each turn of the clinch, she may either restrain all foes, expending two rounds of control over each of them; make a withering or decisive savaging attack against all foes; or release all foes. Withering savaging attacks use a single attack roll, but roll damage separately against each grappled foe. Only the single highest withering damage roll awards Initiative to the Dragon-Blood, although she can receive Initiative Breaks for crashing multiple foes. Decisive savaging attacks divide her Initiative evenly among all foes (rounded up) to determine the damage rolled against them, ignoring Hardness'
        ]);
        
        App\Charm::create([
            'name' => 'Smashing Tidal Wave Technique',
            'mins' => 'Brawl 5, Essence 5',
            'cost' => '—(8m, 1a, 1wp, expend Water Aura);',
            'element' => 'Brawl',
            'type' => 'Permanent',
            'effect' => 'Aura, Decisive-only, Water',
            'duration' => 'Permanent',
            'prerequisite' => 'Drowning Embrace ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood pins her foes beneath the weight of the seas, crushing them under a torrential cascade of water. When she uses Currents Sweep to Sea, she may unleash a flood of water from the depths of her anima banner, amplifying the tendril of water she creates with both intense pressure and incredible size. She can grapple a foe within long range, and doubles 8s on the control roll. If succcessful, the Dragon-Blood may choose to drag the clinched enemy one or two range bands towards her, pinning him beneath a high-pressure downpour or entangling him in giant coils of water. She still takes the normal penalties of grappling regardless of the distance between them, as she must maintain focus to control it. Restraining him with this mighty downpour only costs one round of control. If she savages, slams, or throws him, she adds (Strength/2, rounded up) automatic successes on withering damage rolls, or (Strength/2, rounded up) dice on decisive damage rolls.'
        ]);
         
        
        App\Charm::create([
            'name' => 'Geese-Flying-South Administration',
            'mins' => 'Bureaucracy 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Essence of a bureaucracy is flow — the flow of a leader\'s orders to her subordinates, the flow of wealth in and out, the flow of information, the flow of progress and delay. The Dragon-Blood may add automatic successes to a Bureaucracy roll for two motes each, and rerolls 6s until they cease to appear'
        ]);
        
        App\Charm::create([
            'name' => 'Confluence of Savant Thought',
            'mins' => 'Bureaucracy 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s understanding of bureaucracies is vast, encompassing the myriad ways in which mercantile and administrative tasks pool and eddy like water. She rolls (Intelligence + Bureaucracy) to introduce a fact (Exalted, p. 237) about a bureaucratic or mercantile organization that she belongs to or is familiar with. '
        ]);
        
        App\Charm::create([
            'name' => 'Finding The Water\'s Depths',
            'mins' => 'Bureaucracy 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood attunes her senses to the tides of desire that govern markets and negotiations. She reads a character\'s intentions with (Perception + Bureaucracy) to determine what it would take to entice him to perform a specific course of action with a bargain roll (Exalted, p. 216). Success reveals a general description of the quantity and quality of payment, monetary or non-monetary, that he\'d consider for a bargain roll — for example, “he\'d do this for free,” “he\'ll demand exorbitantly high payment for it,” or “he wants you to owe him a favor.” A successful roll also reveals his strongest Intimacy relating to the price he\'d place on the deal, if any'
        ]);
        
        App\Charm::create([
            'name' => 'Testing the Waters',
            'mins' => 'Bureaucracy 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Finding the Water\'s Depths ',
            'book' => 'DB???',
            'description' => 'A slick political dealer, the Dragon-Blood understands the motives of officials better than they do themselves. This Charm functions identically to its prerequisite, except that a successful read intentions reveals how the target plans to vote on an upcoming issue before a governmental, bureaucratic, or mercantile organization. It also reveals the strongest Intimacy motiving that character\'s vote, if any. A Bureaucracy 5, Essence 3 repurchase of this Charm lets the Dragon-Blood pay an additional point of Willpower once per scene to apply her read intentions roll against the Guile of all voting characters she can perceive. She doesn\'t learn Intimacies for each individual voter whose Guile is beaten, but is able to discern the major factions within the group and which one each character whose Guile she beat belongs to, as well as an Intimacy driving each faction\'s agenda. '
        ]);
        
        App\Charm::create([
            'name' => 'Benevolent Master\'s Blessing',
            'mins' => 'Bureaucracy 3, Essence 2',
            'cost' => '1m;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood marks a subordinate with a sign of her authority, often handing out a badge or token, or leaving a swirling black tattoo of Water Essence on his hand. If the subordinate presents the token or mark, all who see it know instinctively that he\'s the DragonBlood\'s servant (or, if they don\'t know of her, the servant of a Prince of the Earth), and that he carries authority to negotiate on her behalf. In addition, that character gains a temporary Bureaucracy specialty that applies on rolls to follow the Dragon-Blood\'s orders or pursue her best interests.'
        ]);
        
        App\Charm::create([
            'name' => 'Dashing Brook Method',
            'mins' => 'Bureaucracy 4, Essence 2',
            'cost' => '2m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'One task',
            'prerequisite' => 'Benevolent Master\'s Blessing ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood clears the obstacles that impede the flow of her bureaucracy, channeling its labor into efficacious speed. This Charm enhances a project (Exalted, p. 226) or other bureaucratic task, multiplying the speed at which the organization makes progress by (highest of Charisma, Manipulation, or Intelligence). The Attribute she uses must match her leadership style. This Charm cannot speed a bureaucratic task that would normally take more than (Essence) years'
        ]);
        
        App\Charm::create([
            'name' => 'Unshakable Mountain Management',
            'mins' => 'Bureaucracy 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Testing the Waters ',
            'book' => 'DB???',
            'description' => 'By her very presence, the Dragon-Blood guards the harmonious stability of bureaucracy against the disharmony of corruption and disloyalty. She may invoke this Charm whenever she perceives another character\'s social influence that would cause characters to betray or sabotage an organization that they belong to, or abuse a position of power they hold within an organization. All members of that organization within medium range targeted by the influence gain +1 Resolve against it. In Earth Aura, this bonus rises to (the Dragon-Blood\'s Essence/2, rounded up)'
        ]);
        
        App\Charm::create([
            'name' => 'Water-Stained Ledger',
            'mins' => 'Bureaucracy 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Confluence of Savant Thought ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s reckoning of accounts is as perfect as the calm of a still lake. Within its depths, she conceals bureaucratic intrigue and financial maneuvering. She rerolls 5s and 6s until they cease to appear on a Larceny roll to conceal evidence (Exalted, p. 224) of bureaucratic misdoing such as embezzlement or abuse of authority. A character attempting to discover the hidden evidence must roll (Perception + [lower of Bureaucracy or Investigation])'
        ]);
        
        App\Charm::create([
            'name' => 'Shells-for-Silver Ruse',
            'mins' => 'Bureaucracy 4, Essence 2',
            'cost' => '3m;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'One scene',
            'prerequisite' => 'Water-Stained Ledger ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood adopts a deceptive bearing that suggests illusory wealth or squalor, deceiving thieves and merchants alike. She can use this Charm to conceal her economic status in one of two following ways. She can take advantage of this deception with social influence as though it were a Minor Intimacy. Poverty: Those who see the Dragon-Blooded perceive her as utterly destitute, with Resources 0. If she\'s wearing finery, exquisite jewels, artifact weapons, or anything else incompatible with total poverty, her Resources rating instead appears one dot lower than it actually is. Wealth: Those who see the Dragon-Blooded assume that her Resources rating is one dot higher than it actually is. If she has Resources 5, she appears wealthy beyond all dreams of avarice'
        ]);
        
        App\Charm::create([
            'name' => 'Thoughtful Gift Technique',
            'mins' => 'Bureaucracy 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Finding the Water\'s Depths ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood has an uncanny sense for the perfect gift, favor, or bribe to grease the wheels of a bureaucracy. To use this Charm, she must first use Finding the Water\'s Depths to confirm that an offer she intends to make will be acceptable to her target. She doubles 9s on the bargain roll, which can be made with any social Ability'
        ]);
        
        App\Charm::create([
            'name' => 'Humble Exemplar Attitude',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Signature (Air)',
            'duration' => 'One task',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood evinces the conviction of her beliefs through work, encouraging her subordinates to follow her example and inspiring shame in those who fail to live up to her standards. She undertakes a project (Exalted, p. 226) or bureaucratic task that upholds one of her Defining Principles, adding (Essence) non-Charm bonus dice on all Bureaucracy rolls that she makes as part of the task. Once the project begins, the Dragon-Blood’s Principle becomes apparent to all members of the organization as though they’d read her intentions. Upon the completion of the project, she gains three points of Willpower and instills her Principle by example in all organization members as a Major Intimacy. Subordinates cannot apply their Resolve or spend Willpower to resist this influence — the only way to avoid it is to resign their membership in the group.'
        ]);
        
        App\Charm::create([
            'name' => 'Dashing Brook Method',
            'mins' => 'Bureaucracy 4, Essence 2',
            'cost' => '2m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'One task',
            'prerequisite' => 'Benevolent Master\'s Blessing ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood clears the obstacles that impede the flow of her bureaucracy, channeling its labor into efficacious speed. This Charm enhances a project (Exalted, p. 226) or other bureaucratic task, multiplying the speed at which the organization makes progress by (highest of Charisma, Manipulation, or Intelligence). The Attribute she uses must match her leadership style. This Charm cannot speed a bureaucratic task that would normally take more than (Essence) years'
        ]);
        
        App\Charm::create([
            'name' => 'Unshakable Mountain Management',
            'mins' => 'Bureaucracy 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Testing the Waters ',
            'book' => 'DB???',
            'description' => 'By her very presence, the Dragon-Blood guards the harmonious stability of bureaucracy against the disharmony of corruption and disloyalty. She may invoke this Charm whenever she perceives another character\'s social influence that would cause characters to betray or sabotage an organization that they belong to, or abuse a position of power they hold within an organization. All members of that organization within medium range targeted by the influence gain +1 Resolve against it. In Earth Aura, this bonus rises to (the Dragon-Blood\'s Essence/2, rounded up)'
        ]);
        
        App\Charm::create([
            'name' => 'Water-Stained Ledger',
            'mins' => 'Bureaucracy 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Confluence of Savant Thought ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s reckoning of accounts is as perfect as the calm of a still lake. Within its depths, she conceals bureaucratic intrigue and financial maneuvering. She rerolls 5s and 6s until they cease to appear on a Larceny roll to conceal evidence (Exalted, p. 224) of bureaucratic misdoing such as embezzlement or abuse of authority. A character attempting to discover the hidden evidence must roll (Perception + [lower of Bureaucracy or Investigation])'
        ]);
        
        App\Charm::create([
            'name' => 'Shells-for-Silver Ruse',
            'mins' => 'Bureaucracy 4, Essence 2',
            'cost' => '3m;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'One scene',
            'prerequisite' => 'Water-Stained Ledger ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood adopts a deceptive bearing that suggests illusory wealth or squalor, deceiving thieves and merchants alike. She can use this Charm to conceal her economic status in one of two following ways. She can take advantage of this deception with social influence as though it were a Minor Intimacy. Poverty: Those who see the Dragon-Blooded perceive her as utterly destitute, with Resources 0. If she\'s wearing finery, exquisite jewels, artifact weapons, or anything else incompatible with total poverty, her Resources rating instead appears one dot lower than it actually is. Wealth: Those who see the Dragon-Blooded assume that her Resources rating is one dot higher than it actually is. If she has Resources 5, she appears wealthy beyond all dreams of avarice'
        ]);
        
        App\Charm::create([
            'name' => 'Thoughtful Gift Technique',
            'mins' => 'Bureaucracy 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Finding the Water\'s Depths ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood has an uncanny sense for the perfect gift, favor, or bribe to grease the wheels of a bureaucracy. To use this Charm, she must first use Finding the Water\'s Depths to confirm that an offer she intends to make will be acceptable to her target. She doubles 9s on the bargain roll, which can be made with any social Ability'
        ]);
        
        App\Charm::create([
            'name' => 'Humble Exemplar Attitude',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'One task',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood evinces the conviction of her beliefs through work, encouraging her subordinates to follow her example and inspiring shame in those who fail to live up to her standards. She undertakes a project (Exalted, p. 226) or bureaucratic task that upholds one of her Defining Principles, adding (Essence) non-Charm bonus dice on all Bureaucracy rolls that she makes as part of the task. Once the project begins, the Dragon-Blood\'s Principle becomes apparent to all members of the organization as though they\'d read her intentions. Upon the completion of the project, she gains three points of Willpower and instills her Principle by example in all organization members as a Major Intimacy. Subordinates cannot apply their Resolve or spend Willpower to resist this influence — the only way to avoid it is to resign their membership in the group.'
        ]);
        
        App\Charm::create([
            'name' => 'Graven Stone Edict',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Words written in stone aren\'t easily disobeyed. The Dragon-Blood imposes a binding edict, engraved onto a stone tablet or monument, upon an organization that she either leads or holds rulemaking authority within. The rule she imposes must be a singular task or requirement, and must be related to that group\'s bureaucratic function. The prohibition or requirement carves out a place in the memories of the organization\'s members. When a character is faced with the prospect of breaking the rule, it becomes an overwhelming duty, forcing him to comply unless he enters a Decision Point and calls on a Defining Intimacy to spend one Willpower resisting this influence. Once a character has resisted, he\'s freed from the compulsion to obey that particular rule. Characters may also disobey the rule if they resign or otherwise formally leave the group. The promulgation of harmonious rules with this Charm fortifies a bureaucracy against the influence of the Wyld. Any member of an organization acting in his official capacity is treated as wielding or touching iron so long as he abides by the Dragon-Blood\'s edict'
        ]);
        
        App\Charm::create([
            'name' => 'Seething Firebreak Technique',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'One story',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood fans the flames of dissent and unrest within her own organization, forcing traitors and conspiracies out into the open. She makes passionate speeches, spreads propaganda, or carries out strict disciplinary measures, rolling (Charisma + Bureaucracy) with double 9s. Any member of the organization whose Resolve is beaten is suffused with Fire Essence. For loyal members, this manifests as a passionate enjoyment of their work. Conversely, members who plan to betray the organization or conspire against its leadership experience intense passion surrounding their dissent. They\'re unable to take covert or stealthy action against the group, its membership, or its leaders — instead, their passions drive them to be open, overt, and honest. They can enter a Decision Point and call on a Defining Intimacy that justifies discretion to pay one Willpower to resist for the rest of the story. This Charm can only be used once per story, unless reset by completing a major character or story goal (Exalted, p. 170) through bureaucratic means.'
        ]);
        
        App\Charm::create([
            'name' => 'Distraction of the Babbling Brook',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'Thoughtful Gift Technique ',
            'book' => 'DB???',
            'description' => 'Suffusing her language with the fluid ambiguity of water, the Dragon-Blood ensnares business partners or customers in labyrinthine contracts. She makes a bargain roll using any social Ability, concealing one condition or requirement of the deal from the target. If the deal is verbal, the hidden words slip past the target\'s attention; if it\'s written, his eye slips over the obfuscated terms. Because the target isn\'t consciously aware of this part of the bargain, he cannot call on Intimacies that oppose it to bolster his Resolve or spend Willpower in Decision Points. Similarly, his Resolve isn\'t penalized by Intimacies that support it. The Dragon-Blood\'s influence roll subtracts a number of successes based on the severity of the clause. If it\'s comparable to an inconvenient task (Exalted, p. 216), such as a hidden fee, it suffers −1 success. If it\'s a serious task, such as committing a serious crime or making payments that risk bankrupting the target, it suffers −3 successes. If it\'s a life-changing task, such as convincing someone to sell himself into slavery or trading a queen a horse for her palace, it suffers −5 successes. The target may pay three Willpower to resist, becoming aware of the hidden clause and able to call on any applicable Intimacies in response. Resisting renders him immune to this Charm for the next (his Essence + Integrity) days. Otherwise, he\'s bound to the term — once he becomes aware of it, his mind rationalizes an explanation for how he could have accepted it voluntarily and why he must honor it, despite having no memory of doing so. He must comply with the bargain, no matter how harsh, unless another character overturns the Dragon-Blood\'s influence (Exalted, p. 221). This Charm can only be used once per story, unless reset by achieving a legendary social goal (Exalted, p. 134) through negotiation, dealmaking, or other bureaucratic means. '
        ]);
        
        App\Charm::create([
            'name' => 'One Forest, Many Trees',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Mute, Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood cultivates interpersonal relationships and spreads her roots through society. This Charm depicts an Exalt whose mastery of networking ensures that she always knows just the person for a job. Once per story, she may make an (Essence + Bureaucracy) roll that cannot be enhanced by magic. She immediately gains a number of dots equal to the successes on the roll to divide among the following Merits. These Merits depict new Storyteller characters who have some past entanglement with the Dragon-Blood, perhaps impressed by her bureaucratic prowess or indebted to her for a past favor. Allies: The Dragon-Blood calls on the assistance of a noteworthy character. Contacts: The Dragon-Blood gets in touch with a character that can provide access to the intelligence gathered by a group of contacts. Followers: The Dragon-Blood recruits a large volunteer workforce. Mentor: The Dragon-Blood requests the guidance of a more experienced character. Retainers: The Dragon-Blood obtains the services of mortal experts. At the end of the story, the Merits are lost as the recruited characters return to their lives, unless the Storyteller deems that the Dragon-Blood\'s treatment of them qualifies to retain them long-term as Story Merits (Exalted, p. 158).'
        ]);
        
        App\Charm::create([
            'name' => 'Bestow the Saffron Mantle',
            'mins' => 'Bureaucracy 4, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Indefinite',
            'prerequisite' => 'Benevolent Master\'s Blessing ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood bestows her favor upon one of her subordinates with a gift, kiss, promotion, or the like, promoting him to her proxy in all bureaucratic matters. This must be done in person. She insinuates her own Essence into his, allowing him to call upon her judgment and expertise. To become a proxy, the subordinate must have a positive Major or Defining Tie toward the Dragon-Blood. He gains the following benefits: • He gains the benefits of Benevolent Master\'s Blessing at no additional cost. • He intuitively understands how the Dragon-Blood would act in any bureaucratic context or market venue. This doesn\'t increase his Bureaucracy rating, but it does allow him to know what the DragonBlood would ask him to do in such a situation. • He adds +1 to the Resolve bonus against contrary social influence provided by his Tie towards the Dragon-Blood. Social influence cannot completely erode his Intimacy, although it can weaken its intensity. • Once per day, he may ignore one point of the Willpower cost to resist any influence opposed to his Tie. • If the Dragon-Blood knows Sense-Riding Technique, she waives its Willpower cost when she rides her proxy\'s senses, and the maximum range of the Charm is extended to (Essence x50) miles'
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Hoard of Hesiesh',
            'mins' => 'Bureaucracy 4, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'One scene',
            'prerequisite' => 'Thoughtful Gift Technique ',
            'book' => 'DB???',
            'description' => 'Flaunting her wealth, the Dragon-Blood cows those beneath her into submission. She gains (her Resources − target\'s Resources) non-Charm bonus dice on instill, persuade, and threaten rolls made with any Ability. This bonus doesn\'t stack with any bonus dice from her Appearance (Exalted, p. 218). If the Dragon-Blood uses Shells-for-Silver Ruse to increase her apparent Resources, this increases her rating, up to a maximum of Resources 6, for this Charm\'s purposes. '
        ]);
        
        App\Charm::create([
            'name' => 'Following the River\'s Course',
            'mins' => 'Bureaucracy 4, Essence 3',
            'cost' => '5m;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Dashing Brook Method, Finding the Water\'s Depths ',
            'book' => 'DB???',
            'description' => 'It\'s easier to understand the tides that bring every piece of flotsam and jetsam than to understand the forces that govern the flow of money, but the DragonBlood does both. When she receives payment as part of an economic transaction, she gains a flash of insight into the flow that brought it to her, rolling read intentions with (Perception + Bureaucracy), doubling 9s. If she\'s paid in hard currency or physical goods, success lets her discern how the payer obtained them. If she takes payment on credit, success lets her evaluate the actual quality of the payer\'s credit and whether or not he intends to fulfill his promises. A Bureaucracy 5, Essence 4 repurchase allows the Dragon-Blood to use this Charm on any payment she observes being made'
        ]);
        
        App\Charm::create([
            'name' => 'Thrashing Carp Serenade',
            'mins' => 'Bureaucracy 4, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Dashing Brook Method, Water-Stained Ledger ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood impedes the flow of an enemy organization with frightening efficacy, whether by sabotaging a rival\'s commercial contracts, sowing discord among ministers of a foreign government, or bringing about a bureaucracy\'s ruin from within. After at least one scene spent sabotaging a project or bureaucratic task, she rolls ([Manipulation or Intelligence] + Bureaucracy) with double 9s. The difficulty is (the project leader\'s higher of Essence or Bureaucracy). A successful roll doubles the time needed to complete the project. Every threshold success increases this multiplier by one, up to a maximum of (the DragonBlood\'s Essence). This can be negated by magic such as Bureau-Reforming Kata (Exalted, p. 286). The Dragon-Blood cannot use Thrashing Carp Serenade against the same organization more than once per story, even if its projects are led by different characters.'
        ]);
        
        App\Charm::create([
            'name' => 'Sea-Changed Secrets',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Water-Stained Ledger ',
            'book' => 'DB???',
            'description' => 'Dredging up her foe\'s deepest secrets, the DragonBlood confronts him with a secret he\'d thought forgotten. The Dragon-Blood rerolls non-1 failures on a threaten roll made with any social Ability to intimidate a character with blackmail, compromising information, or evidence of his criminal misdeeds. Resisting this influence requires entering a Decision Point and calling on a Major or Defining Intimacy that supports refusing to be blackmailed'
        ]);
        
        App\Charm::create([
            'name' => 'Sprouting Bamboo Cultivation',
            'mins' => 'Bureaucracy 5, Essence 3',
            'cost' => '1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Dashing Brook Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood cultivates the growth of an organization as though it were her garden. This Charm supplements any project or other bureaucratic task that has the primary goal of amassing wealth or manpower: recruiting a work force, collecting taxes, selling goods at market, and similar tasks. She doubles 8s on any Bureaucracy roll necessary to complete the project, and gains five motes that can be spent on other Charms that enhance it'
        ]);
        
        App\Charm::create([
            'name' => 'Drowning in Negotiation Style',
            'mins' => 'Bureaucracy 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Distraction of the Babbling Brook ',
            'book' => 'DB???',
            'description' => 'Calling upon the endless Essence of the depths to stand witness to a contract, the Dragon-Blood binds all parties to it to their words. This Charm may be invoked when the Dragon-Blood witnesses a verbal or written contract being made. If any party to the contract willingly violates it, he drowns on dry land as water appears inside his mouth and lungs. This deals (Essence x2) dice of lethal damage, ignoring Hardness, and leaves ink-black stains dripping from his mouth that are visible only to the Dragon-Blood and other parties to the sanctified contract, marking him as an oathbreaker for (DragonBlood\'s Essence + Charisma) years'
        ]);
        
        App\Charm::create([
            'name' => 'Flowing Authority Insinuation',
            'mins' => 'Bureaucracy 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Simple',
            'effect' => 'Psyche, Water',
            'duration' => 'One scene',
            'prerequisite' => 'Thrashing Carp Serenade ',
            'book' => 'DB???',
            'description' => 'Creation itself confers its authority upon the DragonBlood, turning even the most meager scrap of paper into proof of her bureaucratic mandate. She may invoke this Charm whenever someone challenges her authority to be in a location, access an organization\'s resources, or take some form of bureaucratic action. She rolls (Manipulation + Bureaucracy) as she brandishes a blank sheet of paper or other putative token of authority, suffusing it with Water Essence. If the roll suffers any penalties due to her looking out of place, those penalties subtract successes instead of dice. A character whose Resolve is beaten by this roll perceives this document as bureaucratic credentials or permission from an authority he respects. This authorization counts as a Major Intimacy when it\'s exploited. In addition to functioning as an Intimacy, it also prevents affected characters from challenging the Dragon-Blood over the same reason for the remainder of the scene, including through social influence. Resisting this effect requires a character to enter a Decision Point, invoking at least a Major Intimacy and paying three Willpower to resist. '
        ]);
        
        App\Charm::create([
            'name' => 'Sowing the Dragon\'s Teeth',
            'mins' => 'Bureaucracy 5, Essence 4',
            'cost' => '5m, 1wp;',
            'element' => 'Bureaucracy',
            'type' => 'Reflexive',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Sprouting Bamboo Cultivation ',
            'book' => 'DB???',
            'description' => 'Battles may be won by force of arms, but wars are won with logistics. To use this Charm, the Dragon-Blood must have first completed a challenging project relating to establishing supply lines, stocking supplies, or other logistical matters. When she or one of her allies makes a Strategic Maneuver roll that somehow benefits from that project, such as using supply lines to keep an army fed on a long march, she may use this Charm before the roll to grant it double 8s. This Charm can only be used once per story, unless reset by completing a project or other bureaucratic task that fulfills a legendary social goal (Exalted, p. 134).'
        ]);
        
        
        App\Charm::create([
            'name' => 'Masterful Dragon-Artisan Expertise',
            'mins' => 'Craft 1, Essence 1',
            'cost' => '1m per die;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood labors with hands steady as stone. She may add bonus dice to a Craft roll for one mote each. If she\'s awarded a stunt on the supplemented roll, she gains one silver craft point, maximum one per scene'
        ]);
        
        App\Charm::create([
            'name' => 'Stone-Carving Fingers',
            'mins' => 'Craft 3, Essence 1',
            'cost' => '6m;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth',
            'duration' => 'One project',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can split stone with her bare hands, delivering a series of precise strikes that carve it from within, shaping it to her will. She may undertake a basic or major project to craft stone or earth (but not metal) without needing tools or a workshop. If she uses tools to assist the project, such as striking a boulder with a chisel, she multiplies the rate at which she works by (Essence + 1), reducing the time to complete the project to a minimum of one minute'
        ]);
        
        App\Charm::create([
            'name' => 'Flaw-Finding Examination',
            'mins' => 'Craft 3, Essence 1',
            'cost' => '1m, 1wp;',
            'element' => 'Craft',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s careful scrutiny discerns any flaw that undermines the harmony of a project\'s design. She undertakes either a basic or major repair project (Exalted, pp. 242-243) or a feat of demolition, making a (Perception + applicable Craft) roll before doing so. She multiplies the rate at which she works by her successes, and gains a temporary Craft or Athletics specialty that lasts until the task is completed, which she adds to her total Strength to determine what feats she may attempt. If she already has an applicable specialty, she converts the die it adds to a non-Charm success. If she also uses Stone-Carving Fingers to speed a repair project, her total speed is multiplied by (her Essence + rolled successes).'
        ]);
        
        App\Charm::create([
            'name' => 'Shaping Hand Style',
            'mins' => 'Craft 3, Essence 2',
            'cost' => '—;',
            'element' => 'Craft',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'Stone-Carving Fingers ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may use Stone-Carving Fingers to manipulate the raw materials of any Craft that she has 4+ dots in. Such uses take on an elemental aspect determined by the Storyteller based on the nature of the project: Forging metal is fire-aspected, as furnace-heat radiates from the Exalt\'s bare hands; spinning silk is wood-aspected; carving an ice sculpture is air-aspected; mixing an alchemical reagent by hand is water-aspected; and so on. This doesn\'t apply to crafting artifacts or manses'
        ]);
        
        App\Charm::create([
            'name' => 'Stones-from-Rubble Restoration',
            'mins' => 'Craft 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'One project',
            'prerequisite' => 'Flaw-Finding Examination ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood knows where each fragment of a broken object belongs. After using Flaw-Finding Examination on a damaged object, she may use this Charm to supplement each roll of a repair project with (Essence/2, round down) non-Charm successes'
        ]);
        
        App\Charm::create([
            'name' => 'Touch of Unmaking',
            'mins' => 'Craft 5, Essence 2',
            'cost' => '10m;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Stones-from-Rubble Restoration ',
            'book' => 'DB???',
            'description' => 'Tracing her fingers over an object\'s surface, the DragonBlood discerns its weakest point. After using Flaw-Finding Examination on an object, she may use this Charm to supplement a feat of demolition, adding (an applicable Craft/2, round up) to her effective Strength rating to determine if she may attempt the feat (Exalted, p. 229). If this would raise her above the feat\'s Strength minimum, any excess points are instead added as non-Charm dice on her roll'
        ]);
        
        App\Charm::create([
            'name' => 'Flawless Facet Realization',
            'mins' => 'Craft 5, Essence 2',
            'cost' => '6m, 1wp;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Shaping Hand Style ',
            'book' => 'DB???',
            'description' => 'Honing her skill with a gem-cutter\'s precision, the Dragon-Blood perfects her handiwork. She rerolls (Essence) non-1 failures on a supplemented roll. For each rerolled die that shows a success, the DragonBlood gains one silver craft point in addition to any rewards from the project itself. Rerolled dice that show 10s grant gold craft points instead'
        ]);
        
        App\Charm::create([
            'name' => 'Strike the Dragon-Anvil',
            'mins' => 'Craft 5, Essence 2',
            'cost' => '1m, 1wp, 1gxp;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Flawless Facet Realization ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s forge imparts a portion of her mighty Essence into the outcome of her craftsmanship, suffusing it with perfection. She doubles 9s on a single Craft roll. An Essence 5 repurchase of this Charm allows the Exalt to use it for ten motes, one Willpower, and one white craft point to double 8s on a Craft roll'
        ]);
        
        App\Charm::create([
            'name' => 'Passion-Inflaming Artistry',
            'mins' => 'Craft 4, Essence 2',
            'cost' => '5m, 1wp;',
            'element' => 'Craft',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s labors are suffused with the passionate Essence of fire. She undertakes a basic or major project to craft a painting, sculpture, meal, or similar art object that\'s primarily aesthetic or ornamental in function. Major projects benefit from (Essence) nonCharm dice. She chooses an emotion to be conveyed through her craftsmanship, and treats the Craft roll used to complete the project as an inspire roll (Exalted, p. 217) to spread that emotion to any character who engages with the object if his Resolve is beaten by her successes — a painting of a historic battle could inspire courage in those who gaze upon it, while a bowl of noodles flavored with sorrow could bring tears to the eyes of anyone who eats it. This effect lasts (Essence + Charisma) days from the project\'s completion, after which its supernatural potency fades'
        ]);
        
        App\Charm::create([
            'name' => 'Talents-to-Obols Refinement',
            'mins' => 'Craft 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Craft',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may exchange her craft points for those of a lower tier: she may convert one white craft point to two gold craft points, or one gold craft point to two silver craft points. Each use can only convert one type of craft points, although there\'s no limit on how many can be exchanged. At Essence 4, the Exalt may pay one Willpower when she uses this Charm to convert silver craft points into gold craft points at a four-to-one ratio, although she cannot create white craft points.'
        ]);
        
        App\Charm::create([
            'name' => 'Ephemeral Form Composition',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Craft',
            'type' => 'Supplemental',
            'effect' => 'Signature (Air)',
            'duration' => 'One project',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood pores over her blueprints, drawing the lines up from the page with wisps of Air Essence into a shimmering three-dimensional mirage of anima. She can refine and perfect this ephemeral design with thought alone, her creativity unbounded by the material world\'s limitations. This Charm can be used before beginning a major, superior, or legendary project. The Dragon-Blood must spend ten hours preparing the design in her workshop, rolling (Intelligence + Craft). The craft point cost to complete the project or roll an interval is reduced based on its tier and her rolled successes, as follows: Major: Rolling to complete the project costs (10 − successes) silver craft points, minimum one. Superior: Rolling an interval costs (10 − [successes/2, round down]) gold craft points, minimum one. Legendary: Rolling an interval costs (10 − [successes/4, round down]) white craft points, minimum one. This Charm can only be used once per story, unless reset by upholding a Defining Principle by either completing a crafting project or giving or selling an object the Exalt has crafted to another character'
        ]);
        
        App\Charm::create([
            'name' => 'Eternal Omphalos Forge',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '15m, 1wp, 15gxp;',
            'element' => 'Craft',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'One project',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood feels the world turn on its axis as she labors over the forge, affirming her will and genius with every fall of her hammer as she shapes a world-shaking treasure. She begins a superior or legendary project, adding one to the project\'s terminus. If the Exalt completes the project before its terminus has elapsed, she gains one point of Willpower for each unused interval, in addition to her normal craft point reward. This can raise her above her permanent Willpower. This Charm can only be used once per story. The Exalt may reset it by spending five white points'
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Dragon-Smith Arete',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '15m, 1wp;',
            'element' => 'Craft',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'One project',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s genius is explosive, as powerful and dangerous as an erupting volcano. She undertakes a superior or legendary project, enhancing all of her rolls with (Essence) non-Charm bonus dice and rolling a non-Charm die for each 10, but at the cost of lowering the project\'s terminus by one. If she completes the project successfully, she gains one white point in addition to the normal crafting reward'
        ]);
        
        App\Charm::create([
            'name' => 'Fortune-from-Flotsam Ingenuity',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '15m, 1wp, 5sxp;',
            'element' => 'Craft',
            'type' => 'Reflexive',
            'effect' => 'Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s fluid ingenuity adapts to her circumstances, turning whatever materials she can find into exactly what she needs. This Charm is a (Wits + Craft) roll to undertake a major project in a matter of seconds, jury-rigging it together. It can even be used in combat on the Dragon-Blood\'s turn. The Charm\'s cost replaces the normal craft point cost of the project. The Dragon-Blood can accomplish projects that would normally be impossible in the brief instant she uses this Charm, whether it\'s fletching enough arrows to supply an army in a whirling maelstrom of craftsmanship, or lashing together a raft from palm trees in a single flowing motion. This Charm can only be used once per story, unless reset when the Dragon-Blood or one of her Hearthmates achieves a major character or story goal (Exalted, p. 170) with the assistance of an object that the Exalt crafted this story.'
        ]);
        
        App\Charm::create([
            'name' => 'Imago-Hatching Realization',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '10m, 1wp, 5gxp;',
            'element' => 'Craft',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Cultivating the Essence of her work as though it were a living thing, the Dragon-Blood guides its growth from raw materials into a fully realized whole, letting the project flourish in accordance with its own strengths. She undertakes a Craft project, and may reroll all dice that show non-1 failures on a single roll of that project. If this increases the successes on the roll, the project manifests a single unexpected but useful feature determined by the Storyteller. A longbow might have the perfect composition to also function as an exceptional flute; a river-spanning bridge might attract local honeybees to build hives underneath it. The Storyteller might choose to hold off on determining this quality, instead revealing it later at a dramatically appropriate future time. On an artifact, this introduces a new but related theme from which Evocations can be drawn — the Exalt might discover that a white jade daiklave she forged to slay raksha also has an unexpected proclivity for controlling cold iron through magnetic force. This Charm can only be used once per story. The Exalt may reset it by spending one white craft point, though she can still only use it once per project'
        ]);
        
        App\Charm::create([
            'name' => 'Forge-Hand Prana',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Craft',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'One project or One scene',
            'prerequisite' => 'Shaping Hand Style, Touch of Unmaking ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood takes the destructive power of fire into her own hands, tempering it so that it will burn only what she wishes it to. She needs no tools to undertake any basic or major project for which a forge or similar source of flame would normally be used, such as smithing a sword or fire-hardening a wooden spear, as well as superior projects to create artifacts from jade (but not other magical materials). The rate at which the Exalt completes work on the project is multiplied by (Essence/2, round up). Alternatively, the Dragon-Blood may use this Charm to channel the blaze through her hands offensively for one scene. Any barehanded attacks she makes using Brawl or Martial Arts set their Overwhelming value to (Essence/2, round up), and double 10s on decisive damage rolls. '
        ]);
        
        App\Charm::create([
            'name' => 'Stoking Inspiration\'s Forge',
            'mins' => 'Craft 5, Essence 3',
            'cost' => '—;',
            'element' => 'Craft',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Talents-to-Obols Refinement ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood husbands the flame of her genius, sparking greater heights of creativity. Whenever she\'d gain silver craft points as a reward for completing a crafting project or at the end of a story in which she completed a project (Exalted, p. 240), she may instead roll that many dice, rolling an additional die for each 10. 10s grant two silver and one gold craft point; 9s grant one silver and one gold craft point; 8s and 7s grant one silver craft point each'
        ]);
        
        
        App\Charm::create([
            'name' => 'Threshold Warding Stance',
            'mins' => 'Dodge 1, Essence 1',
            'cost' => '2m per +1 Evasion or success;',
            'element' => 'Dodge',
            'type' => 'Supplemental or Reflexive',
            'effect' => 'Balanced, Excellency, Fire, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s body is as light as flames, skimming over the ground as she moves to evade. She may raise her Evasion for two motes per point, or add automatic successes on a Dodge roll for two motes each. She ignores environmental penalties to her Evasion or to the Dodge roll'
        ]);
        
        App\Charm::create([
            'name' => 'Flickering Candle Meditation',
            'mins' => 'Dodge 3, Essence 1',
            'cost' => '1m, 1i;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Fire, Perilous, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood dances like a flame around the flaws in her enemy\'s attack. (Essence) 1s on her enemy\'s attack roll allow her to ignore that many points of penalty to her Evasion'
        ]);
        
        App\Charm::create([
            'name' => 'Heat-of-Battle Advance',
            'mins' => 'Dodge 3, Essence 1',
            'cost' => '2m;',
            'element' => 'Dodge',
            'type' => 'Supplemental',
            'effect' => 'Fire, Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'When the Dragon-Blood recedes from her enemies, she doesn\'t retreat, but rather burns a new course. She waives the Initiative cost of disengaging as long as it moves her into close range with another, nontrivial opponent, and rolls an additional non-Charm die for each 10 she rolls.'
        ]);
        
        App\Charm::create([
            'name' => 'Hopping Firecracker Evasion',
            'mins' => 'Dodge 3, Essence 2',
            'cost' => '3m, 2i;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Fire, Perilous, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Flickering Candle Meditation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s feet strike sparks from the ground, finally igniting in an explosive leap When she dodges an attack that misses her Evasion by at least two successes, she may move one range band in any direction'
        ]);
        
        App\Charm::create([
            'name' => 'Virtuous Negation Defense',
            'mins' => 'Dodge 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Uniform, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Hopping Firecracker Evasion ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood twists to interpose herself between an ally and an incoming attack to guide it off course. When an ally within close range of her is attacked, she may interpose her Evasion against that single attack as though with a defend other action (Exalted, p. 196). When used to protect one of the Dragon-Blood\'s Sworn Kin, this Charm costs only two motes. In Wood Aura, the Dragon-Blood may protect an ally within short range once per round, reflexively moving one range band to cover him. This doesn\'t count as her movement action for the round'
        ]);
        
        App\Charm::create([
            'name' => 'Ember-Amid-Smoke Misdirection',
            'mins' => 'Dodge 5, Essence 2',
            'cost' => '3m;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Aura, Fire, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Flickering Candle Meditation ',
            'book' => 'DB???',
            'description' => 'Striking at smoke only leads one closer to the flame. The Dragon-Blood gains +1 Evasion. On a successful dodge, her attacker overextends, suffering (Essence) dice of unsoakable withering damage. She doesn\'t gain Initiative from this. With an Essence 4 repurchase, the Dragon-Blood may expend her Fire Aura after successfully dodging to gain all Initiative lost by her attacker'
        ]);
        
        App\Charm::create([
            'name' => 'Safety Among Enemies',
            'mins' => 'Dodge 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Perilous, Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood spins or swoops around an attack, she twists the wind around the blow to redirect it. Successfully dodging a decisive attack allows her to redirect it to another character within range of the original attack. To do so, her Initiative must exceed (attacker\'s Initiative + new target\'s Initiative). The attack and all effects enhancing it are then rolled again, using the same dice pool, against its new target.'
        ]);
        
        App\Charm::create([
            'name' => 'Unmoving Center Enlightenment',
            'mins' => 'Dodge 5, Essence 3',
            'cost' => '5m, 1wp, expend Earth Aura;',
            'element' => 'Dodge',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood settles into a rooted stance of evasion through non-evasion, unleashing a seismic wave of spiritual force. It\'s not she who recedes, but her foes. She rolls her (Stamina + Dodge) against the Resolve of all enemies within close range as she unleashes incredible spiritual pressure. Each enemy whose Resolve is beaten must immediately make a disengage roll opposing her at a −3 penalty. On a success, an enemy must immediately use his reflexive movement to move away from the Dragon-Blood. On a failure, the only action he can take on subsequent turns is to continue disengaging from the Dragon-Blood until he succeeds, even if subsequently forced beyond close range. Characters may resist this for one Willpower and five Initiative. This Charm can only be used once per scene, unless the Dragon-Blood resets it by beginning her turn at medium range or further from all enemies while in Earth Aura'
        ]);
        
        App\Charm::create([
            'name' => 'Unassailable Body of Fire',
            'mins' => 'Dodge 5, Essence 3',
            'cost' => '7m;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Aura, Counterattack, Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'Hopping Firecracker Evasion ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s body dissolves into an untouchable blaze, incinerating those who dare strike her. When she uses Hopping Firecracker Evasion to leap away from an enemy at close range, she makes an unblockable decisive counterattack with the flames of her leap, rolling (Wits + Dodge). The counterattack deals ([Essence + base Evasion]/2, rounded up)L damage dice, ignoring Hardness. This doesn\'t include her Initiative or reset her to base Initiative. An enemy that takes 3+ levels of damage from the counterattack is set ablaze, suffering (Essence) dice of lethal damage each turn until he extinguishes himself'
        ]);
        
        App\Charm::create([
            'name' => 'Flow With Strife',
            'mins' => 'Dodge 5, Essence 3',
            'cost' => '3i per level of damage, expend Water Aura;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Perilous, Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s movements are fluid and shapeless, adapting to whatever force is directed against her. Even when struck she may be unscathed, flowing with her enemy\'s attack rather than against it. After the damage roll of a decisive attack that the Dragon-Blood attempted to dodge, she can use this Charm to negate damage successes at a cost of three Initiative per level of non-aggravated damage. If she completely negates the damage of an attack, it seems that she was struck, but she flows away from the attack at the last second; this counts as dodging the attack. The Initiative cost of this Charm is discounted to two Initiative per level of damage while the Dragon-Blood is at least ankle-deep in water or fighting in driving rain'
        ]);
        
        App\Charm::create([
            'name' => 'Swaying Grass Elusion',
            'mins' => 'Dodge 5, Essence 3',
            'cost' => '2i per +1 Evasion;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Aura, Perilous, Signature (Wood), Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood bends and sways under an enemy\'s attack, letting the force of his strike blow past her like the wind. She may raise her Evasion for two Initiative per point, and adds two to the maximum amount she may raise her Evasion with Charm bonuses (p. 162). Upon successfully dodging an attack made by a nontrivial enemy with lower Initiative, the Dragon-Blood may expend her Wood Aura to regain half the Initiative spent on this Charm, rounded up'
        ]);
        
        App\Charm::create([
            'name' => 'Ebbing Tide Recedes',
            'mins' => 'Dodge 4, Essence 3',
            'cost' => '4m;',
            'element' => 'Dodge',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Heat-of-Battle ',
            'book' => 'DB???',
            'description' => 'Advance Like water trickling away through a drain, the DragonBlood extricates herself from melee. When she disengages, (Essence) 1s on her enemies\' opposing rolls add that many non-Charm bonus dice to her roll. In Water Aura, the Dragon-Blood also doubles 9s on her disengage roll.'
        ]);
        
        App\Charm::create([
            'name' => 'Elusive Crosswind Defense',
            'mins' => 'Dodge 4, Essence 3',
            'cost' => '4m, 1i;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Air, Aura, Perilous, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Hopping Firecracker Evasion ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s dodge unleashes a swirling vortex of air, turning aside her enemies\' arrows. She gains +1 Evasion against a ranged attack from medium range, or +2 against an attack from long or extreme range. This doesn\'t count as a bonus from Charms'
        ]);
        
        App\Charm::create([
            'name' => 'Bonfire Shadow Evasion',
            'mins' => 'Dodge 5, Essence 3',
            'cost' => '6m, 1a;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Fire, Perilous, Uniform',
            'duration' => 'Until next turn',
            'prerequisite' => 'Ember-Amid-Smoke Misdirection ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s evasive instincts urge her towards impossible motion, dodging her own anima banner to disperse it in a blinding flare. She must be at bonfire anima to use this Charm. When enemies with lower Initiative attack her, (Essence) 1s on their attack roll subtract successes. If this removes all of an attacker\'s successes or he botches, he\'s blinded (Exalted, p. 168) until the scene ends'
        ]);
        
        App\Charm::create([
            'name' => 'Coiling Dragon Dance',
            'mins' => 'Dodge 5, Essence 4',
            'cost' => '4m, 1wp;',
            'element' => 'Dodge',
            'type' => 'Reflexive',
            'effect' => 'Aura, Dual, Fire',
            'duration' => 'Aura',
            'prerequisite' => 'Bonfire Shadow Evasion ',
            'book' => 'DB???',
            'description' => 'Subliming her presence into shadow and smoke, the Dragon-Blood dares her foes to strike her. She gains one Initiative when she successfully dodges an attack, and adds her Evasion to her soak against withering attacks she attempts to dodge. If a withering attack hits her but deals no damage, it counts as her having dodged it. Additionally, when using Flickering Candle Meditation or Bonfire Shadow Evasion, she counts her attackers\' 2s as well as 1s, although the maximum remains unchanged'
        ]);
        
        App\Charm::create([
            'name' => 'Elusive Dragon-God Dispersion',
            'mins' => 'Dodge 5, Essence 5',
            'cost' => '—;',
            'element' => 'Dodge',
            'type' => 'Permanent',
            'effect' => 'Aura, Decisive-only',
            'duration' => 'Permanent',
            'prerequisite' => 'Unassailable Body of Fire ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood unleashes a seething furor of elemental Essence in her wake, forcing her enemies to plunge through flames, brambles, storms, and all Creation\'s fury in pursuit of her. She may use Unassailable Body of Fire while in any Elemental Aura, changing the aspects of that Charm and Hopping Firecracker Evasion to match her Aura and enhancing her counterattack based on its element. Air: The Dragon-Blood dissolves into gusting wind. As long as she deals any damage, she may force the enemy to move one range band horizontally in any direction. Earth: The Dragon-Blood counterattacks with a blast of sand, sediment, or dust, adding one bonus success to the damage roll. On a successful attack, this either knocks her enemy prone or blinds him (Exalted, p. 168) until he spends his whole turn clearing his eyes. Fire: The Dragon-Blood doubles 10s on the decisive damage roll. Water: The Dragon-Blood becomes a torrent of water in motion, knocking her enemy off balance. The counterattack deals bashing damage, and if it hits, her attacker takes a −3 penalty on all physical rolls for his next three turns. Wood: The Dragon-Blood counterattacks with tangling brambles that deal no damage, but instead grapple her attacker on a hit without need for an Initiative roll. The brambles use the Dragon-Blood\'s (Stamina + Dodge) to establish control of the grapple, and can only take restrain actions. The Dragon-Blood can act normally while the brambles maintain the clinch.'
        ]);
        
        
        
        App\Charm::create([
            'name' => 'Granite Curtain of Serenity',
            'mins' => 'Integrity 1, Essence 1',
            'cost' => '2m per +1 Resolve or success;',
            'element' => 'Integrity',
            'type' => 'Supplemental or Reflexive',
            'effect' => 'Balanced, Earth, Excellency',
            'duration' => 'Instan',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Taking on the stoicism of stone, the Dragon-Blood stands unmoved by honeyed words or ferocious threats. She may raise her Resolve or add automatic successes to an Integrity roll for two motes each. In addition, she ignores a single point of penalty from wounds, deprivation, or poison'
        ]);
        
        App\Charm::create([
            'name' => 'Frozen Heart Prana',
            'mins' => 'Integrity 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Icy reason prevails over specious arguments or seductive wiles. The Dragon-Blood may use Intelligence in place of Wits to calculate her Resolve against a single influence roll. In addition, the opposing character must compare his Appearance to the highest of her Intelligence, Lore, or Resolve to determine how many bonus dice it adds to his influence roll (Exalted, p. 218)'
        ]);
        
        App\Charm::create([
            'name' => 'Slippery Thoughts Technique',
            'mins' => 'Integrity 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'A consummate liar, the Dragon-Blood deftly negotiates intrigues and galas. She may use Manipulation in place of Wits to calculate her Resolve against a single influence roll. Alternatively, she may substitute her Manipulation-based Resolve for her Guile against a single roll'
        ]);
        
        App\Charm::create([
            'name' => 'Oath of the Ten Thousand Dragons',
            'mins' => 'Integrity 2, Essence 1',
            'cost' => '1wp;',
            'element' => 'Integrity',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood swears a vow of personal fealty to a character she holds a Tie of loyalty towards, or swears to complete a task at the request of such a character. She gains +2 Resolve against any influence that would weaken or alter that Tie (if she promised personal loyalty), or that would dissuade her from completing the task. This Charm can only be used once per story. If the Dragon-Blood maintains it through multiple stories, she cannot use it again until she\'s ended it and a new story begins'
        ]);
        
        App\Charm::create([
            'name' => 'Heart-Hardening Meditation',
            'mins' => 'Integrity 2, Essence 2',
            'cost' => '6m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The mountain sheds no tears for those who die upon it. The Dragon-Blood gains +2 Resolve against inspire rolls, as well as any influence that leverages either an inspired emotion or a Tie based on strong passions. In Earth Aura, this doesn\'t count as a bonus from Charms'
        ]);
        
        App\Charm::create([
            'name' => 'Inviolate Dragon Spirit',
            'mins' => 'Integrity 3, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Heart-Hardening Meditation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s mind and soul are an unassailable tower of pure will. In a Decision Point (Exalted, p. 219), she may call upon the same Intimacy she used to bolster her Resolve to resist that influence'
        ]);
        
        App\Charm::create([
            'name' => 'Unquenchable Battle-Passion',
            'mins' => 'Integrity 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Inviolate Dragon Spirit ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s fierce spirit is undaunted by threats and unmoved by pleas for mercy. Against influence that would cause her to refrain from hostilities or impair her ability to fight, she may use this Charm to automatically inspire herself (Exalted, p. 217) with an emotion to bolster her Resolve against the influence for one scene. If the opposing influence beats her Resolve and she spends Willpower to resist, she gains (Essence) Initiative for each Willpower point she spends.'
        ]);
        
        App\Charm::create([
            'name' => 'Chaos-Warding Prana',
            'mins' => 'Integrity 3, Essence 2',
            'cost' => '5m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => '(Essence) hours',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Centering her mind and spirit, the Dragon-Blood embodies the stability of the omphalos, walking unscathed through the chaos of the Wyld. She and any items she carries are impervious to physical transformation or addiction caused by Wyld exposure, as well as similar environmental effects that warp mind or body. This doesn\'t protect her from shaping magic used by other characters or from non-transformative perils of the Wyld. An Integrity 5, Essence 3 repurchase lets the DragonBlood pay a five-mote surcharge to extend this Charm\'s effects to her Hearthmates out to medium range'
        ]);
        
        App\Charm::create([
            'name' => 'Ten Thousand Dragons Fight as One',
            'mins' => 'Integrity 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Oath of the Ten Thousand Dragons ',
            'book' => 'DB???',
            'description' => 'The bellicose temperament of the Dragon-Blooded has set them against each other throughout the ages, but in times of crisis, the bonds of shared blood are stronger than any division of house against house or nation against nation. When the Exalt witnesses another Dragon-Blood in risk or danger — physical, social, or otherwise — she may use this Charm to instantly form a Minor Tie of loyalty towards him, or to strengthen such a Tie by one step. For the rest of the scene, that Tie benefits as though she\'d used this Charm\'s prerequisite to swear an oath to assist him. If she Joins Battle or makes an influence roll in this pursuit, she adds (Intimacy) non-Charm bonus dice on the first such roll she makes. This Charm can only be used once per scene'
        ]);
        
        App\Charm::create([
            'name' => 'Wound-Denying Dragon Faith',
            'mins' => 'Integrity 4, Essence 2',
            'cost' => '2m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'One scene',
            'prerequisite' => 'Ten Thousand Dragons ',
            'book' => 'DB???',
            'description' => 'Fight as One Unwavering in her dedication, the Dragon-Blood won\'t yield even to mortal injury. As long as she\'s striving to pursue or uphold an Intimacy to which she\'s sworn herself with Oath of the Ten Thousand Dragons, Ten Thousand Dragons Fight as One, or Unflagging Vengeance Meditation, she ignores up to (Intimacy/2, round down) points of wound penalties. In Earth Aura, she ignores (Intimacy) points of wound penalties instead'
        ]);
        
        App\Charm::create([
            'name' => 'Ascendant Ideal Inspiration',
            'mins' => 'Integrity 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Rising above the turmoil of the world, the DragonBlood dedicates herself to a Defining Principle that represents her ideals. Any character who attempts to either weaken the chosen Principle or cause the Dragon-Blood to act against it must make two separate influence rolls, using the lower result. Additionally, the Dragon-Blood doubles 9s on influence rolls with any Ability to either instill the chosen Principle in others or persuade them to act by appealing to it. If the Dragon-Blood acts against the chosen Principle or voluntarily weakens it in any session where this Charm was used to empower it, she loses all temporary Willpower, and this Charm ends if still active. Likewise, she cannot use it to empower a Principle she\'s acted against or weakened earlier in the same session. If influence weakens it below Defining, this Charm ends, but the Dragon-Blood doesn\'t lose Willpower. This Charm can only be used once per story, unless reset by upholding a Defining Principle the Exalt wishes to devote herself to in a way that either fulfills a major character or story goal (Exalted, p. 170) or makes significant narrative progress towards such a goal. If the Dragon-Blood maintains it through multiple stories, she cannot use it again until she\'s ended it and either a new story begins or she resets it'
        ]);
        
        App\Charm::create([
            'name' => 'Flawless Diamond Heart',
            'mins' => 'Integrity 5, Essence 3',
            'cost' => '7m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Unfaltering in her convictions, the Dragon-Blood embodies the unbreakable strength of earth. When her Resolve is beaten by influence that opposes one of her Major or Defining Intimacies, she lowers the cost to resist by (Essence/2, round up) Willpower, minimum zero. If she enters a Decision Point, she must still call upon a valid Intimacy to use this Charm. This Charm may only be used once per story, unless reset by upholding the Intimacy this Charm was used to protect.'
        ]);
        
        App\Charm::create([
            'name' => 'Immolating Phoenix-Soul Fury',
            'mins' => 'Integrity 5, Essence 3',
            'cost' => '8m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Signature (Fire)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The soul-twisting lies of Anathema and the curses of sorcerers cannot hope to tame the boundless fire of the Dragon-Blood\'s heart. If a Psyche effect (Exalted, p. 253) would cause her to act against one of her Intimacies, she may instead use this Charm to enter a berserk state in which her will cannot be constrained. The Psyche effect is completely suppressed for the duration, but she cannot take any actions except to engage in hostilities. She may fight as best she sees fit, including using disengage actions to tactically reposition herself, but cannot withdraw from combat or accept an enemy\'s surrender. The only social influence she may attempt is threatening foes. If she\'s not in combat, then she must either devote herself entirely to seeking out a specific enemy, or provoke other characters into hostilities. She cannot end this Charm voluntarily. If the Dragon-Blood defeats the character responsible for inflicting the Psyche effect on her while in this rage, the unnatural influence is permanently broken, and she gains two Willpower. This can raise her above her permanent Willpower. This Charm may only be used once per story, unless reset by subsequently upholding through violence or intimidation the Intimacy it was used to protect. '
        ]);
        
        App\Charm::create([
            'name' => 'Waves-Swallow-Mountains Persistence',
            'mins' => 'Integrity 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Against the persistence of the tides, even the mightiest arguments crumble into dust. When the Dragon-Blood asserts her Resolve against an influence roll, up to (Essence/2, round up) 1s on the opposing character\'s influence roll each subtract a success. If the DragonBlood uses this Charm multiple times in the same scene against a single character\'s influence, each subsequent use increases the maximum penalty by one, to a maximum of (Essence), and counts the next-highest number towards the penalty. On her second use, 1s and 2s would subtract successes; on the third, 1s, 2s, and 3s would. This Charm can only be used against a single character each scene, although there\'s no limit on how many times the Dragon-Blood may use it against him'
        ]);
        
        App\Charm::create([
            'name' => 'Roots-of-the-World Meditation',
            'mins' => 'Integrity 5, Essence 3',
            'cost' => '—;',
            'element' => 'Integrity',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'Until meditation is completed',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Communing with the endless flow of Essence through every living thing, the Dragon-Blood draws up this boundless vitality to sustain herself. She must spend (10 − Essence) hours in meditation, at the end of which she rolls (Essence + current temporary Willpower). She may spend her successes on one or more of the following: 1 Success Heal a level of bashing or lethal damage. 1 Success Convert a level of aggravated damage to lethal. 2 Successes Halve the duration (round up) of a poison she suffers from. 3 Successes Cure herself entirely of a disease or Derangement at Minor intensity. 5 Successes Reduce a disease or Derangement from Major intensity to Minor. 7 Successes Reduce a disease or Derangement from Defining intensity to Major. This Charm can only be used once per story'
        ]);
        
        App\Charm::create([
            'name' => 'Thicker Than Stone',
            'mins' => 'Integrity 4, Essence 3',
            'cost' => '4m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Inviolate Dragon Spirit, Ten Thousand Dragons Fight as One ',
            'book' => 'DB???',
            'description' => 'One could sooner grind a mountain to dust than turn the Dragon-Blood against her allies. Against influence that opposes one of her positive Ties to another Dragon-Blood, a family member, or a subordinate under her command, she add (Intimacy/2, round down) Resolve as a non-Charm bonus. Successfully resisting the influence grants her a point of Willpower. This Charm can only be used to protect a given Tie once per story.'
        ]);
        
        App\Charm::create([
            'name' => 'Unflagging Vengeance Meditation',
            'mins' => 'Integrity 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Integrity',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Indefinite',
            'prerequisite' => 'Ten Thousand Dragons Fight as One ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood swears vengeance on a character that has harmed the subject of one of her Major or Defining Intimacies, instantly forming a Major Tie of hatred towards him, or strengthening such an existing Tie by one step. She gains +2 Resolve against any influence that would weaken this Tie, or that would deter her from her chosen course of revenge. For the duration of her vendetta, she waives the cost of Uneating Earth Meditation, Unsleeping Earth Meditation, and Untiring Earth Meditation (pp. 247-248). In battle against the object of her vendetta or his allies or minions, she adds +(Intimacy) natural soak and gains (Intimacy) Hardness. If the Dragon-Blood goes a day without pursuing her vendetta, she loses two Willpower. If she has no Willpower remaining, she suffers a level of unpreventable aggravated damage. Upon successfully concluding her vendetta to her satisfaction, she sheds the Intimacy formed by this Charm and gains two points of Willpower. This may bring her above her permanent Willpower rating. This Charm can only be used once per story. If the Dragon-Blood maintains it through multiple stories, she cannot use it again until she\'s ended it and a new story begins'
        ]);
        
        App\Charm::create([
            'name' => 'The Mountain Still Stands',
            'mins' => 'Integrity 5, Essence 4',
            'cost' => '—;',
            'element' => 'Integrity',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Thicker Than Stone When ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood successfully asserts her Resolve against influence that opposes one of her Defining Intimacies, or successfully instills a nontrivial character with one of her Defining Intimacies using any social Ability, she gains a single point of Willpower. This Charm can only be used once per day.  '
        ]);
        
        
        App\Charm::create([
            'name' => 'Indisputable Physical Analysis Technique',
            'mins' => 'Investigation 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood refines her attention to the pristine clarity of water, washing away false leads and red herrings. She may add automatic successes on an Investigation roll for two motes each. She rerolls 6s until they cease to appear.'
        ]);
        
        App\Charm::create([
            'name' => 'Tampering-Detection Technique',
            'mins' => 'Investigation 2, Essence 1',
            'cost' => '1m;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Even the slightest disturbance at the scene of a crime can have consequences that ripple throughout an entire investigation. Success on a case scene roll reveals whether any attempt has been made to conceal evidence (Exalted, p. 224), although not the identity of the character responsible. Alternatively, this Charm can be used when the Dragon-Blood examines an item for signs of tampering. She can automatically tell if any character has used Larceny to interfere with that object in the last (Essence + Investigation) hours — picking a lock, forging credentials, hiding contraband inside a barrel, and so on. This reveals the nature of the tampering, but not the perpetrator\'s identity or the time it occurred. With Investigation 4, Essence 3, the Dragon-Blooded can detect tampering that has occurred in the last (Essence + Investigation) days'
        ]);
        
        App\Charm::create([
            'name' => 'Permeating Insight',
            'mins' => 'Investigation 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Deceit, lies, and obfuscation won\'t avail fugitives from the Dragon-Blood\'s justice. Their sins are pellucid as crystal in her eyes. She adds (Essence) non-Charm dice on a roll to profile a character (Exalted, p. 225). If she succeeds, she gains a temporary Investigation specialty in the profiled character. She retains the specialty indefinitely, but may only have one specialty granted by this Charm at a time'
        ]);
        
        App\Charm::create([
            'name' => 'Scent-of-Crime Method',
            'mins' => 'Investigation 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Permeating Insight ',
            'book' => 'DB???',
            'description' => 'Even if a murderer washes the blood from his hands, the smell of iniquity that clings to his heart draws the magistrate to him. The Dragon-Blood doubles 9s on an Awareness, Investigation, or Survival roll to detect the presence of a character that has made a Larceny roll in the last (Essence) hours. She can determine whether or not a given individual is the source of the guilt by successfully profiling him'
        ]);
        
        App\Charm::create([
            'name' => 'Heart-Maze Navigation',
            'mins' => 'Investigation 3, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Scent-of-Crime Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can test the composure of even the most practiced liar, discovering the path that leads to the truth. When she makes a profile character roll, her target\'s Guile can be penalized by any of his Intimacies that would support revealing information to the Dragon-Blood, lowering it as though it were his Resolve. While the Dragon-Blood is in Water Aura, she can use this Charm to profile a character instantly'
        ]);
        
        App\Charm::create([
            'name' => 'Revelation-of-Associates Hunch',
            'mins' => 'Investigation 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Scent-of-Crime Method ',
            'book' => 'DB???',
            'description' => 'Criminals surround themselves with cronies, accomplices, and hirelings like a bonfire wreathes itself in cast-off embers, leaving behind a trail for an intrepid Dragon-Blood to follow. She rolls an additional non-Charm die for each 10 on an Investigation roll. If she successfully uncovers evidence of crime, she experiences a sensation of flashing heat. Based on the intensity of this heat, she can gauge roughly how many individuals were involved — a lone offender\'s crime barely registers as heat at all, while a conspiracy of hundreds roars like a bonfire. With an Investigation 5, Essence 3 repurchase of this Charm, the Dragon-Blood can detect that a character is connected to the crime with a successful profile character roll enhanced by Revelation-of-Associates Hunch, recognizing an all-too-familiar heat rising off of the suspect. This doesn\'t reveal the role he played in the crime.'
        ]);
        
        App\Charm::create([
            'name' => 'Bloodhound\'s Nose Technique',
            'mins' => 'Investigation 4, Essence 2',
            'cost' => '4m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Water/Wood',
            'duration' => '(Essence) days',
            'prerequisite' => 'Scent-of-Crime Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood smells the sin on a criminal\'s back, pursuing him through city and wilderness alike by the scent of his iniquity. She makes a case scene roll with double 9s to investigate a piece of evidence. The base difficulty of this roll is 3, although the Storyteller may increase the difficulty based on the length of time since the object was left, any exposure to the elements, or supernatural concealment. On a success, the DragonBlood is able to pick up the scent of the character who left the evidence. If she\'s already familiar with that individual, she identifies him immediately. The Dragon-Blood doubles 9s on rolls to track that character by smell, and can recognize his scent without needing an Awareness roll upon coming within medium range of him. In addition, the Storyteller may inform her player, through the Exalt\'s keen sense of smell, whenever a case scene or profile character roll would turn up information relevant to that character'
        ]);
        
        App\Charm::create([
            'name' => 'Tenacious Flowing Truths',
            'mins' => 'Investigation 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'One scene',
            'prerequisite' => 'Tampering-Detection Technique ',
            'book' => 'DB???',
            'description' => 'Attuning her senses to the ebb and flow of truth and lies, the Dragon-Blood can solve even the most challenging cases. She ignores (Essence) points of penalties on rolls to case a scene, as well as on Awareness rolls opposing Larceny. In Water Aura, the Exalt also adds an automatic success on all rolls that benefit from this Charm'
        ]);
        
        App\Charm::create([
            'name' => 'Warrant of Divine Safety',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Investigation',
            'type' => 'Reflexive',
            'effect' => 'Signature (Air)',
            'duration' => '(Essence) hours',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Dragon-Blooded magistrates may bind the wicked to their words, capturing a carelessly offered oath or negotiated concession from the air into which it\'s spoken and sealing it with Essence. She can use this Charm to sanctify any spoken offer made to her of hospitality or of invitation into a building. The invitation must be made by a character with customary authority to do so, even if informal — a guest at a noble\'s court could extend hospitality to a stranger, and even a palace servant might welcome her in discreetly, but a thief or trespasser cannot give a valid invitation. As long as the Dragon-Blood and her companions take no hostile actions, other characters cannot violate the guarantee of hospitality without incurring Heaven\'s wrath. An attacker\'s knife might be blown from his hand by a sudden gust of wind, elemental spirits might appear to restrain an oath-breaker from violence, or a bolt of lightning might strike a would-be poisoner on his way to the kitchen. Whatever consequences the Storyteller introduces should be commensurate to the violation and sufficiently dire to negate most oathbreakers\' attempts at harming those under this Charm\'s protection. Characters with an Essence higher than the Dragon-Blood\'s can attempt to fight despite these consequences, but still face significant obstacles — large penalties, environmental hazards, or similar. This protection is limited to the premises on which she was offered hospitality. It doesn\'t extend beyond the bounds of that location — offering no protection for those outside — and ends if the Dragon-Blood leaves the premises'
        ]);
        
        App\Charm::create([
            'name' => 'Echoes Caught in Stone',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'Bloodhound\'s Nose Technique ',
            'book' => 'DB???',
            'description' => 'Taking a piece of evidence in hand and meditating on it, the Dragon-Blood rolls (Perception + Investigation) against a difficulty equal to the number of days since that evidence was placed. On a successful roll, she hears a relevant conversation that occurred near that object sometime in the last (Essence) months. A murder weapon might reveal the last words between killer and victim, a carelessly abandoned sandal could uncover good-humored banter between thieves, or a hidden switch in a manse might repeat the words of the last person to operate it. To use this Charm, the Dragon-Blood must first have identified an object as evidence with a case scene roll. She may listen through the conversation once, and may need to make hearing-based Awareness rolls to discern very faint or obscured sounds. She doesn\'t control what period in time she listens to, but the Storyteller should select the conversation most relevant to her current investigations. This Charm can only be used once per story, unless reset by upholding a Defining Intimacy in the pursuit of investigating a crime or bringing a criminal to justice.'
        ]);
        
        App\Charm::create([
            'name' => 'Shadow-Immolating Talon',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Supplemental',
            'effect' => 'Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'Heart-Maze Navigation ',
            'book' => 'DB???',
            'description' => 'Her claws unsheathed, the Dragon-Blood brings fire down into the shadows and returns with truth. She can use this Charm to enhance a decisive attack made with any Ability, confronting her enemy with a question or accusation as she attacks. She adds (Essence) bonus dice on the attack roll and doubles 10s on the damage roll. If the Dragon-Blood\'s successes on her attack roll exceeds her target\'s Resolve, he\'s compelled to answer her question or accusation honestly, without deception or half-truths. Even an enemy incapacitated by the attack has time to answer in his final moments. If this would oppose one of his Defining Intimacies, he may pay a point of Willpower to give an answer that is cryptic, half-true, or incomplete. If a character doesn\'t know enough to give the Dragon-Blood an answer, the attack gains no benefits and the cost of this Charm is refunded. Shadow-Immolating Talon can only be used once per scene, unless reset by incapacitating a significant enemy that the Dragon-Blood knows has committed a crime that offends one of her Major or Defining Intimacies. It doesn\'t need to be reset if its target is unable to answer'
        ]);
        
        App\Charm::create([
            'name' => 'Clear Water Prana',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'Tenacious Flowing Truths ',
            'book' => 'DB???',
            'description' => 'As flowing water erodes dirt and stone to reveal what hides beneath, so too does the Dragon-Blood\'s Essence wash away attempts at concealment. The Dragon-Blood focuses her attention on a small area, out to close range from a single point. She rolls to case the scene with double 7s; this requires only one minute of concentration to complete. In addition to any clues she finds, she also detects any items that have been hidden in the area as long as she rolls a single success. This doesn\'t reveal items that are concealed on a character\'s person, or that have been lost rather than purposefully hidden. The Dragon-Blood\'s case scene roll is capable of contesting magical concealment such as EyeDeceiving Camouflage (Exalted, p. 412). Clear Water Prana can only be used once per story, unless reset by accomplishing a major character or story goal (Exalted, p. 170) by successfully concluding an investigation or using the information gained from one'
        ]);
        
        App\Charm::create([
            'name' => 'Death-Unraveling Eye',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The ravages of decay and deterioration fall away from the Dragon-Blood\'s perspective as she looks on the dead through eyes lit with Wood Essence. She can examine a corpse that has been dead for no more than (Essence + Perception) years with a case scene roll, ignoring penalties from the decomposition of the corpse or any dismemberment inflicted on it. In addition to any information turned up by the case scene roll, the Dragon-Blood is capable of mentally rewinding the corpse\'s decomposition, allowing her to view it as it was at the time of death and potentially identify him. She can analyze the state of the corpse\'s injuries or diagnose any conditions present at the time of death with a (Perception + Medicine) roll, doubling 9s. Additionally, by viewing the entire process of the corpse\'s decomposition in reverse, she automatically notices any conflicts with information she\'s already turned up. For example, if a criminal hid a corpse in an ice chest to slow its rate of decay, the Dragon-Blood would be able to notice the slowed progress of deterioration and infer that the victim has been dead longer than he appears'
        ]);
        
        App\Charm::create([
            'name' => 'A Face in the Fog',
            'mins' => 'Investigation 4, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Reflexive',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Revelation-of-Associates Hunch, Tenacious Flowing Truths ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood draws information from the flow of Essence through a crime scene, calling up a vision of her suspect from the murky depths of the past. When she succeeds on a case scene roll opposed by another character\'s attempt at concealing evidence, she may activate this Charm. For a moment, her perception of the space around her is filled with a thick, heavy mist. She catches a glimpse of the perpetrator in the mist — not enough to recognize him, but sufficient to convey some combination of height and build, gender, age, or other distinctive features. If the Dragon-Blood encounters the perpetrator, a successful profile character roll allows her to confirm that he\'s the one she saw. Upon doing so, she gains a point of Willpower.'
        ]);
        
        App\Charm::create([
            'name' => 'Falsehood-Unearthing Attitude',
            'mins' => 'Investigation 4, Essence 3',
            'cost' => '3m;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Heart-Maze Navigation ',
            'book' => 'DB???',
            'description' => 'Even an honest man can lie, and the Dragon-Blood knows why. She makes a profile character roll with (Essence/2, rounded up) bonus successes, requiring only a few seconds. Success reveals one of that character\'s Intimacies that he\'d be willing to lie to protect. If the character has multiple such Intimacies, the Storyteller should choose the one most directly relevant to ongoing events. For example, if she profiles a character while investigating embezzlement from the Imperial Treasury, she might discover his Defining Principle of unscrupulous greed. Using it against the same character amidst a murder mystery might reveal a Tie to someone else who could be a potential suspect in the case'
        ]);
        
        App\Charm::create([
            'name' => 'Foul Stench of Lies Discernment',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Reflexive',
            'effect' => 'Air, Mute',
            'duration' => 'Instant',
            'prerequisite' => 'Falsehood-Unearthing Attitude ',
            'book' => 'DB???',
            'description' => 'To speak lies before a Dragon-Blood is to foul the air with one\'s breath. The Dragon-Blood may reflexively roll to profile a character when she hears him make a statement, adding (Essence) non-Charm bonus dice. A successful roll reveals whether that character was attempting to be deceptive or misleading with his statement. It doesn\'t reveal what parts of the statement are untrue. Once the Dragon-Blood has caught a character lying, she waives the Willpower cost of any subsequent activations against that character in the same scene. '
        ]);
        
        App\Charm::create([
            'name' => 'Scent of the Stranger\'s Threshold',
            'mins' => 'Investigation 4, Essence 3',
            'cost' => '1m;',
            'element' => 'Investigation',
            'type' => 'Reflexive',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Bloodhound\'s Nose Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can tell outsiders from locals with a glance, picking up on the subtle cues woven into the living web of society. While she\'s in a city, village, or similar settlement, she can determine whether a character she perceives lives in that location, no matter how humble the place he calls home. Outside of a settlement, she instead discerns if a character is a resident of the largest nearby settlement she\'s aware of. Fair Folk always appear as strangers, no matter how integrated into society they may be, but this doesn\'t reveal their true nature. If the Dragon-Blood uses this Charm against a character in disguise or employing a similar magical deception, and learning his residence would compromise his ruse, she must roll (Perception + Investigation) with double 9s against his Guile. On a failed roll, the Dragon-Blood receives a result that conforms with her target\'s cover. If the Dragon-Blood has memorized a character\'s scent with Bloodhound\'s Nose Technique, she can use this Charm to see if he calls a place home without needing him to be present'
        ]);
        
        App\Charm::create([
            'name' => 'Homeward Trail Discovery Method',
            'mins' => 'Investigation 5, Essence 3',
            'cost' => '—;',
            'element' => 'Investigation',
            'type' => 'Reflexive',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Scent of the Stranger\'s Threshold ',
            'book' => 'DB???',
            'description' => 'Both dragons and thieves take great interest in tending to their lairs; neither can hide from the vigilant magistrate. Once the Dragon-Blood has used this Charm\'s prerequisite to determine that a character lives in a location, this Charm activates when she comes in sight of a door or other entryway into his home. In her perspective, the entryway briefly flashes blue with the Essence of air, automatically revealing it to her. If she rolls to pick a lock, force a door, or otherwise secure her entry by physically manipulating an entrance, she doubles 9s on the first such roll.'
        ]);
        
        App\Charm::create([
            'name' => 'River-of-Memory Meditation',
            'mins' => 'Investigation 5, Essence 4',
            'cost' => '5m;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'A Face in the Fog, Bloodhound\'s Nose Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood knows the criminal underworld as an angler knows the sea. After uncovering evidence or a clue that a crime has been committed, she rolls (Perception + Investigation) to correlate the details of the crime with what she knows of any character that she\'s successfully profiled during this story, at a difficulty of (higher of his Essence or Larceny). Success reveals whether that character has a Major or Defining Intimacy that would have supported committing the crime. This doesn\'t reveal what his Intimacy is or whether he\'s guilty, only that he has a compelling motive. This Charm can also be used to recognize the signature method or calling card of a criminal, allowing the Dragon-Blood to instantly recognize a crime committed in the style of a character she\'s profiled, and to distinguish his work from that of a copycat'
        ]);
        
        App\Charm::create([
            'name' => 'Inescapable Wave Insight',
            'mins' => 'Investigation 5, Essence 5',
            'cost' => '8m, 1wp;',
            'element' => 'Investigation',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'One investigation',
            'prerequisite' => 'River-of-Memory Meditation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood builds her case day by day, every piece of evidence or witness questioned adding another drop to the rising tide of her investigation. As she completes her case, these waters overflow their banks in an overwhelming torrent of revelations. After uncovering a number of clues equal to (higher of her target\'s Essence or Larceny) through case scene rolls, profile character rolls, or roleplaying, the Dragon-Blood gains the following benefits until she\'s conclusively closed the case: • She adds (Essence) bonus dice on Investigation rolls against her suspect, Awareness rolls opposing his Stealth or Larceny, and on Join Battle rolls against him. • When she uses one or more Investigation Charms targeting him, the total Willpower cost is reduced by one point and their mote cost is muted. • She may treat any social influence that requires her to end the investigation as unacceptable (Exalted, p. 220). Once she apprehends the suspect and decides on how best to do justice, any influence to deter her from that course is likewise unacceptable. Inescapable Wave Insight can only be used once per story, unless reset by witnessing a serious crime that offends against one of her Defining Intimacies. '
        ]);
        
        
        App\Charm::create([
            'name' => 'Underground River\'s Flow',
            'mins' => 'Larceny 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Adept at criminal ways, the Dragon-Blood moves effortlessly within criminal underworlds. She may add automatic successes to a Larceny roll for two motes each'
        ]);
        
        App\Charm::create([
            'name' => 'Flowing Body Disguise',
            'mins' => 'Larceny 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s subtle arts make her appearance as fluid as water. She ignores (Essence) points of penalty on a disguise roll from impersonating a specific character, or disguising herself as someone of another sex, body type, or similar physical traits. If the Dragon-Blood impersonates one of her blood relatives, she adds a non-Charm bonus success on her roll. '
        ]);
        
        App\Charm::create([
            'name' => 'Nimble Thief\'s Fingers',
            'mins' => 'Larceny 2, Essence 1',
            'cost' => '1m;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'No one can follow the sinuous, fluid motions of the Dragon-Blood\'s hands as she enacts her sleight. She rerolls 6s until they cease to appear on a roll to steal an object, pick a lock, poison a meal, cheat at cards, or any other use of Larceny that involves manual dexterity or sleight of hand.'
        ]);
        
        App\Charm::create([
            'name' => 'Resetting Tumblers Technique',
            'mins' => 'Larceny 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood washes away all signs of her trespass, doubling 9s on a roll to conceal evidence (Exalted, p. 224)'
        ]);
        
        App\Charm::create([
            'name' => 'Naked Thief Style',
            'mins' => 'Larceny 3, Essence 1',
            'cost' => '1m;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Stackable, Water',
            'duration' => 'Indefinite',
            'prerequisite' => 'Resetting Tumblers Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is a master of concealing small items, whether smuggling contraband through a port or concealing her lock picks in her coiffure. She rolls ([Dexterity or Appearance] + Larceny) to conceal on her body a single item small enough for her to hold in one hand, or an entire set of thieves\' tools, such as a roll of lockpicking equipment or a disguise kit. Characters cannot roll (Perception + Awareness) to contest this concealment unless they\'re within short range of the Exalt or use magic that extends the range of their senses. She may stack up to (Dexterity) uses of this Charm to conceal multiple items'
        ]);
        
        App\Charm::create([
            'name' => 'Observer Awareness Method',
            'mins' => 'Larceny 2, Essence 1',
            'cost' => '1m;',
            'element' => 'Larceny',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Even the slightest ripple of attention is perceptible to the savvy Dragon-Blood. When her suspicions are roused, she may invoke this Charm to roll (Perception + Larceny). As long as she rolls a single success, she can intuitively discern whether she\'s being watched and by how many people. With Larceny 4, Essence 2, the Dragon-Blood may identify the precise location of an observer if she beats (the higher of his Stealth or Guile).'
        ]);
        
        App\Charm::create([
            'name' => 'Rose-Among-Thorns Distinction',
            'mins' => 'Larceny 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Observer-Awareness Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood weaves herself seamlessly into the company of thieves and gangsters. After spending at least an hour interacting with a particular criminal society, such as “the Nexus crime underworld” or “the Lintha family,” that she\'s interacted with in the past, she may gain a temporary Larceny specialty in interacting with it. The specialty also applies on any influence rolls she makes to convince others she belongs to that criminal group or to exploit that belief. She retains the specialty indefinitely, but may only have one specialty granted by this Charm at a time'
        ]);
        
        App\Charm::create([
            'name' => 'Whispering Thief Technique',
            'mins' => 'Larceny 4, Essence 1',
            'cost' => '2m;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Observer Awareness Method ',
            'book' => 'DB???',
            'description' => 'A subtle current of wind carries the Dragon-Blood\'s words through the air. This Charm lets her throw her voice, making it seem to come from a character or object within short range. This ventriloquism supplements a single influence roll or about ten seconds\' worth of ordinary dialogue. While in stealth, she can use this Charm to speak without breaking concealment'
        ]);
        
        App\Charm::create([
            'name' => 'Artful Flowing Theft',
            'mins' => 'Larceny 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Nimble Thief\'s Fingers, Observer Awareness Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s wandering fingers strike suddenly and without warning, wresting away treasures like a riptide. She doubles 9s on a roll to pickpocket or steal from a character, and increases the difficulty of noticing the theft for all characters other than the victim by (Essence) unless they use magic or superhuman senses to oppose her roll. Even if she fails, her target doesn\'t realize she was trying to steal from him unless he beats her roll with (Essence) threshold successes. This Charm can only be used once per scene. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Hidden Treasure',
            'mins' => 'Larceny 3, Essence 2',
            'cost' => '1m;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Naked Thief Style ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strikes the earth or an earthen structure with precise deliberation, attuning herself to the flow of Earth Essence. She may cause a held object to vanish into soil, stone, or similar materials, submerging into them without displacing or increasing the earth. She cannot store an object in something that is smaller than it — she could hide her daiklave in a brick wall, but not in a pebble, coin, or gemstone. A second use of this Charm allows her to retrieve the embedded object. This Charm can also be used to steal objects that other Dragon-Blooded have hidden using it. Finding the location of a hidden cache usually requires both Investigation and Awareness rolls. The hidden object also reappears, intact, if whatever it\'s embedded in is destroyed'
        ]);
        
        App\Charm::create([
            'name' => 'Face-Stealing Reflection',
            'mins' => 'Larceny 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Flowing Body Disguise, Observer Awareness Method ',
            'book' => 'DB???',
            'description' => 'Flowing from one identity to another, the DragonBlood reflects the desires and expectations of those around her. She rolls read intentions with (Perception + Larceny). Success reveals the identity of an individual her target has a Tie towards that the Dragon-Blood knows well enough to attempt to disguise herself as, as well as the nature of the Intimacy. If no such individual exists, she learns that instead. In Water Aura, the Exalt doubles 9s on the roll'
        ]);
        
        App\Charm::create([
            'name' => 'Bramble Purse Technique',
            'mins' => 'Larceny 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One hour',
            'prerequisite' => 'Observer Awareness Method ',
            'book' => 'DB???',
            'description' => 'It\'s easier to pluck a jewel from within a briar hedge than from a Dragon-Blood\'s pocket. All rolls to pickpocket the Exalt or disarm her from close range lose (Essence) dice. On a failed roll, the would-be thief suffers a single level of lethal damage as invisible thorns of Essence pierce his hand, visibly marking his crimes.'
        ]);
        
        App\Charm::create([
            'name' => 'Evidence-Erasing Tide',
            'mins' => 'Larceny 4, Essence 2',
            'cost' => '4m, 1a;',
            'element' => 'Larceny',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Resetting Tumblers Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s anima banner overflows, rushing across a crime scene to wash away all signs of her presence. She completes a conceal evidence roll instantly, and adds a non-Charm bonus success'
        ]);
        
        App\Charm::create([
            'name' => 'Instant Disguise Prana',
            'mins' => 'Larceny 4, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Flowing Body Disguise ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can roll to disguise herself in a single minute, and does so without any need for makeup, props, or other equipment. If she does have suitable equipment for her disguise, her roll benefits from double 9s'
        ]);
        
        App\Charm::create([
            'name' => 'Waters-of-Honesty Method',
            'mins' => 'Larceny 4, Essence 2',
            'cost' => '3m;',
            'element' => 'Larceny',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Observer Awareness Prana ',
            'book' => 'DB???',
            'description' => 'No one outcheats a cheater. Whenever a character the Dragon-Blood can perceive attempts to cheat in a game or use the Larceny Ability, she may read intentions with (Perception + Larceny) against the perpetrator\'s Guile. Success reveals the identity of the perpetrator and the nature of his misdeed. On a failed roll, she\'s aware that some wrongdoing has occurred, but not who did it or what it was. Disguises don\'t trigger this Charm, unless the DragonBlood witnesses a character disguising himself'
        ]);
        
        App\Charm::create([
            'name' => 'Vault-Emptying Whirlwind Heist',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '8m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => '(Essence) days or Until crime is completed',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s foresight envisions countless possible scenarios that might occur in a crime, planning out contingencies and countermeasures for any obstacle that she can conceive. Invoking this Charm requires spending an hour casing the site of a planned heist, planning out the steps of a crime, consulting with various criminal allies, or other activities taken in preparation of a crime. She rolls (Intelligence + Larceny), banking all rolled successes. To access the banked successes, the Dragon-Blood must begin the planned crime. She may add some or all of the banked successes as a Charm bonus on any rolls that she or another character present in the scene makes with Larceny, Investigation, Lore, or Stealth to advance the crime. Additionally, she may expend banked successes to gain the following effects: 1 Success Retroactively leave her calling card, mark, or sign in a dramatic location. 2 Successes Waive the anima cost of Evidence-Erasing Tide. 5 Successes Waive the Willpower cost of Instant Disguise Prana. 7 Successes Invoke Investigation-Deflecting Current (if she knows it) retroactively to conceal evidence of an act she\'s already committed in the course of the crime. Vault-Emptying Whirlwind Heist can only be used once per story, unless reset by successfully upholding a Major or Defining Intimacy as the result of a successful crime. This can either be direct, such as stealing a jewel the Exalt has a Tie of avarice towards, or indirect, such as fencing a jewel in order to feed a community of urchins she has a Tie of compassion for'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Snatches Jewel',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s grasp is as sure as stone, capable of wresting away the weapons of the Anathema. She makes a disarm gambit from close range with (Dexterity + Larceny), doubling 9s. On a successful gambit, the Exalt may reflexively ready the disarmed weapon and is refunded the gambit\'s Initiative cost. If she disarms an artifact weapon, she reflexively attunes to it at no cost for the rest of the scene. This breaks the original character\'s attunement. Alternatively, she may steal a hearthstone out of the socket of an enemy\'s artifact, likewise stealing attunement to it for the rest of the scene. This Charm can only be used once per scene.'
        ]);
        
        App\Charm::create([
            'name' => 'Burning Sins Seduction',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s tongue stokes the flames of criminal passions, inciting poorly made decisions and reckless disregard for law. She makes a special inspire roll with ([Charisma or Manipulation] + Larceny) against a single character, expounding on the folly of the law or the thrill of the criminal lifestyle. On a successful roll, the target\'s player chooses what emotion this influence inspires in him, as well as one of his Intimacies related to that emotion that he\'d be willing to break the law for. If he has no such Intimacies, he must form a Minor Intimacy that answers this question. The action that he takes as a result of this influence (Exalted, p. 217) must be a crime or equivalent transgression, and must uphold the inflamed Intimacy. Resisting this influence requires the target to enter a Decision Point, calling on an Intimacy of equal or greater strength than the inflamed Intimacy'
        ]);
        
        App\Charm::create([
            'name' => 'Flowing God-Dragon Stance',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '15m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Aura, Mute, Signature (Water)',
            'duration' => 'Aura',
            'prerequisite' => 'Artful Flowing Theft, Evidence-Erasing Tide ',
            'book' => 'DB???',
            'description' => 'It\'s the nature of water to flow past obstacles unchanged. The Dragon-Blood sloughs off the physicality of flesh, her body becoming fluid and translucent for as long as she remains in Water Aura. With her movement action, she may attempt to flow through locked doors, cracks in walls, or any other obstruction that isn\'t waterproof — passing through the bars of a jail cell, flowing under a door, or pouring herself through a crack in a wall. This also lets her escape any grapple not enhanced by magic. If this Charm ends while she\'s in a space too narrow to contain her, she\'s forcibly shunted back to where she entered it, and suffers a level of unpreventable bashing damage. The Dragon-Blood\'s watery form is more difficult to damage, granting her +1 Evasion. If she\'s unarmored, she also gains (Essence + 1) hardness. She adds (Essence/2, rounded up) bonus successes on all Stealth rolls. If she attempts to hide underwater, these don\'t count as a Charm bonus. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Terrifying Forest-Devil Mask',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'One day',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood dons a mask and vanishes into a world of legends and devils, taking up a disguise embodying an archetypal warrior-hero, monster, or mythic character. Most Dynasts create ornate ritual masks from wood by hand, shaping their persona as they carve it, but any mask suffices on short notice if it suitably evokes the persona\'s image. She rolls to create a disguise with double 7s. Her persona must be either a fictitious identity or archetypal role — such as an Immaculate Dragon, a hero or villain out of folklore, a legendary figure of the Shogunate, or a figure invented out of whole cloth. Her disguise only serves to conceal her identity, not to impersonate specific characters. She divides (Essence) temporary specialties that fit her persona among any of her Abilities for as long as she remains in disguise. Upon donning the mask, the Dragon-Blood accepts a Defining Intimacy that suits her role, such as “Those who abuse their power must be humbled” or “Destroy all Anathema.” As long as she remains in disguise, this Intimacy cannot be weakened or changed by any means. Onlookers who fail to beat her disguise roll will react to her as though they had a Minor Tie, with a context appropriate to her persona and the circumstances. A folk hero might inspire gratitude among the peasants she fights for while drawing the ire of princes and their minions; a horrible devil inspires sheer terror in all who look upon it. In combat, an enemy may attempt to strike away the Dragon-Blood\'s mask as a difficulty 6 gambit Success ends this Charm'
        ]);
        
        App\Charm::create([
            'name' => 'Vaporous Visage Evasion',
            'mins' => 'Larceny 4, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'One scene',
            'prerequisite' => 'Instant Disguise Prana ',
            'book' => 'DB???',
            'description' => 'Even those who peer into the sea know nothing of its hidden depths. The Dragon-Blood embodies this secrecy, wearing masks behind masks. When another character succeeds on a roll to pierce her disguise, she may conceal her features behind a swirling cloud of mist that spumes from her anima, perfectly obscuring her identity. The opposing character and other onlookers realize that she wasn\'t who she was posing as, but don\'t learn anything about who she actually is. The Dragon-Blood reverts back to her true appearance at the end of the scene, making a hasty retreat advisable.'
        ]);
        
        App\Charm::create([
            'name' => 'Incendiary Accusation Approach',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Waters-of-Honesty Method ',
            'book' => 'DB???',
            'description' => 'Every criminal knows that they\'re playing with fire, but those who dare to cheat the Dragon-Blood discover just how true that is. When she uses this Charm\'s prerequisite to detect a character cheating or using Larceny, she may pay an additional one mote and one Willpower to cause a small fire to ignite on his person, revealing his misdeeds to all and rolling a single die of lethal damage against him, ignoring Hardness. A cheating gambler\'s illicit cards go up in flames, while a pickpocket is caught literally red-handed'
        ]);
        
        App\Charm::create([
            'name' => 'Investigation-Deflecting Current',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Evidence-Erasing Tide ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood diverts the watchful eyes of the law from her misdeeds, redirecting them in pursuit of endless false leads or of her own foes, like fish swimming against the tide. She makes a roll to conceal evidence, arranging the scene so that a specific character she knows of is implicated as the perpetrator of whatever actions she took that scene. An investigator who fails his roll to case the scene believes that he\'s succeeded, but receives a false clue that points him towards the character the Exalt framed. Even on a successful roll, he still finds the false clue, but also discovers any genuine evidence left behind. He\'s aware of the discrepancy, but doesn\'t know which clue is false. A character may realize he\'s been duped if he turns up enough contradictory evidence. Each time he discovers a clue which contradicts the Dragon-Blood\'s deception, he rolls (Intelligence + Investigation) opposing the conceal evidence roll to realize the discrepancy and identify the clue as false. Even if he fails, he gains a cumulative +1 nonCharm bonus on his roll the next time he discovers a clue. Investigation-Deflecting Current can only be used once per story, unless the Exalt resets it by conclusively defeating the attempts of a significant character to investigate her crimes'
        ]);
        
        App\Charm::create([
            'name' => 'Mischievous Wind Grasp',
            'mins' => 'Larceny 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Artful Flowing Theft ',
            'book' => 'DB???',
            'description' => 'The air itself is the Dragon-Blood\'s accomplice when she has need of it, rising up in a small breeze directed by deft hand gestures. She directs a subtle current of wind to dislodge an object small enough to hold in one hand from a character within short range, whether it\'s stationary or on someone\'s person, though not one that a character\'s currently using. She could pull a key ring from a jailer\'s belt, pluck a sealed letter out of a courtier\'s robes, or knock a wineglass off a banquet table. If the item is on someone\'s person, the Exalt must roll (Wits + Larceny) opposing his (Perception + Awareness) roll. In combat, this is treated as a ranged disarm gambit. A successful roll dislodges the item, causing it to fall to its owner\'s feet. Other characters cannot notice this for up to one minute or (Essence) rounds, whichever comes first, unless circumstances call attention to it, such as trying to draw a displaced blade. Even on a failed roll, onlookers don\'t realize the unnatural nature of the wind unless they use magic, though repeated use may stir suspicions. In Air Aura, this Charm\'s range is extended to medium'
        ]);
        
        App\Charm::create([
            'name' => 'Exploding Evidence Technique',
            'mins' => 'Larceny 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Fire, Mute',
            'duration' => 'Instant',
            'prerequisite' => 'Investigation-Deflecting Current ',
            'book' => 'DB???',
            'description' => 'Such is the fire behind the Dragon-Blood\'s crimes of passion that any investigator that pursues her risks being burned. She makes a conceal evidence roll, rolling a non-Charm bonus die for every 10 that appears, and suffuses the hidden evidence with Fire Essence. If a character attempts to case the scene and fails, the evidence catches fire, exposing him and anyone else on the scene to a one-time environmental hazard with difficulty 5, Damage (Essence)L. This conflagration all but obliterates any evidence remaining at the scene, increasing the difficulty of any subsequent rolls to case the scene by (the Dragon-Blood\'s Essence).'
        ]);
        
        App\Charm::create([
            'name' => 'Window-In-The-Door Technique',
            'mins' => 'Larceny 5, Essence 4',
            'cost' => '2m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'One round',
            'prerequisite' => 'Mischievous Wind Grasp ',
            'book' => 'DB???',
            'description' => 'Locks and walls aren\'t enough to stymie the prying curiosity of a Dragon-Blooded thief. She may peer through an obstruction as though it were pellucid water, spying through solid walls or examining the contents of a chest before risking its trapped lock. This is a (Perception + Larceny) roll against a difficulty based on the material and thickness of the obstacle she attempts to see through. For example, a wooden door or chest is difficulty 1; a stone wall or metal vault would be difficulty 3; a manse\'s walls, an artifact container, or the heavy stone walls of a fortress are difficulty 5+. Barriers more than (Essence + Perception) feet thick can\'t be seen through. A successful roll causes a small portion of the obstruction, up to (Essence) square feet, to appear totally translucent to the Exalt (but not to anyone else). Each use of this Charm lasts a single round, or around ten seconds out of combat. If the Dragon-Blood wishes to renew this Charm at the end of that duration, she doesn\'t need to pay its Willpower cost or make another roll. While using this Charm, the Exalt may reflexively activate Mischievous Wind Grasp, waiving its Willpower cost, to send a current of wind through the barrier as though it weren\'t there'
        ]);
        
        App\Charm::create([
            'name' => 'Expectation-Mirroring Stance',
            'mins' => 'Larceny 5, Essence 5',
            'cost' => '10m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Face-Stealing Reflection, Instant Disguise Prana ',
            'book' => 'DB???',
            'description' => 'Those who gaze too long into their own reflection in the water risk drowning in themselves. Upon successfully using Face-Stealing Reflection, the Dragon-Blood may use this Charm to instantly and reflexively roll to disguise herself as the revealed character. Every threshold success on her read intentions roll grants her one mote to spend enhancing her disguise'
        ]);
        
        App\Charm::create([
            'name' => 'Infallible Alibi Approach',
            'mins' => 'Larceny 5, Essence 5',
            'cost' => '13m, 1wp;',
            'element' => 'Larceny',
            'type' => 'Reflexive',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Exploding Evidence Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is everywhere and nowhere in the sea of crime. Such is her criminal ingenuity and masterful deception that she leaves no trace of her passage. Whenever an investigator rolls enough successes to uncover a piece of evidence she\'s concealed, she may use this Charm to oppose the investigator\'s roll with a special (Manipulation + Larceny) conceal evidence roll, doubling 7s. If she beats his roll, his attempt fails, and whatever evidence she left behind dissolves away into water, rendering future attempts futile. While the evidence is erased, the vanished secret drifts through the mysterious flows of Water Essence, finding itself drawn to the Dragon-Blood. A successful use of this Charm marks her with a swirling tattoo of black jade over her heart chakra. If the tattoo is revealed, witnesses may attempt a difficulty 3 (Intelligence + Occult) roll to realize the Dragon-Blood has used this Charm. Infallible Alibi Approach can only be used once per story, unless reset by accomplishing a legendary social goal (Exalted, p. 134) through criminal or underhanded means. Once the Charm resets, the incriminating tattoo vanishes. '
        ]);
        
        
        App\Charm::create([
            'name' => 'Lightning Quill Mastery',
            'mins' => 'Linguistics 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Linguistics',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s brush scatters calligraphy across the page like leaves on the wind. She may add bonus successes to a Linguistics roll for two motes each. Each 10 on her roll rerolls a non-1 failed die.'
        ]);
        
        App\Charm::create([
            'name' => 'Cryptic Essence Cipher',
            'mins' => 'Linguistics 2, Essence 1',
            'cost' => '5m;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Water, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s mastery of speech and language is synonymous with her mastery of deception. She rolls ([Manipulation or Intelligence] + Linguistics) to create a coded message, designating a single character who can understand it. Through her insight into his mind, she devises a cipher that he can intuitively read — for him, the symbols on the page seem to rearrange themselves to spell out the hidden message. For others, deciphering the message, even with code-breaking magic, requires a ([Perception or Intelligence] + Linguistics) roll opposing the DragonBlood\'s initial roll. Alternatively, the Dragon-Blood may draw from one of her Principles to create a code that can be intuitively understood by any character who shares that Intimacy'
        ]);
        
        App\Charm::create([
            'name' => 'Signature-Stealing Calligraphy',
            'mins' => 'Linguistics 2, Essence 1',
            'cost' => '4m;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Water, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s calligraphy ripples like the surface of a pond and settles into another writer\'s hand. She rolls (Manipulation + Linguistics) to forge another character\'s handwriting and mimic his writing style. If she includes written social influence in the forgery, she uses the same roll. Using this Charm requires access to either a full manuscript or three smaller samples of the character\'s writing. A reader may roll (Perception + Linguistics) opposing the Dragon-Blood\'s roll to detect the forgery, granting +2 Resolve against any influence it contains'
        ]);
        
        App\Charm::create([
            'name' => 'Fervor-Inciting Brushstrokes',
            'mins' => 'Linguistics 3, Essence 1',
            'cost' => '3m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Supplemental',
            'effect' => 'Fire, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood writes words to spark flames in her readers\' hearts, incinerating all inhibitions in a swell of passion. She doubles 9s on a written inspire roll that creates anger, fear, lust, or another powerful passion. If she chooses to tailor her influence for a single reader only, he must enter a Decision Point and call upon a Major or Defining Intimacy to resist'
        ]);
        
        App\Charm::create([
            'name' => 'Tenacious Dragon Scholar',
            'mins' => 'Linguistics 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Linguistics',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood isn\'t easily swayed by idle words. She gains +1 Resolve against written influence, and may use Linguistics in place of Integrity to calculate her Resolve against written influence'
        ]);
        
        App\Charm::create([
            'name' => 'Wind-Carried Words Technique',
            'mins' => 'Linguistics 1, Essence 1',
            'cost' => '3m;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood speaks into the wind, sending her voice afar on subtle currents of air. She may send a spoken message of no more than a few sentences to a chosen target within (Essence) miles. Messages sent with this Charm cannot be overheard or intercepted by any mundane means. Magical attempts to do so must overcome a difficulty of (the Dragon-Blood\'s Essence + Linguistics). This Charm\'s range extends to (Essence x5) miles at Linguistics 3, and (Essence x10) miles at Linguistics 5. With Linguistics 5, Essence 4, the Terrestrial may pay one Willpower to extend it to (Essence x100) miles.'
        ]);
        
        App\Charm::create([
            'name' => 'Language-Learning Ritual',
            'mins' => 'Linguistics 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood contemplates a foreign tongue until its meaning is, like air, transparent. She may use this Charm to gain understanding of a language that she\'s spent at least (6 − Intelligence) days studying, allowing her to understand it in both spoken or written forms. This doesn\'t confer the ability to communicate in that language. With Linguistics 4, Essence 2, the Dragon-Blooded may speak and write in the chosen language. She is lacking in accent and unsophisticated in vocabulary, imposing a −3 success penalty on any social influence rolls. With Linguistics 5, Essence 3, the Dragon-Blooded no longer suffers a penalty after a total of (6 − Intelligence) weeks spent studying or using it'
        ]);
        
        App\Charm::create([
            'name' => 'Enigma-Reading Eye',
            'mins' => 'Linguistics 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Cryptic Essence Cipher ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s eye pierces ciphers and circumlocutions like lightning. She rolls ([Perception or Intelligence] + Linguistics) with double 9s to break a code or deceptive message, including those that aren\'t ciphered but have hidden subtext. Success lets her decipher the text as she reads it, completing hours or days of work in minutes. Enigma-Reading Eye is capable of contesting magical codes or ciphers, such as Letter-Within-A-Letter Technique (Exalted, p. 323)'
        ]);
        
        App\Charm::create([
            'name' => 'Thousand Tongues Meditation',
            'mins' => 'Linguistics 3, Essence 2',
            'cost' => '—(+5m, 1wp);',
            'element' => 'Linguistics',
            'type' => 'Permanent',
            'effect' => 'Air',
            'duration' => 'Permanent',
            'prerequisite' => 'Language-Learning Ritual ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood has mastered fundamental principles of language, allowing her to converse with anyone from the conquered princes of the Realm\'s dominion to the most savage barbarians beyond its borders. She may pay an additional five motes and one Willpower when she uses Language-Learning Ritual to waive the need for prior study and extend its effect to all languages she\'s ever encountered, rather than a single language, developing fluency without needing any prior study'
        ]);
        
        App\Charm::create([
            'name' => 'Voices on the Wind',
            'mins' => 'Linguistics 3, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'One scene',
            'prerequisite' => 'Wind-Carried Words Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is privy to backroom dealings and covert assignations, drawing hushed whispers to her ear on currents of air. She adds (Linguistics/2, rounded up) bonus dice on rolls to eavesdrop on conversations. If she reads a character\'s intentions while eavesdropping on him from medium range or further, he takes the −2 Guile penalty for being unaware of her even if he can see her'
        ]);
        
        App\Charm::create([
            'name' => 'Speech Without Words',
            'mins' => 'Linguistics 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Linguistics',
            'type' => 'Reflexive',
            'effect' => 'Air',
            'duration' => 'One scene',
            'prerequisite' => 'Voices on the Wind ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood creates a bond between herself and her Sworn Kin, as well as up to (Essence) additional characters, allowing them to communicate silently for the duration of this Charm. Hand gestures, body language, and other visual signals are as easily understood as spoken language, although only short, simple sentences can be conveyed. Most onlookers don\'t perceive this signaling, but a character specifically on watch for such tactics or using superhuman or magically enhanced senses may roll (Perception + Awareness) against any participant\'s Guile to notice, but not understand, his signalling'
        ]);
        
        App\Charm::create([
            'name' => 'Caustic Wit Invective',
            'mins' => 'Linguistics 4, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Water, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'Fervor-Inciting Brushstrokes ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood lets her scorn overflow into her words, her sarcasm and ridicule slowly wearing down even the strongest-rooted beliefs. She writes a mocking message or satire that conveys an instill roll to erode a specific Principle or positive Tie. Her mockery inflicts momentary doubts on even the most dedicated readers, preventing them from drawing on the targeted Intimacy to bolster their Resolve.'
        ]);
        
        App\Charm::create([
            'name' => 'Flashing Saga Flourish',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Signature (Air), Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s brush strikes the page like a levinbolt, the only thing swift enough to keep pace with her inspiration. She doubles 7s on a written Linguistics roll, and dramatically reduces the time needed to complete the work — a long-form work like a book or collection of poetry requires only a day, and anything shorter is finished in seconds. This Charm can only be used once per story, unless reset by upholding a Defining Principle by authoring, distributing, or defending a written text'
        ]);
        
        App\Charm::create([
            'name' => 'Unshattered Diamond Parables',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Linguistics',
            'type' => 'Reflexive',
            'effect' => 'Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Every word the Dragon-Blood has ever written is engraved into her soul, giving her the strength to defy. In a Decision Point (Exalted, p. 221), she may call upon a novel, collection of poetry, or other long-form written work she\'s completed over the course of the chronicle. Her player summarizes the work\'s theme or moral in a short phrase, which she treats as a Major Intimacy in the Decision Point. The Dragon-Blood can\'t invoke the same work twice — she must continue writing to maintain her resolve. Works that have already played a significant narrative part in the Dragon-Blood\'s story carry a stronger weight, and count as Defining Intimacies. This includes any work whose completion fulfilled a major character or story goal (Exalted, p. 170) or legendary social goal (Exalted, p. 134), or any other work the Storyteller agrees is sufficiently meaningful. In Earth Aura, the Dragon-Blood may expend her Aura state in place of the Willpower cost to resist influence in a Decision point'
        ]);
        
        App\Charm::create([
            'name' => 'Wildfire Words Technique',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Signature (Fire), Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s words spread across Creation like swift-burning flame, a thousand tongues of fire repeating her message in every direction. She makes a written (Charisma + Linguistics) instill roll with (Essence) non-Charm dice to create or strengthen an Intimacy based on a strong passion — love, anger, valor, fear, lust, or the like. She rolls an additional non-Charm die for every 10 on the roll. On a success, the instilled Intimacy can\'t be altered or removed for the next (6 − his Integrity) days, although it can be weakened. The next time the target engages in a conversation during this time, he\'s overcome with a burning urge to spread that Intimacy, and must attempt his own instill roll against all listeners, adding (Exalt\'s Essence) non-Charm dice. His words don\'t convey this Charm\'s effect, though he may direct listeners to the Dragon-Blood\'s text. This Charm can only be used once per story, unless reset by upholding a Major or Defining Intimacy based on fiery passions with a Linguistics roll'
        ]);
        
        App\Charm::create([
            'name' => 'Rewriting the Truth Technique',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Water), Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood pens a seductive deception, her words seeping into the deep channels of the subconscious mind. She rolls (Manipulation + Linguistics) as a written instill action, rerolling 5s and 6s until they cease to appear and ignoring any penalties for making implausible claims (Exalted, p. 215). This influence must target a specific character. If her influence roll beats his Resolve, he forms a Major Principle of belief in the lie unless he pays three Willpower to resist. Attempting to voluntarily weaken the Principle instilled by this Charm costs one Willpower. This Charm can only be used once per story, unless reset by successfully leveraging a character\'s Intimacy of belief in a falsehood to persuade him to undertake a serious or life-changing task (Exalted, p. 216) that directly advances the Dragon-Blood\'s goals or those of her Hearth.'
        ]);
        
        App\Charm::create([
            'name' => 'Enthralling Lotus Calligraphy',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Wood), Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood fashions a trap from beautiful words, weaving a puissant compulsion into every sentence and simile. She makes a written influence roll to instill, persuade, or bargain with a specific character. The written message exerts an unnatural influence upon its intended recipient. Once he\'s able to see the document, even if he cannot see the writing, he\'s subtly compelled to begin reading it unless he spends (her Essence/2, rounded up) Willpower to break free. This impulse appears natural, and won\'t force the victim to endanger himself or abandon pressing tasks. If the target doesn\'t resist and begins reading, he must do so long enough to be subjected to whatever influence the document contains. A character who resisted this Charm\'s influence with Willpower is immune to this Psyche effect, although he\'s still subject to the written influence roll. Enthralling Lotus Calligraphy cannot be used against the same character more than once per story'
        ]);
        
        App\Charm::create([
            'name' => 'Incendiary Argument Approach',
            'mins' => 'Linguistics 4, Essence 3',
            'cost' => '5m;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Fire, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'Caustic Wit Invective ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood sparks outrage with her diatribe. She rolls (Charisma + Linguistics) as a written influence roll targeting a specific character. If she beats his Resolve, her words provoke him to react with hostility and argument regardless of what the message actually says — either by seeking the author out in person, or by sending a written response. This influence doesn\'t compel the target to endanger himself or escalate to violence, although he may well do so of his own accord. Resisting requires entering a Decision Point and calling on a Major or Defining Intimacy. If the Dragon-Blood knows Signature-Stealing Calligraphy (p. 209), she may use it reflexively alongside this Charm to write a letter under another person\'s identity, rolling with (Manipulation + Linguistics) instead. As long as the target is convinced by her forgery, he\'ll pursue whoever the message is attributed to. If he sees through the forgery, the influence is overturned'
        ]);
        
        App\Charm::create([
            'name' => 'Poisoned Tongue Technique',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '2m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Reflexive',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Voices on the Wind ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood insinuates her influence into another\'s conversation, subtly manipulating his voice\'s tone and cadence by controlling the air he speaks through. When a character within short range makes a spoken influence roll, the Dragon-Blood may use this Charm to roll (Manipulation + Linguistics) against his Resolve. Each threshold success on her roll subtracts one die from his influence roll. In Air Aura, if the Dragon-Blood succeeds, (Essence) 1s on the penalized roll subtract successes from it. With War 3, the Dragon-Blood can use this Charm to penalize an enemy\'s command action, disrupting the communication between a commander and his troops'
        ]);
        
        App\Charm::create([
            'name' => 'Reading the Unspoken Word',
            'mins' => 'Linguistics 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Speech Without Words ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s keen intuition can discern the words that someone expects to hear, uncovering the expectations or assumptions couched in that language. A servant awaiting a foreign prince expects to be greeted with haughty disdain; a disguised intruder fears his identity will be questioned; a guard at a secret meeting awaits a specific password. The Dragon-Blood makes a read intentions roll with ([Intelligence or Perception] + Linguistics). Success lets her discern exactly what that character expects to be told in his current circumstances. This may assist her in impersonation, or give her an opening to exploit. If she leverages this knowledge as part of an influence roll, she adds (Essence) non-Charm bonus dice. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Voice Mastery',
            'mins' => 'Linguistics 5, Essence 4',
            'cost' => '5m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Supplemental',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Poisoned Tongue Technique ',
            'book' => 'DB???',
            'description' => 'When a dragon speaks, who dares dispute her? The DragonBlood adds (Essence/2, rounded up) non-Charm successes on a spoken social influence roll made with any Ability that aligns with one of her Major or Defining Principles. The Willpower cost of resisting her influence increases by one. Dragon\'s Voice Mastery can only be used once per day, unless reset by upholding a Major or Defining Intimacy.'
        ]);
        
        App\Charm::create([
            'name' => 'Tantalizing Dragon\'s Tongue',
            'mins' => 'Linguistics 5, Essence 4',
            'cost' => '7m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Fire/Wood, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'Incendiary Argument Approach ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood courts her reader\'s passion with provocative language and sensuous choices of words, infusing erotic undertones into whatever she writes. This Charm functions identically to Incendiary Argument Approach, except that instead of provoking the target to argue, the influence overwhelms him with passionate admiration and fascination for the author, bordering on lust. If he\'s sexually attracted to the Dragon-Blood, he\'ll attempt to seduce her, either by seeking her out in person or with a written declaration of lust. If he\'s not sexually attracted (or his player invokes the Red Rule, Exalted, p. 222), he instead feels inspired to seek her out for friendly conversation. As with its prerequisite, Tantalizing Dragon\'s Tongue can be used with Signature-Stealing Calligraphy to forge love letters'
        ]);
        
        App\Charm::create([
            'name' => 'Intoxicating Lotus Manuscript',
            'mins' => 'Linguistics 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Psyche, Wood, Written-only',
            'duration' => 'Instant',
            'prerequisite' => 'Enthralling Lotus Calligraphy, Tantalizing Dragon\'s Tongue ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood creates an enthralling world of story and sensuality to snare a reader, leaving him desperate for another chance to escape into the bliss of her writing. This Charm is a special (Manipulation + Linguistics) roll with double 9s to compose a piece of poetry, fiction, or other creative narrative tailored to a specific character. If the Terrestrial\'s influence roll beats the target\'s Resolve, he develops an obsession with her writing as a Minor Derangement (Exalted, p. 167). If he goes more than (6 − Integrity) weeks without reading a new work, he suffers withdrawal symptoms in the form of a −1 penalty on social and mental rolls. When the target spends Willpower to resist this Derangement, he may also ignore his withdrawal symptom penalty for the same duration. Once he\'s spent three Willpower, the influence is broken, and the Derangement and withdrawal penalty subside. In addition, if the Dragon-Blood goes a full story without writing and releasing a new work that could fulfill the victim\'s addiction, it likewise ends. She may make her works difficult or expensive to acquire, but making it impossible for the victim to obtain them negates this Charm. An Essence 5+ repurchase allows the Dragon-Blood to strengthen the Derangement with repeated uses of this Charm targeting the same character. Once she uses it against him, she must wait until the next story before she can do so again, raising the intensity of the Derangement by one step if she succeeds. Each level of intensity above Minor adds +1 to the total Willpower the victim must spend to break free of this Charm\'s influence'
        ]);
        
        App\Charm::create([
            'name' => 'With One Mind',
            'mins' => 'Linguistics 5, Essence 5',
            'cost' => '5m, 5i, 1wp;',
            'element' => 'Linguistics',
            'type' => 'Simple',
            'effect' => 'Air, Perilous',
            'duration' => 'One scene',
            'prerequisite' => 'Dragon\'s Voice Mastery, Speech Without Words ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood weaves her mind together with that of her allies, creating a shared battle-consciousness that transcends language\'s limitations. She forms a mental bond with either a single character she can see, or all of her Sworn Kin she can see. Participants in the bond gain the following benefits: • They can communicate telepathically with each other. This isn\'t limited by range or line of sight, but they must share a common language. • As long as one of them is aware of a hidden threat or concealed character, all of them are. This may render them immune to unexpected attacks (Exalted, p. 203) or allow them to attack a concealed enemy. • Whenever one of them is attacked, another bonded character within close range may reflexively interpose his Parry, as though with a defend other action. Only one character may make this reflexive defense against a single attack, even if several are in range. If a participant attempts a distract gambit (Exalted, p. 200) against an enemy to benefit another bonded character, the beneficiary doubles 7s on the attack roll. A successful gambit grants the beneficiary one point of Initiative in addition to those spent by the attacker.'
        ]);
        
        
        App\Charm::create([
            'name' => 'Careful Insight-Gathering Study',
            'mins' => 'Lore 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Lore',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Breathing deep of the world\'s Essence, the DragonBlood pronounces her wisdom with impeccable clarity. She may add automatic successes to a Lore roll for two motes each. In addition, if she adds 2+ successes on a roll to introduce or challenge a fact (Exalted, pp. 237-238), she doubles 9s on the roll. '
        ]);
        
        App\Charm::create([
            'name' => 'Opening the Mind\'s Gates',
            'mins' => 'Lore 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Speaking a sagely aphorism, the Dragon-Blooded calls up the winds of knowledge to disperse whatever miasma closes a student\'s mind to learning. She makes a special instill roll with ([Charisma or Intelligence] + Lore) to induce a state of supernatural receptivity in a single character, treating him as though he had a Major Principle of “I must seek out education” for one scene. If the Dragon-Blood exploits this Intimacy with a persuade or bargain roll to convince the target to study with her, the cost of resisting increases by one Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Flawless Study Focus',
            'mins' => 'Lore 3, Essence 1',
            'cost' => '3m, 1wp;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Opening the Mind\'s Gates ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood clears her mind, drawing upon the clarity of the upper air to enter a receptive trance. To use this Charm, she must spend at least (10 − Intelligence) hours studying under a teacher or consulting a library, archive, or similar repository of information. She gains a temporary Lore specialty in a single topic possessed by her mentor or covered by the materials she had access to. She retains the specialty indefinitely, but may only have one specialty granted by this Charm at a time'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Concentration Trance',
            'mins' => 'Lore 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'To use this Charm, the Dragon-Blood must spend a few minutes contemplating an expression of an elements: observing the movement of clouds, meditating beneath a waterfall, staring unblinking into a flame, or so on; this determines the Charm\'s elemental aspect. At the end, she makes a ([Mental Attribute] + [Bureaucracy, Investigation, Lore, Medicine, Survival, or War]) roll with a single bonus success. She may roll to introduce a fact as though she has a Lore background in facts that relate to the Charm\'s elemental aspect. An Airaspected use could introduce facts about weather or music theory; an Earth-aspected use could relate to geology, masonry, or architecture; and so on. If the Dragon-Blood knows Dragon-Kin Empowerment, she may provide the benefits of this Charm to one of her Sworn Kin, guiding him through meditation'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon-Kin Empowerment',
            'mins' => 'Lore 3, Essence 1',
            'cost' => '1m;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Aura',
            'duration' => 'Instant',
            'prerequisite' => 'Elemental Concentration Trance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s understanding of the cycle of elements and the flow of Essence allows her to empower her fellow Terrestrial Exalted. She transfers her Elemental Aura to a touched Dragon-Blood who isn\'t in Aura state, and up to (Essence x3) of her own motes to her choice of his personal or peripheral pool. This Charm has the same aspect as the transferred Aura, and granted motes can only be spent on Charms of that element, Balanced Charms, or magic without an elemental aspect. If the target\'s mote pool can\'t accept all the motes transferred, he has until his next action to spend them before they dissipate. A Lore 5, Essence 2 repurchase of this Charm allows the Dragon-Blood to also transfer a single level of anima when she uses this Charm.'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Bolt Attack',
            'mins' => 'Lore 3, Essence 1',
            'cost' => '4m (+1a);',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Dual',
            'duration' => 'Instant',
            'prerequisite' => 'Elemental Concentration Trance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood channels elemental Essence into a deadly blast. Air manifests as crackling lightning; Earth as flying stones; Wood as poisoned thorns; and so on. This is a withering or decisive attack with (Dexterity + [Archery or Thrown]) against an enemy within short range, which can be enhanced with Charms of the appropriate combat Ability. The Exalt may spend a level of anima to extend this to medium range. This Charm\'s elemental aspect is the same as the Exalt\'s, and it gains additional benefits based on its element. Air: The elemental bolt deals lethal damage and ignores (higher of Essence or 3) soak or (Essence) hardness from metal armor, including the five magical materials. Earth: The elemental bolt deals bashing damage and has the Smashing tag (Exalted, p. 586). Fire: The elemental bolt deals lethal damage. Decisive attacks double 10s on damage. Water: The elemental bolt deals bashing damage and has the Flexible and Disarming tags (Exalted, p. 586). Wood: The elemental bolt deals lethal damage. Decisive attacks carry a poison with Damage 1i/round (B in Crash), Duration (Essence + 5), and penalty −1. The Dragon-Blood may purchase additional elemental variants of this Charm for three experience points each.'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Empowerment Meditation',
            'mins' => 'Lore 3, Essence 2',
            'cost' => '—(+1lhl or 1wp);',
            'element' => 'Lore',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'Elemental Concentration Trance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood replenishes her spirit with elemental power drawn from her understanding of Creation. Once per day, when she uses Elemental Concentration Trance to roll (Intelligence + Lore) at difficulty 3+, she may pay one Willpower or one lethal health level before rolling to gain motes equal to twice her threshold successes on the roll. These motes can only be spent on Charms of the same element as the one she meditated on, and last one day. If the Exalt knows Dragon-Kin Empowerment, she may pay this Charm\'s cost to provide its benefits to a Hearthmate when she leads him through meditation. A character — either the Dragon-Blood or a Hearthmate — may only receive this benefit once per day. '
        ]);
        
        App\Charm::create([
            'name' => 'Sagacious Elder\'s Instruction',
            'mins' => 'Lore 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Lore',
            'type' => 'Supplemental',
            'effect' => 'Air',
            'duration' => '(Intelligence) days',
            'prerequisite' => 'Opening the Mind\'s Gates ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blooded savant\'s wise words part the fog of mystery and confusion. When the Dragon-Blood gives advice to another character and successfully rolls to introduce a fact that supports it, that character gains a temporary specialty based on that advice that can apply to rolls with any Ability for the duration of this Charm, as long as he follows her guidance'
        ]);
        
        App\Charm::create([
            'name' => 'Stern Tutor Discipline',
            'mins' => 'Lore 5, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Varies',
            'prerequisite' => 'Sagacious Elder\'s Instruction ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s tutelage pushes her students to test their boundaries, allowing a single player character studying under her to go into “experience debt” to purchase a single dot in an Attribute, Ability, or specialty, without having to spend the normal experience cost. Instead, any experience points that player gains go towards paying off the experience debt until it has been fully repaid. A character cannot benefit from this Charm while he\'s still in experience debt due to any effect. The training time is divided by (higher of the Dragon-Blood\'s Essence or Intelligence) Alternatively, the Dragon-Blood may confer a specialty to a single Storyteller character after a week of training time, or a dot in an Ability or Attribute after a month. A Storyteller character can only receive one specialty and one Attribute or Ability dot per story. A Lore 5, Essence 4 repurchase of this Charm allows the Exalt to instead teach any Charm, spell, or thaumaturgical ritual she knows, letting her student go into experience debt to learn it as long as he\'s normally capable of learning that type of power and meets all necessary prerequisites. Storyteller characters can be trained in a Charm, spell, or ritual over the course of a month. A Storyteller character can only receive this benefit once per story'
        ]);
        
        App\Charm::create([
            'name' => 'Lightning Flash Inspiration',
            'mins' => 'Lore 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Lore',
            'type' => 'Reflexive',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'Flawless Study Focus ',
            'book' => 'DB???',
            'description' => 'The Exalt\'s mind races with lightning speed, revealing to her any errors in her logic while she\'s on the cusp of completing her thought. After a Lore roll, she may reroll (Essence) non-1 failures'
        ]);
        
        App\Charm::create([
            'name' => 'Fulminating Thunderhead Brilliance',
            'mins' => 'Lore 5, Essence 3',
            'cost' => '15m, 1wp;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'Lightning Flash Inspiration ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s mind traces countless branching paths of thought, her eyes crackling with brilliant light. This is a special roll to introduce a fact (Exalted, p. 237). Instead of proposing a fact she wishes to introduce, the player names a goal, such as defeating a rival Dynast or investigating corruption within a bureaucracy, and asks the Storyteller to produce the insight she needs with an (Intelligence + Lore) roll at difficulty 3. If other characters are concealing or suppressing relevant information, the highest Guile among them is added to her roll\'s difficulty. On a success, the Storyteller introduces a relevant fact that will assist her in achieving her goal, which she experiences as a flash of sudden insight. Threshold successes improve the relevance and specificity of her revelation at the Storyteller\'s discretion. This Charm can only be used once per story, unless reset by achieving a major character or story goal (Exalted, p. 170) through the use of a relevant fact that the Dragon-Blood has introduced, either with this Charm or otherwise.'
        ]);
        
        App\Charm::create([
            'name' => 'Truth-In-Stone Binding',
            'mins' => 'Lore 5, Essence 3',
            'cost' => '10m, 1wp, expend Earth Aura;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Drawing on her knowledge of the world and understanding of its Essence, the Dragon-Blooded may speak truths antithetical to the chaos of the Wyld, sealing away those horrors that have no place in Creation. She rolls a special gambit with (Intelligence + Lore) against the Resolve of a raksha or other native of the Wyld within short range. The gambit\'s difficulty is (higher of target\'s Essence or Willpower); battle groups add (Size) to the difficulty. Success incapacitates the enemy, petrifying its Essence into an inanimate form engraved with words of binding that describe the horror trapped within. A raksha might be imprisoned within an egg of jade, while a swarm of hobgoblins might be transformed into stone gargoyles. The bound creatures aren\'t truly slain, and are restored if the binding words are scratched out or destroyed. The specifics of how this is achieved are left to the Storyteller, but the difficulty should be commensurate with the power of the sealed character, possibly requiring high-level feats of strength, specially crafted artifacts, or sorcery to accomplish. This Charm can also be used on environmental features of the Wyld, such as a river of flames that lures in travelers with whispers, or a memory-eating mist. She rolls (Intelligence + Lore) against a difficulty equal to the base difficulty of the hazard or whatever roll is used to resist it, plus a modifier based on the intensity of the surrounding Wyld: +2 in the bordermarches that lap up against Creation, +4 in the middlemarches that lie beyond, and +6 in the deep Wyld, the heart of chaos. Success seals away the hazard, rendering it inert and harmless: The lake of fire cools into a glassy patch of obsidian; the mist condenses into crystalline droplets. At the Storyteller\'s discretion, overwhelmingly powerful targets — such as uniquely powerful raksha or Wyld behemoths, or equally potent environmental manifestations of the Wyld — can only be sealed away temporarily. Such bindings last a scene at Essence 3, a day at Essence 4, and a year and a day at Essence 5'
        ]);
        
        App\Charm::create([
            'name' => 'Ten Thousand Minds Ablaze',
            'mins' => 'Lore 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Knowledge is the spark that lights the tinder of curiosity, crackling like flame from the Dragon-Blood\'s lips as she expounds her teachings. She rolls ([Charisma or Intelligence] + Lore), which is treated both as a roll to introduce a fact and as an influence roll to instill all characters who hear her with an Intimacy of interest or fascination towards the proposed fact or a broader field it relates to. She ignores the penalty for targeting multiple characters with the influence roll. To resist, a character must spend Willpower equal to (his Intelligence/2, rounded up). Likewise, the instilled Intimacy cannot be voluntarily lowered until the target spends (his Intelligence/2, rounded up) Willpower, while attempts to erode it with instill actions follow the rules for overturning social influence (Exalted, p. 221)'
        ]);
        
        App\Charm::create([
            'name' => 'Ink-Black Ocean Depths',
            'mins' => 'Lore 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'Until completed',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood reaches into the pages of a manuscript as though they were flowing water, plumbing its depths to commune directly with the wisdom it contains. She can absorb and comprehend the contents of a book or other record of information, such as a mural or coded tattoo, in only a handful of minutes as though she\'d read it completely. This doesn\'t allow her to understand information in a language she cannot read. If she uses this Charm on an exotic repository of wisdom, such as a gemstone enchanted with a sorcerer\'s memories, the Storyteller may require a (Perception + Lore) roll to comprehend its contents. This Charm can be used in conjunction with Flawless Study Focus to waive the normal time requirement for using it. Once the Dragon-Blood finishes reading a text or similar document, she may roll (Manipulation + Lore) to siphon away its wisdom, removing crucial facts and key details to prevent subsequent readers from discovering useful information by reading it. The target and intention of written social influence cannot be altered. A reader may recognize that the text has been altered with a (Perception + [Linguistics or Lore]) roll opposing the Dragon-Blood\'s result, but this doesn\'t reveal what was erased. This alteration can be undone by another character with a use of this Charm or similar magic, such as Flashing Quill Atemi (Exalted, p. 326), requiring an opposed (Intelligence + Lore) roll.'
        ]);
        
        App\Charm::create([
            'name' => 'Root-and-Branch Wisdom',
            'mins' => 'Lore 5, Essence 3',
            'cost' => '—;',
            'element' => 'Lore',
            'type' => 'Permanent',
            'effect' => 'Signature (Wood)',
            'duration' => 'Permanent',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood learns best by teaching, cultivating the garden of her own mind as she sows the seeds of wisdom among her students. Once per story, when she acts as a mentor or trainer to another character (Exalted, p. 178), she may impart her student with a Major Tie towards herself while accepting a Minor Tie towards him. Each Tie has a positive emotional context that is defined by the player of the character that gains it. If the Dragon-Blooded maintains her Tie towards a student until the end of the story, she permanently gains a free Lore specialty that relates to what she taught her student and what she learned from him. Providing riding lessons to a Hearthmate might grant a Lore specialty in equestrianism, while instructing a young scion of a Great House in academic topics might grant a specialty in the affairs of that house'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Succor Method',
            'mins' => 'Lore 4, Essence 3',
            'cost' => '—;',
            'element' => 'Lore',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'Elemental Empowerment Meditation ',
            'book' => 'DB???',
            'description' => 'Understanding the harmonious flow of elemental Essence through the human body, the Dragon-Blood may direct it to heal her wounds. This Charm upgrades Elemental Empowerment Meditation. The Exalt may exchange five motes granted by it to heal a single level of non-aggravated damage. If she knows Dragon-Kin Empowerment and guides another Dragon-Blood through the meditation, he may likewise heal this way. '
        ]);
        
        App\Charm::create([
            'name' => 'Thunderstruck Charlatan Imprecation',
            'mins' => 'Lore 4, Essence 3',
            'cost' => '7m;',
            'element' => 'Lore',
            'type' => 'Supplemental',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Lightning Flash Inspiration ',
            'book' => 'DB???',
            'description' => 'The ferocity of the Dragon-Blood\'s rebuke overcomes those she bests with her mind, leaving them as speechless as if struck by lightning. This Charm supplements a roll to challenge a fact (Exalted, p. 238) with a spoken rebuke. If the Dragon-Blood\'s successes exceed the deceiving character\'s Resolve, then he\'s left humbled before her mastery, instantly forming a Minor Tie to her of respect, fear, or a similar emotion, or strengthening such an existing Tie by one step. He cannot speak or otherwise communicate for the rest of the scene unless he resists by entering a Decision Point, calling on an Intimacy that exceeds his Tie towards the Dragon-Blood'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Burst Technique',
            'mins' => 'Lore 5, Essence 3',
            'cost' => '—;',
            'element' => 'Lore',
            'type' => 'Permanent',
            'effect' => 'Aura, Decisive-only',
            'duration' => 'Permanent',
            'prerequisite' => 'Elemental Bolt Attack When ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood uses Elemental Bolt Attack to make a decisive attack with the same aspect as her current Aura state, she may apply the attack against all characters, friend or foe, within close range of her initial target. She divides her Initiative evenly among all hit characters, rounding down, to determine the damage rolled against them, ignoring Hardness. Additionally, the attack gains a benefit based on its aspect. Air: Lightning arcs from foe to foe. Metal weapons, including those made of the five magical materials, can\'t be used to parry the attack. For each enemy hit by the attack, the Dragon-Blood adds one bonus die to the base damage rolled against each of them, maximum +(Essence). Earth: The Dragon-Blood adds (Strength/2, rounded up) to the base damage rolled against each hit character, and waives the Initiative cost and Defense penalty for making a smash attack. Fire: As long as the elemental blast deals 3+ total levels of damage, the targeted area catches fire as long as it contains flammable materials, becoming an environmental hazard with difficulty 4, Damage (Essence − 1)L/round. The hazard burns for at least (Essence) rounds unless extinguished. Water: Enemies with an Initiative lower than the Dragon-Blood\'s when she makes the attack are disarmed (Exalted, p. 200) if they take any damage. Wood: The elemental bolt\'s poison is upgraded to Damage 1L, Duration (Essence + 5), penalty −3. Elemental Burst Technique can only be used once per scene, unless reset by dealing enough withering damage to a nontrivial opponent with Elemental Bolt Attack to reduce his Initiative from a rating higher than the Dragon-Blood\'s to a lower rating.'
        ]);
        
        App\Charm::create([
            'name' => 'Eternal Mind Meditation',
            'mins' => 'Lore 5, Essence 4',
            'cost' => '15m, 1wp;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Lightning Flash Inspiration ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood empties her mind of all distraction, dispersing the dark clouds of forgetfulness and ignorance so that she might answer a conundrum with the totality of her knowledge. After a scene spent in contemplation, she makes a roll to introduce a fact that doesn\'t need to be based on any of her Lore backgrounds. Instead, she draws this knowledge forth by collating an entire lifetime of memories, piecing together fragments of information and intuitions to reveal a greater whole. The Storyteller may still veto the introduction of a fact (Exalted, pp. 237-238), refunding this Charm\'s cost, if it would compromise the narrative of the game, or if a player proposes a fact that not even this Dragon-Blood\'s entire lifetime of memories could reveal. Alternatively, the Dragon-Blood may use this Charm to free herself from a Psyche effect that alters her memories, such as the Solar Charm Memory-Reweaving Discipline. She rolls as though introducing a fact with this Charm against a difficulty of (the Essence + Manipulation of the character that used the effect). On a success, she gradually begins recovering her true, unaltered memories; for each day that passes, a single month\'s worth of memories are restored. Multiply this rate by (her threshold successes + 1). This Charm can only be used once per story, unless reset by discovering an important secret or piece of information in a way that either upholds one of the Dragon-Blood\'s Defining Principles or achieves a major character or story goal (Exalted, p. 170). No reset is needed if the Storyteller vetoes a proposed fact'
        ]);
        
        App\Charm::create([
            'name' => 'Glorious Birthright Font',
            'mins' => 'Lore 5, Essence 4',
            'cost' => '—;',
            'element' => 'Lore',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'Elemental Succor Method ',
            'book' => 'DB???',
            'description' => 'One with five elements, the Dragon-Blood discovers her true self reflected in the Essence of Creation. This Charm upgrades Elemental Empowerment Meditation. When she or a character she\'s guiding through the meditation rolls 5+ threshold successes, that character gains a point of Willpower in addition to the usual rewards of the Charm, up to his maximum Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Endless Coils Enlightenment',
            'mins' => 'Lore 5, Essence 5',
            'cost' => '—(+1wp);',
            'element' => 'Lore',
            'type' => 'Permanent',
            'effect' => 'Air',
            'duration' => 'Permanent',
            'prerequisite' => 'Eternal Mind Meditation ',
            'book' => 'DB???',
            'description' => 'The thunderstorm is born from many clouds, each one casting its lightning from horizon to horizon. When the Exalt uses Eternal Mind Meditation to introduce a fact, she may pay one additional Willpower to draw from the wisdom of up to (Intelligence − 1, minimum one) willing Dragon-Blooded within medium range of her. Each Dragon-Blood that contributes his wisdom adds a single non-Charm die on her roll, as well as contributing the whole of his memories and any Lore backgrounds he possesses to the body of information on which the introduced fact is based. On a successful Lore roll, all participating Dragon-Blooded form a Major Tie of loyalty to the Dragon-Blooded as a whole'
        ]);
        
        App\Charm::create([
            'name' => 'The Wind Turns',
            'mins' => 'Lore 5, Essence 5',
            'cost' => '2wp, expend Air Aura;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Air, Aura',
            'duration' => 'Instant',
            'prerequisite' => 'Glorious Birthright Font ',
            'book' => 'DB???',
            'description' => 'A breath sent out into the world may return as a hurricane, and Essence is the breath of the world. The Dragon-Blood rolls (Willpower + Initiative). She and any of her Hearthmates within short range gain one mote for every two successes. Using this Charm resets her to base Initiative. This Charm can only be used once per story, unless reset by upholding a Major or Defining Tie towards another Dragon-Blood, or to the Dragon-Blooded host as a whole'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Vortex Attack',
            'mins' => 'Lore 5, Essence 5',
            'cost' => '20m, 2wp, expend Aura;',
            'element' => 'Lore',
            'type' => 'Simple',
            'effect' => 'Aura, Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'Elemental Burst Technique, The Wind Turns ',
            'book' => 'DB???',
            'description' => 'At the apex of the Dragon-Blood\'s understanding, she draws forth the power of her draconic ancestors, shaking Creation to its foundations as she unleashes the primal wrath of the elements. To use this Charm, she must have Initiative 15+. A tremendous burst of elemental Essence radiates outward from her, a onetime environmental hazard that extends to close range, plus an additional range band for every ten Initiative she has. The aspect of this Charm and the hazard\'s nature depend on which Elemental Aura she expends. Allies and enemies alike are caught in the hazard, but it won\'t harm the Dragon-Blood\'s Sworn Kin. If she knows Enfolded in the Dragon\'s Wings (p. 282), she may likewise spare allied characters. The hazard has difficulty (the Dragon-Blood\'s Intelligence), but doesn\'t have a standard damage. Instead, the Dragon-Blood divides her Initiative evenly, rounding up, among all characters who failed their rolls to determine how much lethal damage is rolled against each. Battle groups and trivial opponents instead suffer (her full Initiative) damage, without counting against the total she divides. As long as at least one enemy fails his roll, this resets the DragonBlood to base Initiative. The hazard carries additional effects based on its aspect: Air: Roiling storm clouds darken the sky, unleashing countless bolts of lightning and raining down hail. Any character wearing metal armor, including armor made from the magical materials, applies its mobility penalty on his roll to resist the hazard. The damage roll benefits from double 9s. Earth: The earth rumbles in a mighty earthquake, scattering stone debris skyward to strike flying foes. A character that takes 3+ levels of damage falls into a chasm and lands prone, suffering damage as per a short-range fall (Exalted, p. 232). Climbing out of the chasm counts as moving through difficult terrain (Exalted, p. 199). Fire: A pyroclasm sweeps across the battlefield, igniting anything flammable. As long as there\'s fuel, even after the vortex fades, it leaves behind a hazard with difficulty 5, Damage 4L/round within its range, which burns for at least (Intelligence) hours. These flames won\'t burn the Dragon-Blood or any allies spared from the vortex. Water: A standing wave towers above the DragonBlood before collapsing outward in all directions with tsunami force. For every three levels of damage a character suffers from the hazard, rounded up, he\'s knocked back one range band from the Dragon-Blood to fall prone, and suffers an additional three dice of bashing damage, ignoring Hardness. Wood: Fast-growing briar patches and massive thorny vines spread rapidly across the battlefield, while bright-colored flowers bloom with poisonous pollen. Characters who fail their roll must roll (Stamina + Resistance) against a poison with Damage 3i/round, Duration (Essence + Intelligence) rounds, and a −3 penalty. Additionally, the area of the hazard becomes difficult terrain until the plant growth has been cleared entirely. The Dragon-Blood and any allies spared from the vortex are unimpeded by this terrain, the plants parting to clear their path. If any of the Dragon-Blood\'s Sworn Kin are within the vortex\'s initial range and in Elemental Aura, they may expend it to add that element\'s effect to the hazard. The expended Aura must be of an element that hasn\'t already been expended; each participating DragonBlood must contribute a unique element to the vortex. Crashed Hearthmates can\'t contribute their Aura. Each Hearthmate who expends his Aura adds +1 to the hazard\'s Difficulty and adds his Initiative to the primary DragonBlood\'s total to determine both the range and damage of the hazard, resetting him to base Initiative. This Charm can only be used once per story, unless reset by accomplishing a legendary social goal (Exalted, p. 134).'
        ]);
        
        
        App\Charm::create([
            'name' => 'Master Healer Meditation',
            'mins' => 'Medicine 1, Essence 1',
            'cost' => '1m per die;',
            'element' => 'Medicine',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Blessed with understanding of the flow of living Essence through the body, the Dragon-Blooded physician refines her skill to perfection. She may add bonus dice to a Medicine roll for one mote each. If she adds enough to reach her dice limit (p. 162), she also adds a non-Charm success on the roll'
        ]);
        
        App\Charm::create([
            'name' => 'Disease-Banishing Technique',
            'mins' => 'Medicine 2, Essence 1',
            'cost' => '3m, 1wp;',
            'element' => 'Medicine',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strengthens her patient\'s body against the malaise that ravages it. She doubles 9s on a roll to treat a disease. If her threshold successes exceed (higher of the disease\'s virulence or morbidity), then her ministrations grant her patient a temporary Resistance specialty in that disease until it has run its course. A character can only benefit from one such specialty at a time.'
        ]);
        
        App\Charm::create([
            'name' => 'Venom Expulsion Method',
            'mins' => 'Medicine 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Tapping her patient\'s pressure points with swift, precise strikes, the Dragon-Blood halts the flow of poison through his body. She may roll to cure poison as a miscellaneous action without facing increased difficulty for rushing treatment. If she takes a full hour to administer aid, she instead doubles 9s'
        ]);
        
        App\Charm::create([
            'name' => 'Wound-Closing Technique',
            'mins' => 'Medicine 2, Essence 1',
            'cost' => '5m;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood spends fifteen minutes tending to a patient\'s wounds, at the end of which she rolls (Intelligence + Medicine). Each success converts a single level of lethal damage to bashing, speeding the rate at which it heals (Exalted, p. 173). Alternatively, if she rolls successes equal to (her patient\'s wound penalty + 1), she may heal a single level of bashing damage. Once a character has been treated with Wound-Closing Technique, he must receive at least a day of bedrest or fully heal all damage before he can benefit from it again'
        ]);
        
        App\Charm::create([
            'name' => 'Ailment-Sensing Meditation',
            'mins' => 'Medicine 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood observes the natural rhythms of her patient\'s body, intuiting any ailments that afflict him. She may complete a roll to diagnose a patient (Exalted, p. 237) in a handful of seconds. Successfully diagnosing a disease, poison, or similar ailment grants her a temporary Medicine specialty in it. She retains the specialty indefinitely, but may only have one specialty granted by this Charm at a time. '
        ]);
        
        App\Charm::create([
            'name' => 'Nature\'s Healing Bounty',
            'mins' => 'Medicine 3, Survival 3, Essence 1',
            'cost' => '1m;',
            'element' => 'Medicine 3, Survival',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'A master of herbalism and nature lore, the DragonBlood finds all she needs to heal her patients in gardens or the wilderness. As long as she has access to medicinal herbs or similar flora, she may roll Medicine to treat injury, disease, poison, or other afflictions without any increased difficulty for lacking equipment or medication. If she uses medicinal herbs in addition to tools, she treats them as exceptional equipment (Exalted, p. 580), or converts the bonus die from already-exceptional equipment to a non-Charm success'
        ]);
        
        App\Charm::create([
            'name' => 'Indomitable Vitality Discipline',
            'mins' => 'Medicine 3, Essence 2',
            'cost' => '—;',
            'element' => 'Medicine',
            'type' => 'Permanent',
            'effect' => 'Wood',
            'duration' => 'Permanent',
            'prerequisite' => 'Disease-Banishing Technique ',
            'book' => 'DB???',
            'description' => 'Drawing strength from the Dragon-Blood\'s ministrations, her patient can fight through the worst of his illness. When the Terrestrial successfully grants her patient a specialty with Disease-Banishing Technique, she may commit that Charm\'s mote cost. When that disease would inflict an automatic botch on one of his rolls (Exalted, p. 234), it instead only inflicts a penalty equal to (6 − [higher of her patient\'s Stamina or Resistance]). The Exalt may mitigate up to (Essence) botches this way. '
        ]);
        
        App\Charm::create([
            'name' => 'Poisoner\'s Deft Hand',
            'mins' => 'Medicine 3, Essence 2',
            'cost' => '3m, 1i;',
            'element' => 'Medicine',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Venom Expulsion Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s understanding of toxins and venoms can harm as well as heal. When she poisons another character — with a decisive attack, poisoning his food or drink, using magic, etc. — she adds (Essence/2, rounded up) to the poison\'s duration. Each use of this Charm only applies to a single dose of poison. If the Dragon-Blood wishes to serve a poisoned feast to her enemies, she must use it separately for each of her victims.'
        ]);
        
        App\Charm::create([
            'name' => 'Death-Defying Endeavor',
            'mins' => 'Medicine 4, Essence 2',
            'cost' => '4m;',
            'element' => 'Medicine',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Ailment-Sensing Meditation ',
            'book' => 'DB???',
            'description' => 'Drawing from her patient\'s own fierce will to survive, the Dragon-Blood refuses to fail. After a Medicine roll, she may reroll (Essence) non-1 failed dice'
        ]);
        
        App\Charm::create([
            'name' => 'Grievous Wound Alteration Energy',
            'mins' => 'Medicine 5, Essence 2',
            'cost' => '—(+1wp);',
            'element' => 'Medicine',
            'type' => 'Permanent',
            'effect' => 'Wood',
            'duration' => 'Permanent',
            'prerequisite' => 'Wound-Closing Technique ',
            'book' => 'DB???',
            'description' => 'Even the most horrific injuries inflicted by the Anathema yield to the Dragon-Blooded physician\'s life-saving prowess. This Charm upgrades WoundClosing Technique, allowing the Dragon-Blood to pay a one-Willpower surcharge to treat aggravated damage with it. She rolls (Intelligence + Medicine), each success converting a level of aggravated damage to lethal. Any successes above her patient\'s total aggravated damage convert levels of lethal damage to bashing'
        ]);
        
        App\Charm::create([
            'name' => 'Purity-of-Mind Method',
            'mins' => 'Medicine 5, Essence 3',
            'cost' => '10m (+1wp per interval);',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'Extended action',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may treat afflictions of the mind with insightful counseling, guided meditation, soothing hypnosis, or other beneficial methodologies, granting her patient the serenity of still air and the crystalline clarity of ice. Once she\'s diagnosed a Derangement, she may treat it with an extended ([Charisma or Intelligence] + Medicine) roll with difficulty 5, goal number (5 + [intensity x5]), terminus (10 − intensity), and an interval of one month (Exalted, p. 189). She must pay one Willpower at each interval before rolling. Successfully completing the extended action reduces the Derangement\'s intensity by one step, to a minimum of Minor, and grants one Willpower to both the Dragon-Blood and her patient. While under the effects of this Charm, the patient adds (the Dragon-Blood\'s Essence) bonus dice on Willpower rolls to resist the treated Derangement, and reduces any Resolve penalties it imposes by one. Although this Charm can\'t reduce Derangements below Minor intensity, the DragonBlood may use it to treat a patient\'s Minor Derangement, rolling ([Charisma or Intelligence] + Medicine) roll at difficulty 5 to grant her patient these benefits for one month. She doesn\'t need to spend Willpower or commit this Charm\'s mote cost when using it in this fashion'
        ]);
        
        App\Charm::create([
            'name' => 'Marmoreal Body Fortification',
            'mins' => 'Medicine 5, Essence 3',
            'cost' => '4m, 1wp;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'One day',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Alabaster anima limns the Dragon-Blood\'s hands as she massages her patient\'s pressure points and meridians, causing his flesh to take on a pale, marble-like hue as the strength of stone suffuses it. She rolls (Essence) dice, granting her patient a single temporary −0 health level for each success. Damage is applied to these temporary levels before the patient\'s own health levels, and any damage filling them is removed along with them when this Charm ends. In addition, if the patient is unarmored, his stony skin adds (the Dragon-Blood\'s Essence) to his natural soak and grants 2 Hardness. Normally, only one character may benefit from this Charm at a time. However, the Dragon-Blood may sustain multiple uses to empower herself and her Sworn Kin with it'
        ]);
        
        App\Charm::create([
            'name' => 'Unbinding the Inner Flame',
            'mins' => 'Medicine 5, Essence 3',
            'cost' => '4m, 4i, 1wp;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Perilous, Signature (Fire)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood stokes the flames of vitality with a precisely-measured strike to the heart chakra, inflaming the Essence of herself or an ally until blood boils and thews surge with unrestrained might. She grants a touched character a bonus dot of Strength and doubles 10s on his decisive damage rolls. On each of his turns, he gains one mote and — if he\'s not crashed — one Initiative. The power unleashed by this Charm is greater than the body can endure unharmed. Once it ends, the target suffers a level of aggravated damage, which cannot be prevented.'
        ]);
        
        App\Charm::create([
            'name' => 'Body-Cleansing Ablution',
            'mins' => 'Medicine 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood calls upon water as a healing tool, washing away pain and purifying the body. She must spend at least an hour overseeing her patient as he bathes or washing his wounds with pure water. This treatment alleviates pain, allowing her patient to ignore (his Stamina − 1) points of wound penalties for one day. In addition, if the Dragon-Blood has diagnosed any diseases or poisons he suffers from, he makes a single (Stamina + Resistance) roll. This is treated as a roll against the morbidity of each diagnosed disease, except that failure doesn\'t intensify his symptoms. In addition, each success reduces the duration of any diagnosed poisons in by one interval. A character can only benefit from this Charm once per story'
        ]);
        
        App\Charm::create([
            'name' => 'Rebirth of Flesh and Ivy',
            'mins' => 'Medicine 5, Essence 3',
            'cost' => '10m, 5i, 1wp;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Perilous, Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'Grievous Wound Alteration Energy ',
            'book' => 'DB???',
            'description' => 'Vines and ligneous tendrils spring from the DragonBlood\'s anima as she lays hands upon a wounded ally. Ivy stitches shut bleeding wounds; lianas twist to set broken bones; bark grows over damaged limbs to reinforce their strength. The Dragon-Blood rolls (Intelligence + Medicine), instantly healing levels of non-aggravated damage equal to her successes as plants replace damaged tissue. If the target suffers from any crippling injuries or effects that he could eventually heal or recover from naturally (including magically inflicted effects such as Joint-Wounding Attack or Crippling Pressure-Point Strike), the Dragon-Blood may split her successes between healing damage and alleviating these wounds, spending two successes for each point of crippling penalty she wishes to cancel. The player of the healed character may choose to be marked by this healing, accepting a scar that resembles wood more closely than flesh or strands of green interwoven with restored tissues. This Charm can only be used once per story, unless reset by saving a dying character (one whose Incapacitated health level is damaged) through medical care.'
        ]);
        
        App\Charm::create([
            'name' => 'Dread Infection Strike',
            'mins' => 'Medicine 4, Essence 3',
            'cost' => '5m;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Indomitable Vitality Discipline ',
            'book' => 'DB???',
            'description' => 'Drawing on her abundant medical expertise, the Dragon-Blood turns disease into another weapon in her arsenal. She strikes at a foe with malaise-bearing Essence, afflicting him with any mundane disease that she\'s successfully made a Medicine roll to treat during the chronicle. This is a difficulty 3 gambit using any combat Ability. Success exposes that enemy to the disease, with every two threshold successes on the Dragon-Blood\'s Initiative roll imposing a −1 penalty on his (Stamina + Resistance) roll against its virulence. Trivial foes and crashed enemies acquire the disease at Major intensity on a failed roll. With Medicine 5, Essence 5, the Dragon-Blood may add supernatural diseases that she\'s treated with a successful Medicine roll to the repertoire of ailments she can inflict by repurchasing this Charm for each disease. She must pay a one-Willpower surcharge to do so, and the difficulty of the gambit rises to 5. Incurable or irresistible diseases such as the Great Contagion cannot be transmitted through this Charm'
        ]);
        
        App\Charm::create([
            'name' => 'Flesh-as-Stone Inurement',
            'mins' => 'Medicine 4, Essence 3',
            'cost' => '5m;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Grievous Wound Alteration Energy ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood brushes her fingers across pressure points to numb her patient to pain. She rolls (Wits + Medicine) against a difficulty of (an ally\'s wound penalty + 1). Success lets that character ignore (the Dragon-Blood\'s Essence/2, rounded up) points of wound penalties for the scene. Alternatively, this Charm can be used to numb an enemy\'s limb, a gambit rolled against an enemy at close range with (Dexterity + [Brawl, Martial Arts, or Medicine]). Its difficulty equals (higher of the target\'s Stamina or Resistance). Success imposes a −3 penalty on all actions taken with the struck appendage until the victim receives a day\'s bed rest. This can be healed with magic such as Wound-Banishing Strike (Exalted, p. 343)'
        ]);
        
        App\Charm::create([
            'name' => 'Jade Crucible Method',
            'mins' => 'Medicine 5, Essence 4',
            'cost' => '1ahl;',
            'element' => 'Medicine',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Grievous Wound Alteration Energy ',
            'book' => 'DB???',
            'description' => 'Essence flows through all living things, the ultimate source of vitality. Drawing on her understanding of this principle, the Dragon-Blood may heal others at the cost of her own life. After spending fifteen minutes meditating or performing medical treatment, she may roll (current temporary Willpower), gaining one mote per success and one Willpower for each 10. This can raise her above her Willpower rating. These motes and Willpower can only be spent on Medicine Charms, and are lost if unspent by the end of the day. This Charm may only be used once per day, unless reset by succeeding on a Medicine roll to treat a character the Dragon-Blood has a Major or Defining positive Tie for. '
        ]);
        
        App\Charm::create([
            'name' => 'Most Beneficent Seed of the Five Dragons',
            'mins' => 'Medicine 5, Essence 5',
            'cost' => '5m, 1ahl;',
            'element' => 'Medicine',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Jade Crucible Method ',
            'book' => 'DB???',
            'description' => 'The blood of the Dragons is precious beyond measure, manifesting the vitality of a lineage that reaches back to the dawn of time. Slicing a palm to pour out a draught of her own blood, the Dragon-Blood confers this undying vigor on her patient. She doubles 7s on a roll to provide medical treatment. This Charm can only be used once per story, unless reset by achieving a major character or story goal (Exalted, p. 170) through medical skill or expertise, such as successfully treating a plague-ridden city or saving the life of a sibling stricken with a supernatural malady.'
        ]);
        
        
        App\Charm::create([
            'name' => 'Stoking Bonfire Style',
            'mins' => 'Melee 1, Essence 1',
            'cost' => '1m per die or 2m per +1 Parry;',
            'element' => 'Melee',
            'type' => 'Supplemental or Reflexive',
            'effect' => 'Balanced, Excellency, Fire, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s aggression stokes her Essence hotter and higher as she strikes relentlessly at her opponent, until he finally falls before her onslaught. She may add bonus dice on a Melee attack roll for one mote each, or raise her Parry for two motes per +1. When she lands an attack against an enemy or blocks one with this Charm, the cost of using this Charm against him is cumulatively lowered by one mote on subsequent rounds. Missing an attack or failing to parry resets the discount, as does attacking or blocking against another enemy, or going a round without using this Charm'
        ]);
        
        App\Charm::create([
            'name' => 'Burning Fury Wreath',
            'mins' => 'Melee 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Melee',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s superheated edge cuts through armor as though it were ice. She ignores (Strength/2, rounded up) points of Hardness, plus an additional point for every 10 on her attack roll. In Fire Aura, double the Hardness ignored'
        ]);
        
        App\Charm::create([
            'name' => 'Flame-Borne Interception',
            'mins' => 'Melee 2, Essence 1',
            'cost' => '4m;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Fire, Uniform',
            'duration' => 'Until next turn',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Flames wreathe the Exalt\'s weapon, burning brighter with each blow that it deflects. She gains +1 Parry until her next turn. This increases by one each time she blocks an attack. This bonus resets if the Dragon-Blood is hit by an attack, or defends using an Ability other than Melee'
        ]);
        
        App\Charm::create([
            'name' => 'Blinding Spark Distraction',
            'mins' => 'Melee 3, Essence 1',
            'cost' => '1m, 1i;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Fire, Uniform, Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'Flame-Borne Interception ',
            'book' => 'DB???',
            'description' => 'Sparks fly from the Dragon-Blood\'s weapon as it wards off an attack, blinding her foes. Successfully blocking an attack or winning a clash from close range blinds her attacker (Exalted, p. 168) until the end of his next turn unless he succeeds on a (Stamina + Resistance) roll at a difficulty of (her Essence + the successes he missed by)'
        ]);
        
        App\Charm::create([
            'name' => 'Graceful Flowing Defense',
            'mins' => 'Melee 3, Essence 1',
            'cost' => '2m, 1i;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Perilous, Uniform, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Flame-Borne Interception ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s weapon moves like a flowing river to deflect enemy attacks, suffused with the grace and serenity of water. She ignores a single point of penalty to her Parry. In Water Aura, she ignores (higher of Essence or 3) points of penalty to her Parry'
        ]);
        
        App\Charm::create([
            'name' => 'Crimson Fang Bite',
            'mins' => 'Melee 3, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Melee',
            'type' => 'Supplemental',
            'effect' => 'Dual, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Burning Fury Wreath ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood channels the fury of the flame to strike a devastating blow. She adds (higher of Essence or Strength) to the raw damage of a withering attack, or doubles (Strength) 10s on a decisive damage roll'
        ]);
        
        App\Charm::create([
            'name' => 'Demon-Crushing Wolf Bite',
            'mins' => 'Melee 4, Essence 2',
            'cost' => '4m, 1i;',
            'element' => 'Melee',
            'type' => 'Supplemental',
            'effect' => 'Perilous, Withering-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Crimson Fang Bite ',
            'book' => 'DB???',
            'description' => 'Emerald thorns burst from the Terrestrial\'s weapon, adding (Stamina) Overwhelming to a withering attack. In Wood Aura, the Dragon-Blood adds (Stamina) to the raw damage of the attack as well'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Sheath',
            'mins' => 'Melee 3, Essence 2',
            'cost' => '3m (+1a);',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'None',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood consigns an artifact Melee weapon to the elements, banishing it Elsewhere through a dramatic and significant manifestation of an element that is at least as large as her weapon. Her daiklave might become translucent and fluid as she touches it to the surface of a lake, dissolving into the body of water; a direlance plunged into a boulder or stone wall might vanish into it; a goremaul fades away as a strong gust of wind carries it away. She may alternatively recall it from a similar manifestation of the same element. If the Exalt doesn\'t have access to an appropriate elemental manifestation, she may expend a level of anima to banish or recall her weapon. Once banished this way, it may be recalled through a manifestation of her Aspect element.'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon-Graced Weapon',
            'mins' => 'Melee 3, Essence 2',
            'cost' => '—;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'None',
            'duration' => 'One scene',
            'prerequisite' => 'Elemental Sheath When ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood recalls a banished weapon with Elemental Sheath, it\'s wreathed with the element she summons it forth from (or her Aspect element, if she expends anima to summon it). Alternatively, the Dragon-Blood can use Elemental Sheath to reflexively shape and ready a mundane Melee weapon from an elemental manifestation, drawing the flames of a bonfire into a lance or shaping a sword from the razor-sharp edge of a biting gale. Either way, the weapon gains benefits based on the chosen element: Air: Wind chills the weapon to a deadly cold. An enemy damaged by a decisive attack takes a −1 penalty on physical rolls until the end of his next turn. Earth: Bulky stones reinforce the weapon, granting the Smashing tag. If it already has that tag, its smash attacks deal an additional die of damage. Fire: Flames wreathe the weapon, granting +1 Overwhelming. Water: The weapon is fluid and graceful, granting the Flexible and Grappling tags. If it already has at least one of those tags, add one bonus die on the attack roll of grapple gambits. Wood: Vines or roots twine around the weapon, granting the Disarming tag. If it already has that tag, add one bonus die on the attack roll of disarm gambits'
        ]);
        
        App\Charm::create([
            'name' => 'Crossfire Flash',
            'mins' => 'Melee 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Melee',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Fire, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Blinding Spark Distraction ',
            'book' => 'DB???',
            'description' => 'A wave of flame rolls down the Dragon-Blood\'s weapon as she strikes, flying into her enemy\'s eyes or scorching other extremities. She rerolls (Essence) non-1 failures on the attack roll of a clash attack. Each rerolled die that shows a 10 strips away a success from her foe\'s own attack roll'
        ]);
        
        App\Charm::create([
            'name' => 'Flame Warden Stance',
            'mins' => 'Melee 4, Essence 2',
            'cost' => '3m, 2i;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Fire, Perilous',
            'duration' => 'One scene',
            'prerequisite' => 'Flame-Borne Interception ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s gleaming blade flickers into place between her allies and her enemies. She takes a defend other action (Exalted, p. 196) that extends its benefits to one scene, without needing to take the defend other action again on subsequent turns. Her ward must be within close range to benefit, but this Charm doesn\'t end if he moves out of range. In Fire Aura, each time the Dragon-Blood parries an attack against her ward, she adds one bonus die to his next attack roll'
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Interception',
            'mins' => 'Melee 5, Essence 2',
            'cost' => '4m;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Counterattack, Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Flame Warden Stance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s battle spirit flares as she fends off peril to her ward, driving her forward in a fiery counterstrike. After successfully parrying an attack against a character she\'s protecting with a defend other action, she may respond with a decisive counterattack. In Fire Aura, the Dragon-Blood\'s ward may attempt a reflexive distract gambit (Exalted, p. 200) against his attacker to benefit the Exalt before she makes her counterattack. This doesn\'t count as her ward\'s attack for the round.'
        ]);
        
        App\Charm::create([
            'name' => 'Steel Tempest Strike',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '4m, 1wp, expend Air Aura;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Exalt leaps into the air and rides a current of wind to strike at her foe with deadly speed. On her turn, she may use her movement action to advance one range band towards an enemy at short range and make a decisive attack against him. She ignores difficult terrain, and may skim over chasms or pits as long as she ends on solid ground. This doesn\'t count as her attack for the round. This Charm can only be used once per scene, unless reset by gaining 15+ Initiative in a single tick'
        ]);
        
        App\Charm::create([
            'name' => 'Falling Mountain Fang',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '2m, 1wp;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strikes a blow laden with Earth Essence, magnifying the weight of whatever she strikes. She makes one of the following gambits: Weigh Down Weapons (Difficulty 6): Earth Essence weighs down a weapon, increasing its weight a thousandfold for the rest of the scene. The wielder must reflexively roll a Strength 5 feat of strength against (the Exalt\'s Essence + her Initiative roll threshold successes) or drop the weapon to the ground. Such a feat is also required to lift it or ready it. Even if the wielder does retain his hold on the weapon or later manage to lift it, all attack rolls with it take a −3 penalty, and carrying it while moving counts as difficult terrain. Weigh Down Armor (Difficulty 4): This gambit increases the mobility penalty of armor by −3, and requires the wielder to spend one Initiative in order to take any movement action. This penalty only lasts three rounds, but a subsequent use of this Charm allows a difficulty 5 gambit against the weighted armor that intensifies its weight until the wearer can no longer stand, forcing him prone and preventing him from taking any movement actions at all for the rest of the scene. He can free himself by removing the armor (Exalted, p. 591). Collapse Structure (Difficulty 3+): The Dragon-Blood can collapse flimsy, weakened, or uneven structures, such as a poorly maintained bridge, a makeshift barricade, or an ancient statue. The difficulty is equal to the Strength minimum of the feat that would be necessary to destroy that structure (Exalted, p. 231), although the DragonBlood need not actually possess that much Strength'
        ]);
        
        App\Charm::create([
            'name' => 'Harnessed Firestorm Assault',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '10m, 1wp, expend Fire Aura;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Channeling pure Fire Essence to stoke her spirit\'s fervor and her body\'s speed, the Dragon-Blood unleashes a furious series of blows that blister the air and fell her foes. She makes ([higher of Dexterity or Strength]/2, rounded down) decisive attacks, divided among one or more enemies. If she has an applicable Melee specialty, she adds it to the relevant Attribute to determine how many attacks she makes. Each attack has a base damage equal to (Initiative/2, rounded up), and she doesn\'t reset to base Initiative until she\'s completed all attacks. If she uses any non-Excellency Fire Charms to enhance these attacks, she need only pay their cost once. Harnessed Firestorm Assault can only be used once per scene, unless reset by successfully landing a decisive attack while in Fire Aura and building up to Initiative 12+ without leaving Fire Aura'
        ]);
        
        App\Charm::create([
            'name' => 'Roaring River Slash',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '5m, 1wp, expend Water Aura;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The outer edge of the Dragon-Blood\'s attack is followed by a ribbon of water moving at incredible speed. She makes a decisive attack and rolls its damage twice, combining both results to determine the total damage. If used together with offensive magic that sets foes on fire, the water extinguishes the flames. This Charm can only be used once per scene, unless reset by going a full round without either making attacks or being attacked. It cannot be reset while the Dragon-Blood is crashed'
        ]);
        
        App\Charm::create([
            'name' => 'Aura of Grasping Branches',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '5m, 3i, 1wp;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Perilous, Signature (Wood)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Terrestrial takes on a defensive stance that emulates the snarled branches of a forest, or a beautiful flower\'s blossom. Each round, she may ignore up to (Essence) points of onslaught penalty to her Parry. She may divide this among multiple attacks in a round, as long as she ignores no more than (Essence) total points of penalty in a single round. In Wood Aura, the Dragon-Blood doesn\'t take onslaught penalties from attacks she successfully parries.'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Soul Burst',
            'mins' => 'Melee 4, Essence 3',
            'cost' => '8m;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Crimson Fang Bite ',
            'book' => 'DB???',
            'description' => 'Through intense effort and concentration, the DragonBlood can channel a burst of flames through her attack. To use this Charm, she must first spend a turn aiming at an enemy within close range. On her next turn, she may use this Charm to make a decisive attack with a base damage of (her Essence + 2), ignoring Hardness. This doesn\'t include her Initiative or reset her to base Initiative. An enemy that takes 3+ levels of damage from the attack is set ablaze, suffering (Essence) dice of lethal damage on each of his turns until he extinguishes the flames. In Fire Aura, the Dragon-Blood may add her Initiative to the base damage of this attack. Doing so resets her Initiative to base'
        ]);
        
        App\Charm::create([
            'name' => 'Smoldering Essence Attack',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '5m, 1a;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Aura, Fire, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Dragon Soul Burst ',
            'book' => 'DB???',
            'description' => 'The concentrated Essence of flame limns the edge of the Exalt\'s weapon and burns in her enemy\'s blood and soul, searing away his fighting spirit. She makes a withering attack, burning away an extra point of her foe\'s Initiative for every 10 on the damage roll, which she doesn\'t gain. The victim suffers this Initiative loss again on each of his next (Essence) turns, or until he damages the Dragon-Blood with a withering attack'
        ]);
        
        App\Charm::create([
            'name' => 'Burning Pinnacle Strike',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '3m;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Aura, Fire, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Smoldering Essence Attack ',
            'book' => 'DB???',
            'description' => 'The Exalt\'s body, skill, and Essence unite in the moment of her triumph, striking a rapid blow guided by sheer instinct and the flame of her fighting spirit. After making a withering attack that leaves her with an Initiative higher than that of all enemies present in the combat, she reflexively makes a withering or decisive attack. This doesn\'t count as her attack for the round. This Charm may only be used once per round'
        ]);
        
        App\Charm::create([
            'name' => 'Root-and-Hand Merging',
            'mins' => 'Melee 4, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Wood',
            'duration' => 'One scene',
            'prerequisite' => 'Elemental Sheath ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is one with her weapon. Roots spring from the bones of her wrists and hands and from her weapon\'s grip, interlocking to form an unbreakable hold. She gains +1 Parry when blocking with the bound weapon, and the difficulty to disarm it increases by +2. In Wood Aura, this doesn\'t count as a Charm bonus'
        ]);
        
        App\Charm::create([
            'name' => 'Portentous Comet Deflection',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Clash, Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Crossfire Flash ',
            'book' => 'DB???',
            'description' => 'The Exalt sees with eyes of fire, realizing the perfect path of a strike the moment before she suffers an attack. She may reflexively clash an attack against her with a decisive attack. This counts as her attack for the round, and can\'t be used if she\'s already made an attack this round. In Fire Aura, the Dragon-Blood may expend her Aura to clash without it counting as her attack for the round. '
        ]);
        
        App\Charm::create([
            'name' => 'Fire Incites Water to a Riot of Clouds',
            'mins' => 'Melee 5, Essence 3',
            'cost' => '4m, 3i;',
            'element' => 'Melee',
            'type' => 'Reflexive',
            'effect' => 'Clash, Fire/Water, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Portentous Comet Deflection ',
            'book' => 'DB???',
            'description' => 'Water vapor or rain boils into steam as the arc of the Dragon-Blood\'s attack agitates them with ferocious Essence, whipping a great cloud from the air as she intercepts her enemy\'s blow. She may reflexively clash an attack against her with a withering attack, without it counting as her attack for the round. She doesn\'t gain any Initiative from the damage roll, but a successful clash creates a steam cloud that spreads out to close range from her enemy, plus an additional range band for every five points of withering damage dealt to him. Any of the Dragon-Blood\'s allies that are within the steam cloud gain one point of Initiative for every 10 on her damage roll. The cloud remains for the rest of the scene, or until dispersed by strong winds or magic. This Charm can only be used once per scene, unless reset by landing a decisive attack while at 15+ Initiative in either Fire or Water Aura.'
        ]);
        
        App\Charm::create([
            'name' => 'Mela\'s Flashing Tongue',
            'mins' => 'Melee 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Air, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Burning Pinnacle Strike ',
            'book' => 'DB???',
            'description' => 'Flaws and openings in her foe\'s defense draw the Exalt\'s blade as the mountain draws the lightning. The DragonBlood makes a number of withering attacks against a single opponent equal to his onslaught penalty at the time she activates this Charm, maximum (Dexterity + Strength), static crackling around her as spent Essence builds a charge in the air. Each withering damage roll only grants Initiative equal to half the damage inflicted, rounded down. In Air Aura, the Dragon-Blood may use the final attack of this Charm to make a decisive attack instead of a withering attack, channeling the electric charge that has built around her into a final, devastating flash. This attack resets her to base Initiative even if it misses. This Charm can only be used once per scene, unless reset by dealing enough decisive damage with a single attack to incapacitate a nontrivial enemy with an uninjured health track'
        ]);
        
        App\Charm::create([
            'name' => 'Mirror-on-Water Focus',
            'mins' => 'Melee 5, Essence 5',
            'cost' => '7m, 1wp;',
            'element' => 'Melee',
            'type' => 'Simple',
            'effect' => 'Aura, Counterattack, Decisive-only, Mute, Perilous, Water',
            'duration' => 'Aura',
            'prerequisite' => 'Fire Incites Water to a Riot of Clouds ',
            'book' => 'DB???',
            'description' => 'When her spirit is becalmed, the Dragon-Blood becomes empty and still. She generates no killing intent, and reflects the killing intent of her enemies back upon them. To use this Charm, the Dragon-Blood\'s anima must be at the dim level, and it ends if her anima rises above dim. If an enemy attacks her, she may end this Charm to make a decisive counterattack before the enemy rolls his attack, with a base damage equal to (her attacker\'s Initiative/2, rounded up). She isn\'t reset to base Initiative by this attack; instead, every success on the damage roll strips one point of Initiative from her attacker, reducing the damage of his own attack, in addition to dealing damage. This counts as the Dragon-Blood\'s attack for the round, and cannot be used if she\'s already attacked this round. This Charm can only be used once per scene, unless reset by using its prerequisite to successfully clash and deal 20+ withering damage while in Water Aura.'
        ]);
        
        
        App\Charm::create([
            'name' => 'Hidden Secrets Whisper',
            'mins' => 'Occult 1, Essence 1',
            'cost' => '1m per die;',
            'element' => 'Occult',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Attuned to the subtle winds of the spiritual, the Dragon-Blood draws forth sublime truths. She may add bonus dice to an Occult roll for one mote each. Each 10 rerolls a non-1 failed die'
        ]);
        
        App\Charm::create([
            'name' => 'Soul-Fire Cremation Technique',
            'mins' => 'Occult 2, Essence 1',
            'cost' => '5m;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Reciting holy texts or heartfelt words, the Exalt returns a corpse to nature. She may burn a mortal\'s corpse to ashes in a few seconds, ensuring the deceased\'s lower soul won\'t linger in the world as a hungry ghost. An existing hungry ghost is unaffected, though the destruction of its corpse requires it to find a new place it can spend the day without being destroyed by sunlight (Exalted, pp. 503-504). This rite provides emotional catharsis to the deceased\'s ghost, allowing it to abandon its undead existence and enter the cycle of reincarnation if it chooses. Even if it doesn\'t, the ritual appeases it, causing it to form a positive Minor Tie towards the Dragon-Blood that cannot be fully removed until the story\'s end'
        ]);
        
        App\Charm::create([
            'name' => 'Seed and Salt Warding',
            'mins' => 'Occult 3, Essence 1',
            'cost' => '1m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Earth or Wood',
            'duration' => 'One day',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood lays down a line of salt or germinated grain to keep ghosts at bay (Exalted, p. 506), spanning up to a single range band. The aspect of this Charm depends on which she uses — salt is Earth, while grain is Wood. She rolls (Intelligence + Occult) to determine the power of the warding. Powerful ghosts who could normally cross the line by spending Willpower can only do so if their Resolve exceeds the Dragon-Blood\'s successes on her Occult roll. Otherwise, they cannot cross the line. The line also repels other forms of undead, such as zombies or hungry ghosts'
        ]);
        
        App\Charm::create([
            'name' => 'Spirit-Detecting Mirror Technique',
            'mins' => 'Occult 1, Essence 1',
            'cost' => '4m;',
            'element' => 'Occult',
            'type' => 'Reflexive',
            'effect' => 'Air, Balanced',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Drawing back the veil between worlds, the DragonBlood makes invisible spirits and phantasms visible within the glass. To use this Charm, she must be touching a mirror or a similar reflective surface, such as the blade of a well-polished daiklave. The Exalt can see the reflections of dematerialized characters in that mirror, and can even hear what they say in the form of whispers that rise up from the mirror\'s surface. Only the Exalt is capable of seeing the reflection — to others, even the spirit itself, it doesn\'t appear in the mirror. This doesn\'t allow the Dragon-Blood to physically interact with spirits, but it can be used in conjunction with magic that does. Using reflections to pinpoint a foe is somewhat awkward — instead of fully negating the −3 penalty for attacking a dematerialized spirit one can\'t see, it reduces the penalty to −1. An Occult 5, Essence 3 repurchase of this Charm lets the Dragon-Blood pay one Willpower to make the spirit reflections visible and audible to her allies as well. Their attacks against it still take a −1 penalty.'
        ]);
        
        App\Charm::create([
            'name' => 'Spirit-Grounding Shout',
            'mins' => 'Occult 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Occult',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Spirit-Detecting Mirror Technique ',
            'book' => 'DB???',
            'description' => 'Rending the air with a fierce kiai, the Dragon-Blood strikes that which cannot be struck. She can strike a dematerialized character with an attack made with any Ability. If the Exalt is unable to see her target, her attack roll suffers a −3 penalty. If the Exalt uses this Charm on her next turn to attack the same enemy, its mote cost is lowered by one. This discount can be stacked, to a minimum cost of zero. Attacking another character or going a round without attacking that spirit resets the discount to zero'
        ]);
        
        App\Charm::create([
            'name' => 'Secret Wind Revelation',
            'mins' => 'Occult 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Occult',
            'type' => 'Reflexive',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'Spirit-Detecting Mirror Technique ',
            'book' => 'DB???',
            'description' => 'Attuned to subtle currents of spiritual wind, the DragonBlood can hear a demon\'s whispers or a ghost\'s tread. When a dematerialized entity comes within long range or closer of the Exalt, the Storyteller informs her player that she may activate this Charm. She rolls (Perception + Awareness) with (Occult) bonus dice opposing its (Dexterity + Stealth) roll to pinpoint his location. A failed roll still reveals the presence of a dematerialized being nearby. However, that entity uses the result of his Stealth roll to establish concealment against the Dragon-Blood until the scene ends or he breaks concealment, escaping her notice even if she later uses Spirit-Detecting Mirror Technique. She cannot use this Charm against the same spirit for the rest of the scene. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Sacred Talon',
            'mins' => 'Occult 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Occult',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Dual, Earth or Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Seed and Salt Warding ',
            'book' => 'DB???',
            'description' => 'When darkness gnaws at the roots of the world and chaos threatens the very balance of Creation, it\'s the will of the Dragons that restores order. This Charm can supplement an attack made with any Ability, drawing upon the orderly Essence of Earth to strike down raksha and other creatures of the Wyld, or channeling vital Wood Essence to destroy one of the undead. A withering attack adds (Essence) dice to its damage after subtracting the target\'s soak. A decisive attack deals aggravated damage and doubles 10s on the damage roll'
        ]);
        
        App\Charm::create([
            'name' => 'Fivefold Resonance Sense',
            'mins' => 'Occult 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Air/Earth/Fire/Water/Wood',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Closing her eyes and stilling her mind, the Dragon-Blood reaches out to the Essence of the world. She may spend up to a scene in meditation, during which she can sense the presence of the five elements — weather patterns, rock formations and geology, fires, bodies of water, living plants, and similar elemental manifestations — out to (the higher of Essence or 3) range bands. Their presence is revealed to her without a roll. In addition, she adds a single non-Charm bonus die on any Awareness, Investigation, Occult, or Survival rolls to detect or track jade, elementals, elemental demesnes and manses, or other form of elemental magic for the duration. An Occult 5, Essence 3 repurchase waives the meditation requirement, allowing the Dragon-Blood to benefit from this Charm while acting normally'
        ]);
        
        App\Charm::create([
            'name' => 'Spirit-Chaining Strike',
            'mins' => 'Occult 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'Spirit-Grounding Shout ',
            'book' => 'DB???',
            'description' => 'Dragging a spirit halfway into the material realm with her attack, the Dragon-Blood exposes it to her allies. She rolls a gambit using any combat Ability against a dematerialized foe, adding (Essence/2, rounded up) bonus successes on the attack roll. Spirit-Grounding Shout enhances this attack for free. The difficulty of the gambit is equal to (the target\'s Essence). A successful gambit weaves gossamer threads of wind through the spirit, binding it partly to the material world. While it doesn\'t become fully materialized, it\'s visible to all Dragon-Blooded characters in the scene, and can attack or be attacked by them as though it were material. This lasts for one round, plus an additional round for every two threshold successes the Exalt rolled on the gambit\'s Initiative roll.'
        ]);
        
        App\Charm::create([
            'name' => 'Hundred Devils Whirlwind',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood stirs the winds of the spirit world into a mighty storm. She rolls (Wits + Occult) with double 9s to create a mystical vortex extending out to medium range, and chooses whether it repels spirits and other dematerialized characters or draws them in. Both material and dematerialized spirits are affected. Each target whose Resolve is beaten is blown one range band in the chosen direction. As long as they remain within medium range of the Exalt, they cannot use Hurry Home to escape and treat any movement opposing the whirlwind\'s direction as difficult terrain (Exalted, p. 199)'
        ]);
        
        App\Charm::create([
            'name' => 'Sage of Iron Meditation',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => '(Stamina) days',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Her will tempered by the blood of dragons, the Exalt imposes order onto chaos. She may spend up to (Stamina) days in meditation. As long as her focus remains unbroken, the Wyld abides by the natural laws of Creation out to short range from her, and cannot cause any mutation, addiction, or other warping to characters in that range. She gains Hardness 20 against attacks made by creatures of the Wyld, and such beings within short range of her lose two Initiative at the start of each turn as long as she continues meditating. Crashed creatures of the Wyld suffers a single die of aggravated damage instead. This Charm can only be used once per story, unless reset by upholding a Major or Defining Intimacy by defeating a creature of the Wyld'
        ]);
        
        App\Charm::create([
            'name' => 'Smoke Ascends to Heaven',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Offering up an efficacious prayer, the Dragon-Blood casts an offering into the fire, beseeching a spirit\'s favor in exchange for the pleasing scent of smoke. She makes a persuade roll with any social Ability, doubling 7s, to influence a spirit in person, or to offer up a prayer through any fire. A prayer made from afar will always be heard if the sacrifice is made in the spirit\'s temple or overseen by one of its priests; otherwise, the Storyteller determines whether the spirit hears the offer. The intensity of any of the spirit\'s Intimacies that support the influence is treated as one step higher when determining the level of task it\'s willing to accept (Exalted, p. 216). Even if it has no applicable Intimacies, she treats it as having a Minor Tie towards her that supports the influence. This Charm can only be used once per story, unless reset by accomplishing a major character or story goal (Exalted, p. 170) by interacting with spirits. If the Dragon-Blood\'s prayer isn\'t heard, no reset is necessary.'
        ]);
        
        App\Charm::create([
            'name' => 'Crashing Wave-Dragons Warding',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => '(Essence) hours',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Blessing a body of running water with her touch, the Dragon-Blood bids it to flow sanctified and pure. Performing the consecration takes one minute. If the body of water is no more than a single range band wide, this effect extends (Essence x2) range bands downstream in a direction of her choice. If it\'s wider than that, the effect extends (Essence) range bands. Any demon, undead, or fae that enters the water suffers its wrath in the form of dragon-shaped waves, an environmental hazard with difficulty 5 and Damage (Essence)B/ round. They also suffer a −3 penalty on physical actions as long as they touch the water, on top of any penalties crossing normally involves. Withering attacks directed at these creatures deal an additional level of Initiative damage. A character whose Essence exceeds the Exalt\'s may spend one Willpower as a miscellaneous action that can\'t be flurried to best the wave-dragons in a dramatic display of its supernatural prowess, freeing it (but not other characters) from this Charm\'s effects for the remainder of its duration. This counts as both its attack and movement for that round. This Charm can only be used once per story, unless reset by successfully advancing a personal goal or one of the Hearth\'s group goals by defeating or overcoming a significant demon, fae, or undead in combat or in another milieu, such as intrigue or a contest of riddles'
        ]);
        
        App\Charm::create([
            'name' => 'Eternal Death-Banishing Blossom',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '10m, 1wp (+3a on next turn);',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Perilous, Signature (Wood)',
            'duration' => 'Until next turn',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood, utterly serene, channels the fierce persistence of life through her anima banner, which branches out like a great tree budding with petals of iridescent light. To use this Charm, she must be at bonfire anima. She gains +2 Defense and (Essence + 3) bonus soak. Against undead enemies or necromantic attacks, this increases to +3 Defense and (Essence + 5) soak. On the Dragon-Blood\'s next turn, as long as she\'s still at bonfire anima and not crashed, her anima banner finally blooms as she expends it. Petals of shimmering Essence fall out to medium range from her. This petal-storm is harmless to the living, but any undead or ghost caught in it must succeed on a difficulty 5 (Stamina + Resistance) roll or take aggravated damage equal to (the Exalt\'s current Initiative/2, rounded up), minimum (Essence). Even dematerialized undead are affected by the petals. Trivial undead foes are automatically destroyed. Against undead Exalted such as Abyssals and powerful beings such as Deathlords, the damage can\'t exceed (her Essence). This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Purification Chant',
            'mins' => 'Occult 4, Essence 3',
            'cost' => '4m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Soul-Fire Cremation Technique, Spirit-Chaining Strike ',
            'book' => 'DB???',
            'description' => 'Affixing a prayer strip to the forehead of a victim of possession, the Dragon-Blood speaks a potent incantation, setting the paper alight. This flame doesn\'t burn the possessed character, but rather, the possessing entity. The DragonBlood rolls ([Charisma or Intelligence] + Occult) against the possessing being\'s Resolve. Success deals (her Essence + threshold successes) dice of decisive aggravated damage to the possessor, ignoring Hardness. If the total damage equals or exceeds that being\'s Essence rating, it\'s forced out of its host, and cannot attempt to possess him again for the rest of the story. Otherwise, the host can\'t benefit from any use of this Charm until a day has passed. Up to five Dragon-Blooded who know this Charm can use it cooperatively. Each character beyond the first adds one additional die of damage.'
        ]);
        
        App\Charm::create([
            'name' => 'Spirit-Shredding Attack',
            'mins' => 'Occult 4, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Occult',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Decisive-only',
            'duration' => 'Instant',
            'prerequisite' => 'Spirit-Chaining Strike ',
            'book' => 'DB???',
            'description' => 'Rending a spirit\'s ephemeral form, the Dragon-Blood disperses its Essence like dust on the wind. Her decisive attack with any combat Ability against a crashed spirit adds attack roll threshold successes as dice of damage. A spirit slain by this attack can potentially reform its Essence (Exalted, pp. 508-509), but does so greatly diminished, losing a permanent dot of Essence. This reduces its mote pool by ten motes, and may deny it access to certain Charms based on their Essence minimums'
        ]);
        
        App\Charm::create([
            'name' => 'Seal of Heavenly Binding',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '5m, 1a, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Spirit-Shredding Attack ',
            'book' => 'DB???',
            'description' => 'The Terrestrial raises her hand in a devil-sealing mudra, raising a binding circle around a spirit or creature of the Wyld. This is a gambit rolled with (Intelligence + Occult) against the Resolve of a spirit out to short range. The difficulty of the gambit is equal to (that being\'s Essence). Outside of combat, this Charm only requires the (Intelligence + Occult) roll against Resolve to succeed. On a success, the Dragon-Blood\'s anima traces an efficacious sigil that entraps that spirit for a single round, plus an additional round for every two threshold successes on the Initiative roll (one scene outside of combat). It immediately materializes, if it wasn\'t already material, and cannot dematerialize or use the Hurry Home Charm. It cannot move out of the circle or attack enemies outside it, although those who enter the circle to reach close range are fair game. The bound spirit may use its entire turn to attempt to break out of the circle, spending one Willpower to make a (Wits + Integrity) roll opposing an (Intelligence + Occult) made by the Dragon-Blood. Success breaches the circle and lets the being escape. This Charm can only be used once per scene'
        ]);
        
        App\Charm::create([
            'name' => 'Chaos-Banishing Revelation Gesture',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Dragon\'s Sacred Talon, Seal of Heavenly Binding ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strikes away temptations and madness born of the Wyld with a mudra of revelation, restoring the harmony of reality. She may free a character within short range of any Psyche effect or Derangement imposed by a creature of the Wyld or exposure to the Wyld itself, including Wyld addiction. The Exalt rolls ([Intelligence or Wits] + Occult) against the Resolve of the character she treats, but (the Essence of the creature that used that magic) is added to his Resolve. A successful roll terminates unnatural influence or removes a Derangement. On a failed roll, the Dragon-Blood cannot use this Charm to treat that character for the same affliction again for the rest of the story. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Purifying Dragon Suspiration',
            'mins' => 'Occult 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Occult',
            'type' => 'Simple',
            'effect' => 'Air/Water',
            'duration' => 'Instant',
            'prerequisite' => 'Blazing Purification Chant, Chaos-Banishing Revelation Gesture ',
            'book' => 'DB???',
            'description' => 'The winds banish smog and miasma; the running river washes away pollution. Embodying all the purifying power of Creation, the Dragon-Blood cleanses curses and spiritual malaise. This Charm is an extended (Intelligence + Occult) action that can be used to free one character of a sorcerous curse, such as the spell Corrupted Words, or a shaping effect that transforms the victim\'s body. It can also lower the intensity of a magically inflicted Derangement by one step. However, sorcerous workings can\'t be broken with this Charm. The extended action has a difficulty equal to (the Essence of the character that imposed the effect), a goal number of (that character\'s Essence x10), terminus 10, and an interval of one month. The DragonBlood must use this Charm at each interval, anointing the beneficiary with sacred cleansing water or using ritual fans to drive away evil. Some curses are beyond the power of this Charm to purify. This includes Solar Circle Sorcery; the magic of the Celestial Incarnae, Yozis, and Deathlords; or any other effect the Storyteller deems completely beyond the capability of the Terrestrial Exalted to break'
        ]);
        
        App\Charm::create([
            'name' => 'Anathema-Sealing Tomb',
            'mins' => 'Occult 5, Essence 5',
            'cost' => '3m, 1wp;',
            'element' => 'Occult',
            'type' => 'Reflexive',
            'effect' => 'Decisive-only, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Seal of Heavenly Binding ',
            'book' => 'DB???',
            'description' => 'When the Dragon-Blood incapacitates a spirit with a decisive attack, she may use this Charm to seal its Essence away into the nearest dramatic manifestation of Earth Essence: the depths of a cavern, a cairn or standing stone, a statue, an Earth demesne or manse, a mountain, or something similar. The imprisoned spirit is unable to reform itself (Exalted, pp. 508-509) for at least (Essence) centuries, and spirits that cannot reform themselves (including most elementals and First Circle Demons) are sealed away permanently. The spirit can be freed by destroying its earthen prison, a dramatic endeavor as difficult as the Storyteller deems appropriate. It\'s unknown what would happen if this Charm were used to seal one of the Deathlords or Yozis; the result is explicitly left up to the Storyteller\'s discretion.'
        ]);
        
        App\Charm::create([
            'name' => 'Sorcery Terrestrial Circle Sorcery',
            'mins' => 'Occult 3, Essence 1',
            'cost' => '—;',
            'element' => 'Occult',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'Any four Occult Charms ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood steps across the threshold of the Emerald Circle, and is forever changed. She gains the ability to cast spells of the Terrestrial Circle, and learns one shaping ritual (Exalted, p. 466) and one Terrestrial Circle spell, which becomes her control spell'
        ]);
        
        App\Charm::create([
            'name' => 'Five Winds Raiment',
            'mins' => 'Occult 5, Essence 2',
            'cost' => '3m, 1a;',
            'element' => 'Occult',
            'type' => 'Supplemental',
            'effect' => 'Air',
            'duration' => 'Until spell is cast',
            'prerequisite' => 'Terrestrial Circle Sorcery ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s anima banner twists into a whirlwind as Essence gathers in her hand, shielding her from all harm. This Charm supplements a Shape Sorcery action (Exalted, p. 465). The winds grant her +1 Defense and (Essence) Hardness until she casts the spell or stops shaping. In Air Aura, this doesn\'t count as a Charm bonus, and the Hardness granted rises to (higher of Essence or Stamina)'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon-Sorcerer Puissance',
            'mins' => 'Occult 5, Essence 3',
            'cost' => '—;',
            'element' => 'Occult',
            'type' => 'Permanent',
            'effect' => 'Balanced',
            'duration' => 'Permanent',
            'prerequisite' => 'Terrestrial Circle Sorcery ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s elemental Essence overflows into her sorcery. Whenever she shapes a spell based on a single element, such as Flight of the Brilliant Raptor, Invulnerable Skin of Bronze, or Wood Dragon\'s Claw, she gains a single additional sorcerous mote each round she spends shaping it. If the Dragon-Blooded is in the Aura state that matches the spell\'s element, she gains three sorcerous motes each round instead. '
        ]);
        
        
        App\Charm::create([
            'name' => 'Universal Audience-Enthusing Display',
            'mins' => 'Performance 2, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood drinks in her audience\'s appreciative eyes and repays them with her masterful performance. She may add automatic successes to a Performance roll for two motes each and ignores the penalty for targeting multiple characters with a social influence roll (Exalted p. 221)'
        ]);
        
        App\Charm::create([
            'name' => 'Hidden Petal Aria',
            'mins' => 'Performance 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood expresses multiple layers of meaning via an artistic performance, conveying a secret message through nuances of speech and movement. She may embed a message one sentence long into a performance, conveying it only to select members of her audience. This can incorporate social influence. Magical attempts to detect the message must succeed on a roll at difficulty'
        ]);
        
        App\Charm::create([
            'name' => 'Invisible Street Performer Technique',
            'mins' => 'Performance 3, Essence 1',
            'cost' => '2m;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Air, Balanced',
            'duration' => 'One performance',
            'prerequisite' => 'Hidden Petal Aria ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood vanishes into her performance, receding from her audience\'s notice. She rolls (Manipulation + Performance). As long as she continues to perform, characters whose Resolve is beaten by her roll cannot directly notice her. While they see or hear her artistic display, they pay no mind to the person performing it. The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing, but this Charm ends if the Dragon-Blood stops performing, rolls Join Battle, or takes an overt action that draws notice to herself, such as brandishing a weapon'
        ]);
        
        App\Charm::create([
            'name' => 'Dance of Flashing Swords',
            'mins' => 'Performance 4, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Invisible Street Performer Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can pass off a fight to the death as a piece of street theater. She makes a special instill roll with (Manipulation + Performance) against all bystanders to a combat or other violent altercation, explaining how it is actually an artistic performance. A character whose Resolve is beaten by this roll accepts the Dragon-Blood\'s explanation of the scene\'s events. He cannot spend Willpower to resist this influence unless the circumstances of the fight dramatically change in a way that undermines the Exalt\'s lie, or if his ignorance would pose a threat to one of his Major or Defining Intimacies. Unlike other Simple Charms, Dance of Flashing Swords can be placed in a flurry'
        ]);
        
        App\Charm::create([
            'name' => 'Talented Improvisation',
            'mins' => 'Performance 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Performance',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is moved by an innate genius for performance, intuiting the entire composition of a song after hearing only a few notes or turning a clumsy misstep into the beginning of a provocative dance. After making a Performance roll, she rerolls (Essence) non-1 failed dice. If she uses a stunt to explain how she recovers from her misstep, this Charm\'s cost is reduced by the stunt\'s level'
        ]);
        
        App\Charm::create([
            'name' => 'Soul-Stirring Performance',
            'mins' => 'Performance 5, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Talented Improvisation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s grace and beauty sow the seeds of passion in her audience\'s hearts. She makes an inspire roll with (Essence) non-Charm bonus dice. A character whose Resolve is beaten must enter a Decision Point to resist, calling on an Intimacy of any intensity that opposes the emotion the performance conveys'
        ]);
        
        App\Charm::create([
            'name' => 'Heart-Strengthening Defense',
            'mins' => 'Performance 5, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One performance',
            'prerequisite' => 'Soul-Stirring Performance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s performance charges her audience with the vital will to endure. All characters that can see or hear her performance gain +1 Resolve against any other influence, or +2 Resolve against Psyche effects or other unnatural influence. The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing'
        ]);
        
        App\Charm::create([
            'name' => 'Harmonious Life-Affirming Song',
            'mins' => 'Performance 5, Essence 2',
            'cost' => '4m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One performance',
            'prerequisite' => 'Heart-Strengthening Defense ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s performance revives those who hear it, like the coming of an early spring. All characters who witness her performance add a bonus success on rolls against poison, disease, and other maladies, and multiply the rate at which they heal damage (Exalted, p. 173) by (Essence + [Charisma or Appearance]). The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing.'
        ]);
        
        App\Charm::create([
            'name' => 'Irresistible Whirlpool Diversion',
            'mins' => 'Performance 5, Essence 2',
            'cost' => '5m;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'One performance',
            'prerequisite' => 'Soul-Stirring Performance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s performance draws in her audience\'s attention like a maelstrom sucking in flotsam, making it difficult for them to pay attention to anything but her. She rolls ([Manipulation or Appearance] + Performance) with double 9s. Any audience members with a Resolve lower than her rolled successes suffers a penalty of (her Essence) to Awareness-based rolls to pay attention to anything or anyone other than her. The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing'
        ]);
        
        App\Charm::create([
            'name' => 'Thundering Dragon Proclamation',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Breathing deep of the world, the Dragon-Blood raises her voice to a resounding shout, her words rumbling across the sky like thunder. Her voice is loud enough to be heard clearly by characters at extreme range, up to four bands away from her. The influence she can take through her amplified voice is limited to inspire and threaten actions, but she ignores environmental or distance penalties. She doubles 9s on all voice-based Performance rolls, as well as command actions (Exalted, p. 209). She may lower her voice to normal volume, and must do so to engage in non-Performance forms of social influence, but doesn\'t benefit from doubles 9s when she does. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Tears-From-Stone Eloquence',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s performance brings the world into harmony, suffusing the traditions and institutions of society with the enduring Essence of earth. She makes an inspire roll with (Charisma + Performance). If any character\'s Resolve is overcome by the inspire roll, his player must choose a response to the inspired emotion that will affirm, support, or protect a social institution or tradition that he has an Intimacy towards. If that character has no such Intimacies, he must immediately form one at Minor intensity. A stern polemic could rouse villagers to the defense of the Immaculate Order, while a joyful tune played at a Dynastic salon might inspire shows of gratitude and goodwill to the Great House hosting it. Resisting this influence requires spending one Willpower in a Decision Point, calling upon an Intimacy at least as strong as the one affected by this Charm. This Charm can only be used once per story, unless reset by upholding a Major or Defining Intimacy for a social institution or tradition'
        ]);
        
        App\Charm::create([
            'name' => 'Immolating Passion Alleluia',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood lets the fires of her performance consume her, radiating passionate intensity with every word, note, or movement. She makes an inspire roll using ([Charisma or Appearance] + Performance), rolling an additional non-Charm die for every 10. The emotions she inflames are incredibly intense, compelling an equally intense response from her audience. While the player of an affected character still chooses how that character reacts to the influence, his reaction must rise to the level of at least a serious task (Exalted, p. 216) chosen by his player. Resisting this influence costs three Willpower. Immolating Passion Alleluia can only be used once per story, unless reset by achieving a legendary social goal (Exalted, p. 134) by influencing a character to act on his passions'
        ]);
        
        App\Charm::create([
            'name' => 'Mesmerizing Siren Call',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '8m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Water)',
            'duration' => 'One performance',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'A scintillating facade of beauty and grace conceals hidden depths of danger. The Dragon-Blood rolls (Manipulation + Performance), rerolling all dice that initially show non-1 failures. Each character whose Resolve is beaten by this roll is hypnotized by the performance. The Exalt may spend her threshold successes over a given character\'s Resolve to impose one or more illusions from the following list on him for as long as she continues to perform. If she affects multiple characters, she may inflict different illusions on each, though groups of minor targets should be combined into audiences (Exalted, p. 223). 0 Successes The target perceives phantasmal imagery, sounds, or scents, but is aware that they\'re unreal. 1 Success The target perceives a single illusory entity or object, up to roughly the size of a person or horse, and believes it to be real. This cannot imitate a specific character. 2 Successes The target perceives an illusory duplicate of an existing, human-sized character that the Exalt knows, and believes it to be real. 2 Successes One individual within medium range, no larger than a human, is concealed from the target\'s senses. He cannot perceive the concealed character, even if she takes overt actions that would normally draw his attention, although she\'s revealed if she attacks him. 3 Successes The target perceives a single large illusory entity, object, or structure, up to the size of a house or tyrant lizard, and believes it to be real. This can imitate a specific character. The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing. Illusions created with this Charm act as the Exalt wills them to, but cannot physically interact with the world. If a figment engages the target in social influence, it uses the Exalt\'s dice pools, but she cannot enhance its rolls with her magic. If a victim of this Charm discovers evidence that what he\'s perceiving isn\'t real, he can spend two Willpower to resist, breaking free of all illusions. Walking into an unreal fire and discovering it doesn\'t burn, being attacked by an enemy concealed behind an illusory wall, or noticing a discrepancy in an illusory impostor\'s behavior would all provide such an opportunity. In addition, he may resist if the illusions would cause him to act against or fail to protect one of his Major or Defining Intimacies. Mesmerizing Siren Call can only be used once per story, unless reset by accomplishing a major character or story goal (Exalted, p. 170) through deception.'
        ]);
        
        App\Charm::create([
            'name' => 'Life-Spirit Symphony',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'One performance',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Nature dances, exultant, to the Dragon-Blood\'s performance. Flowers blossom from her footsteps, vines twist and coil with her rhythm, and thorns turn away from harming her. As long as the Exalt continues to perform, she and all allies within medium range can ignore difficult terrain based on foliage or vegetation, its movements opening a path to let them through. Whenever a plant-based environmental hazard or poison threatens those allies, she may roll (Charisma + Performance). They can use the result of her roll in place of their own rolls to resist the hazard or poison. The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing. If she wishes, she may use her miscellaneous action to direct vines and plants to attack an enemy within medium range, rolling a difficulty 4 gambit with (Charisma + Performance). Success ensnares him in vines, preventing him from taking any movement actions until he or one of his allies clears them with a difficulty 3 gambit using an edged weapon. Even after they\'re hacked away, they linger on as difficult terrain beneath his feet. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Blossom Hides Thorns',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '6m, 1wp, expend Wood Aura;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Aura, Mute, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Dance of Flashing Swords ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood turns the strumming of her fingers on an erhu\'s strings or the graceful steps of a dance into a facade for a deadly ambush, concluding her show with a truly breath-taking finale. To use this Charm, she must be in the middle of a performance. She rolls (Manipulation + Performance) with double 9s against the Resolve of a single target. On a successful roll, the Dragon-Blood, her allies, and her target roll Join Battle. Either the Exalt or one of her allies, designated before the Join Battle roll, has the opportunity to make an unexpected attack against the target (Exalted, p. 203). If the attacker beats the target\'s Join Battle, the attack is an ambush that bypasses defense completely; if not, it\'s only a surprise attack, inflicting −2 Defense. Dance of Flashing Swords can be activated reflexively together with this Charm to disguise the sneak attack as part of the performance. If so, its Willpower cost is waived.'
        ]);
        
        App\Charm::create([
            'name' => 'Lightning Declamation Style',
            'mins' => 'Performance 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The voice of a dragon evinces perfection. The Exalt rerolls 6s until they cease to appear on an oratorical Performance roll. If she\'s upholding a Major or Defining Principle, she rerolls 5s until they cease to appear as well'
        ]);
        
        App\Charm::create([
            'name' => 'Legend-Hewn Wisdom',
            'mins' => 'Performance 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Lightning Declamation Style ',
            'book' => 'DB???',
            'description' => 'Dragon-Blooded storytellers pass down lessons of history and tradition, ensuring that society\'s foundation remains strong. She rolls (Charisma + Performance) to inspire an audience with emotion by telling a story. In addition to creating the chosen emotion, this influence also instills targets with an Intimacy based on the moral or allegory of her story, either creating it at Minor intensity or strengthening an already-existing Intimacy. A Performance 5, Essence 3 repurchase allows the Dragon-Blood to pay one Willpower to grant a temporary point of Willpower to any character that allows the influence to succeed without applying his Resolve. This Willpower may only be spent to resist influence that opposes the Intimacy instilled with this Charm. A character may only benefit from this effect once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Storm-Gathering Fervor',
            'mins' => 'Performance 3, Essence 2',
            'cost' => '2m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Air, Aura',
            'duration' => 'Instant',
            'prerequisite' => 'Lightning Declamation Style ',
            'book' => 'DB???',
            'description' => 'An electric understanding arcs between the Dragon-Blood and one who shares her values. When she uses oratory to make an inspire, instill, or persuade roll that is supported by a Principle that her target shares with her, she adds nonCharm bonus dice equal to (the Intimacy of whichever of them has the Principle at the lowest rating). If she targets multiple characters, all of them must share the same Principle with her for her to benefit from this Charm'
        ]);
        
        App\Charm::create([
            'name' => 'Epoch Saga Memory',
            'mins' => 'Performance 4, Essence 3',
            'cost' => '3m;',
            'element' => 'Performance',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Legend-Hewn Wisdom ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood has eidetic recall of every story she\'s heard before. Finding one within the depths of her memories, she forces it to the surface. Her flawless recitation adds a non-Charm bonus success on a Performance roll made to tell that story, or any mental or social roll with another Ability that could benefit from her perfect recall of every detail of the story. Alternatively, she may add +1 Resolve against an influence roll contrary to that story\'s moral, or +1 Guile against a roll by immersing herself in recollection, as a non-Charm bonus. Epoch Saga Memory can only be used once per day. '
        ]);
        
        App\Charm::create([
            'name' => 'Puissant Precursor\'s Monologue',
            'mins' => 'Performance 5, Essence 4',
            'cost' => '8m, 1wp;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Storm-Gathering Fervor, Thundering Dragon Proclamation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood speaks with the undeniable authority of a revered grandmother, her every word as powerful as a bolt of lightning. She makes a persuade roll with ([Charisma or Manipulation] + Performance), doubling 7s, to convince her audience to take a course of action that upholds one of her Defining Principles. Characters who share that Intimacy with her must pay an additional point of Willpower to resist her influence. This Charm can only be used once per story unless reset by achieving a legendary social goal (Exalted, p. 134) that upholds one of her Defining Principles.'
        ]);
        
        App\Charm::create([
            'name' => 'Sanxian-Charming Fingers',
            'mins' => 'Performance 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood draws on practice-honed perfection and creative virtuosity, doubling 9s on a Performance roll to play a musical instrument'
        ]);
        
        App\Charm::create([
            'name' => 'Voice-Uplifting Aspect',
            'mins' => 'Performance 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood sings with the voice of the winds, adding an automatic success on a Performance roll to sing and rerolling a single die that showed a non-1 failure for each 10 on the roll'
        ]);
        
        App\Charm::create([
            'name' => 'Blossoming Instrument Evocation',
            'mins' => 'Performance 4, Essence 2',
            'cost' => '2m;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Indefinite',
            'prerequisite' => 'Sanxian-Charming Fingers ',
            'book' => 'DB???',
            'description' => 'Nature itself yearns for the sweet music of the DragonBlood, offering itself up as the instrument of her harmony. A tree branch will reshape itself into a sanxian should she have need of it, and reeds become flutes of unsurpassed beauty in her hands. She may create a musical instrument from any living plant. If she has a Performance specialty in that instrument, it\'s an exceptional tool (Exalted, p. 580). Once this Charm\'s duration ends, the instrument reverts back to its natural form'
        ]);
        
        App\Charm::create([
            'name' => 'Vibrating Strings Defense',
            'mins' => 'Performance 5, Essence 2',
            'cost' => '4m, 1wp;',
            'element' => 'Performance',
            'type' => 'Reflexive',
            'effect' => 'Clash, Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Sanxian-Charming Fingers ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blooded makes no distinction between weapons and instruments, rebuking anyone gauche enough to interrupt her song. To use this Charm, she must be carrying or playing a musical instrument. She reflexively clashes an attack against her with a decisive attack, rolled with (Wits + Performance). This doesn\'t count as her combat action. If successful, the Dragon-Blood doesn\'t roll damage or reset Initiative, but her attacker loses (Essence + attack roll threshold successes) Initiative, which she doesn\'t gain. The base Resolve of an enemy crashed by the gambit is set to 0 against the first Performance-based influence roll the Dragon-Blood makes against him before he recovers from crash. This Charm can only be used once per scene, unless reset by lowering an enemy\'s Initiative from a value higher than the Exalt\'s own to a value lower than hers.'
        ]);
        
        App\Charm::create([
            'name' => 'Three-String Sword Prana',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '7m, 1a;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Vibrating Strings Defense ',
            'book' => 'DB???',
            'description' => 'Drawing on her mastery of an instrument, the DragonBlood suffuses its music with anima, unleashing a deadly attack with her song. She can send spectral blades flying at a foe with a strum of her sanxian, play a bone-shattering trill on a flute, create a phantasmal beast that moves in time with the beat of her drums, or similarly spectacular displays of martial prowess. This is a decisive attack rolled with (Wits + Performance) against an enemy out to medium range. With the Storyteller\'s permission, the Exalt\'s stunt can grant this attack any weapon tags (Exalted, pp. 585-590) that fit the manifestation of the attack. She rolls her Initiative for damage as usual, doubling 10s. If the Dragon-Blood is using other Performance Charms that require her to continue playing to maintain their effect, using Three-String Sword Prana counts as continuing her performance on the round she uses it. '
        ]);
        
        App\Charm::create([
            'name' => 'Battle Anthem of Ten Thousand Dragons',
            'mins' => 'Performance 5, Essence 3',
            'cost' => '4m, 4i;',
            'element' => 'Performance',
            'type' => 'Simple',
            'effect' => 'Aura, Perilous, Wood',
            'duration' => 'One performance',
            'prerequisite' => 'Three-String Sword Prana ',
            'book' => 'DB???',
            'description' => 'The war-song of the Terrestrial Host has been passed down from mother to daughter for time immemorial, a battle hymn as ancient as the Divine Revolution. As long as the Dragon-Blood continues her musical performance with instruments or her voice, she and all allies that hear it gain a single bonus die on all attack rolls, combat movement, and command actions. Allied battle groups also add this bonus on rolls to resist rout. In addition, her and her allies\' successful withering attacks grant one bonus point of Initiative. If multiple characters use this Charm, these bonuses don\'t stack. The Dragon-Blood can take other actions while continuing the performance by flurrying them with a miscellaneous action to continue performing'
        ]);
        
        App\Charm::create([
            'name' => 'Dance Swaying Boughs Arabesque',
            'mins' => 'Performance 2, Essence 1',
            'cost' => '4m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Moving with sensuous rhythm and vivacious appeal, the Dragon-Blood embodies beauty through dance. This Charm supplements a Performance roll to dance, lowering the Resolve of all targets by 1. This both lowers the difficulty of the roll and potentially increases the bonus dice added by the Exalt\'s Appearance (Exalted, p. 371)'
        ]);
        
        App\Charm::create([
            'name' => 'Petal-Strewn Pavane',
            'mins' => 'Performance 2, Essence 1',
            'cost' => '3m, 2i;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Perilous, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Swaying Boughs Arabesque ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood makes no distinction between dance hall and field of battle. She adds (Performance) bonus dice to any combat movement roll. Additionally, she can flurry the supplemented movement with a Performance-based action without flurry penalties. This Charm can\'t be used if the Exalt is wearing medium or heavy armor. In Wood Aura, this Charm also adds a non-Charm bonus success on the roll, and allows the Dragon-Blood to ignore the normal penalties for moving through difficult terrain'
        ]);
        
        App\Charm::create([
            'name' => 'Falling Leaves Sway',
            'mins' => 'Performance 5, Essence 2',
            'cost' => '6m;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Swaying Boughs Arabesque ',
            'book' => 'DB???',
            'description' => 'Every movement of the Exalt\'s body is suffused with emotional intensity. Her Appearance adds non-Charm bonus dice to an inspire roll made through dance based on her target\'s Resolve (Exalted, p. 218). Any social influence that she or her allies subsequently use against that target in the same scene that\'s supported by the inspired emotion gains an automatic success.'
        ]);
        
        App\Charm::create([
            'name' => 'Waltz of Honeyed Wine',
            'mins' => 'Performance 5, Essence 4',
            'cost' => '2m, 1wp;',
            'element' => 'Performance',
            'type' => 'Supplemental',
            'effect' => 'Aura, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Falling Leaves Sway ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is vivacity and allure made manifest in motion, dancing with irresistible sensuality. She converts the non-Charm dice added by her Appearance on any dancebased Performance roll to non-Charm successes. Characters with a base Resolve at least two points lower than her Appearance must spend an additional point of Willpower to resist her influence, while those whose Resolve is five points lower cannot spend Willpower to resist at all. Waltz of Honeyed Wine can only be used once per story, unless reset by achieving a major character or story goal (Exalted, p. 170) by playing on another character\'s emotions, or by seducing him'
        ]);
        
        
        App\Charm::create([
            'name' => 'Glowing Coal Radiance',
            'mins' => 'Presence 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Presence',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The blazing power that radiates from the DragonBlood\'s every word and gesture is enough to humble those who stand before her. She may add automatic successes to a Presence roll for two motes each, and rolls an additional non-Charm die for every 10'
        ]);
        
        App\Charm::create([
            'name' => 'Eternally Argumentative Flame',
            'mins' => 'Presence 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Presence',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Fire',
            'duration' => 'One turn',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'A Dragon-Blood\'s tongue is but one of her many weapons. When she flurries a Presence- or Socialize-based influence roll, the flurry penalty on both actions is reduced by one point, and she doesn\'t suffer a Defense penalty. In Fire Aura, this Charm removes the flurry penalty entirely'
        ]);
        
        App\Charm::create([
            'name' => 'Unbearable Taunt Technique',
            'mins' => 'Presence 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Even the meekest hearts are tinderboxes for the flames of outrage the Dragon-Blood stirs. She rolls to inspire a single character with anger. If successful, her target must immediately respond to her with hostility. His player chooses the form this takes — outrage, threats, or even Joining Battle. In combat, this influence roll instead provokes an enemy into prioritizing attacking the Dragon-Blood instead of any of her allies on his next turn. Even if he does pay the Willpower cost to resist, he loses two Initiative if he attacks any other character that turn'
        ]);
        
        App\Charm::create([
            'name' => 'Burning Dragon Mien',
            'mins' => 'Presence 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The fury of a dragon strikes fear into even the boldest hearts. The Dragon-Blood makes a threaten roll with double 9s against a single character. An enemy whose Resolve is beaten in combat loses 1 Initiative, even if he resists'
        ]);
        
        App\Charm::create([
            'name' => 'Warm-Faced Seduction Style',
            'mins' => 'Presence 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood radiates desirability and enchanting allure. She makes a persuade roll to seduce a single target. Overcoming his Resolve also instills him with a Minor Tie of lust or desire toward her unless he spends Willpower to resist. In Fire Aura, the Dragon-Blood may convert up to (Essence) bonus dice added by her Appearance (Exalted, p. 218) to non-Charm bonus successes.'
        ]);
        
        App\Charm::create([
            'name' => 'Debate-Sparking Bonfire',
            'mins' => 'Presence 3, Essence 2',
            'cost' => '6m;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Unbearable Taunt Technique ',
            'book' => 'DB???',
            'description' => 'A few choice words are all it takes to turn any soiree or party into a firestorm of argument and recriminations. The Dragon-Blood rolls to inspire one or more characters with anger, ignoring the penalty for targeting multiple characters. Affected characters must express their outrage towards the DragonBlood using social influence in a way chosen by their player —engaging the Dragon-Blood in an argument, bad-mouthing her to his associates, or some similar social expression of outrage. If that character already intended to commit violence against her, he may do so, but must express his rage through word and deed simultaneously'
        ]);
        
        App\Charm::create([
            'name' => 'Hot-Blooded Ardor',
            'mins' => 'Presence 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Presence',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Warm-Faced Seduction Style ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is fire given flesh. She treats her Appearance as one dot higher, even above 5, when determining how many bonus dice it adds (Exalted, p. 218) to an influence roll made with Presence or Socialize. With a Presence 5, Essence 3 repurchase, the Dragon-Blood may expend her Fire Aura to treat her Appearance as (Essence/2, rounded up) dots higher instead'
        ]);
        
        App\Charm::create([
            'name' => 'Passion-Transmuting Nuance',
            'mins' => 'Presence 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Burning Dragon Mien, Unbearable Taunt Technique, Warm-Faced Seduction Style ',
            'book' => 'DB???',
            'description' => 'Just as a rising tide transforms landscapes, the Terrestrial\'s words can turn fear to hope or delight to sorrow. She makes an inspire roll with (Manipulation + Presence) against a single character who\'s in the grip of strong emotion, either as a result of an inspire action (Exalted, p. 217), or due to roleplaying reasons. Success lets the Dragon-Blood change her target\'s emotion to another, unrelated passion. The new emotion is treated as a Major Intimacy even if the original wasn\'t inspired using influence. A character must enter a Decision Point and call on a Major or Defining Intimacy to resist this influence with Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Fearsome Dragon Presence',
            'mins' => 'Presence 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Presence',
            'type' => 'Reflexive',
            'effect' => 'Fire, Perilous',
            'duration' => 'One tick',
            'prerequisite' => 'Burning Dragon Mien ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s terrifying battle aspect cows her foes. For one tick, all attack rolls, social influence rolls, and rushes made against the Dragon-Blood take a −2 penalty. An enemy may spend one Willpower to become immune to this penalty for the rest of the scene. In Fire Aura, the penalty inflicted by this Charm rises to (Essence)'
        ]);
        
        App\Charm::create([
            'name' => 'Moth to the Candle',
            'mins' => 'Presence 4, Essence 2',
            'cost' => '2m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'One scene',
            'prerequisite' => 'Unbearable Taunt Technique ',
            'book' => 'DB???',
            'description' => 'Outraged foes rush headlong for the Dragon-Blood like moths plunging to their doom. The Dragon-Blood\'s enemies are so enraged by the sight of her that they must prioritize attacking her over any other character. This doesn\'t prevent them from taking non-attack actions, but they cannot attack her allies as long as she remains in the fight. An enemy can resist this for one scene by spending a point of Willpower. This Charm also reduces the cost of Unbearable Taunt Technique to one mote. If the Dragon-Blood successfully taunts an enemy who hasn\'t resisted Moth to the Flame, that character must use his next turn to move into range and attack her if possible'
        ]);
        
        App\Charm::create([
            'name' => 'Grinding Millstone Argument',
            'mins' => 'Presence 5, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Presence',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Eternally Argumentative Flame ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood embodies the relentless nature of earth in her persistent argument, shaking the convictions of even her strongest-willed rivals. After failing a persuade roll, she may reset her attempt (Exalted, p. 222), allowing her to try again. If her target uses the same Intimacy to bolster his Resolve that he did against the original attempt, the bonus it provides is lowered by one. Grinding Millstone Argument can only be used once per scene.'
        ]);
        
        App\Charm::create([
            'name' => 'Haunting Words Infliction',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '4m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Even if the Dragon-Blood cannot persuade another with her arguments, she can give him the clarity of air to know the truth for himself when he sees it. She rolls (Charisma + Presence) with double 9s to instill a single character with an Intimacy she possesses. Even if she doesn\'t beat her target\'s Resolve or he resists, her words linger with him for (6 − his Integrity) weeks thereafter. Every gust of wind seems to whisper her argument in endless repetition, while weather patterns take on symbolic or allegorical meaning to him. Each time the target learns new information that supports the Dragon-Blood\'s argument and would allow her to retry her instill action (Exalted, p. 222), he makes a (Charisma + Presence) instill roll against himself, adding (the Dragon-Blood\'s Essence) in non-Charm bonus dice. He cannot choose to fail the roll, and the rules for lengthy debates apply (Exalted, p. 219). Successfully asserting his Resolve against such a roll ends this Charm\'s effect. This Charm may only be used against any given character once per story. '
        ]);
        
        App\Charm::create([
            'name' => 'Virtuous Mountain\'s Shadow',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '8m, 1wp;',
            'element' => 'Presence',
            'type' => 'Reflexive',
            'effect' => 'Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Disharmonious words, offensive to propriety and right action, invite the Dragon-Blood\'s censure. When she witnesses a character using social influence she wishes to dispute, she may draw on one of her Major or Defining Intimacies to make her counterargument. All characters who hear her gain access to that Intimacy, which they may use to bolster their Resolve against the influence or in a Decision Point. Characters who choose to accept this benefit gain the chosen Intimacy at Minor intensity'
        ]);
        
        App\Charm::create([
            'name' => 'Terrifying Fire-Dragon Roar',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '10m, 1wp, expend Fire Aura;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Roaring with her draconic ancestors\' fury, the DragonBlood exhales a deadly blast of fire. She rolls an unblockable decisive attack with (Charisma + Presence) that extends in a line out to medium range, striking all characters caught within it, including allies. The attack roll is also treated as a threaten roll against all enemies caught in the blast to terrify them into fleeing, even if they successfully dodge. The Dragon-Blood divides (her Initiative + Essence) evenly among all hit characters, rounded down, to determine the lethal damage rolled against them, ignoring Hardness. Battle groups caught in the blast suffer (Initiative + Essence) damage, which doesn\'t count against the total Initiative she has to divide, and must roll against rout (Exalted, p. 209) if their Resolve is beaten. Any flammable scenery in the area of the blast catches fire. This Charm can only be used once per scene, unless reset by gaining 15+ points of Initiative in a single tick'
        ]);
        
        App\Charm::create([
            'name' => 'Fluid Recollection Insinuation',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Essence of the Dragon-Blood\'s presence flows into her target\'s mind like seeping water, finding a place in his memories wherein she can exist. She rolls (Manipulation + Presence) as a special instill roll, describing a past encounter between the two of them that never happened. If she beats the target\'s Resolve, she creates a false memory, up to five minutes long, of that encounter. The memory is focused solely on the interaction between the two, whether that was a conversation, a dance at a soiree, an introduction as children, or a street brawl. Implausible claims (Exalted, p. 215) in this false version of events do not inflict penalties; instead they subtract successes equal to the penalty they\'d normally inflict. If a target has never met the Dragon-Blood before, he forms a Minor Tie towards her, with an emotional context chosen by his player based on the nature of the false memory. He cannot voluntarily weaken this Tie. For him to resist this influence, other characters must fully erode the Intimacy using social influence or magic, at which point he may pay one Willpower to recognize the false memory for an illusion. A character who already knows the Dragon-Blood can still have his memories altered. He still forms a new Minor Tie based on the false memory, but doesn\'t need to erode it before he may pay Willpower to recognize a discrepancy between the false memory and what he knows about the Dragon-Blood. This Charm may only be used against any given character once per story.'
        ]);
        
        App\Charm::create([
            'name' => 'Spirit-Cultivating Leadership',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => '(Essence) days',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is a source of strength for her followers and attendants, helping them realize their true potential through her leadership. She may use this Charm on a character with a Defining Tie of loyalty to her. For the duration of this Charm, he gains the following benefits: • +2 Resolve against any influence that would weaken his Tie to the Dragon-Blood. • Three temporary specialties of the DragonBlood\'s choice, distributed among the Archery, Athletics, Awareness, Brawl, Dodge, Integrity, Martial Arts, Melee, Presence, Resistance, Ride, Sail, Survival, Thrown, or War Abilities. • One extra Willpower per day, which may only be spent resisting social influence. This cannot raise him above his permanent Willpower and is lost at the end of the day if not spent. The Dragon-Blood may use this Charm on up to a maximum of (Essence +3) characters at a time'
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Heart Ascendancy',
            'mins' => 'Presence 4, Essence 3',
            'cost' => '6m;',
            'element' => 'Presence',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Debate-Sparking Bonfire ',
            'book' => 'DB???',
            'description' => 'Fire is best fought with fire. This Charm supplements a persuade or threaten roll made with Presence or Socialize. If the target enters a Decision Point to resist the supplemented influence, the only Intimacies he can call upon to justify his resistance are those based on passion. Intimacies with no emotional power, such as a Principle of belief in the rule of law, cannot be used, even if they have a higher intensity. Characters who have no passionate Intimacies to inflame are immune to this effect'
        ]);
        
        App\Charm::create([
            'name' => 'Heartstring-Pulling Approach',
            'mins' => 'Presence 4, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Presence',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Hot-Blooded Ardor ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood speaks directly to her listener\'s emotions, stoking the flames that burn within his heart. She adds a non-Charm success on a Presenceor Socialize-based influence roll with a single target. If the target\'s Resolve is lowered by a Major or Defining Intimacy based on passionate emotion, the cost to resist the influence increases by one Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Aura of Invulnerability',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Aura, Fire, Perilous',
            'duration' => 'One scene',
            'prerequisite' => 'Fearsome Dragon Presence ',
            'book' => 'DB???',
            'description' => 'A fiery nimbus of anima engulfs the Dragon-Blood, burning with the radiance of her own peerless self-confidence. After paying this Charm\'s cost, she rolls (current temporary Willpower), gaining a temporary −0 health level for each success, and adds (Charisma) to her natural soak. Once this Charm ends, these temporary health levels fade, and all levels of damage contained in them shift back into the DragonBlood\'s damage track. If this incapacitates her, she falls unconscious, even if lethally damaged, instead of being left dead or dying'
        ]);
        
        App\Charm::create([
            'name' => 'Vivacious Dragon Beauty',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '6m;',
            'element' => 'Presence',
            'type' => 'Reflexive',
            'effect' => 'Aura, Wood',
            'duration' => 'One scene',
            'prerequisite' => 'Hot-Blooded Ardor ',
            'book' => 'DB???',
            'description' => 'Suffusing her demeanor with the sensuality of Wood Essence, the Dragon-Blood affects an efficaciously seductive bearing. She gains a bonus dot of Appearance, which may raise her Appearance above 5.'
        ]);
        
        App\Charm::create([
            'name' => 'Minds Like Fertile Fields',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Earth, Psyche',
            'duration' => 'Instant',
            'prerequisite' => 'Grinding Millstone Argument ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood speaks an aphorism weighted with Earth Essence, suffusing her listener with receptive passivity. She rolls ([Charisma or Manipulation] + Presence) against the Resolve of a single character. A successful roll induces a pleasant trance state that lasts a few seconds. If anyone immediately follows this up with an influence roll targeting the entranced character, his receptive state leaves him unable to call on Intimacies to bolster his Resolve, nor can his Intimacies be exploited to lower his Resolve'
        ]);
        
        App\Charm::create([
            'name' => 'Entombed Mind Technique',
            'mins' => 'Presence 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Aura, Earth, Psyche',
            'duration' => 'Instant',
            'prerequisite' => 'Minds Like Fertile Fields ',
            'book' => 'DB???',
            'description' => 'With a low droning voice, the Dragon-Blood lulls her listener into dreamless sleep. To use this Charm, she must first use its prerequisite to induce a receptive state in her target. She rolls (Manipulation + Presence) against his Resolve, causing him to fall asleep unless he pays two Willpower to resist. He cannot be woken from this sleep by others without magic for the rest of the scene and an hour thereafter, and won\'t awake of his own volition for at least a day. While asleep, the Dragon-Blood may make a single influence roll against him with the benefits of Minds Like Fertile Fields, whispering the words in his ear as he sleeps. With an Essence 4 repurchase, the Dragon-Blood may pay an additional five motes to place a target whose permanent Willpower is lower than her Essence into perpetual slumber. He doesn\'t suffer from hunger or thirst while he sleeps, nor does he age, but he cannot be woken without magical intervention. The Exalted are immune to this effect; other supernatural creatures aren\'t. A third Essence 5 repurchase lets her pay a total of ten motes and two Willpower to petrify a target she could have placed into eternal slumber, transforming him into an inanimate statue. She may spend five motes and one Willpower to reverse the petrification with a touch. Otherwise, it can only be undone with magic such as Order-Affirming Blow (Exalted, p. 334). This Charm may only be used against a character once per story. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Warlord\'s Convocation',
            'mins' => 'Presence 5, Essence 4',
            'cost' => '10m, 1wp;',
            'element' => 'Presence',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Blazing Heart Ascendancy, Heartstring-Pulling Approach ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood forges loyalty with fiery words, overawing and inspiring those who hear her. She makes an instill roll against a single character with ([Charisma or Appearance] + Presence), doubling 9s, to create a Tie of loyalty towards her. This creates an Intimacy at Major intensity, or strengthens a Minor or Major Intimacy to Defining intensity. If the target wishes to resist, he must enter a Decision Point, calling on another Intimacy of equal or greater intensity and paying two Willpower. For the remainder of the story, the target cannot voluntarily weaken this Intimacy unless the Dragon-Blood directly harms him or threatens one of his Major or Defining Intimacies. Even then, he can only weaken it by one level for each offense. Dragon Warlord\'s Convocation can only be used once per story, unless reset by achieving a legendary social goal (Exalted, p. 134)'
        ]);
        
        
        App\Charm::create([
            'name' => 'Ox-Body Technique',
            'mins' => 'Resistance 1, Essence 1',
            'cost' => '—;',
            'element' => 'Resistance',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The blood of the dragons confers incredible resilience. Each purchase of this Charm grants extra health levels based on the character\'s Stamina rating. At Stamina 1 and 2: Two −2 health levels. 3 and 4: One −1 and one −2 level. 5: One −1 and two −2 levels. This Charm may be purchased (Resistance) times. If the Dragon-Blood\'s Stamina increases, her health levels change to reflect her new rating'
        ]);
        
        App\Charm::create([
            'name' => 'Purifying Blood Ascendancy',
            'mins' => 'Resistance 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The blood of the Dragons suffuses the Terrestrial\'s body with legendary vigor. She may add automatic successes to a Resistance roll for two motes each, and rerolls 6s until they cease to appear.'
        ]);
        
        App\Charm::create([
            'name' => 'Body-Cleansing Prana',
            'mins' => 'Resistance 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Air or Fire or Water, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood overcomes poison through mastery of her body\'s own internal cycle of elements, channeling Essence inward to cleanse herself of poison or disease. She may use this as an Air Charm against inhaled poisons, as a Fire Charm to burn disease from her body, or as a Water Charm against poisons transmitted through food, drink or weapons. Regardless of aspect, she doubles 9s on the roll to resist. With a Resistance 5, Essence 3 repurchase, if the DragonBlood rolls enough successes to completely negate the duration of a poison, she may pay one Willpower to expel it at an enemy within short range as an unblockable attack, either exhaling a great gout of venomous gas or smoke, or driving poisons from her pores in a liquid burst. She rolls (Stamina + Resistance) against his Evasion, exposing him to the poison if successful'
        ]);
        
        App\Charm::create([
            'name' => 'Uneating Earth Meditation',
            'mins' => 'Resistance 1, Essence 1',
            'cost' => '2m;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'One week',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Like the earth itself, the Terrestrial has no need for external nourishment. She ignores any deprivation penalties from starvation or dehydration (Exalted, p. 232). Additionally, she adds (Resistance) to the amount of time she can go before succumbing to starvation or dehydration, as long as she uses this Charm for that entire time'
        ]);
        
        App\Charm::create([
            'name' => 'Untiring Earth Meditation',
            'mins' => 'Resistance 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'One day',
            'prerequisite' => 'Uneating Earth Meditation ',
            'book' => 'DB???',
            'description' => 'Exhausted, the Dragon-Blood may find sustenance in the ground beneath her feet. As long as she\'s standing on the ground or touching stone, she ignores fatigue penalties'
        ]);
        
        App\Charm::create([
            'name' => 'Impervious Skin of Stone',
            'mins' => 'Resistance 2, Essence 1',
            'cost' => '4m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Bracing herself against a blow, the Dragon-Blood deflects attacks with the force of solid stone. She doubles her Stamina to determine her natural soak against a single withering attack. In Earth Aura, this Charm can be used after an attack hits the Dragon-Blood, but before damage is rolled'
        ]);
        
        App\Charm::create([
            'name' => 'Eternal Tide Endurance',
            'mins' => 'Resistance 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Water, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Impervious Skin of Stone ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood adapts to her foe\'s attacks, turning his force to her advantage. Every 1 on a withering attack roll against her increases her soak by +1. In Water Aura, this Charm can be used against decisive attacks, granting two points of Hardness, plus an additional point for every 1 on the attack roll, maximum (Stamina) Hardness. This doesn\'t stack with other sources of Hardness'
        ]);
        
        App\Charm::create([
            'name' => 'Supple Viridian Scales',
            'mins' => 'Resistance 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Wood',
            'duration' => 'One tick',
            'prerequisite' => 'Impervious Skin of Stone ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood wears her armor like a second skin, pliant and yielding as living wood, as she moves with the sinuous grace of a dancing dragon. She lowers her armor\'s mobility penalty by 1 for a single tick. If it\'s light armor, she instead adds a non-Charm die on rolls to rush or disengage. In Wood Aura, this Charm\'s duration lasts for as long as the Dragon-Blood remains in Aura.'
        ]);
        
        App\Charm::create([
            'name' => '(Element) Protection Technique',
            'mins' => 'Resistance 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Dual',
            'duration' => 'One scene',
            'prerequisite' => 'Impervious Skin of Stone ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood harmonizes her body with one of the five elements, rendering her body almost impervious to any harm from that element. She chooses one of the five elements upon activating this Charm, gaining +3 natural soak and (Stamina) Hardness against attacks made using that element, such as a firewand\'s blast, a wooden spear, a hurled stone, or the talons of an air elemental. She subtracts (lower of Stamina or Resistance) from the damage of appropriate environmental hazards. This Charm can only negate harm that directly relates to the chosen element. An Earth-aspected use won\'t defend against metal weapons, nor would a Fireaspected use defend against a Blazing Solar Bolt'
        ]);
        
        App\Charm::create([
            'name' => 'Elemental Aegis',
            'mins' => 'Resistance 3, Essence 2',
            'cost' => '4m (+1a);',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'None',
            'duration' => 'Instant',
            'prerequisite' => 'Supple Viridian Scales ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can banish artifact armor into one of the five elements, dissolving her hauberk into water or letting the whirling wind divest her of armor piece by piece. She may send attuned jade armor Elsewhere through a significant and dramatic manifestation of the chosen element: it might vanish as she walks through fire, dissolve as she meditates beneath a waterfall, or be drawn beneath a tree\'s bark or into the rocky surface of a boulder or stone pillar. She may use this Charm to retrieve the armor from a similar elemental manifestation, donning it as though donning it normally (Exalted, p. 591). If the Exalt doesn\'t have access to an appropriate elemental manifestation, she may expend a level of anima to banish or recall her armor. Once banished this way, it may be recalled through a manifestation of her Aspect element'
        ]);
        
        App\Charm::create([
            'name' => 'Unsleeping Earth Meditation',
            'mins' => 'Resistance 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Earth',
            'duration' => 'One scene',
            'prerequisite' => 'Uneating Earth Meditation ',
            'book' => 'DB???',
            'description' => 'The Terrestrial sustains herself without need for sleep, renewing her wearied body by drawing on Earth Essence. Once per day, she may spend an hour in meditation to gain all the benefits of a good night\'s sleep, including a point of Willpower. She may use this Charm to remain awake for up to (Essence + Stamina) days without hindrance, but past that point, she ceases to regain Willpower from it until she\'s received a full eight hours of sleep normally each day over as many days as she used this Charm to stay awake'
        ]);
        
        App\Charm::create([
            'name' => 'Unbreathing Earth Meditation',
            'mins' => 'Resistance 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth',
            'duration' => 'One scene',
            'prerequisite' => 'Unsleeping Earth Meditation ',
            'book' => 'DB???',
            'description' => 'A single breath of air is enough to sustain the DragonBlood as she slows the rhythm of her lungs and the beating of her heart. She may hold her breath for up to ([Stamina + Resistance] x5) minutes, or ([Stamina + Resistance] x2) rounds in combat'
        ]);
        
        App\Charm::create([
            'name' => 'Unfeeling Earth Meditation',
            'mins' => 'Resistance 5, Essence 2',
            'cost' => '3m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Unbreathing Earth Meditation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood suffuses her body with Earth Essence, inuring herself to the pain and frailty of her flesh. She may ignore wound penalties on a single action with any Ability. With an Essence 4 repurchase, using this Charm in Earth Aura extends its duration for as long as the Dragon-Blood remains in Aura'
        ]);
        
        App\Charm::create([
            'name' => 'Body-Like-Clouds Meditation',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '8m;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Air), Withering-only',
            'duration' => 'Aura',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood channels Air Essence throughout her body with circular breathing, lightening and dispersing her form to become all but untouchable. Withering damage rolls against her take a penalty of (Essence), which can reduce them below their minimum damage, minimum one die. If a withering attack hits her but deals no damage, she steals 2 Initiative from her attacker as he overextends, striking where she\'s not.'
        ]);
        
        App\Charm::create([
            'name' => 'Perfected Scales of the Dragon',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '7m, 1wp, expend Earth Aura;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Signature (Earth)',
            'duration' => 'Until next turn',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood settles into a deep-rooted stance, will and Essence hardening her body into an impervious form with an almost crystalline sheen. She gains Hardness equal to ([Essence + Stamina] x2) against all decisive attacks until her next turn. This doesn\'t stack with Hardness from armor, but is compatible with Hardness granted by Resistance Charms. Whenever a decisive attack is negated by her Hardness, her attacker doesn\'t reset to base Initiative; instead, he loses Initiative as though he\'d missed, which she gains. Such is the focus required by this Charm that the Dragon-Blood cannot attack or move on her next turn after using it, although she may still take other miscellaneous actions'
        ]);
        
        App\Charm::create([
            'name' => 'Raging Fire-Dragon Spirit',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '6m, 1wp, 1ahl;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Fire)',
            'duration' => 'Aura',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood unleashes the deepest flames of her vitality, awakening the deadly force of her inner fire. Her body becomes faster and stronger at the cost of risking exhaustion or death. She gains a bonus dot of Strength, ignores a single point of wound penalty, and adds (lower of Essence or Stamina) bonus dice on all rolls she makes to attack, rush, or attempt a feat of strength. However, her Stamina doesn\'t add to her soak and she loses one point of Initiative at the end of each round'
        ]);
        
        App\Charm::create([
            'name' => 'Fathomless Depths Replenishment',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '4m, 1wp;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'One day',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood meditates on the deepest depths of herself, discovering that she is eternal. After spending an hour in meditation, she rolls (Essence + Stamina), unmodified by other effects. Each success grants her a temporary −1 health level. Undamaged health levels fade away at the end of this Charm\'s duration, but the Dragon-Blood keeps any levels that are filled with damage, and they count against her total successes on a subsequent roll to use this Charm. These health levels are healed before any others of the same level when the Exalt recovers from rest or receives magical healing. If the Dragon-Blood carries a wounded health level for more than (Stamina) days, it falls from a −1 to a −2 health level. After another (Stamina x2) days, they become −4 levels. Damaged levels vanish once they\'re healed.'
        ]);
        
        App\Charm::create([
            'name' => 'Well-Tended Garden of the Soul',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '5m, 1wp, expend Wood Aura;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Aura, Perilous, Signature (Wood)',
            'duration' => 'Until next turn',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood beckons to the Wood Essence that moves through the wilderness, calling forth healing renewal from the forest\'s boughs. In a barren wilderness, it\'s sufficient that she touches a single shoot of green life to use this Charm. She weaves her hands through a series of mudras that ends in a flash of anima that leaves every plant out to medium range radiant and flourishing, traced with hints of green anima. Any blighted or diseased plants are healed, while mundane plants that have died of winter frost or drought might be revived. On her next turn, the blessing of life circles back unto her, unless this Charm is interrupted before then by her being crashed, taking decisive damage, or being forced into a range band devoid of plant life. She rolls (Essence + Stamina), unmodified by other effects, and heals a single level of non-aggravated damage for each success. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Earth Bears Witness',
            'mins' => 'Resistance 4, Essence 3',
            'cost' => '5m, 3i;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Earth, Perilous',
            'duration' => 'Instant',
            'prerequisite' => '(Element) Protection Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood braces her body solidly against the ground, feeling the Earth\'s Essence upholding her own. As she\'s struck, the force of the blow passes through her and into surrounding earth or stone. She subtracts (Stamina/2, rounded up) dice from the damage of a decisive attack, shunting it into the ground. The Storyteller may deem that this creates difficult terrain or destroys mundane objects. If there\'s a large, dramatically significant source of stone or other earth-based substance, such as a boulder or stone pillar, within short range of the Exalt, she instead subtracts (Stamina) as it bears the force of the attack for her. The force of her enemy\'s blow might smash a crater in the shape of her silhouette into a fortress\'s walls or blast a stone monument from its pedestal. With Resistance 5, the Dragon-Blood may purchase the following elemental variants of this Charm for three experience points each. Water: In Water Aura, this Charm can shift (Stamina/2, rounded up) dice of decisive damage into any nearby water. It reduces damage by (Stamina) if she shifts it into a body of water or a large vessel, such as a cistern or a well. Wood: In Wood Aura, this Charm can shift (Stamina/2, rounded up) dice of decisive damage into wooden objects or living plants. It reduces damage by (Stamina) if she shifts it into a wooden structure or tree-sized plant'
        ]);
        
        App\Charm::create([
            'name' => 'Immovable Mountain Technique',
            'mins' => 'Resistance 4, Essence 3',
            'cost' => '5m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Earth, Perilous',
            'duration' => 'One scene',
            'prerequisite' => 'Earth Bears Witness ',
            'book' => 'DB???',
            'description' => 'Filling her body with the incredible weight of mountains and continents, the Dragon-Blood refuses to be moved. She cannot be knocked back by smash attacks, thrown in a grapple, or shifted by comparable mundane forces. Even magic is impeded by this Charm, although not entirely negated, with the Storyteller adjudicating the specific nature of the defense based on the nature of the Charm being used: A Solar using Heaven Thunder Hammer might be forced to halve her damage successes when determining how far she can knock the Dragon-Blood. This Charm ends if she moves from the spot where she used it, or if she\'s crashed or incapacitated'
        ]);
        
        App\Charm::create([
            'name' => 'Ripples-on-Water Defense',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '4m;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Aura, Dual, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Earth Bears Witness ',
            'book' => 'DB???',
            'description' => 'The Exalt\'s body becomes almost fluid as it disperses the force of attacks. Against a withering attack, (lower of Essence or Stamina) 1s on the damage roll subtract successes. Against a decisive attack, (lower of Essence or Stamina) 1s force her attacker to reroll that many damage dice that show success, beginning with 7s and moving up.'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Unfailing Vigor',
            'mins' => 'Resistance 5, Essence 3',
            'cost' => '—;',
            'element' => 'Resistance',
            'type' => 'Permanent',
            'effect' => 'None',
            'duration' => 'Permanent',
            'prerequisite' => 'Ox-Body Technique (x5) ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood has forged her body to a fivefold extreme of durability, reaching the apex of her supernatural vitality. She gains one −0 health level and one −4 health level'
        ]);
        
        App\Charm::create([
            'name' => 'Flowing Dragon-Body Endurance',
            'mins' => 'Resistance 5, Essence 4',
            'cost' => '4m, 1wp;',
            'element' => 'Resistance',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Water',
            'duration' => 'Aura',
            'prerequisite' => 'Ripples-on-Water Defense ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood becomes as a standing wave, untouched by the attacks of lesser enemies. She gains Hardness equal to her current Initiative against all decisive attacks. This Charm isn\'t compatible with armor'
        ]);
        
        App\Charm::create([
            'name' => 'Revolving-Hurricane-Force Defense',
            'mins' => 'Resistance 5, Essence 5',
            'cost' => '5m, 1wp;',
            'element' => 'Resistance',
            'type' => 'Reflexive',
            'effect' => 'Air, Aura, Withering-only',
            'duration' => 'Aura',
            'prerequisite' => 'Flowing Dragon-Body Endurance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s incredible resilience is like a raging gale barely contained within her body, striking aside her enemies\' blows before they even touch her. She rolls (Stamina + Resistance) with (Essence) non-Charm bonus dice, and gains a soak bonus equal to the successes against any attack by a character with lower Initiative. The soak bonus falls by one point each time an attack hits the Dragon-Blood. This Charm can only be used once per scene'
        ]);
        
        
        App\Charm::create([
            'name' => 'Scattered Pearl Hoof Falls',
            'mins' => 'Ride 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The hoofbeats of the Dragon-Blood\'s mount strike the ground as swiftly and lightly as pearls falling from a broken necklace, speeding her onwards to her goal. She may add automatic successes to a Ride roll for two motes each, and she ignores one point of mobility penalty from her mount\'s barding'
        ]);
        
        App\Charm::create([
            'name' => 'Heaven-Racing Leap',
            'mins' => 'Ride 2, Essence 1',
            'cost' => '4m;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood urges her steed skywards in a leap that defies gravity. She may have her mount automatically jump one range band forward horizontally with her reflexive movement for the turn. Alternatively, when she has her mount jump as part of a movement roll, including rushing and disengaging, every 10 rerolls a non-1 failed die. In Air Aura, her steed may leap one range band vertically, as long as the steed can land on a surface capable of bearing its weight'
        ]);
        
        App\Charm::create([
            'name' => 'Tread Rooted in Life',
            'mins' => 'Ride 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Wood',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'At one with the wilderness that surrounds them, horse and rider move with matchless grace. They may gallop through undergrowth, weave between trees in a dense forest, or trample over brambles. The Dragon-Blood ignores plant-based environmental penalties to her mounted movement actions. Any environmental penalties on her Ride rolls due to plants or vegetation-covered terrain are lowered by two points. With Essence 2, the Dragon-Blood may learn elemental variants of this Charm for three experience points each. These variants are Stackable with each other. Air: This variant negates penalties from wind and foul weather. Earth: This variant negates penalties for moving over uneven earth or rocky terrain. Water:This variant negates penalties for moving while partially immersed in water, or over a wet or slippery surface.'
        ]);
        
        App\Charm::create([
            'name' => 'Great Heart Companion',
            'mins' => 'Ride 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Even the best-trained warhorse trembles at the perils that the Dragon-Blood faces, but the bond between mount and rider is strong enough to withstand any test. She may grant her mount +2 Resolve against a threaten roll or other fear-based influence, or herself +1 Defense against an unhorse gambit. In Wood Aura, this Charm lasts as long as the DragonBlood remains in Aura, providing both benefits'
        ]);
        
        App\Charm::create([
            'name' => 'Cloud-Harnessing Technique',
            'mins' => 'Ride 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Air',
            'duration' => 'Until next turn',
            'prerequisite' => 'Heaven-Gracing Leap ',
            'book' => 'DB???',
            'description' => 'The hooves of the Dragon-Blood\'s horse barely seem to touch the earth as it gallops, seeming to fly over the ground. Until her next turn, her mount can run across and stand on surfaces that wouldn\'t normally bear its weight, and ignores difficult terrain'
        ]);
        
        App\Charm::create([
            'name' => 'Dance of the Jade Bridle',
            'mins' => 'Ride 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Great Heart Companion ',
            'book' => 'DB???',
            'description' => 'Even the mightiest beasts learn to bow before the dragon. The Dragon-Blood rolls ([Attribute] + Ride) against an animal\'s Resolve, impressing or subduing it with a stunt over the course of a few minutes of interaction. She might win a tiger\'s respect by staring it down using Charisma, wrestle a river dragon using Strength to secure a place on its back, or leap out of a tree to land on a strix using Dexterity. On a success, the animal allows the Dragon-Blood to saddle and mount it, forming a Minor Tie of loyalty to her. A single use of this Charm is insufficient to completely tame a wild animal, but it begins the process. Kindly treatment, roleplaying interactions, and magic such as Beast-Taming Aspect (p. 271) over the course of one or more sessions can tame even the most feral beast, at the Storyteller\'s discretion'
        ]);
        
        App\Charm::create([
            'name' => 'Reins-Like-Roots Unity',
            'mins' => 'Ride 3, Essence 2',
            'cost' => '3m;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Great Heart Companion ',
            'book' => 'DB???',
            'description' => 'The bond between the Dragon-Blood and her mount isn\'t easily broken. This Charm can be used to defend against an unhorse gambit. 1s on the attack roll subtract successes, and the difficulty of the gambit increases by 1. In Wood Aura, this Charm\'s duration lasts as long as the Exalt remains in Aura'
        ]);
        
        App\Charm::create([
            'name' => 'Creation-Turning Hoof',
            'mins' => 'Ride 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Tread Rooted in Life ',
            'book' => 'DB???',
            'description' => 'Enemies ridden down by the Dragon-Blood know that escape is hopeless when they hear her steed\'s pounding hoofbeats build to a rumbling avalanche behind them. The Dragon-Blood imposes a penalty equal to her mount\'s Speed bonus on an enemy\'s roll to oppose her mounted rush'
        ]);
        
        App\Charm::create([
            'name' => 'Ebony Spur Technique',
            'mins' => 'Ride 5, Essence 2',
            'cost' => '2m, 3i;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Creation-Turning Hoof ',
            'book' => 'DB???',
            'description' => 'Dragon-Blooded cavalry learn to ride and fight together in martial harmony, creating openings in even the strongest defenses. This Charm can be used when a mounted ally successfully lands an attack against an enemy within short range of the Dragon-Blood. She may reflexively move up to one range band towards that enemy and make a decisive attack using any combat Ability, adding her mount\'s Speed bonus to the attack roll. This counts as her combat action for the round, and she cannot use this Charm if she\'s already attacked earlier in the round, but it doesn\'t count against her movement action. Ebony Spur Technique can only be used once per scene, unless reset by crashing an enemy with a mounted withering attack.'
        ]);
        
        App\Charm::create([
            'name' => 'Ass-to-Elephant Method',
            'mins' => 'Ride 5, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Great Heart Companion ',
            'book' => 'DB???',
            'description' => 'A humble draft horse can haul massive boulders behind it when ridden by a Prince of the Earth. This Charm supplements a feat of strength by a mount being ridden by the Dragon-Blood, adding its Speed bonus to its Strength. This both increases its dice pool and its effective Strength rating for determining what feats it may attempt (Exalted, p. 231)'
        ]);
        
        App\Charm::create([
            'name' => 'Untethered Pegasus Spirit',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Air)',
            'duration' => 'One scene',
            'prerequisite' => 'Cloud-Harnessing Method ',
            'book' => 'DB???',
            'description' => 'With a deft hand on the reins, the Dragon-Blood urges her steed skywards. She can ride horizontally over thin air for as long as her mount continues to move, allowing her to horizontally cross over canyons and similar gulfs. In addition, she may pay an additional point of Willpower when she uses Heaven-Gracing Leap to rush an aerial enemy at out to medium range. If successful, she\'ll automatically ride one vertical or horizontal range band towards her target on the rushed character\'s next two turns, in addition to her normal movement. If the Dragon-Blood ceases movement, ends this Charm early, or is unhorsed, both she and her steed drift to the ground without taking falling damage'
        ]);
        
        App\Charm::create([
            'name' => 'Mountain-Trampling Hoof',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'Ass-to-Elephant Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood endows her mount with the endurance of the mountains and the strength of a falling avalanche as it charges forward like a battering ram to smash down gates and fortifications. The Exalt\'s mount makes a feat of demolition to destroy or topple an object at least human-sized, adding (Essence/2, rounded up) non-Charm bonus successes. If she uses this Charm after spending multiple consecutive turns moving towards the object, each range band of movement lowers the Strength total required to attempt the feat by one, to a maximum of (Essence). The mount is able to complete the feat in instants, even if it would normally take longer. The immense force unleashed by the mount\'s battering charge isn\'t without risk. For every 1 on its feat of strength roll, roll a single die of bashing damage against it, ignoring Hardness. This Charm cannot be used if the Dragon-Blood\'s mount has no undamaged health levels above Incapacitated.'
        ]);
        
        App\Charm::create([
            'name' => 'Charge of One Hundred Generals',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '8m, 1wp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'Ebony Spur Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood and her allies charge across the battlefield like a rapidly spreading flame. She makes a mounted rush roll against a significant enemy or battle group out to four range bands away, but no closer than medium range. If not already rolled into battle, all characters Join Battle immediately. On a success, the Dragon-Blood and all other mounted characters within close range of her (short range for mounted battle groups) move one range band towards the target on each of their next four turns in addition to their normal movement, or until they reach close range. All characters in the charge gain 1 Initiative for each range band they move while charging the rushed character'
        ]);
        
        App\Charm::create([
            'name' => 'Ride Beneath the Waves',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '3m, 1wp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'One day',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can lead her mount even to the ocean\'s depths, dancing through rivers and seas as though born to them. Her mount can breathe water and is capable of swimming or running over riverbeds and sea floors at no penalty. Ride rolls to control it underwater double 9s. Note that this Charm doesn\'t extend to the Dragon-Blood, who must use other magic such as the Water Aspect anima or Unbreathing Earth Meditation (p. 248) to survive underwater'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon-Among-Horses Exaltation',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '5m, 1wp, 1ahl, 2xp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'Great Heart Companion ',
            'book' => 'DB???',
            'description' => 'The Terrestrial anoints her beloved steed with her own blood, marking it with the blood of the Dragons. As the droplets fall on its hide, the beast begins to flare with the Exalt\'s own anima banner, building over the next few minutes into a great bonfire of Essence in which it\'s transformed. A mount transformed by this Charm gains the following benefits: • It gains one of the following: +1 die to all Strength-based dice pools and raw withering damage; +1 die to all Dexterity-based dice pools; or +1 die to all Stamina-based dice pools and +1 soak. • Its natural Hardness increases by one point. Note that this renders it immune to anima flux (p. 154). • It gains two additional −4 health levels. The Dragon-Blood can only use this Charm on a single mount at a time, but is refunded its experience point cost if that creature dies. Rare horses descended from bloodlines intermingled with elementals of the appropriate aspect are prized by the Dragon-Blooded, and using this Charm on them requires no experience cost. The Blessed Isle\'s horse-breeders compete ruthlessly over such stock, which are sufficiently rare that Resources expenditures alone aren\'t enough to secure them. A Dynast might need to procure an opulent gift simply to open negotiations with a seller, or perform a significant favor for a family elder in exchange for making use of his connections'
        ]);
        
        App\Charm::create([
            'name' => 'Indomitable Warhorse Endurance',
            'mins' => 'Ride 4, Essence 3',
            'cost' => '3m, 1i per die removed;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Perilous, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Reins-Like-Roots Unity ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may activate this Charm when her mount would take decisive damage, after any attack roll but before damage is rolled. She may spend up to (Essence) Initiative to subtract that many dice from the damage roll. Outside of combat, such as riding through an environmental hazard, she always subtracts (Essence) dice'
        ]);
        
        App\Charm::create([
            'name' => 'Seizing-the-Reins Approach',
            'mins' => 'Ride 4, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Dance of the Jade Bridle ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood rides away with her enemies\' steeds, showing even the most ferocious mounts that they cannot equal her burning, reckless spirit. She attempts to leap onto the mount of an unhorsed foe (or another trained animal without a rider) within close range. This is a difficulty 3 gambit rolled with (Dexterity + Ride). Successfully executing this gambit lets the DragonBlood climb onto the animal and reflexively order it to make a withering attack (Exalted, p. 203). In Fire Aura, the Dragon-Blood may use this Charm reflexively when she successfully unhorses an enemy (Exalted, p. 200) within close range using any combat Ability.'
        ]);
        
        App\Charm::create([
            'name' => 'Unbreakable Stallion Spirit',
            'mins' => 'Ride 4, Essence 3',
            'cost' => '5m;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Wood',
            'duration' => 'One scene',
            'prerequisite' => 'Creation-Turning Hoof ',
            'book' => 'DB???',
            'description' => 'Essence ripples through the thews of the DragonBlood\'s mount, bolstering its speed and surety. This Charm adds +1 to the Speed bonus of the Exalt\'s mount, and doubles 9s on any Ride rolls she makes to maintain her steed\'s balance, avoid being thrown from the saddle, or otherwise avoid mount-related obstacles'
        ]);
        
        App\Charm::create([
            'name' => 'Seven-League Gallop',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One hour',
            'prerequisite' => 'Unbreakable Stallion Spirit ',
            'book' => 'DB???',
            'description' => 'Imbued with legendary vitality, the Exalt\'s mount achieves the apex of speed. She converts one die of her mount\'s Speed bonus into a non-Charm success on rolled movement. Outside of combat, her mount\'s movement speed is dramatically accelerated, letting her move (Essence) times the normal distance she\'d be able to cover in an hour. If she maintains the use of this Charm throughout a longer journey, the time it takes to complete is halved. Once the Dragon-Blood has spent two Willpower in a day on this Charm\'s cost, she waives the Willpower cost of all subsequent activations'
        ]);
        
        App\Charm::create([
            'name' => 'Trail-Blazing Dragon Steed',
            'mins' => 'Ride 5, Essence 3',
            'cost' => '5m, 1a;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Seven-League Gallop ',
            'book' => 'DB???',
            'description' => 'The inexorable Essence of fire blazes in the DragonBlood\'s steed as it gallops at full speed towards its goal, leaving a trail of burning hoofprints behind it. After a successful mounted rush, if the rushed foe provokes the Dragon-Blood\'s reflexive movement, she ignites a fiery environmental hazard along her path, with difficulty 4 and Damage (Essence)L/round. It continues to burn until her next turn, although the Storyteller may deem that terrain such as dry grass continues to burn for a full scene'
        ]);
        
        App\Charm::create([
            'name' => 'Vanishing Cloud-Rider Ways',
            'mins' => 'Ride 4, Essence 3',
            'cost' => '4m;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'Cloud-Harnessing Technique ',
            'book' => 'DB???',
            'description' => 'Moving with the grace and speed of a zephyr, the DragonBlood\'s steed effortlessly evades harm. This Charm supplements a mounted disengage roll, rerolling 6s until they fail to appear and negating all penalties from flurrying the roll. In Air Aura, this Charm also refunds the Initiative cost of a successful disengage'
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Charger Attack',
            'mins' => 'Ride 5, Essence 4',
            'cost' => '7m, 1wp;',
            'element' => 'Ride',
            'type' => 'Supplemental',
            'effect' => 'Aura, Fire, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Trail-Blazing Dragon Steed ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood builds her killing pace as she charges across the battlefield, urging her mount onwards faster and faster. She doubles 9s on a mounted rush. On a success, if her enemy provokes her reflexive movement, she may move up to two range bands towards him instead of one. If she reaches close range, she may also make a reflexive decisive attack using Brawl, Martial Arts, or Melee. If she attacks with a fixed lance, she may make an impaling attack (Exalted, p. 203) without needing to meet the normal requirements'
        ]);
        
        App\Charm::create([
            'name' => 'Elusive Skirmisher Tactic',
            'mins' => 'Ride 5, Essence 4',
            'cost' => '1m, 1wp;',
            'element' => 'Ride',
            'type' => 'Reflexive',
            'effect' => 'Uniform, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Vanishing Cloud-Rider Ways ',
            'book' => 'DB???',
            'description' => 'Horse and rider move as one to take aim, lining up the perfect shot. Upon disengaging from an enemy, the Dragon-Blood may use this Charm to reflexively aim at him. A ranged attack that receives the dice from aiming also adds one bonus die of raw damage.'
        ]);
        
        App\Charm::create([
            'name' => 'Horses-Like-Dragons Stampede',
            'mins' => 'Ride 5, Essence 5',
            'cost' => '5m, 2wp;',
            'element' => 'Ride',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Until battle is joined',
            'prerequisite' => 'Blazing Charger Attack, Seizethe-Reins Approach ',
            'book' => 'DB???',
            'description' => 'Stampeding beasts follow the Dragon-Blood in an overwhelming charge, routing enemy formations and smashing through their fortifications. This Charm is a dramatic action to prepare for an upcoming battle by rounding up a herd of horses or other wild, ridable animals — even blundering yeddim. This is a series of (Charisma + Ride) rolls, which are treated as rally for numbers actions (Exalted, p. 209), building up the Magnitude of animals that the Dragon-Blood has gathered. Each roll takes five minutes of animal calls, handling, or impressive stunts to complete. Once the Dragon-Blood has built up enough Magnitude to form a Size 1 battle group, she may continue making rally rolls to increase the group\'s Size, up to a maximum of Size 3. Concealing the approach of this stampeding herd is impossible without large-scale magic. The herd isn\'t treated as a battle group in combat. Instead, when the Dragon-Blood rolls Join Battle, it stampedes across the battlefield, imposing a penalty equal to (its Size) on all enemy Join Battle rolls, before dispersing. Every enemy whose Join Battle roll is beaten by the Dragon-Blood\'s takes decisive damage as the stampede tramples over them. She divides (Initiative + stampede\'s Size) dice of bashing damage evenly among the victims (round up), ignoring Hardness. Trivial opponents and battle groups instead take the full (Initiative + Size) damage roll, which doesn\'t detract from the total divided among other enemies. This attack resets the Dragon-Blood to base Initiative once it\'s completed. The Dragon-Blood may learn elemental variants of this Charm for three experience points each. While she\'s in appropriate terrain, she may rouse that element\'s natural perils instead of wild animals. She still rolls to build up its effective Size for determining the Join Battle penalty and total damage inflicted, but this represents the force of nature that follows her, growing stronger as she rides. Air: Riding through snow-covered land, the DragonBlood trails an avalanche behind her. Any enemy that takes decisive damage on the initial roll is hurled one range band away from the Dragon-Blood and falls prone. The numbing cold imposes a penalty equal to the avalanche\'s Size on all movement rolls a damaged character makes until he receives medical treatment as a difficulty 3 (Intelligence + Medicine) roll. Earth:Charging across mountainsides or stony terrain, the Dragon-Blood unleashes a rockslide that follows in her wake. Any enemy that takes decisive damage on the initial roll is hurled one range band away from the Dragon-Blood and falls prone, covered in rubble. A buried character or one of his allies must succeed on a Strength 3 feat of strength at difficulty 3 to clear the rubble before he can attempt to rise from prone. Fire: Riding over dry grass or other parched foliage, the Dragon-Blood ignites a roaring grass fire that follows in her wake. A bonfire (4L/round, difficulty 5) ignites at the feet of each enemy that that takes decisive damage from the initial roll. At the Storyteller\'s discretion, flammable scenery may also catch fire as long as no character is present in the same space. These fires burn until the end of the scene unless put out. Water: The Dragon-Blood may ride with a river, coastline, or similar body of water at her back, running along the riverbed until the river runs with her. As she Joins Battle, it changes its course to spill over onto the battlefield, positioned by the Storyteller to benefit the Dragon-Blooded. Its largest dimension is at least (Size/2, rounded up) range bands long, from a starting point determined by the Storyteller. Once the scene ends, the river slowly reverts to its original course. '
        ]);
        
        
        App\Charm::create([
            'name' => 'Fine Passage-Negotiating Style',
            'mins' => 'Sail 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Sail',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood threads her ship like a needle through dangerous patches of sargasso seas, rockstrewn shallows, or warship-patrolled waters. She may add automatic success to a Sail roll for two motes each, and rerolls 6s until they cease to appear'
        ]);
        
        App\Charm::create([
            'name' => 'Storm-Outrunning Technique',
            'mins' => 'Sail 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Sail',
            'type' => 'Supplemental',
            'effect' => 'Pilot, Water',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is the ocean\'s own kin, plying its waters not as obstacles to be overcome but as welcome friends to be greeted. When she makes a Sail roll that her ship\'s Speed applies to, she rerolls ([lower of Wits or Speed], minimum one) non-1 failed dice.'
        ]);
        
        App\Charm::create([
            'name' => 'Ocean-Darting Maneuver',
            'mins' => 'Sail 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Sail',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Pilot, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Storm-Outrunning Technique ',
            'book' => 'DB???',
            'description' => 'Steering her ship with the fluid grace of Water Essence, the Dragon-Blood can accomplish nigh-impossible maneuvers. She doubles 9s on a roll to navigate through a naval hazard or enact a positioning stratagem in naval combat (Exalted, pp. 244-245). On a successful positioning stratagem, she receives (Essence) additional Momentum'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Mariner Attitude',
            'mins' => 'Sail 2, Essence 1',
            'cost' => '5m;',
            'element' => 'Sail',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s reputation precedes her ship to shore. She can manipulate the flow of her reputation as though it were a stream of water, choosing one of the following effects. Carousing: Adopting the poise of a sailor in port, the Dragon-Blood radiates a desire to take part in drinking, gambling, and similar vices common to sailors, as well as any local indulgences. Characters seeking to supply such vices will seek her out to provide them or information about where to get them. Heroism: The Dragon-Blood\'s naval prowess marks her as a hero of the seas. Characters facing problems that a seafaring hero could solve, such as pirate raids, a loved one lost on a missing ship, or an urgent shipment of exotic goods that needs to be delivered, will seek her out as the solution to their problem, treating this as a Minor Tie of trust to her. Leadership: The Dragon-Blood radiates the confidence of a commanding admiral. All sailors under her command are treated as having a Minor Tie of respect towards her, and she adds one bonus success on inspire rolls and command actions targeting them. Trivial characters who are seafarers gain this Intimacy even if they aren\'t part of the Exalt\'s crew. Menacing: The Dragon-Blood\'s bearing suggests ruthlessness and a history of violence. She adds one automatic success on threaten rolls and gains the Hideous Merit (Exalted, p. 162)'
        ]);
        
        App\Charm::create([
            'name' => 'Deck-Striding Prana',
            'mins' => 'Sail 2, Essence 1',
            'cost' => '3m, 2i;',
            'element' => 'Sail',
            'type' => 'Supplemental',
            'effect' => 'Perilous, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Dragon Mariner Attitude ',
            'book' => 'DB???',
            'description' => 'No landlubber she, the Dragon-Blood crosses over storm-tossed decks or windswept rigging with fluid grace. She adds (Sail) bonus dice on a movement roll or a roll to maintain her balance, or may use her reflexive move action to ascend or descend one vertical range band up a ship\'s rigging, a ladder that spans decks, or similar nautical scenery without needing to roll. In Water Aura, this Charm\'s Initiative cost is waived and it loses the Perilous keyword'
        ]);
        
        App\Charm::create([
            'name' => 'Hurricane-Predicting Glance',
            'mins' => 'Sail 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Dragon Mariner Attitude ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blooded mariner can smell trouble on the salty breeze or see a coming storm in red clouds, allowing her to steer safely through monsoons, thunderstorms, and roiling waves. She rolls ([Perception or Intelligence] + Sail) against a difficulty based on her familiarity with the seas she\'s sailing — home waters might be difficulty 1; a trade route leading to an island she\'s never been to before might be difficulty 3; and completely unmapped seas might be difficulty 5+. A successful roll lets her flawlessly predict any weather she\'ll encounter at sea along the course of her ship\'s travel for a single day, letting her foresee even the most freakish natural weather phenomena. She cannot predict the effects of weather-controlling magic. If the Exalt foresees dangerous weather, she gains a temporary Sail specialty in avoiding or navigating it, which lasts until the weather has passed. She may only have one specialty granted by this Charm at a time.'
        ]);
        
        App\Charm::create([
            'name' => 'Old Salt Spirit',
            'mins' => 'Sail 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Sail',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Mute, Water',
            'duration' => 'One scene',
            'prerequisite' => 'Dragon Mariner Attitude ',
            'book' => 'DB???',
            'description' => 'Weathered by her time at sea, the Dragon-Blood is undaunted by unknown terrors and deaf to the calls of sirens. She gains +1 Resolve against fear-based influence, as well as any influence that would cause her to sail her ship into peril or prevent her from taking to the seas aboard her ship. If she incorporates the memory of a past seafaring adventure into a stunt, this bonus increases to (Sail/2, rounded up) for that action'
        ]);
        
        App\Charm::create([
            'name' => 'Seven Seas Wind-Luring Chanty',
            'mins' => 'Sail 3, Essence 2',
            'cost' => '2m, 1wp;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'One day',
            'prerequisite' => 'Hurricane-Predicting Glance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood leads her crew in a bawdy chorus, appeasing the spirits of air. When she suffers penalties for sailing against the wind or from other foul weather, she may roll (Charisma + Sail). Every two successes she rolls, rounded down, lowers any penalties she faces by one point. If she uses this Charm in favorable weather, success calls up a wind that keeps her sails filled, increasing any Speed bonus from the ship\'s sails by +1'
        ]);
        
        App\Charm::create([
            'name' => 'Sturdy Bulkhead Concentration',
            'mins' => 'Sail 3, Essence 2',
            'cost' => '4m, 1a;',
            'element' => 'Sail',
            'type' => 'Reflexive',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Ocean-Darting Maneuver ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s anima spreads to enfold the timbers of her ship, hardening its hull to rebuff the harshest perils of the sea or the weapons of oceangoing pirates. Whenever her ship suffers Hull damage from a failed roll to navigate an aquatic hazard or from a damage-dealing stratagem such as a broadside in naval combat (Exalted, p. 245), she may roll (Essence + 2) non-Charm dice. If these successes raise the DragonBlood\'s total roll high enough to have beaten the hazard\'s difficulty or the opposing captain\'s roll, the total damage her ship suffers is reduced by one point, although this doesn\'t change her failure on the roll. This Charm can only be used once per scene, unless reset by succeeding on a Sail roll with difficulty 4+. '
        ]);
        
        App\Charm::create([
            'name' => 'Storm-Singer\'s Reprieve',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'Seven Seas Wind-Luring Chanty ',
            'book' => 'DB???',
            'description' => 'Singing ancient rimes and sea shanties passed down across generations of sailors since the dawn of history, the Dragon-Blood appeals to the gods of the sea for mercy, dispersing thunderstorms or opening a path through hurricane winds. Faced with a weather-based maritime hazard or other troubled waters (Exalted, pp. 244-245), she may use this Charm to roll (Charisma + Sail) with double 9s against the hazard\'s difficulty. Success disperses the hazard entirely, without needing an extended Sail action. On a failed roll, she can still attempt to navigate the hazard normally. This Charm can only be used once per story, unless reset by successfully dispersing or otherwise navigating through a hazard to continue sailing on to a location for the direct purpose of achieving a major character or story goal (Exalted, p. 170) or a legendary social goal (Exalted, p. 134)'
        ]);
        
        App\Charm::create([
            'name' => 'Hull-Shattering Avalanche Impact',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '6m, 1a, 1wp;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Pilot, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s anima banner enfolds her ship as it builds speed, growing into an insurmountable onslaught of force to smash through enemy ships or fortifications. She undertakes a ram stratagem in naval combat (Exalted, p. 245) with double 8s. A successful stratagem inflicts an additional point of Hull damage. Outside of combat, this Charm can be used to demolish a seafaring structure or obstacle by ramming it. This is a feat of strength (Exalted, p. 229) rolled using (Wits + Sail), adding (the ship\'s Speed) non-Charm bonus dice. This Charm can be used to attempt feats that normally require up to Strength 10, as long as the Storyteller deems it feasible based on the size of the ship. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Sets the Seas Ablaze',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '10m, 1a, 1wp;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Pilot, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The dragon admiral\'s burning fury reduces enemy fleets to charred cinders. The Exalt makes a broadside stratagem (Exalted, p. 245) with double 9s, discharging her anima through her ship\'s weaponry to set the enemy ship aflame. On a successful roll, the enemy ship catches fire and continues to burn for the rest of the scene. At the end of each round, including the round this Charm is used, roll one die of Hull damage against that ship. A captain can direct her crew to put out the fires as a special naval stratagem rolled with (Wits + Sail) that costs two Momentum. If that ship\'s captain loses the opposed roll for that stratagem, the ship remains aflame, although it doesn\'t take damage from the fire that round. This Charm can only be used once per scene.'
        ]);
        
        App\Charm::create([
            'name' => 'Shipwreck-Strewn Tempest Wake',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '5m, 1a, 1wp;',
            'element' => 'Sail',
            'type' => 'Reflexive',
            'effect' => 'Aura, Pilot, Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s ship churns the seas into a roiling frenzy in its wake, forcing her pursuers to choose between risking destruction or watching her sail free into the horizon. When she succeeds on an extended roll to escape from naval pursuit or to enact an escape stratagem in naval combat, she creates a swirling maelstrom or similar peril that the opposing captain must contend with. Navigating this hazard is a (Wits + Sail) roll at a difficulty of (the Exalt\'s Essence + 2). A ship whose captain fails this roll suffers one point of Hull damage. In addition, he\'s either thrown off course or otherwise delayed, leaving him unable to make any meaningful progress towards pursuing the DragonBlood\'s ship for (Essence) days. If multiple ships are in pursuit of the Dragon-Blood or engaged in naval combat in the same waters, they must all navigate through the hazard if they wish to follow her. This Charm can only be used once per story, unless reset by achieving a major character or story goal (Exalted, p. 170) through seafaring prowess, or after using a ship to reach a vital locale'
        ]);
        
        App\Charm::create([
            'name' => 'Benediction of the Living Ship',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '10m, 1a, 1wp;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'Sturdy Bulkhead Concentration ',
            'book' => 'DB???',
            'description' => 'Verdant Essence races across the Dragon-Blood\'s ship, reawakening the sylvan vitality of its timbers. Roots and branches knit together damaged portions of hull; flowers or fruit sprout to nourish the ship\'s crew. She rolls (Essence), plus any applicable Sail specialty, and heals her ship of that many points of Hull damage. The Exalt and all allied characters aboard the ship heal a single level of non-aggravated damage as they bask in the fragrant aroma of blossoming flowers or eat of the ship\'s bounty. If the ship\'s food stores are running low, this Charm provides enough food to sustain the crew for the rest of the story. All members of the crew gain a non-Charm bonus success on any roll to resist poison or disease that they make while aboard the ship. This Charm can only be used on a ship once per story, unless all Hull damage to it is fully repaired.'
        ]);
        
        App\Charm::create([
            'name' => 'Vanishing Fog-Bank Escape',
            'mins' => 'Sail 4, Essence 3',
            'cost' => '5m, 1a;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Mute, Pilot, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Seven Seas Wind-Luring Chanty ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood sloughs off her anima banner as a cloud of mist that engulfs her ship, buying her a chance to flee unseen. In naval combat, she may use this Charm to attempt an escape stratagem (Exalted, p. 245) at a reduced cost of six Momentum. In addition, for each point of Momentum she has over the opposing captain after both pay the costs of their stratagems that interval, she adds one bonus die on the escape roll. This Charm can also enhance the interval roll for a pursuit at sea (Exalted, p. 244) in which she\'s fleeing, imposing a penalty of (Essence) on the opposing captain\'s roll. This Charm can be used outside of naval combat or naval pursuit, creating a large fogbank that covers the entire ship for one scene unless dispersed by magical or extremely strong winds'
        ]);
        
        App\Charm::create([
            'name' => 'Pirate-Masquerading Method',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Sail',
            'type' => 'Reflexive',
            'effect' => 'Water',
            'duration' => 'One scene',
            'prerequisite' => 'Vanishing Fogbank Escape ',
            'book' => 'DB???',
            'description' => 'Skilled in the ways of seafaring deception, the DragonBlood conceals the true colors of her ship under a mirage of Essence, causing other vessels to perceive it as a ship of their own allegiance or purpose. A merchant vessel from a foreign kingdom would see her warship as flying under its own kingdom\'s flag, while a pirate raiding-ship would see her as a fellow corsair. She rolls (Manipulation + Sail) to determine the quality of this ruse, adding (Essence) non-Charm bonus dice. Any nontrivial character within long range or closer of the ship can attempt to see through this ruse with a (Perception + [Awareness or Investigation]) roll with a difficulty equal to the Dragon-Blood\'s result on the roll. Characters who attempt this roll without the benefit of applicable magic or superhuman senses suffer a −3 penalty on the roll. Once a character has boarded the ship, he can see through this ruse automatically. Alternatively, the Dragon-Blood may use this Charm on herself whenever she attempts to fit in to a society of sailors or other seafarers: a ring of smugglers operating out of Champoor, a Tya guildhouse, the Lintha crime family, etc. She adds (Sail) bonus dice on any disguise roll she makes to pose as a member of that group, and gains +2 Guile against any roll that would reveal information exposing her outsider status'
        ]);
        
        App\Charm::create([
            'name' => 'Bellowing Thunder Admiral',
            'mins' => 'Sail 5, Essence 3',
            'cost' => '8m, 1wp;',
            'element' => 'Sail',
            'type' => 'Simple',
            'effect' => 'Air, Balanced',
            'duration' => 'One scene',
            'prerequisite' => 'Old Salt Spirit ',
            'book' => 'DB???',
            'description' => 'Barking orders over the din of hurricanes, the DragonBlood incites her sailors to courage and swift victory in battle. She adds (Essence/2, rounded up) successes on command actions targeting battle groups made up of sailors under her command. Such groups add (her Essence/2, rounded up) successes on Willpower rolls against rout and gain the Resolve bonus of Old Salt Spirit as long as they\'re within medium range of her. Special activation rules: If the Dragon-Blood wins Join Battle after taking a boarding action in naval combat (Exalted, p. 246), she may use this Charm reflexively'
        ]);
        
        App\Charm::create([
            'name' => 'Ship-Seizing Dragon Talon',
            'mins' => 'Sail 5, Essence 4',
            'cost' => '1m, 1wp;',
            'element' => 'Sail',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Bellowing Thunder Admiral ',
            'book' => 'DB???',
            'description' => 'Enacting a fluid battle strategy, the Dragon-Blood and her crew descend on enemy ships with unstoppable force. This Charm enhances any boarding action in naval combat (Exalted, p. 245) with double 9s. If the Dragon-Blood successfully boards and initiates combat, every threshold success on her naval stratagem roll adds one bonus die to the Join Battle rolls of her and all her allies, and she may waive the Willpower cost of Bellowing Thunder Admiral if she wins Join Battle.'
        ]);
        
        App\Charm::create([
            'name' => 'Fog Shroud Ambush',
            'mins' => 'Sail 5, Essence 5',
            'cost' => '6m, 1wp;',
            'element' => 'Sail',
            'type' => 'Supplemental',
            'effect' => 'Mute, Pilot, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Pirate-Masquerading Method, Ship-Seizing Dragon Talon ',
            'book' => 'DB???',
            'description' => 'Mist swirls around the Dragon-Blood\'s ship as she maneuvers it out of sight, catching enemy ships off guard as she emerges from the fog. She waives the Momentum cost of a concealment stratagem in naval combat (Exalted, p. 245). If she succeeds and uses her next round to enact a broadside, escape, or ram stratagem against the enemy ship, she succeeds automatically, regardless of the opposing captain\'s roll. If the opposing captain benefits from superhuman senses capable of seeing through fog or magic such as Eye of the Unconquered Sun, or is guided by an ally with such senses, the Dragon-Blood doesn\'t automatically succeed, but imposes a penalty of (Manipulation) on opposing rolls. This Charm can only be used once per scene, unless reset by successfully incapacitating an enemy ship with a naval stratagem. '
        ]);
        
        
        App\Charm::create([
            'name' => 'Loquacious Courtier Technique',
            'mins' => 'Socialize 1, Essence 1',
            'cost' => '2m per success or +1 Guile;',
            'element' => 'Socialize',
            'type' => 'Supplemental or Reflexive',
            'effect' => 'Balanced, Excellency, Fire, Mute',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood endears herself to all company with pleasing and faultless manners, She may add automatic successes to Socialize rolls or raise her Guile for two motes each'
        ]);
        
        App\Charm::create([
            'name' => 'Wary Yellow Dog Attitude',
            'mins' => 'Socialize 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Socialize',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The line between social pleasantries and drawn blades can be all too thin, but the Dragon-Blood isn\'t caught unawares. When combat breaks out amid social interaction, she may use this Charm to Join Battle with ([Perception or Wits] + Socialize). If she\'s successfully influenced or read the intentions of one of her enemies earlier in the scene, she rolls an additional non-Charm die for each 10 on her Join Battle roll'
        ]);
        
        App\Charm::create([
            'name' => 'Friend-to-All-Nations Attitude',
            'mins' => 'Socialize 3, Essence 1',
            'cost' => '—;',
            'element' => 'Socialize',
            'type' => 'Permanent',
            'effect' => 'Wood',
            'duration' => 'Permanent',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood ingratiates herself into insular cliques, foreign courts, and barbarian tribes with skillful understanding of their customs and mores. After spending at least an hour being exposed to any culture or social group, she may gain a temporary Socialize specialty in it. She may have up to (Essence) specialties granted by this Charm at a time. If she wishes to gain a new temporary specialty while at the maximum, she must abandon an old one'
        ]);
        
        App\Charm::create([
            'name' => 'Loyalty-Reading Meditation',
            'mins' => 'Socialize 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Socialize',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Who can conceal the heat of his passion from the Dragon-Blood\'s keen eye? When she reads intentions to discern an Intimacy based on emotion, that Intimacy penalizes the target\'s Guile as though it were his Resolve (Exalted, p. 215)'
        ]);
        
        App\Charm::create([
            'name' => 'Smoke-Wreathed Mien',
            'mins' => 'Socialize 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Feigned languor conceals the Dragon-Blood\'s true feelings. When a character she\'s aware of rolls to read her intentions, (Essence) 1s on his roll each force him to reroll a successful die, starting with 7s and moving up'
        ]);
        
        App\Charm::create([
            'name' => 'Auspicious First Meeting Attitude',
            'mins' => 'Socialize 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Balanced, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Friend-to-All Nations Attitude, Loyalty-Reading Meditation ',
            'book' => 'DB???',
            'description' => 'Swift to win new friends and impress new acquaintances, the Dragon-Blood reads them and tailors her bearing to their expectations to leave a perfect first impression. Upon meeting a character for the first time, the Dragon-Blood may combine a read intentions action with an instill action to create a positive Tie towards herself, making a single ([Charisma, Appearance, or Perception] + Socialize) roll against his (lower of Guile or Resolve).'
        ]);
        
        App\Charm::create([
            'name' => 'Brother-Against-Brother Insinuation',
            'mins' => 'Socialize 3, Essence 2',
            'cost' => '5m;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Wary Yellow Dog Attitude ',
            'book' => 'DB???',
            'description' => 'Sometimes a lone spark is all it takes to destroy a relationship. The Dragon-Blood makes an instill roll with double 9s to either weaken a positive Tie towards a character that belongs to the same culture or social group as her target, or to instill a negative tie towards such a character. In addition, targets cannot draw on Intimacies towards the culture or group they share to bolster Resolve against this influence'
        ]);
        
        App\Charm::create([
            'name' => 'Seizing-the-Tongue Technique',
            'mins' => 'Socialize 3, Essence 2',
            'cost' => '6m;',
            'element' => 'Socialize',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'Friend-to-All-Nations Attitude ',
            'book' => 'DB???',
            'description' => 'Quick wits allow the Dragon-Blood to nimbly avoid social pitfalls and correct faux pas without giving offense. She rerolls (Essence) non-1 failed dice on an influence roll made with Presence or Socialize. In Air Aura, the Dragon-Blood may use this Charm reflexively after making a roll'
        ]);
        
        App\Charm::create([
            'name' => 'Sweeten-the-Tap Method',
            'mins' => 'Socialize 3, Essence 2',
            'cost' => '5m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Fire/Wood',
            'duration' => 'One scene',
            'prerequisite' => 'Friend-to-All-Nations Attitude ',
            'book' => 'DB???',
            'description' => 'Whether it\'s freely flowing libations at a Dynastic salon or a ration of rum at a military encampment, alcohol improves moods and eases social friction. When the DragonBlood supplies drinks, she may use this Charm to heighten their potency and quality. Each character who partakes is treated as having a positive Minor Tie for his fellow partygoers — whose context, such as affection or camaraderie, is chosen by his player — and suffers −1 Guile. However, sweetening the tap also increases the risk of fraying tempers or violent overreactions. If a character botches a social action, the positive Tie towards him created by this Charm inverts into a negative Tie for all inebriated partygoers who witnessed the offense.'
        ]);
        
        App\Charm::create([
            'name' => 'Shadow-Dispersing Radiance',
            'mins' => 'Socialize 4, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Loyalty-Reading Meditation ',
            'book' => 'DB???',
            'description' => 'Whether enticed by her striking looks or menaced by her intimidating features, few can keep their secrets when they look upon the Dragon-Blood. If her Appearance is higher than a character\'s Guile, she adds non-Charm dice equal to the difference on a roll to read his intentions'
        ]);
        
        App\Charm::create([
            'name' => 'Eye-for-Passions Scrutiny',
            'mins' => 'Socialize 5, Essence 2',
            'cost' => '2m;',
            'element' => 'Socialize',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Shadow-Dispersing Radiance ',
            'book' => 'DB???',
            'description' => 'When the Dragon-Blood successfully reads a character\'s intentions, the Storyteller reveals an additional Intimacy based on emotion that relates to the motives or other Intimacy she discerned. For example, uncovering a courtier\'s Intimacy for a beautiful performer might reveal his Tie of hatred for a romantic rival, while uncovering that a vagabond intends to pickpocket her might reveal a Tie of love for the family he needs to feed.'
        ]);
        
        App\Charm::create([
            'name' => 'Watching the Salon\'s Shadows',
            'mins' => 'Socialize 4, Essence 2',
            'cost' => '3m;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Loyalty-Reading Meditation, Smoke-Wreathed Mien ',
            'book' => 'DB???',
            'description' => 'Even as she flaunts her finery and shares laughter with intimate friends, the Dragon-Blood is at her most vigilant. She gains +1 Guile against the read intentions roll of a character she\'s unaware of. If she defeats his roll, she may roll (Perception + Awareness) with double 9s to detect him'
        ]);
        
        App\Charm::create([
            'name' => 'Smoke Without Flame',
            'mins' => 'Socialize 5, Essence 2',
            'cost' => '4m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Smoke-Wreathed Mien ',
            'book' => 'DB???',
            'description' => 'Those who expect intemperance or unthinking passion from the Dragon-Blood are the most easily deceived. She gains +1 Guile. If the opposing character fails to read her intentions, he believes that he\'s succeeded, but what\'s revealed to him is an exaggeration of the Dragon-Blood\'s emotional state or one of her emotion-based Intimacies, chosen by the player. Irritation might be misread as a hate-filled vendetta; infatuation as passionate longing; or boredom as soul-crushing ennui. In Fire Aura, the Guile bonus doesn\'t count as a bonus from Charms. With a Socialize 5, Essence 4 repurchase, even if the Dragon-Blood\'s Guile is beaten, she may expend her Fire Aura to exaggerate any emotions or emotion-based Intimacies that are revealed. '
        ]);
        
        App\Charm::create([
            'name' => 'Clear-Eyed Courtier\'s Scrutiny',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Mute, Signature (Air)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'As she gazes down from a superior social vantage, the complexities of courtly intrigues lay themselves bare before the Dragon-Blood. She makes a single read intentions roll against all characters she can perceive, doubling 9s. She may either attempt to determine each of their intentions in the current scene — for instance, scanning an office of functionaries to determine which ones are working dutifully, which are lazing, and which are in the process of embezzling; or she can attempt to identify their Intimacies on a single topic — discerning how the members of a prince\'s court feel about him, or the reasons why a mob of peasant is protesting a satrap\'s rule. Even if her roll fails to overcome a character\'s Guile, she doesn\'t need to reset her read intentions action before attempting it against him again in the same scene. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Unfaltering Pillar of Unity',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Mute, Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Expounding on the importance of tradition and social order while inveighing against disloyalty, the DragonBlood strengthens the foundations of society. She rolls (Charisma + Socialize) to instill one or more members of a single culture or social group with a Tie of loyalty towards that society, doubling 8s and ignoring the penalty for influencing multiple characters. A character whose Resolve is beaten must enter a Decision Point and call on a Major or Defining Intimacy to resist the Tie being created. As usual, strengthening an existing Intimacy can\'t be resisted with Willpower. An affected character cannot voluntarily weaken the instilled Tie until (6 − his Integrity) weeks have passed, nor can he take actions that would oppose the Intimacy during that time, unless failing to do so would oppose a Defining Intimacy. Other characters can attempt to erode the Tie normally using social influence, but are subject to the rules for overturning social influence (Exalted, p. 221). Fully eroding the Intimacy frees the character from this Charm\'s effects. This Charm can only be used once per story, unless reset by accomplishing a major character or story goal (Exalted, p. 170) that benefits a culture or social group that the Exalt belongs to'
        ]);
        
        App\Charm::create([
            'name' => 'Wildfire Scandal Revelation',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '15m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Mute, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'No tinder burns hotter than a stolen secret, igniting a blaze that spreads with the swiftness of rumor. To use this Charm, the Dragon-Blood must first uncover an embarrassing or damaging secret of another character, one that, if revealed, would have dramatic negative consequences for that character. She may then use this Charm when she reveals his secret to others, rolling (Charisma + Socialize), doubling 8s, to instill a negative Tie toward him or weaken positive Ties towards him. This also instills a negative Tie or weakens positive Ties towards a culture or social group that he belongs to, chosen by the Exalt. Resisting this influence costs (Dragon-Blood\'s Essence/2, round up) points of Willpower. For the rest of the story, affected characters gain the benefit of a temporary specialty on any influence roll they make to spread the secret using any social Ability. This Charm can only be used once per story, unless reset by accomplishing a major character or story goal (Exalted, p. 170) by orchestrating the social downfall of a rival — causing him to lose an official position or social standing, creating a scandal that destroys his reputation, or similar. She can only use this Charm again on the same character by revealing a different secret, even if it resets.'
        ]);
        
        App\Charm::create([
            'name' => 'Ego-Dissolving Deception',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Water)',
            'duration' => 'One story',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Diving below the shallows of her conscious mind into the depths of her deepest self, the Dragon-Blood submerges herself in a life of falsehoods. After spending at least an hour in meditation, she may rewrite her own memories of a single event or relationship. She could convince herself that a beloved spouse died in battle, erase an incriminating meeting with a co-conspirator from her memory, or make herself believe that she\'s defected from her Great House to loyally serve a group that she\'s actually infiltrating. She gains a Major Principle reflecting this belief, and may treat any influence that would weaken it as unacceptable for this Charm\'s duration. She may release her mote commitment to this Charm reflexively to end its duration and restore her true memories, even if she doesn\'t remember using it, but the Intimacy remains in place until she erodes it normally, until which time she may confuse her two sets of memories. At Essence 5, the Dragon-Blood may expend her Water Aura to use this Charm reflexively in response to any effect opposing her Guile, altering her memories so that even if the effect succeeds, the information gleaned will be falsified. This Charm can only be used once per story, unless reset by accomplishing a major character or story goal (Exalted, p. 170) that the Exalt has altered her memories to achieve'
        ]);
        
        App\Charm::create([
            'name' => 'Poisonous Sneer Reproach',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '2m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Tongue dripping with venom, the Dragon-Blood excoriates the speech of an ill-mannered rival. When she witnesses another character attempt social influence, she may speak against it, deriding the speaker or exposing the flaws in his argument with a ([Charisma or Manipulation] + Socialize) roll. Each of her successes imposes a −1 penalty on the speaker\'s influence roll. If this penalty reduces his dice pool to zero, or if he rolls and botches, his influence has the opposite of its intended effect on each character whose Resolve was beaten by the Dragon-Blood\'s roll. Attempting to flatter an official would create a negative Tie instead of a positive one, while intimidating a group of guards into standing down would cause them to attack instead. This Charm can only be used once per day'
        ]);
        
        App\Charm::create([
            'name' => 'Ember-Fanning Provocation',
            'mins' => 'Socialize 4, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Brother-Against-Brother Insinuation, Seizing-the-Tongue Technique ',
            'book' => 'DB???',
            'description' => 'A dragon\'s breath stokes the embers of enmity into a fullblown bonfire. The Dragon-Blood makes a persuade roll supported by a negative Tie for foreigners, outsiders, or members of an undesirable subculture, or a negative Tie instilled with Brother-Against-Brother Insinuation, doubling 9s. If the leveraged Intimacy is Major or Defining, the cost of resisting increases to two Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Smoothing-Over-the-Past Technique',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Psyche, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Ember-Fanning Provocation ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s lulling speech and hypnotic bearing muddles the memory of an enemy, rival, or ill-treated acquaintance, banishing a past event that would reflect poorly on a current conversation to the depths of his unconscious. She makes a special (Manipulation + Socialize) instill roll against a single character to suppress his memory of a single incident of her past misbehavior. She takes a penalty determined by the Storyteller based on the misconduct\'s severity — an insult without lasting consequences might suffer no penalty; petty theft or humiliation in front of a small group might suffer a −1 penalty; inflicting a disfiguring wound or public humiliation before a large group might suffer a −3 penalty; a murder attempt might suffer a −5 penalty. Success suppresses the chosen memory, allowing the Dragon-Blood to interact with her victim for a single scene as though it never happened. The victim cannot bring it up or even remember it, rationalizing away any inconsistencies this causes. If he has a negative Tie towards the Dragon-Blood based on the erased memory, it\'s likewise suppressed. If the Intimacy is based on more than one transgression, the Dragon-Blood must erase them all with multiple uses of this Charm to suppress the Intimacy. If the victim\'s loss of memory would cause him to act inconsistently with a Major or Defining Intimacy, other than a negative Tie for the Dragon-Blood, he may pay one Willpower to resist. However, he\'s unaware she caused his memory lapse. A Socialize 5, Essence 5 repurchase allows the DragonBlood to expend her Water Aura to permanently erase the targeted memory with this Charm. The penalty for erasing egregious misdeeds subtracts successes instead of dice. The victim may still resist, as above, but doing so only restores the memory for a single scene. Once he\'s spent three total Willpower resisting, the memory is restored permanently.'
        ]);
        
        App\Charm::create([
            'name' => 'Enticing Flame Feint',
            'mins' => 'Socialize 4, Essence 3',
            'cost' => '6m;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Fire, Mute',
            'duration' => 'Instant',
            'prerequisite' => 'Watching the Salon\'s Shadows ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood draws attention away from less-subtle allies with inflammatory words or a provocative display. When she witnesses a character attempting to read an ally\'s intentions, she may impose a penalty of (lower of her Essence or Manipulation) on the roll. Each use of this Charm inflicts a −1 penalty on her own Guile for the rest of the scene'
        ]);
        
        App\Charm::create([
            'name' => 'Rumor-Dredging Gaze',
            'mins' => 'Socialize 4, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Auspicious First Meeting Attitude, Shadow-Dispersing Radiance ',
            'book' => 'DB???',
            'description' => 'A master blackmailer, the Dragon-Blood draws forth secrets from the murkiest depths. She rolls to read intentions with double 9s. Instead of specifying an Intimacy she wishes to discern, the Dragon-Blood instead uncovers whichever Intimacy her target most desires to keep hidden from her. If she uses this information to blackmail her target with a bargain or threaten action in the same scene, she doubles 9s on the influence roll, which can be made with any social Ability. A successful influence roll grants her one Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Implacable Dragon Mien',
            'mins' => 'Socialize 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Simple',
            'effect' => 'Earth, Mute',
            'duration' => 'One day',
            'prerequisite' => 'Smoke Without Flame ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s stoic countenance gives away no more than a mountain\'s face. She gains +2 Guile, except against rolls that would reveal a Major or Defining Intimacy based on emotion, or an intention arising out of such an Intimacy. In Earth Aura, this rises to +3 Guile. Even against rolls that would reveal an emotion-based Intimacy or an intention that upholds such an Intimacy, she adds +1 Guile'
        ]);
        
        App\Charm::create([
            'name' => 'Rippling Mirror Face',
            'mins' => 'Socialize 5, Essence 4',
            'cost' => '6m, 1wp;',
            'element' => 'Socialize',
            'type' => 'Reflexive',
            'effect' => 'Mute, Water',
            'duration' => 'Instant',
            'prerequisite' => 'Rumor-Dredging Gaze, Smoke Without Flame ',
            'book' => 'DB???',
            'description' => 'The sparkling waters of the sunlit ocean conceal dark depths, hidden beneath blinding reflections. The Dragon-Blood may use this Charm when she asserts her Guile against a read intentions roll. If that roll fails, the opposing character believes he succeeded. Instead of revealing the truth, the Dragon-Blood may choose an Intimacy possessed by any character present in the scene that she\'s previously discerned with her own read intentions action, passing it off as her own. In Water Aura, this Charm may be declared after a character has failed a read intentions roll, rather than before he rolls.'
        ]);
        
        
        App\Charm::create([
            'name' => 'Distracting Breeze Meditation',
            'mins' => 'Stealth 1, Essence 1',
            'cost' => '2m per success;',
            'element' => 'Stealth',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Excellency, Mute',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'As the Dragon-Blood moves through the shadows, the wind itself conspires to conceal her, blowing out torches, flapping curtains, or knocking over objects to create distractions. She may add automatic successes to a Stealth roll for two motes each'
        ]);
        
        App\Charm::create([
            'name' => 'Vanishing Wind-Body Technique',
            'mins' => 'Stealth 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Air',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is one with the air around her, releasing the solidity and substance that weigh down her body. She ignores one point of the penalty for using Stealth in combat, and effects that detect air motion, like Living Pulse Perception (Exalted, p. 271) or the air-aspected variant of All-Encompassing Earth Sense (p. 172), don\'t work against her. She can still be detected normally by hearing and other senses. In Air Aura, the Dragon-Blood may ignore (her Essence/2, rounded up) in penalties for using Stealth in combat'
        ]);
        
        App\Charm::create([
            'name' => 'Flowing Shadow Stance',
            'mins' => 'Stealth 3, Essence 1',
            'cost' => '2m;',
            'element' => 'Stealth',
            'type' => 'Supplemental',
            'effect' => 'Water',
            'duration' => 'Instant',
            'prerequisite' => 'Vanishing Wind-Body Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood moves with the grace of a secret current, flowing past the notice of her enemies. She rerolls 6s on a Stealth roll until they cease to appear, and gains a point of Initiative if she beats the opposed rolls of all enemies. In Water Aura, when the Exalt gains Initiative with this Charm, she may choose one of the enemies she beat with her Stealth roll, causing him to lose one Initiative'
        ]);
        
        App\Charm::create([
            'name' => 'Soundless Action Prana',
            'mins' => 'Stealth 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Stealth',
            'type' => 'Reflexive',
            'effect' => 'Air, Mute',
            'duration' => 'Until next turn',
            'prerequisite' => 'Vanishing Wind-Body Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood silences herself with an inner whirlwind, drawing in the sound of every unintended gasp or misplaced footstep before it reaches the ears of her foes. Every 10 on a Stealth roll rerolls a non-1 failed die, and she can\'t be detected by hearing unless the opposing character\'s hearing is superhuman or magically enhanced. Such characters still take a −2 penalty on rolls to hear her'
        ]);
        
        App\Charm::create([
            'name' => 'Shimmering Heat-Mirage Tactic',
            'mins' => 'Stealth 4, Essence 2',
            'cost' => '4m, 2i;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Fire, Perilous',
            'duration' => 'One scene',
            'prerequisite' => 'Flowing Shadow Stance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s outline wavers and distorts like heat haze, her movements seeming to double and treble as she trails afterimages. She gains +2 Evasion. This Charm ends if a nontrivial enemy attacks her and rolls no 1s, even if she successfully defends. In Fire Aura, withering attacks don\'t end this Charm even if they have no 1s, as long as they have no 10s'
        ]);
        
        App\Charm::create([
            'name' => 'Whispering Dragon Soul',
            'mins' => 'Stealth 5, Essence 3',
            'cost' => '—(2m per Charm);',
            'element' => 'Stealth',
            'type' => 'Permanent',
            'effect' => 'Mute, Signature (Air)',
            'duration' => 'Permanent',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Having meditated on the nature of silence, the DragonBlood directs her enlightenment inward, suffusing her anima banner with the subtlety of air. She may pay two motes to apply the Mute keyword to any Air or Balanced Charm she uses. The Dragon-Blood can master this Charm for other elements for three experience points each. She cannot mute multiple Charms of different elements in a single instant (excluding Balanced Charms).'
        ]);
        
        App\Charm::create([
            'name' => 'Sleeping Dragon\'s Lair',
            'mins' => 'Stealth 5, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Mute, Signature (Earth)',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood descends into the earth beneath her, either to coil and slumber or simply to wait. As long as she\'s touching reasonably pliant ground, she may sink into it, entombing herself just below the surface. She cannot be seen or heard without using applicable magic, such as hearing her heartbeat with Knowing Beyond Silence or sensing her presence with Feeling the Dragon\'s Bones (p. 173). She can still be tracked by scent, but her trail ends abruptly at the point where she vanished into the earth. While entombed, the Dragon-Blood cannot use her senses or move without the use of appropriate Charms. She could eavesdrop through a layer of topsoil with Deep-Listening Palm (p. 172), detect the presence of anyone within range with All-Encompassing Earth Sense (p. 172), or move underground with One-WithEarth Embodiment (p. 174). She buries herself along with enough air to breathe for five minutes, after which she must hold her breath or make use of Charms such as Unbreathing Earth Meditation (p. 248). When this Charm ends, the Dragon-Blood emerges from the earth in a great plume of dust that she can hide within. She may expend her Earth Aura through the dust plume to blind all enemies in short range for one scene unless they succeed on a (Stamina + Awareness) roll at difficulty 3. Blinded characters must spend three Initiative and a turn washing out their eyes to regain sight. An Essence 5 repurchase of this Charm lets the DragonBlood descend into solid rock as long as it\'s natural, unworked stone. She could embed herself in the wall of a cavern or a mountain overhang, but not the stone floor of a dungeon. She may expend her Earth Aura when she emerges from solid rock to unleash a spray of stone shrapnel that both blinds enemies as above and acts as a one-time environmental hazard out to short range from the Dragon-Blood with Damage 3L and a difficulty equal to (the lowest of her Strength, Dexterity, or Stamina)'
        ]);
        
        App\Charm::create([
            'name' => 'Flame-Becomes-Shadow Technique',
            'mins' => 'Stealth 5, Essence 3',
            'cost' => '2m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Psyche, Signature (Fire)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Terrestrial shrouds the flame of her presence in smoke and shadows, diverting the attention of those who are most in awe of her. The Dragon-Blood rolls ([Manipulation or Appearance] + Stealth) against the Resolve of any character that has an Intimacy which supports deference or submission towards her — whether love, fear, or belief in Immaculate orthodoxy. The targeted Intimacies penalize Resolve as normal. Affected characters are incapable of perceiving the Dragon-Blood until she takes hostile action or chooses to reveal herself. An Immaculate monk could walk unnoticed into the midst of a meeting plotting sedition against the Realm, stepping forward from the shadows to pronounce judgment. A character that wishes to resist this unnatural influence must enter a Decision Point, calling upon an Intimacy of equal or greater strength than the one exploited and paying a point of Willpower'
        ]);
        
        App\Charm::create([
            'name' => 'Depth-Stalking Discipline',
            'mins' => 'Stealth 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Aura, Mute, Signature (Water)',
            'duration' => 'Aura',
            'prerequisite' => 'Flowing Shadow Stance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood submerges herself in Water Essence to wash away anything that might betray her presence. She doubles 9s on Stealth rolls. While surrounded by water, such as being submerged or in driving rain, she doubles 8s and is completely imperceptible by scent — able to evade the hunting hounds of a god by fleeing into a storm, or to swim through the sea while bleeding heavily without drawing the notice of siaka. This Charm can only be used once per scene'
        ]);
        
        App\Charm::create([
            'name' => 'Shadow-Stalking Predator Spirit',
            'mins' => 'Stealth 5, Essence 3',
            'cost' => '5m (+1wp, expend Wood Aura);',
            'element' => 'Stealth',
            'type' => 'Reflexive',
            'effect' => 'Aura, Dual, Mute, Signature (Wood)',
            'duration' => 'Aura',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood moves through the wilderness as its hidden master, stalking her prey unseen. Boughs twist to conceal her movement; fragrant flowers and pollen obscure her scent trail. To use this Charm, she must be moving through or hiding behind light foliage, small trees, or comparable vegetation. When an enemy within medium range — or long range, in areas of heavy growth such as thick bamboo groves or forests dense with underbrush — rolls to oppose her Stealth, his 1s subtract successes. When the Dragon-Blood makes an unexpected attack against an enemy within range of this Charm, she may pay one Willpower and expend her Wood Aura — ending this Charm — to double her attack roll\'s threshold successes when calculating the damage of a withering attack, or to add her threshold successes as dice to the damage of a decisive attack. If she conveys poison through an unexpected decisive attack this way, she adds (Essence/2, rounded down) to its duration. This Charm can only be used once per scene.'
        ]);
        
        App\Charm::create([
            'name' => 'Burning Shadow Double',
            'mins' => 'Stealth 4, Essence 3',
            'cost' => '1m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Fire',
            'duration' => 'One scene',
            'prerequisite' => 'Shimmering Heat-Mirage Tactic ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood radiates her presence through the shadows as a heat mirage, distorting the air to create a near-perfect double of herself, tinged with glowing hints of her anima. To use this Charm, she must be in concealment. She may place a decoy at any point within medium range. The decoy is realistically lifelike and can appear to take most actions the Exalt could, as determined by her, but cannot speak, make sounds, or touch anything, and has no scent. It can\'t move beyond medium range from her, and vanishes if she moves further than medium range from it. The decoy has Evasion (Manipulation) against attacks, and dissipates into nothingness once struck. Against attacks made from short or close range, its Evasion falls to 0. As long as it isn\'t hit, it continues to convincingly imitate the Dragon-Blood, though it cannot take combat actions. Once a character comes within short or close range of the decoy, he may roll (Perception + Awareness) opposing (the Dragon-Blood\'s Manipulation + Stealth) to realize the decoy is a sham, and can warn his allies not to attack it. Magic such as Keen Sight Technique (Exalted, p. 267) allows characters to make this roll at any range. In Fire Aura, the Exalt may create up to (Essence + Manipulation) separate decoys with each use of this Charm, paying two motes for each additional mirage'
        ]);
        
        App\Charm::create([
            'name' => 'Zone of Silence Stance',
            'mins' => 'Stealth 4, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Air, Mute',
            'duration' => 'One scene',
            'prerequisite' => 'Soundless Action Prana ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood weighs down the air around her, trapping sounds in frozen stillness. She can silence the ringing of blades, the desperate cry of a wounded bandit, or the shattering of a thousand-year-old vase. This Charm functions as Soundless Action Prana, but silences the Exalt completely, defeating even supernatural hearing. In addition, she can radiate silence out to close range, making it impossible to hear anyone or anything within that radius and obstructing the passage of sound through the zone of silence as though it were a solid steel dome over her. Characters may pay one Willpower to speak forcefully enough to pierce the silence long enough to make one social roll if remaining silent would threaten one of their Major or Defining Intimacies. In Air Aura, the Dragon-Blood may expand the zone of silence by one range band at the end of each round, maximum long range'
        ]);
        
        App\Charm::create([
            'name' => 'Deadly Riptide Executioner',
            'mins' => 'Stealth 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Stealth',
            'type' => 'Reflexive',
            'effect' => 'Aura, Dual, Mute, Water',
            'duration' => 'Aura',
            'prerequisite' => 'Flowing Shadow Stance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood stalks her victim calmly but inexorably, slowly gathering force until she finally draws blood. This Charm can only be used in concealment. The Dragon-Blood chooses a character, and gains one point of Initiative each turn that she moves towards him without breaking concealment. If she leaves concealment or fails to pursue the chosen target, this Charm ends. If the Dragon-Blood ends this Charm by making an unexpected attack, she may expend her Water Aura to dissolve into dark water as she lunges forward, ignoring (Essence + 2) points of soak on a withering attack, or ignoring (Essence) points of Hardness and doubling 10s on the damage roll of a decisive attack'
        ]);
        
        App\Charm::create([
            'name' => 'Dragon Shroud Technique',
            'mins' => 'Stealth 5, Essence 4',
            'cost' => '5m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Reflexive',
            'effect' => 'Air, Mute',
            'duration' => 'One scene',
            'prerequisite' => 'Zone of Silence Stance ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood spins air into an enfolding shroud against all senses. Her form is blurred and indistinct, her noises muffled, and every other trace of her presence masked from detection — scent, body heat, and more. All rolls to oppose her Stealth take a penalty of (her Essence/2, rounded up), and she waives the cost of muting Air Charms with Whispering Dragon Soul. The Charm ends if the Dragon-Blood attacks.'
        ]);
        
        App\Charm::create([
            'name' => 'Mela\'s Hungry Jaws',
            'mins' => 'Stealth 5, Essence 5',
            'cost' => '3m, 1wp;',
            'element' => 'Stealth',
            'type' => 'Simple',
            'effect' => 'Air, Aura',
            'duration' => 'Aura',
            'prerequisite' => 'Dragon Shroud Technique ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood steals the very air from her victim\'s lungs, suffocating him without ever laying a hand on him or being seen. This Charm can only be used while in concealment, against an enemy within medium range who\'s unaware of the Dragon-Blood. She steals his breath, causing him to begin to asphyxiate (Exalted, p. 232). Trivial opponents never receive a chance to hold their breath, even outside of combat. The Terrestrial cannot move while using this Charm to siphon her foe\'s breath, but neither can her victim move without rolling a disengage against her, regardless of the distance between them. A victim can only break free of Mela\'s Hungry Jaws by successfully finding the Dragon-Blood with a (Perception + Awareness) roll or withdrawing to extreme range. His allies can attempt to free him by attacking the Dragon-Blood once they\'ve found her. Even if the attack roll misses, as long as it rolled no 1s, this Charm ends, while a hit automatically ends it'
        ]);
        
        
        App\Charm::create([
            'name' => 'Ration-Enhancing Method',
            'mins' => 'Survival 1, Essence 1',
            'cost' => '2m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Excellency, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The wilderness welcomes the Dragon-Blood\'s presence, recognizing her as a Prince of the Earth. She may add automatic successes to a Survival roll for two motes each. If she enhances a roll to forage for food, it yields enough edible plants or game to feed a single additional character besides her for one day per threshold success'
        ]);
        
        App\Charm::create([
            'name' => 'Quarry Revelation Technique',
            'mins' => 'Survival 2, Essence 1',
            'cost' => '2m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood can track wild beasts back to their dens or the Anathema to their lairs. She rerolls 6s on a tracking roll (Exalted, p. 230) until they cease to appear, and is capable of rolling to contest even magical concealment that is otherwise perfect, such as a Solar\'s Traceless Passage.'
        ]);
        
        App\Charm::create([
            'name' => 'Trail-Concealing Measure',
            'mins' => 'Survival 3, Essence 1',
            'cost' => '5m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Mute, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Quarry Revelation Technique ',
            'book' => 'DB???',
            'description' => 'Skillfully concealing all signs of her passage, the Dragon-Blood may tread over twigs without snapping them and walk through grass without bending a blade. She doubles 9s on a Survival roll to conceal her tracks or on a Stealth roll to establish concealment in a forest, grassland, or similar wilderness. The Dragon-Blood may learn elemental variants of this Charm that function in different terrain for three experience points each. Air: This variant can be used in snowfall, or amid snow-covered or icy terrain. Earth: This variant can be used underground, or in mountainous or other rocky terrain. Fire: This variant can be used in widespread fire or smoke, or amid deserts or active volcanic terrain. Water: This variant can be used in rainfall, near bodies of water, or amid marshy or swampy terrain'
        ]);
        
        App\Charm::create([
            'name' => 'Beast-Taming Aspect',
            'mins' => 'Survival 3, Essence 1',
            'cost' => '3m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s mien gives pause to even the most ferocious predators, proving to them that she deserves their respect. She doubles 9s on a roll to train an animal (Exalted, p. 554) or to influence it using Performance or Presence. Even if she uses this Charm to scare off a dangerous predator, her noble bearing causes the beast to regard her with respect. Over the course of weeks, she can claim such an animal as her familiar. This takes a number of weeks equal to (its Resolve), and the Dragon-Blood must successfully interact with it using this Charm at least once each week. Once this is done, that animal becomes her familiar at no experience cost'
        ]);
        
        App\Charm::create([
            'name' => 'Animal Empathy Technique',
            'mins' => 'Survival 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Beast-Taming Aspect ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood needs no words to communicate with animals, mimicking their bestial body language or vocalizations to engage them. She adds (Essence) nonCharm bonus dice on an influence roll made against an animal using any Ability. In addition, her target doesn\'t gain the Resolve bonus for lacking a common language (Exalted, p. 221). '
        ]);
        
        App\Charm::create([
            'name' => 'Wild-Wandering Forester\'s Charm',
            'mins' => 'Survival 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood knows the wilderness as well as she knows her own domain, aware of the secrets and wonders hidden within it. She rolls ([Intelligence or Wits] + Survival) to introduce a fact (Exalted, p. 237) about a wilderness region that she\'s familiar with. She might recount her knowledge of an animal species native to the region, the location of a rare medicinal herb, or effective preparations against a hazard she might encounter'
        ]);
        
        App\Charm::create([
            'name' => 'Mother-of-Beasts Mastery',
            'mins' => 'Survival 4, Essence 2',
            'cost' => '8m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One week',
            'prerequisite' => 'Beast-Taming Aspect ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s natural affinity for animals makes her a peerless trainer, able to rear and nurture even the most savage beasts. She may complete one interval of the extended roll to train an animal (Exalted, p. 554) in a week of training, rather than a month, and ignores the usual specialty requirements. A Survival 5, Essence 3 repurchase of this Charm lets the Dragon-Blood train her familiar to awaken magical abilities (Exalted, p. 555) at a cost of two experience points each. This cost is refunded if her familiar dies. '
        ]);
        
        App\Charm::create([
            'name' => 'Invoking Nature\'s Forgiveness',
            'mins' => 'Survival 3, Essence 2',
            'cost' => '3m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Wood',
            'duration' => 'One day',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s skill in weathering difficult climes lets her protect her allies from even the most hostile environments, leading them through searing desert or frozen tundra. She may protect herself, her Sworn Kin, and (Essence) additional characters. The Exalt must spend five minutes in one-on-one training and preparations with each beneficiary. Each protected character gains a temporary Resistance specialty in withstanding his current environment, and ignores (her Essence) in environmental penalties from harsh climes. Up to five Dragon-Blooded who know this Charm can use it cooperatively. Each additional Exalt adds +1 to the effective Essence of the user to determine how many additional characters can be protected and the amount of penalty reduction.'
        ]);
        
        App\Charm::create([
            'name' => 'Stalking Wolf Pursuit',
            'mins' => 'Survival 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Quarry Revelation Technique ',
            'book' => 'DB???',
            'description' => 'Honing her senses with Essence, the Dragon-Blood can hunt her foes no matter how they try to hide. She ignores any penalties on a tracking roll from visual obstructions, the age of the tracks, and similar environmental factors. A successful roll also lets her determine how much time has elapsed since the target left based on the remaining strength of his scent'
        ]);
        
        App\Charm::create([
            'name' => 'Vanishing Tracks Technique',
            'mins' => 'Survival 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Survival',
            'type' => 'Supplemental',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Trail-Concealing Measure ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is a master of moving without trace, and can obscure the passage of others with her mastery. She rerolls 6s on a roll to cover her tracks. She may conceal the spoor of her Sworn Kin and (Essence) additional characters, allowing them to use half of her rolled successes (rounded up) in place of their own result if it\'s higher'
        ]);
        
        App\Charm::create([
            'name' => 'Cunning Beast-Mind Inspiration',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '2m, 1wp;',
            'element' => 'Survival',
            'type' => 'Reflexive',
            'effect' => 'Aura, Signature (Air)',
            'duration' => 'One turn',
            'prerequisite' => 'Mother-of-Beasts Mastery ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s familiar has wisdom beyond the ken of ordinary beasts, its mind honed by Air Essence. The Exalt may use this Charm on her familiar\'s turn, rolling (Charisma + Survival). She adds half the total successes rolled, rounded up, to one action her familiar takes that turn. In addition, if her familiar takes a defend other action to protect her, it may do so reflexively. If it attempts a distract gambit to benefit her, it doubles 7s on the attack roll'
        ]);
        
        App\Charm::create([
            'name' => 'Earth-Moving Kata',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Signature (Earth)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Moving with practiced discipline through whirling steps and dragon-claw mudras, the Dragon-Blood unleashes a seismic pulse of Earth Essence to strike aside an obstacle. Any natural earthen scenery that bars her path can be removed, such as fallen rocks that block a road, a boulder rolled in front of a cave mouth, or a pool of quicksand. The Storyteller describes the exact effects of this pulse on the scenery — it might cause piled-up stones to fall away, harden quicksand into solid terrain, shatter boulders, or cause stone to meld back into the earth. However, she cannot use this Charm to affect masonry walls or other man-made obstructions. Alternatively, the Dragon-Blood can create a bridge or stairway out of earth or stone to span a canyon, chasm, or similar gap. This cannot extend more than (Essence/2, round up) range bands from her'
        ]);
        
        App\Charm::create([
            'name' => 'Wildfire-Taming Technique',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood may admonish even a wildfire, brandishing elemental Essence to impose her will on the flame. This Charm can be used to divert a prairie wildfire, forest fire, or similar free-burning flame from the path of the Dragon-Blood and her travel companions. She must come within at least short range of the wildfire\'s edge and roll (Charisma + Survival). The difficulty of the roll depends on the fire\'s size — a small grass fire or a just-kindled forest fire might be difficulty 1, a larger forest fire difficulty 3, and an out-of-control blaze that spans miles difficulty 5+. The Storyteller may apply penalties or bonuses based on environmental factors such as recent rainfall or high winds that help the fire spread. A successful roll diverts the wildfire from the DragonBlood\'s path. Though it continues to burn, it avoids the Exalt and her companions, and won\'t pose any direct obstruction to them for the remainder of the story. If she has any threshold successes on the roll, she may redirect the wildfire to track down a character, using her total threshold successes in place of the (Perception + Survival) roll for tracking. Though it lacks sapience, the tamed wildfire is able to sense its quarry magically, and is thus even capable of tracking down a Solar using Traceless Passage. The Storyteller decides the fire\'s speed based on environs and weather, up to a maximum of 150 miles per hour in ideal conditions. However, if there\'s no path of forested land, grass, peat, or other fuel that the fire can follow to pursue its target, its efforts end, making it possible to escape by fleeing from the wilderness.'
        ]);
        
        App\Charm::create([
            'name' => 'Roaring Dragon Font',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Signature (Water)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Meditating in communion with the Essence of underground waters, the Dragon-Blood can find hidden springs in the most desolate climes, beckoning them forth with a mighty stomp that sends a font of water gushing up from underground. She rolls (Wits + Survival) against a difficulty based on her environs — finding a spring in a region that receives regular rainfall or has abundant natural aquifers might be difficulty 1-2, while doing so in an arid desert is difficulty 5+. A successful roll creates a spring. Normally, this spring becomes a permanent feature of the environs, but in regions so harsh that a spring couldn\'t conceivably exist, it flows for only a limited time, providing enough water to sustain the Dragon-Blood, plus one additional character for each threshold success, for a day. She can only draw water up from the ground; she couldn\'t use this Charm to pierce a marble floor or the hull of a boat. In the scene that this Charm is used, the waters that flow from the spring are suffused with purifying Essence. Any character who drinks of the water and either has a positive Tie towards the Dragon-Blood or accepts one out of gratitude may add a non-Charm bonus success on all Athletics, Resistance, and Survival rolls he makes for the rest of the day. Roaring Dragon Font can only be used once per story, unless reset by succeeding on a difficulty 4+ Survival roll'
        ]);
        
        App\Charm::create([
            'name' => 'Stalking Apex Predator Technique',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'One hour',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood moves through the wilderness as its master, running with packs of wild beasts and deftly weaving through jungles. She ignores penalties for crossing difficult terrain made up of dense forests, thick foliage, briar patches, or other plant-based obstructions. While in such terrain, she also ignores the penalty for entering concealment in combat (Exalted, p. 203) and can attempt rushes while in concealment. Additionally, she adds (Essence) non-Charm bonus dice rolls to conceal her tracks. Once per scene, the Dragon-Blood may expend her Wood Aura when she makes an unexpected decisive attack from plant-based concealment to add (Essence) bonus dice on the attack roll and double 10s on the damage roll'
        ]);
        
        App\Charm::create([
            'name' => 'Tireless Caravan Prana',
            'mins' => 'Survival 4, Essence 3',
            'cost' => '—(+7m);',
            'element' => 'Survival',
            'type' => 'Permanent',
            'effect' => 'Wood',
            'duration' => 'Permanent',
            'prerequisite' => 'Invoking Nature\'s Forgiveness ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood guides her companions through the deepest forests and harshest climes. She may commit an additional seven motes when she uses Invoking Nature\'s Forgiveness to increase the rate at which she and the other affected characters can travel through wilderness. If they\'re traveling through normal wilderness, they can cover (Essence + 10) miles with a single day\'s march. Extremely harsh terrain or weather halves the distance they can cover, such as when hiking through a blizzard or climbing a mountain\'s face. If multiple Dragon-Blooded stack the benefits of Invoking Nature\'s Forgiveness, the Essence bonus also applies to this Charm to determine the distance that can be covered. Only one of them needs to know and use Tireless Caravan Prana to yield this benefit. '
        ]);
        
        App\Charm::create([
            'name' => 'Dragon\'s Nest Shelter',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '10m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'None',
            'duration' => '(Essence) days',
            'prerequisite' => 'Tireless Caravan Prana ',
            'book' => 'DB???',
            'description' => 'Calling upon nature\'s mercy, the Dragon-Blood fortifies a shelter with the power of the elements. Vines twine around tent poles to secure them in place; the ground beneath a hut compresses itself to form a sturdy foundation; falling snow forms a crystalline shell atop an igloo. This Charm wards an enclosed shelter, such as a cave or hut, that\'s large enough to comfortably house herself, her Hearth, and up to (Essence) other characters. This takes around an hour to complete. This Charm has the aspect of whichever element the Exalt called upon to fortify her shelter. Up to five Dragon-Blooded who know this Charm can cooperate to erect this shelter. Each additional Exalt adds 1 to the effective Essence of the user to determine the shelter\'s maximum size, and allows the shelter to protect against an additional element. Characters within the shelter are protected from environmental hazards and other wilderness perils related to the chosen element. For example, if the Exalt fortifies a cave with Air Essence, even hurricane winds can\'t pass through the cavern mouth, while a shelter fortified with Earth Essence withstands rockslides and protects those within. This protection doesn\'t extend to elemental magic or attacks used by characters. At Essence 5, if the Dragon-Blooded enhances a shelter while in the bordermarches or middlemarches of the Wyld, it protects its inhabits from any physical or mental effects of the Wyld. It offers no protection once she reaches the deep Wyld.'
        ]);
        
        App\Charm::create([
            'name' => 'Uncanny Fugitive\'s Intuition',
            'mins' => 'Survival 4, Essence 3',
            'cost' => '1m;',
            'element' => 'Survival',
            'type' => 'Reflexive',
            'effect' => 'Air',
            'duration' => 'Instant',
            'prerequisite' => 'Vanishing Tracks Technique ',
            'book' => 'DB???',
            'description' => 'A master hunter knows when she becomes hunted. When a character fails an opposed roll to track the Dragon-Blood, she intuits that someone is pursuing her, and discerns a general sense of distance and direction to his current location'
        ]);
        
        App\Charm::create([
            'name' => 'Burning Fang Strike',
            'mins' => 'Survival 5, Essence 3',
            'cost' => '3m, 3i, expend Fire Aura;',
            'element' => 'Survival',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Mother-of-Beasts Mastery ',
            'book' => 'DB???',
            'description' => 'A flame blazes in the eyes of the Dragon-Blood\'s familiar as it leaps into battle. When her familiar makes a decisive attack, it adds the Exalt\'s Initiative to the attack\'s total damage. A successful attack resets both Exalt and familiar to base Initiative; they both lose Initiative on a missed attack. If the familiar\'s attack incapacitates a nontrivial opponent or deals enough damage to a battle group to reduce its Size, both it and the Exalt add +2 to base Initiative on resetting'
        ]);
        
        App\Charm::create([
            'name' => 'Eternal Elemental Harmony',
            'mins' => 'Survival 4, Essence 3',
            'cost' => '7m, 1wp;',
            'element' => 'Survival',
            'type' => 'Reflexive',
            'effect' => 'Perilous',
            'duration' => 'Instant',
            'prerequisite' => 'Invoking Nature\'s Forgiveness ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood is one with the five elements, capable of dancing with lightning and walking through wildfires. This Charm can be used upon failing a roll against an environmental hazard. The Exalt rolls (Stamina + Survival). Every success reduces the hazard\'s damage by one die. If the hazard inflicts no damage on the Exalt, she gains a point of temporary Willpower. This Charm\'s elemental aspect is that which most closely matches the nature of the hazard it\'s used to protect against. If the Dragon-Blood is in the Elemental Aura that matches this Charm\'s aspect, the duration of its protection lasts for as long as she remains in Aura, subtracting dice of damage based on her initial roll. She can only gain Willpower once, even if she withstands multiple hazards without taking damage'
        ]);
        
        App\Charm::create([
            'name' => 'Labyrinth of Mist Technique',
            'mins' => 'Survival 5, Essence 4',
            'cost' => '15m, 1wp;',
            'element' => 'Survival',
            'type' => 'Simple',
            'effect' => 'Air/Water, Mute',
            'duration' => 'Instant',
            'prerequisite' => 'Uncanny Fugitive\'s Intuition, Tireless Caravan Prana ',
            'book' => 'DB???',
            'description' => 'Those who chase after the Dragon-Blood may as well hunt phantoms. She rolls to conceal her tracks with double 8s. Additionally, a character that fails the roll becomes lost in the wilderness he\'s tracking her through, chasing the Exalt\'s false trails until he loses all sense of location and bearing. Escaping the wilderness requires a difficulty 5 (Wits + Survival) roll to locate a path leading out. On a failed roll, that character must wait until the next day before he can retry it. This doesn\'t prevent him from using magic to ascertain his location or to find a way out without needing to make a Survival roll.'
        ]);
         
        
        App\Charm::create([
            'name' => 'Seeking Throw Technique',
            'mins' => 'Thrown 1, Essence 1',
            'cost' => '1m per die;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Excellency, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s hostile intent stirs up a current of wind that guides her weapon to its victim. A thrown knife might change trajectory in midair to strike an enemy hidden behind a tree, wall, or similar cover. She may add bonus dice on a Thrown roll for one mote each, and ignores the Defense bonus of enemies in light cover. In Air Aura, if the Dragon-Blood aims before attacking, she may ignore one point of Defense bonus from heavy cover'
        ]);
        
        App\Charm::create([
            'name' => 'Armor-Rupturing Fang',
            'mins' => 'Thrown 2, Essence 1',
            'cost' => '3m;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Decisive-only, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strikes at stress points in a foe\'s armor. On a successful decisive attack, her weapon becomes embedded in her enemy\'s armor, lowering its soak by one point and raising its mobility penalty by one. Unarmored enemies are unaffected unless the Storyteller deems the enemy\'s body super-durable, like an automaton\'s metal body or a tyrant lizard\'s thick scales. Removing the embedded weapon is a Strength 3 feat of strength at difficulty (higher of Essence or Strength) that can be attempted by the target or any of his allies within close range, negating the penalty on success. In Earth Aura, the Exalt can embed multiple weapons into an enemy\'s armor with successive uses of this Charm. Each weapon\'s penalty stacks, maximum (Essence + 1), and requires a separate action to remove'
        ]);
        
        App\Charm::create([
            'name' => 'Blinding Spark Throw',
            'mins' => 'Thrown 3, Essence 1',
            'cost' => '4m;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Decisive-only, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood grinds a nail against her weapon or palm, sending a cascade of sparks into the eyes of an unfortunate foe. This is a difficulty 3 gambit against an enemy out to medium range. Success blinds him for three rounds. He may pay two Initiative to roll (Stamina + Resistance) against difficulty 3 as a miscellaneous action that can\'t be flurried, regaining his eyesight on success. The Dragon-Blood may expend her Fire Aura when she crashes an enemy using any combat Ability to use this Charm against him reflexively'
        ]);
        
        App\Charm::create([
            'name' => 'Venomous Thorn Attack',
            'mins' => 'Thrown 3, Essence 1',
            'cost' => '3m, 1i;',
            'element' => 'Thrown',
            'type' => 'Reflexive',
            'effect' => 'Decisive-only, Wood',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Venom drips from the Dragon-Blood\'s blades. She reflexively poisons her weapon as she makes a decisive attack, even if it lacks the Poisonable tag. This Charm\'s Initiative cost is waived for weapons that have that tag'
        ]);
        
        App\Charm::create([
            'name' => 'Arcing Levinbolt Precision',
            'mins' => 'Thrown 3, Essence 2',
            'cost' => '2m;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Armor-Rupturing Fang ',
            'book' => 'DB???',
            'description' => 'A flash of lightning precedes the Dragon-Blood\'s weapon, tracing the path to her foe. An enemy wearing metal armor, including armor made from the five magical materials, applies its mobility penalty to his soak and Hardness against an attack'
        ]);
        
        App\Charm::create([
            'name' => 'Earth-Shattering Strike',
            'mins' => 'Thrown 3, Essence 2',
            'cost' => '4m;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Armor-Rupturing Fang ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s weapon descends on her foe with the force of a hurled boulder. She makes a decisive attack that shatters the ground beneath her target\'s feet on a hit, creating difficult terrain beneath him'
        ]);
        
        App\Charm::create([
            'name' => 'Invisibly Hidden Chakram Method',
            'mins' => 'Thrown 3, Essence 2',
            'cost' => '2m (1m);',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Air, Balanced, Stackable',
            'duration' => 'Indefinite',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s weapons vanish in a whirl of wind. She banishes a Thrown weapon Elsewhere until she recalls it to her hand by ending this Charm. She may stack this Charm to banish up to (Essence + 1) weapons at a time, paying only one mote for weapons beyond the first. In Air Aura, the Dragon-Blood may banish any number of weapons with a single use of this Charm, committing two motes for the first and one mote for each additional weapon.'
        ]);
        
        App\Charm::create([
            'name' => 'Mela\'s Twin Fangs',
            'mins' => 'Thrown 5, Essence 2',
            'cost' => '4m, 1wp;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Air, Aura, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Invisibly Hidden Chakram Method ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood palms a weapon from Elsewhere as she attacks with another weapon, throwing one in the shadow of the other. To use this Charm, she must have at least one weapon banished with its prerequisite and another readied. She makes two withering attacks against a single enemy — one with the readied weapon, and another with the banished weapon, which she recalls to her hand. She only gains Initiative from the attack that deals the highest damage'
        ]);
        
        App\Charm::create([
            'name' => 'Elusive Zephyr Strike',
            'mins' => 'Thrown 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Decisive-only',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s weapon is guided by unseen winds, changing course in mid-flight to misdirect a foe. She doubles 9s on the attack roll of a distract gambit. In Air Aura, the Dragon-Blood adds her attack roll threshold successes as dice to her Initiative roll'
        ]);
        
        App\Charm::create([
            'name' => 'Smoke Burst Eruption',
            'mins' => 'Thrown 4, Essence 2',
            'cost' => '5m;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Decisive-only, Fire, Mute',
            'duration' => 'Until end of next turn',
            'prerequisite' => 'Blinding Spark Throw ',
            'book' => 'DB???',
            'description' => 'A shockwave of Essence bursts from the DragonBlood\'s weapon, casting up smoke and strewing the battlefield with debris. A successful decisive attack creates a smoke cloud out to short range from the target, providing sufficient concealment to roll Stealth. If the Dragon-Blood or any of her allies makes an unexpected attack against the same enemy from within the smoke, they add a bonus die on both the attack and damage roll. The smoke dissipates once this Charm ends. With a Thrown 5, Essence 5 repurchase, the DragonBlood may pay one Willpower upon landing an attack while in Fire Aura to reflexively roll (Dexterity + Stealth) to establish concealment within the smoke'
        ]);
        
        App\Charm::create([
            'name' => 'Persistent Hornet Attack',
            'mins' => 'Thrown 5, Essence 3',
            'cost' => '5m, 1wp, expend Air Aura;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Aura, Signature (Air), Withering-only',
            'duration' => 'One scene',
            'prerequisite' => 'Mela\'s Twin Fangs ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s weapon takes to the air with a life of its own, pursuing her foes like a murderous metal wasp. She makes a withering attack, but doesn\'t gain any Initiative from it (including Initiative Breaks). Instead, if she hits, that Initiative is transferred to her weapon, which enters battle as a living weapon carried on the wind, orbiting the target at close range. The weapon cannot act until the round after this Charm is used. The only actions it can take are to reflexively move, aim, or attack an enemy at close range. The weapon uses the Dragon-Blood\'s dice pools, but she cannot use Charms or other magic to enhance its actions. The weapon has its own separate Initiative, which benefits from its withering attacks and determines the damage of its decisive attacks. Upon successfully landing a decisive attack, this Charm ends. If it goes a round without aiming or landing an attack, it loses three Initiative. The weapon has Defense and soak (higher of Essence or Wits). It can be targeted with withering attacks or knocked out of the air with a successful disarm gambit, ending this Charm'
        ]);
        
        App\Charm::create([
            'name' => 'Devastating Avalanche Barrage',
            'mins' => 'Thrown 5, Essence 3',
            'cost' => '5m, 4i, 1wp, expend Earth Aura (+1a);',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Aura, Perilous, Signature (Earth), Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Earth-Shattering Strike ',
            'book' => 'DB???',
            'description' => 'Stones, debris, and clods of hard-packed earth rise up into the air around the Dragon-Blood and orbit her weapon as she focuses her Essence, building to an unstoppable landslide of force. She makes a withering attack against a single enemy, but also uses her attack roll as an unblockable withering attack against that foe and all characters within short range of him (including allies) as rock fragments and debris trail her weapon. If there\'s no usable stone present, the Dragon-Blood may expend a level of anima to manifest it instead. After rolling damage normally for the first attack, she rolls (Strength) dice of unsoakable damage against each enemy hit by the second attack roll, although it cannot deal more damage than the first. She gains no Initiative from the second attack, but characters damaged by it are knocked prone. A character crashed by it is buried beneath rubble, and cannot rise from prone until he or another character has cleared it away with a Strength 3 feat of strength at difficulty (higher of Dragon-Blood\'s Essence or Strength). This Charm can only be used once per scene, unless reset by successfully landing a decisive attack from Initiative 15+ while in Earth Aura.'
        ]);
        
        App\Charm::create([
            'name' => 'Exploding Weapon Technique',
            'mins' => 'Thrown 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Aura, Decisive-only, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'Smoke Burst Eruption ',
            'book' => 'DB???',
            'description' => 'The Terrestrial\'s anima pours into her palms as burning flames, wreathing her weapon in an aura of explosive Essence. To use this Charm, the DragonBlood must have Initiative 12+. She makes a decisive attack that detonates on impact, adding (Essence) dice of damage and rolling an additional die of damage for every 9 and 10 on the damage roll. Artifact weapons suffer no damage from being used with this Charm, but most mundane weapons are destroyed. An Essence 5+ repurchase unlocks two additional effects that can be used in conjunction with other Charms. Exploding Armor Strike: When the Dragon-Blooded lands a decisive attack enhanced by this Charm against an enemy whose armor has been weakened by ArmorPiercing Fang (p. 275), she can detonate the embedded weapons for five motes each, adding three bonus dice of damage for each additional explosion. Rain of Falling Stars: When the Dragon-Blooded uses Thousand Razor Wind, she may reflexively activate Exploding Weapon Technique as a Balanced Charm without needing to be in Fire Aura. Instead of this Charm\'s usual effect, the first attack that hits detonates, adding three dice of decisive damage. She may detonate any subsequent attacks that hit for five motes each, with the same effect'
        ]);
        
        App\Charm::create([
            'name' => 'Fatal Riptide Strike',
            'mins' => 'Thrown 5, Essence 3',
            'cost' => '5m;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Mute, Signature (Water), Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s anima limns her hands and weaponry with aqueous Essence, allowing them to move through water as though it were air. She ignores penalties for throwing a weapon from or through water or similar liquids. Surprise attacks she makes while underwater deal (Essence) additional dice of damage. Once per scene, when the Dragon-Blood makes an unexpected attack against an enemy with lower Initiative while underwater, she may pay one Willpower and expend her Water Aura to convert it to an ambush (Exalted, p. 203)'
        ]);
        
        App\Charm::create([
            'name' => 'Hundred Thorns Blossom',
            'mins' => 'Thrown 5, Essence 3',
            'cost' => '5m, 3i, 1wp;',
            'element' => 'Thrown',
            'type' => 'Reflexive',
            'effect' => 'Aura, Decisive-only, Signature (Wood)',
            'duration' => 'Instant',
            'prerequisite' => 'Elusive Zephyr Strike ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood draws a foe off guard with lithe, suggestive motions, taking advantage of his wavering attention to unleash a deadly barrage of needles or other concealed weapons from her hair, fingertips, or the back of her throat. On her turn, she may force an enemy with lower Initiative within short range to roll (Perception + Awareness) against her Guile. If he fails, she reflexively makes an unexpected decisive attack against him with (Manipulation + successes by which the enemy failed) dice of lethal damage, ignoring Hardness. This doesn\'t include her Initiative or reset her to base. This Charm can only be used once per scene, unless reset by successfully establishing concealment against all enemies with a Stealth roll'
        ]);
        
        App\Charm::create([
            'name' => 'Stone Needle Strike',
            'mins' => 'Thrown 4, Essence 3',
            'cost' => '3m, 2i;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Decisive-only, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Earth-Shattering Strike ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s wrath leaves her foes pinned to the earth. An enemy damaged by her decisive attack loses his movement action on his next turn, and is impaled by her weapon, requiring him or an ally to succeed on a Strength 3 feat of strength at difficulty (higher of the Dragon-Blood\'s Essence or Strength) before he can take any movement actions.'
        ]);
        
        App\Charm::create([
            'name' => 'Winter Fang Attack',
            'mins' => 'Thrown 4, Essence 3',
            'cost' => '4m;',
            'element' => 'Thrown',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced, Decisive-only',
            'duration' => 'Instant',
            'prerequisite' => 'Elusive Zephyr Strike ',
            'book' => 'DB???',
            'description' => 'The Terrestrial\'s weapon is chilled by her deadly intent, numbing flesh as it strikes. This Charm can supplement a decisive attack or a gambit. If the attack deals damage or the gambit succeeds, the enemy loses Initiative equal to the 10s on the damage roll or the Initiative roll, maximum (Essence). The Dragon-Blood doesn\'t gain this Initiative'
        ]);
        
        App\Charm::create([
            'name' => 'Thousand Razor Wind',
            'mins' => 'Thrown 5, Essence 3',
            'cost' => '1m, 1wp, expend Air Aura;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Air, Aura, Decisive-only',
            'duration' => 'Instant',
            'prerequisite' => 'Mela\'s Twin Fangs ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood unleashes her gathered fury in a storm of deadly steel. She instantly recalls every weapon she\'s banished with Invisibly Hidden Chakram Method and sends them flying towards a single foe. She makes a decisive attack with her readied weapon (if any) and with each recalled weapon, making a separate attack roll for each weapon. She divides her Initiative evenly among all attacks, rounded down, to determine their damage, ignoring Hardness. She doesn\'t reset to base Initiative until she\'s completed all attacks'
        ]);
        
        App\Charm::create([
            'name' => 'Whirlwind Shield Technique',
            'mins' => 'Thrown 5, Essence 4',
            'cost' => '7m, 1wp, expend Air Aura;',
            'element' => 'Thrown',
            'type' => 'Simple',
            'effect' => 'Air, Aura',
            'duration' => 'One scene',
            'prerequisite' => 'Thousand Razor Wind ',
            'book' => 'DB???',
            'description' => 'Whirling currents of wind swirl around the Exalt, catching her weapons as she tosses them into the air to create a vortex of deadly steel and whatever rocks, branches, or other detritus are caught up in the wind. She rolls the whirlwind into battle with (Wits + Thrown). It has a Parry rating equal to half the total successes, rounded up, on its Join Battle roll (maximum 5), and its only action is to protect the Exalt with defend other (Exalted, p. 196), moving to accompany her wherever she goes. It gains one Initiative whenever it successfully defends against an attack. The whirlwind shield has soak (Essence + Dexterity + Stamina). Withering attacks against the whirlwind shield reduce its Initiative normally, while decisive attacks strip two points of Initiative for each level of damage, although this isn\'t awarded to the attacker. If the whirlwind is crashed, this Charm ends. This Charm can only be used once per scene.'
        ]);
        
        App\Charm::create([
            'name' => 'Vengeful Gust Counterstrike',
            'mins' => 'Thrown 5, Essence 4',
            'cost' => '3m, 1wp, expend Air Aura;',
            'element' => 'Thrown',
            'type' => 'Reflexive',
            'effect' => 'Air, Aura, Clash, Decisive-only',
            'duration' => 'Instant',
            'prerequisite' => 'Whirlwind Shield Technique ',
            'book' => 'DB???',
            'description' => 'The swirling winds surrounding the Dragon-Blood spin with deadly force, deflecting blades and arrows while gouging deep cuts along her foes. While Whirlwind Shield Technique is active, the Dragon-Blood may reflexively clash an attack from out to short range with a decisive attack, with damage equal to the whirlwind\'s Initiative. This doesn\'t count as her combat action or reset her to base Initiative. Success resets the whirlwind to three Initiative; on a failure, the clashed attack strikes the whirlwind instead of the Exalt'
        ]);
        
        App\Charm::create([
            'name' => 'Wind Armor Technique',
            'mins' => 'Thrown 5, Essence 4',
            'cost' => '—;',
            'element' => 'Thrown',
            'type' => 'Permanent',
            'effect' => 'Air',
            'duration' => 'Permanent',
            'prerequisite' => 'Vengeful Gust Counterstrike ',
            'book' => 'DB???',
            'description' => 'The Exalt has refined her control of the Whirlwind Shield Technique to create invisible armor out of swirling air. While that Charm is active, she gains Hardness equal to the whirlwind\'s Initiative. If the whirlwind\'s Parry blocks an attack from close range, the attacker suffers one die of lethal damage, ignoring Hardness. This Charm is incompatible with armor'
        ]);
        
        
        
        App\Charm::create([
            'name' => 'Tactics Mean Everything',
            'mins' => 'War 1, Essence 1',
            'cost' => '1m per die;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth, Excellency',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'Wise strategy is the foundation upon which victories are built. The Dragon-Blood may add bonus dice to a War roll for one mote each, and rerolls 6s until they cease to appear'
        ]);
        
        App\Charm::create([
            'name' => 'Excellence of the Dutiful General',
            'mins' => 'War 2, Essence 1',
            'cost' => '5m;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Earth',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strengthens her judgment and strategic insight with the steadiness and calm of the earth, finding the path that leads to victory. She converts up to (Essence) situational bonus dice on a Strategic Maneuver roll (Exalted, p. 212) to non-Charm successes'
        ]);
        
        App\Charm::create([
            'name' => 'Tireless Footfalls Cadence',
            'mins' => 'War 3, Essence 1',
            'cost' => '3m;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Earth',
            'duration' => 'Instant',
            'prerequisite' => 'Excellence of the Dutiful General ',
            'book' => 'DB???',
            'description' => 'Earth Essence sustains the Dragon-Blood\'s soldiers as they march in steady, rhythmic unison. She ignores penalties from troop fatigue or movement through strenuous environments on a Strategic Maneuver roll. If she defeats the opposing general on the roll and implements her stratagem, allied battle groups ignore fatigue-based penalties for the duration of the fight'
        ]);
        
        App\Charm::create([
            'name' => 'Roaring Dragon Officer',
            'mins' => 'War 2, Essence 1',
            'cost' => '3m;',
            'element' => 'War',
            'type' => 'Reflexive',
            'effect' => 'Balanced, Earth, Perilous',
            'duration' => 'One turn',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s voice echoes across the battlefield as though it were a canyon. She may place a command action in a flurry, although not with an attack. In Earth Aura, the penalty on both flurried actions is reduced by one point, and the Dragon-Blood\'s Defense isn\'t penalized. '
        ]);
        
        App\Charm::create([
            'name' => 'Blazing Courageous Swordsman Inspiration',
            'mins' => 'War 3, Essence 1',
            'cost' => '2m;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Balanced, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Roaring Dragon Officer ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood leads from the front, a blazing icon that ignites her soldiers\' hearts. She rolls an additional non-Charm die for each 10 that appears on a Charismaor Appearance-based command action to give orders. In Fire Aura, bonus dice granted by the Dragon-Blood\'s command also add to the battle group\'s Willpower rolls to resist being routed this round (Exalted, p. 209).'
        ]);
        
        App\Charm::create([
            'name' => 'Army-To-Mob Assault',
            'mins' => 'War 3, Essence 2',
            'cost' => '3m, 2i;',
            'element' => 'War',
            'type' => 'Reflexive',
            'effect' => 'Perilous, Water, Withering-only',
            'duration' => 'Instant',
            'prerequisite' => 'Blazing Courageous Swordsman Inspiration ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood overwhelms enemy forces with tactics designed to spread confusion and chaos. When an allied battle group attacks an enemy battle group under the Dragon-Blood\'s orders, she converts (Manipulation) bonus dice granted to the battle group\'s attack by her command to automatic successes. If this empties the enemy battle group\'s Magnitude, add +1 to the difficulty of its roll to resist rout'
        ]);
        
        App\Charm::create([
            'name' => 'Choking Weeds Tactic',
            'mins' => 'War 4, Essence 2',
            'cost' => '1m, 1wp;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Wood',
            'duration' => 'Instant',
            'prerequisite' => 'Army-To-Mob Assault ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood strangles an enemy army with guerrilla raids on supply lines and base camps, forcing them to fight on empty stomachs while her soldiers enjoy the windfall of stolen supplies. When she rolls a Strategic Maneuver, the threshold of the opposing general\'s stratagem is increased by 1. If the Dragon-Blood successfully enacts her stratagem, enemy battle groups suffer a −3 penalty on their Join Battle rolls in the affected fight'
        ]);
        
        App\Charm::create([
            'name' => 'Changing Winds Cunning',
            'mins' => 'War 4, Essence 2',
            'cost' => '3m;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Air, Balanced',
            'duration' => 'Instant',
            'prerequisite' => 'Tireless Footfalls Cadence ',
            'book' => 'DB???',
            'description' => 'When the wind of battle reverses direction, the Terrestrial adapts her strategy at a moment\'s notice. She rerolls (Essence) non-1 failed dice on a Strategic Maneuver roll. A War 5, Essence 5 repurchase allows the DragonBlood to spend one Willpower after rolling her maneuver, but before rerolling failures, to change her chosen stratagem'
        ]);
        
        App\Charm::create([
            'name' => 'Storm-Calling Strategos',
            'mins' => 'War 5, Essence 3',
            'cost' => '10m, 1wp (5i);',
            'element' => 'War',
            'type' => 'Simple',
            'effect' => 'Signature (Air)',
            'duration' => 'Until stratagem is completed',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood commands the skies themselves, calling down bolts of lightning to smite her enemies and darkening the horizon with storm clouds that precede her armies. This Charm creates a unique magical stratagem with threshold 3 to manipulate weather, forcing the enemy to contend with storms or similarly perilous atmospheric conditions. Once the Dragon-Blood Joins Battle against the opposing army, the harsh weather culminates in a thunderstorm, gale-force wind, heavy snowfall, or other extreme weather. This imposes a −3 environmental penalty on all physical actions that enemy battle groups take in combat. Non–battle group enemies may suffer a −1 environmental penalty on appropriate actions. The weather doesn\'t impede the Dragon-Blood or her allies. At the beginning of each round, if the Dragon-Blood has 12+ Initiative, she may pay five Initiative to reflexively create an instantaneous environmental hazard targeting a single battle group — a bolt of lightning, an avalanche, or similar dangers. This hazard has difficulty (higher of Essence or Intelligence) and Damage (Willpower)L. If this deals enough Magnitude damage to reduce the battle group to Size 0, the Dragon-Blood gains one point of temporary Willpower. This Charm can only be used once per story, unless reset by achieving a cumulative total bonus of +4 on a Strategic Maneuver roll from any combination of non-magical sources'
        ]);
        
        App\Charm::create([
            'name' => 'Ramparts of Obedient Earth',
            'mins' => 'War 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Signature (Earth)',
            'duration' => 'One scene',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The battlefield is clay to be sculpted in accordance with the tactical genius of the Terrestrial general. To use this Charm, the Dragon-Blood must be leading her soldiers. She may roll to Join Battle with (Intelligence + War), and receives a number of points equal to her Join Battle successes that she may spend to reshape the battlefield: Sinkhole (1-5 points): The Dragon-Blood tears open a sinkhole between the ranks of an enemy army or sculpts stone into a constricting obstruction. The ground out to close range from an enemy battle group becomes difficult terrain, and the battle group acts last on the first turn regardless of its place in Initiative order. The point cost is the Size of the battle group targeted. Barricade (4 point): The Dragon-Blood wrenches up great masses of earth and compresses them into barriers or walls, instantly enacting a Fortifications stratagem (Exalted, p. 212). Sapping (7 points): If an enemy general has successfully employed a Fortifications stratagem, the DragonBlood may negate its benefits by tunneling through earth and stone, or otherwise creating ways to bypass the fortifications. The Dragon-Blood\'s forces don\'t treat the terrain as difficult, and may reflexively advance one range band towards the enemy forces. The Storyteller may also adjudicate additional advantages depending on the context of the battlefield. Reshape Battlefield (10 points): If the Dragon-Blood has successfully enacted a Strategic Placement stratagem (Exalted, p. 212), she may resculpt the battlefield to her specifications, preparing it before the battle and ensuring her enemy will fight her there. She might prepare rows of trenches and fortified towers of earth for her own forces, while forcing her enemy to traverse pits filled with stone spikes, narrow stone tunnels, and similar obstacles. The Storyteller adjudicates the specific effects of these creations. She cannot directly harm foes with the moving stone, although she can create all types of traps and dangers.'
        ]);
        
        App\Charm::create([
            'name' => 'Deadly Wildfire Legion',
            'mins' => 'War 5, Essence 3',
            'cost' => '5m, 1wp, expend Fire Aura;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Aura, Signature (Fire)',
            'duration' => 'Instant',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'A raging nimbus of flames surrounds the DragonBlood\'s forces, manifesting her martial prowess as she urges them onward. Deadly flames dance along the edges of their swords and the points of their spears as they charge. She adds (Essence) non-Charm dice on a command action to give orders. In addition to adding to the battle group\'s attack roll, this also adds one die to its damage roll for every two successes. The battle group may immediately take its turn for the round to complete the orders on her tick if it hasn\'t already acted this round, regardless of its place in Initiative order. This Charm can only be used once per scene, unless reset when an allied battle group attacks under the Dragon-Blood\'s orders and deals enough damage to incapacitate a significant foe, or successfully routs an enemy battle group by depleting its Magnitude.'
        ]);
        
        App\Charm::create([
            'name' => 'Fog-of-War Misdirection',
            'mins' => 'War 5, Essence 3',
            'cost' => '6m, 1wp;',
            'element' => 'War',
            'type' => 'Simple',
            'effect' => 'Mute, Signature (Water)',
            'duration' => 'Until stratagem is completed',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blooded general lures her enemies into battle within the depths of an eerie fogbank, trapping them within a prison of water. This Charm creates a unique magical stratagem with threshold 3 that shrouds the battlefield with a heavy mist, forcing enemies to fight against the confusion and disarray amid their own ranks before they can even contend with her forces. When the Dragon-Blood rolls Join Battle after successfully enacting this stratagem, she designates a point on the battlefield to be the center of the fog. The cloud extends out to long range from this point. The fog imposes a −2 penalty on all affected vision-based rolls and on any attacks made from medium range or beyond. Enemy battle groups caught in the fog take a −1 penalty on rolls to resist rout. A character that wishes to target them with a command action must pay one Initiative to do so, and takes a −2 penalty on the roll. If a battle group suffers dissolution after being routed in the mist, the Dragon-Blood gains Initiative equal to (its Size/2, rounded up). The Dragon-Blood cannot gain more than (Essence) Initiative in a single round this way. Normal winds and weather conditions won\'t disperse the mist, but magically created wind or weather-manipulating magic, including the intervention of elementals, can do so. This Charm can only be used once per story, unless the Dragon-Blooded resets it by roleplaying a scene in which she gains a concrete advantage over an enemy that adds dice to a Strategic Maneuver roll (Exalted, p. 212) through deception, subterfuge, or treachery'
        ]);
        
        App\Charm::create([
            'name' => 'Hidden Thorn Treachery',
            'mins' => 'War 5, Essence 3',
            'cost' => '5m, 1wp;',
            'element' => 'War',
            'type' => 'Simple',
            'effect' => 'Signature (Wood)',
            'duration' => 'Until stratagem is completed',
            'prerequisite' => 'None',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood scatters her spies like dandelion seeds on the wind, letting them grow deep roots of trust amid the ranks of her enemy before she comes to reap the harvest. This Charm creates a unique magical stratagem with threshold 3 to infiltrate an enemy\'s ranks with a traitor in combat. To use it, the Dragon-Blood must already have at least a +1 bonus to her Strategic Maneuver roll from spies or traitors in the enemy\'s ranks. Success lets her reflexively reveal the presence of her loyal double agent within a battle group at any point during the combat the stratagem applies to. The Storyteller may rule some betrayals impossible, or require a stunt in which the Dragon-Blood describes how the infiltration occurred. Battle groups with Might 2+ or perfect morale are immune to infiltration via this stratagem. Once she\'s declared the betrayal, the battle group suffers automatic rout, as its most notable or highest-ranking member is revealed to be loyal to the Dragon-Blood. If this character is narratively significant on his own and his defection would defy suspension of disbelief, the Storyteller may declare that another member is the traitor instead. If an opposing commander is able to successfully rally the battle group, he preserves a single dot of that battle group\'s Size for every two successes on the roll. The rest are subtracted from the group and rolled into battle as a splinter faction loyal to the traitor. If the battle group isn\'t rallied, then the entire force goes over with the traitor, reforming on its next turn. '
        ]);
        
        App\Charm::create([
            'name' => 'Enfolded in the Dragon\'s Wings',
            'mins' => 'War 4, Essence 3',
            'cost' => '3m, 1i;',
            'element' => 'War',
            'type' => 'Reflexive',
            'effect' => 'Earth, Perilous, Uniform',
            'duration' => 'Instant',
            'prerequisite' => 'Tireless Footfalls Cadence ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood\'s soldiers brace themselves to hold the line, fortified with the strength of mountains by her command. When an allied battle group within short range of the Dragon-Blood is attacked, she may reflexively roll a special command action with ([Charisma, Appearance, or Intelligence] + War). Every two successes on her roll add +1 to the battle group\'s Defense and soak against the attack. This Charm can only be used once per scene unless reset by successfully rallying or rallying for numbers. At Essence 5+, the Dragon-Blooded can extend this Charm\'s range to medium for an additional two motes.'
        ]);
        
        App\Charm::create([
            'name' => 'Phantom Fire-Warrior Horde',
            'mins' => 'War 5, Essence 3',
            'cost' => '5m, 1a;',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Blazing Courageous Swordsman Inspiration ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood draws on the subtler strengths of flame, overwhelming enemy forces with the appearance of superior force. Her anima banner disperses among the ranks of her soldiers, creating illusionary warriors of smoke to fill in any holes in their ranks. When she successfully rallies for numbers, she adds (Essence/2, rounded up) to the Magnitude restored. The Dragon-Blood also treats the results of her roll as a threaten action against all battle groups that see the fire-warriors come into existence. Battle groups whose Resolve is beaten will retreat from her army, moving away from it each turn until an enemy commander makes a successful command roll to give them other orders'
        ]);
        
        App\Charm::create([
            'name' => 'Indomitable Flame of Valor',
            'mins' => 'War 5, Essence 3',
            'cost' => '1m (+1wp);',
            'element' => 'War',
            'type' => 'Supplemental',
            'effect' => 'Aura, Fire',
            'duration' => 'Instant',
            'prerequisite' => 'Phantom Fire-Warrior Horde ',
            'book' => 'DB???',
            'description' => 'The Dragon-Blood ignites incredible courage in the hearts of her soldiers with the burning Essence of her exhortations, showing her army what it is to have a dragon\'s valor. She doubles 9s on a roll to rally or rally for numbers. If the battle group has elite Drill, she can pay a one-Willpower surcharge to grant it perfect morale (Exalted, p. 210) for one round on a successful roll. At Essence 5, the Dragon-Blooded may pay 4 Initiative to extend the duration of the perfect morale to one scene'
        ]);
        
        App\Charm::create([
            'name' => 'Blessed Dragon Champion',
            'mins' => 'War 5, Essence 4',
            'cost' => '5m, 1wp;',
            'element' => 'War',
            'type' => 'Reflexive',
            'effect' => 'Aura, Earth',
            'duration' => 'One scene',
            'prerequisite' => 'Enfolded in the Dragon\'s Wings ',
            'book' => 'DB???',
            'description' => 'When the Dragon-Blood steps forward to lead her forces into battle, she never stands alone. To use this Charm, she must be leading her soldiers under a successfully enacted stratagem. She doubles 9s on all War rolls, and gains +2 Defense against battle groups. She adds non-Charm dice equal to (the Size of the largest battle group under her command) on all attacks she makes against enemy battle groups.'
        ]);

    }
}
