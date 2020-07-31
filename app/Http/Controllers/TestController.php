<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function getMessage(Request $request)
    {
        $data = $request->validate([
            'message' => "required|string|min:10"
        ]);

        $cyber_words =
            [
                'amateur', 'animal', 'anorak', 'ape', 'ape covered in human fl', 'apefucker', 'arse',
                'arse-licker', 'arsebreath', 'arsecunt', 'arseface', 'arsehole', 'ass', 'ass-face',
                'ass-kisser', 'ass-nugget', 'ass clown', 'assaholic', 'asscunt', 'assface', 'asshat',
                'asshole', 'assmonkey', 'assmunch', 'asswagon', 'assweed', 'asswipe', 'aunt fucker',
                'baby', 'backwoodsman', 'badass', 'badgerfucker', 'bag of dicks', 'bandit', 'bangsat',
                'barbarian', 'bastard', 'beast', 'beetlehead', 'beginner', 'beldame', 'bell-end', 'berk',
                'bespawler', 'bimbo', 'birdbrain', 'bitch', 'bitch ass', 'bitch ass nigga', 'bitchboy',
                'bitchface', 'bitchwad', 'bitchzilla', 'biznatch', 'blackguard', 'blaggard', 'blockhead',
                'blubber gut', 'bluntie', 'bogeyman', 'bonehead', 'booby', 'boomer', 'bootlicker', 'boozer',
                'boyfucker', 'bozo', 'brotherfucker', 'bruh', 'buffoon', 'bugger', 'bum', 'bum-fucker',
                'bum chum', 'burden', 'butt sniffer', 'buttfucker', 'butthead', 'butthole', 'buttlicker',
                'caveman', 'cell scaling network bai', 'chauvinist', 'chav', 'cheater', 'chicken',
                'chickenfucker', 'childfucker', 'chilli boy', 'chump', 'churl', 'clown', 'cock',
                'cockboy', 'cockfucker', 'cockhead', 'cockholster', 'cockmaster', 'cockroach',
                'cocksucker', 'cockwomble', 'con man', 'con merchant', 'cougar', 'country bumpki',
                'cousinfucker', 'cow', 'coward', 'crack whore', 'crackhead', 'craphole',
                'creep', 'cretin', 'crook', 'cuckold', 'cum-licker', 'cumstain', 'cunt',
                'cunt fart', 'cuntass', 'cuntbitch', 'cuntlicker', 'cuntsucker', 'cuntzilla',
                'daughterfucker', 'deadhead', 'default', 'degenerate', 'der-brain', 'desperado',
                'devil', 'dick', 'dick-licker', 'dicklicker', 'dick mouth', 'dick sniffer',
                'dick sniffer', 'dick weed', 'dickbag', 'dickbreath', 'dickface', 'dickfucker',
                'dickhead', 'dicklicker', 'dicktard', 'dimp damp', 'dimwit', 'ding-head', 'dinosaur',
                'dipfuck', 'dirtbag', 'dirthead', 'dodo', 'dog', 'dogfucker', 'dolt', 'donkey',
                'donkeyfucker', 'doofus', 'dope', 'dotterel', 'douche', 'douche bag', 'douche canoe',
                'douche nozzle', 'douchefag', 'douchelord', 'dracula', 'dreamer', 'drunkard',
                'duckfucker', 'dumbass', 'dumbbell', 'dumbo', 'dummy', 'dunce', 'duncebucket',
                'durp', 'e', 'earthworm', 'edgelord', 'egghead', 'egotist', 'envirotard',
                'eunuch', 'faggot', 'fagtard', 'fagtits', 'farmer', 'fart', 'fatfuck',
                'fatso', 'fellow', 'fibber', 'fink', 'fish', 'fishwife', 'fixer', 'flake', 'fool',
                'freak', 'fruitcake', 'fuck', 'fuck noggin', 'fuck nugget', 'fuckbait', 'fuckbucket', 'fucker', 'fuckhead',
                'fucking potato', 'fucklord', 'fucktard', 'fucktoy', 'fuckweasel', 'fugly', 'gawk', 'geebag', 'git',
                'gobshite', 'gold digger', 'goof', 'goon', 'goose', 'gorilla', 'greeniac', 'grouch', 'grumpy', 'headass',
                'helldog', 'hilding', 'hillbilly', 'hippie', 'ho', 'hoe', 'homo', 'homosapien', 'hooligan', 'hooplehead',
                "horse's ass", "horse's necktie", 'horsefucker', 'hosebag', 'hypocrite', 'idiot', 'idiotist', 'ignoramus',
                'imbecile', 'inbred', 'intercourser', 'jackass', 'jackwagon', 'jelly', 'jerk', 'joker', 'junkie', 'keyboard warrio',
                'kimi', 'lamebrain', 'landwhale', 'lard ass', 'lard face', 'liar', 'libtard', 'loser', 'low-life', 'lunatic',
                'lunkhead', 'lurdane', 'mackerel', 'madman', 'mamzer', 'manu', 'meanie', 'mega faggot', 'megabitch', 'megadouche',
                'minx', 'missing link', 'mongoose', 'monkey', 'monster', 'moron', 'motherfucker', 'mouthbreather',
                'mr. anger', 'mr. obsessed', 'mr. struggle', 'mr. talk', 'mucky pup', 'muppet', 'mutant', 'mutt',
                "ne'er-do-well", 'neanderthal', 'neckbeard', 'nerd', 'nerf herder', 'nimrod', 'nincompoop', 'ninny',
                'nitwit', 'nobody', 'nonce', 'noob', 'noodle', 'numbnuts', 'numbskull', 'numskull', 'oaf', 'oddball',
                'ogre', 'outlaw', 'oxygen thief', 'pack', 'pain in the ass', 'pariah', 'peasant', 'pencil dick',
                'penis face', 'pervert', 'pig', 'pigfucker', 'piggy-wiggy', 'pillock', 'pinhead', 'pirate', 'pissface', 'porno freak', 'prick', 'pseudo-intellect', 'pube flosser', 'puppet', 'pussyfucker', 'quack', 'quat',
                'queer', 'queer bait', 'querulant', 'rat', 'rat-fink', 'ratcatcher', 'ratfink', 'redneck', 'reject', 'retard', 'riff-raff', 'roaster', 'robot', 'rowdy', 'rudesby', 'ruffian', 'sadist', 'saprophyte',
                'sausage-masseu', 'scumbag', 'scumhead', 'scumlord', 'scuzzbag', 'sewer rat', 'shark', 'sheepfucker', 'sheepshagger', 'shill', 'shit-eater', 'shit-for-brains', 'shit stain', 'shitass', 'shitbucket',
                'shitehawk', 'shithead', 'shitneck', 'shitnugget', 'shitsack', 'shitter', 'shitweasel', 'shyster', 'simpleton', 'skullfucker', 'skunk', 'skunkfucker', 'slag', 'slave', 'sleeze', 'sleeze bag', 'slob',
                'slutfucker', 'snail', 'snake', 'snob', 'snot', 'snotball', 'snowflake', 'son of a bitch', 'son of a mother', 'son of a whore', 'sphincter', 'square', 'stinker', 'stinkhole', 'swindler', 'swine',
                'sycophant', 'teuchtar', 'thief', 'thundercunt', 'titbag', 'toad', 'tree hugger', 'troglodyte', 'troll', 'trollface', 'trolltard', 'turd', 'turdball', 'twat', 'twatwaffle', 'twerp', 'twit', 'twunt',
                'ugly ass', 'unclefucker', 'vagina cleaner', 'vampire', 'vandal', 'varmint', 'vermin', 'wacko', 'wallflower', 'wank stain', 'wanker', 'weeze bag', 'weirdo', 'whore', 'whorefucker', 'whoreson', 'windfucker',
                'windsucker', 'wino', 'witch', 'womanizer', 'worm', 'wretch', 'xenophobe', 'yahoo', 'yes-man', 'yiffer', 'zoomer', 'zitface', 'zounderkite', 'abydocomist', 'bedswerver', 'bespawler', 'cumberwor', 'dalcop',
                'dew-beater', ' dorbel', 'drate-poke', 'driggle-dr', 'fopdoodle', 'fustylugs', ' fustilarian', 'gillie-wet-', 'gnashgab', 'gobermou', ' gowpenfu', ' klazomani', ' leasing-mo', 'loiter-sack', 'lubberwor',
                'muck-spou', 'mumblecr', 'quisby', 'raggabras', 'rakefire', 'roiderban', 'saddle-go', 'scobberlo', 'skelpie-lim', 'smell-feas', 'smellfung', 'snoutband', 'sorner', 'stampcrab', 'stymphalis', 'tallowcat',
                'triptaker', ' wandough', 'ass head', 'child fucker', 'christ on a crack', 'hole', 'effing', 'frigger', 'horse shit', 'black nigga', 'negro', 'bitch ass nigger', 'son of a mother', 'son of a whore',
                'get stuffed', 'bugger me', 'root', 'fair suck of the', 'bloody oath', 'twat', 'wanker', 'shag', 'dunderhead', 'rubbish', 'crikey', 'choad', 'bugger', 'bloody hell', 'bollocks', 'damn', 'damn', 'bitch',
                'bastard', 'pussy', 'dumb fuck', 'son of a bitch', 'asshole', 'dick head', 'piss off', 'fuck off', 'shit head', 'fuck you', 'fuck', 'prick', 'bellend', 'ass', 'cunt', 'balls', 'crap', 'piece of shit',
                'dumb ass', 'fecker', 'witch', 'dick head', 'aiteam', 'go to hell', 'kiss my ass', 'shit', 'salope', 'mother fucking', 'fucked by a fish', 'putto', 'verga', 'dick', 'tits', 'asshole', 'cock sucker',
                'ass face', 'shit head', 'ass fuck', 'bite me', 'piece of crap', 'go fuck yourself', 'ass crack', 'holy shit', 'suck it', 'little bitch', 'tortoise egg', 'mixed egg', 'dog fart', 'got', 'slut',
                'shit head', 'ugly thug', 'die', 'idiot', 'sob', 'crazy bitch', 'dumb', 'weirdo', 'neggar', 'ass clown', 'ass badger', 'bitch tits', 'dick weed', 'tit face', 'cock nose', 'shit head', 'fuck trumpet', 'knob head', 'shit bag', 'piss flaps', 'cumbabble', 'weak ass', 'winp', 'your mother', 'stupid', 'shoot', 'shoot', 'pain in the ass', 'lame', 'jerk', 'retard', 'fool', 'loser', 'bimbo', 'jock', 'ginger', 'tattletale', 'dick face', 'ass head', 'jizzcock', 'boabby', 'cumdumpster', 'twatwaffle', 'thundercunt', 'shitpouch', 'pish', 'nonce', 'pisskidney', 'cumwipe', 'knob jockey', 'cunt puddle', 'dick weasel', 'quim', 'bawbag', 'fuckwit', 'toss pot', 'cockwomble', 'twatface', 'cack', 'fucknegget', 'margot', 'knobbed', 'fuckbucket', 'pillock', 'fuck face', 'shitmagnet', 'bumhole', 'shite', 'scrote', 'cuntflaps', 'tosser', 'flange', 'bugger', 'slag', 'assbastard', 'clunge', 'dick fucker', 'hooker', 'bitch striper', 'fannyflaps', 'wankface', 'shit house', 'gobshit', 'todger', 'cock', 'cock sucker', 'douchecanoe', 'nutsucker', 'gold digger', 'ass wipe', 'choad', 'clusterfucker', 'cockburger', 'ass clown', 'fuck stick', 'pecker head', 'shit cunt',
                'ass kisser', 'smeghead', 'fuvkshitter', 'shit spitter', 'bollock face', 'shit nubbin', 'wingnut', 'fud', 'whalluper', 'dick cheese', 'buttmunch', 'shitlicker', 'bunder', 'ass gobblin', 'dick bag', 'arse butter', 'amateur', 'animal', 'anorak', 'ape', 'ape covered in h', 'apefucker', 'arse', 'arse-licker', 'arsebreath', 'arsecunt', 'arseface', 'arsehole', 'ass', 'ass-face', 'ass-kisser', 'ass-nugget', 'ass clown', 'assaholic', 'asscunt', 'assface', 'asshat', 'asshole', 'assmonkey', 'assmunch', 'asswagon', 'assweed', 'asswipe', 'aunt fucker', 'baby', 'backwoodsman', 'badass', 'badgerfucker', 'bag of dicks', 'bandit', 'bangsat', 'barbarian', 'bastard', 'beast', 'beetlehead', 'beginner', 'beldame', 'bell-end', 'berk', 'bespawler', 'bimbo', 'birdbrain', 'bitch', 'bitch ass', 'bitch ass nigga', 'bitchboy', 'bitchface', 'bitchwad', 'bitchzilla', 'biznatch', 'blackguard', 'blaggard', 'blockhead', 'blubber gut', 'bluntie', 'bogeyman', 'bonehead', 'booby', 'boomer', 'bootlicker', 'boozer', 'boyfucker', 'bozo', 'brotherfucker', 'bruh', 'buffoon', 'bugger', 'bum', 'bum-fucker', 'bum chum', 'burden', 'butt sniffer', 'buttfucker', 'butthead', 'butthole', 'buttlicker', 'caveman', 'cell scaling net', 'chauvinist', 'chav', 'cheater',
                'chicken', 'chickenfucker', 'childfucker', 'chilli boy', 'chump', 'churl', 'clown', 'cock', 'cockboy', 'cockfucker', 'cockhead', 'cockholster', 'cockmaster', 'cockroach', 'cocksucker', 'cockwomble', 'con man', 'con merchant', 'cougar', 'country bumpki', 'cousinfucker', 'cow', 'coward', 'crack whore', 'crackhead',
                'craphole', 'creep', 'cretin', 'crook', 'cuckold', 'cum-licker', 'cumstain', 'cunt', 'cunt fart', 'cuntass', 'cuntbitch', 'cuntlicker', 'cuntsucker', 'cuntzilla', 'daughterfucker', 'deadhead',
                'default', 'degenerate', 'der-brain', 'desperado', 'devil', 'dick', 'dick-licker', 'dicklicker', 'dick mouth', 'dick sniffer', 'dick sniffer', 'dick weed', 'dickbag', 'dickbreath', 'dickface', 'dickfucker', 'dickhead', 'dicklicker', 'dicktard', 'dimp damp', 'dimwit', 'ding-head', 'dinosaur', 'dipfuck', 'dirtbag', 'dirthead', 'dodo', 'dog', 'dogfucker', 'dolt', 'donkey', 'donkeyfucker', 'doofus', 'dope', 'dotterel', 'douche', 'douche bag', 'douche canoe', 'douche nozzle', 'douchefag', 'douchelord', 'dracula', 'dreamer', 'drunkard', 'duckfucker', 'dumbass', 'dumbbell', 'dumbo', 'dummy', 'dunce', 'duncebucket', 'durp', 'e', 'earthworm', 'edgelord', 'egghead', 'egotist', 'envirotard', 'eunuch', 'faggot', 'fagtard', 'fagtits', 'farmer', 'fart', 'fatfuck', 'fatso', 'fellow', 'fibber', 'fink', 'fish', 'fishwife', 'fixer', 'flake', 'fool', 'freak', 'fruitcake', 'fuck', 'fuck noggin', 'fuck nugget', 'fuckbait', 'fuckbucket',
                'fucker', 'fuckhead', 'fucking potato', 'fucklord', 'fucktard', 'fucktoy', 'fuckweasel', 'fugly', 'gawk', 'geebag', 'git', 'gobshite', 'gold digger', 'goof', 'goon', 'goose', 'gorilla', 'greeniac', 'grouch', 'grumpy', 'headass', 'helldog', 'hilding', 'hillbilly', 'hippie', 'ho', 'hoe', 'homo', 'homosapien', 'hooligan', 'hooplehead', "horse's ass", "horse's necktie", 'horsefucker', 'hosebag', 'hypocrite', 'idiot', 'idiotist', 'ignoramus', 'imbecile', 'inbred', 'intercourser', 'jackass', 'jackwagon', 'jelly', 'jerk', 'joker', 'junkie', 'keyboard warrio', 'kimi', 'lamebrain', 'landwhale', 'lard ass', 'lard face', 'liar', 'libtard', 'loser', 'low-life', 'lunatic', 'lunkhead', 'lurdane', 'mackerel', 'madman', 'mamzer', 'manu', 'meanie', 'mega faggot', 'megabitch', 'megadouche', 'minx', 'missing link', 'mongoose', 'monkey', 'monster', 'moron', 'motherfucker', 'mouthbreather', 'mr. anger', 'mr. obsessed', 'mr. struggle', 'mr. talk', 'mucky pup', 'muppet', 'mutant', 'mutt', "ne'er-do-well", 'neanderthal', 'neckbeard', 'nerd', 'nerf herder', 'nimrod', 'nincompoop',
                'ninny', 'nitwit', 'nobody', 'nonce', 'noob', 'noodle', 'numbnuts', 'numbskull', 'numskull', 'oaf', 'oddball', 'ogre', 'outlaw', 'oxygen thief', 'pack', 'pain in the ass', 'pariah', 'peasant', 'pencil dick', 'penis face', 'pervert', 'pig', 'pigfucker', 'piggy-wiggy', 'pillock', 'pinhead', 'pirate', 'pissface', 'porno freak', 'prick', 'pseudo-intellectu', 'pube flosser', 'puppet', 'pussyfucker', 'quack', 'quat', 'queer', 'queer bait', 'querulant', 'rat', 'rat-fink', 'ratcatcher', 'ratfink', 'redneck', 'reject', 'retard', 'riff-raff', 'roaster', 'robot', 'rowdy', 'rudesby', 'ruffian', 'sadist', 'saprophyte', 'sausage-masseus', 'scumbag', 'scumhead', 'scumlord', 'scuzzbag', 'sewer rat', 'shark', 'sheepfucker', 'sheepshagger',
                'shill', 'shit-eater', 'shit-for-brains', 'shit stain', 'shitass', 'shitbucket', 'shitehawk', 'shitneck', 'shitnugget', 'shitsack', 'shitter', 'shitweasel', 'shyster', 'simpleton', 'skullfucker', 'skunk', 'skunkfucker', 'slag', 'slave', 'sleeze', 'sleeze bag', 'slob', 'slutfucker', 'snail', 'snake', 'snob', 'snot', 'snotball', 'snowflake', 'son of a motherle', 'son of a whore', 'sphincter', 'square', 'stinker', 'stinkhole', 'swindler', 'swine', 'sycophant', 'teuchtar', 'thief', 'thundercunt', 'titbag', 'toad', 'tree hugger', 'troglodyte', 'troll', 'trollface', 'trolltard', 'turd', 'turdball', 'twatwaffle', 'twerp', 'twit',
                'twunt', 'ugly ass', 'unclefucker', 'vagina cleaner', 'vampire', 'vandal', 'varmint', 'vermin', 'wacko', 'wallflower', 'wank stain', 'weeze bag', 'whorefucker', 'whoreson', 'windfucker', 'windsucker', 'wino',
                'womanizer', 'worm', 'wretch', 'xenophobe', 'yahoo', 'yes-man', 'yiffer', 'zoomer', 'zitface', 'zounderkite', 'yaldson', 'zoilist'
            ];


        $message = $data['message'];
        $message_lower = strtolower($message);
        $array = str_word_count($message_lower, 1);
        $count = 0;

        for ($x = 0; $x < sizeof($array); $x++) {
            for ($i = 0; $i < sizeof($cyber_words); $i++) {
                if ($array[$x] == $cyber_words[$i]) {
                    $count++;
                }
            }
        }
        if ($count > 1) {

            return view('true', compact('message'));
        } else {
            return view('false', compact('message'));
        }
    }
    public function readMessage($message)
    {
        return view('false', compact('message'));
    }
}
