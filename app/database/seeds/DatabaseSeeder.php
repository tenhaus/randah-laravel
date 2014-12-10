<?php

use League\FactoryMuffin\Facade;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->defineFactories();
		$this->call('UserTableSeeder');
		$this->call('UserImageTableSeeder');
	}

	private function defineFactories()
	{
		Facade::define('User', array(
			'email' => 'email',
			'first_name' => 'firstName',
			'last_name' => 'lastName',
			'profile_image' => 'imageUrl|400;400'
		));

		Facade::define('UserImage', array (
			'user_id' => 'numberBetween|1;10',
			'name' => 'sentence',
			'description' => 'text',
			'url' => '/images/recent/4aa64f560efd1b6d494252cc23abef56.jpg'
		));
	}
}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		for($i=0; $i<10; $i++) Facade::create('User');
	}
}

class UserImageTableSeeder extends Seeder {

	public function run()
	{
		DB::table('user_images')->delete();

		foreach($this->images as $url)
		{
			$userImage = Facade::create('UserImage', ['url' => $url]);
		}
	}

	private $images = [
		'/images/recent/01cd876c9f9468ad4f4cfce1a04f4966.jpg',
		'/images/recent/023682428b19e48cc32e918cca7a00a1.jpg',
		'/images/recent/026b715f9de2aeb72ba6446b12bc8cc5.jpg',
		'/images/recent/027c4f806f54d673452a2de70e7eedbb.jpg',
		'/images/recent/03721_glacierlagoon_2880x1800.jpg',
		'/images/recent/05a9cba481ad4a059a2b65c8fbf3f62b.jpg',
		'/images/recent/068ddee4e5fd624823637a4c70f072cd.jpg',
		'/images/recent/06ed076039a1ad295378c8a6b7ffea12.jpg',
		'/images/recent/083da0461b2480009a935a175168932d.jpg',
		'/images/recent/08842d860a7265bedac27fe12ab1c026.jpg',
		'/images/recent/0f59a2dabcb993833945316b62467702.jpg',
		'/images/recent/105c4d0f53e4013ed7ac72eb2774688e.jpg',
		'/images/recent/1363288511396.jpg',
		'/images/recent/1363456527290.jpg',
		'/images/recent/1363538014034.jpg',
		'/images/recent/1363727154169.jpg',
		'/images/recent/1389168481285.jpg',
		'/images/recent/1389187453577.jpg',
		'/images/recent/1390979680576.jpg',
		'/images/recent/1393880614750.jpg',
		'/images/recent/1442fb906b374210fa6f717f2a4f9f28.jpg',
		'/images/recent/1559557_799515400064831_1624270012_o.jpg',
		'/images/recent/1632-Rembrandt-Philosophe-en-méditation-Philosopher-in-meditation-hsb-28x345-cm-prs.jpg',
		'/images/recent/16c00265cf3e7cbbc3c404bc1e39c221.jpg',
		'/images/recent/1ba956933f235396bc29b963672638fe.jpg',
		'/images/recent/1e75f1f2884a9d716ff28f085faa3720.jpg',
		'/images/recent/1ee1c560bf00f2b345978fb841714e7c.jpg',
		'/images/recent/1eeca4ec74524308c68d5cd90b98b37d.jpg',
		'/images/recent/1f8733c62b90198ec8d3fff2a9d594b1.jpg',
		'/images/recent/223525890cbb79cf153660df5b9b63be.jpg',
		'/images/recent/235b03937b2c490dbcab91023baae2bc.jpg',
		'/images/recent/2560x1440.jpg',
		'/images/recent/2726be0f465fac56d5ad203f9ec85d9a.jpg',
		'/images/recent/28a171a1e1864b4590c01a804b9d702b.jpg',
		'/images/recent/28fd0e9376f60e994a2e6341cbc8b1b7.jpg',
		'/images/recent/2a7a70f384aa86e34f6156708431cee5.jpg',
		'/images/recent/2b7b227a999c83cc289178084daf755e.jpg',
		'/images/recent/2e482333dc82afbf85f56393e5e3a23a.jpg',
		'/images/recent/2fb14c0693b17588aafb64a77d0e013e.jpg',
		'/images/recent/30c34922b421cdb2a182d7cd8a5a4268.jpg',
		'/images/recent/314555ce70d2a5857c51d0123c423c6e.jpg',
		'/images/recent/31eeaf3cea5d879867e7c876e9ed493a.jpg',
		'/images/recent/325573cd393fd6da593efb6b306237f9.jpg',
		'/images/recent/35fa7007bf57aa368f88dca32fd237f4.jpg',
		'/images/recent/362edfba9513d4e0d5baa377894c0504.jpg',
		'/images/recent/3671979e4c262231592e17299467019d.jpg',
		'/images/recent/38654dbf75059544240aefa8f23fe2fe.jpg',
		'/images/recent/3912d37c0ac357bb5beb29ece528a1b7.jpg',
		'/images/recent/3cb908b9e013637761e23029891f2a02.jpg',
		'/images/recent/3d5089f259fbfbb4057bfe155ad1998b.jpg',
		'/images/recent/3f4b73a1f74be289e3bd908778a14fcb.jpg',
		'/images/recent/40a8289e2713d5f4aa17a025a6037c21.jpg',
		'/images/recent/41be6e275e0b06aabe693a2c31f19227.jpg',
		'/images/recent/454434.jpg',
		'/images/recent/4908bfbe90b994563137cca9ab097813.jpg',
		'/images/recent/4aa64f560efd1b6d494252cc23abef56.jpg',
		'/images/recent/4bdab6772d3383a0300bed8efc509028.jpg',
		'/images/recent/4d3670f59ff1f0f2885d06a4231f8e7c.jpg',
		'/images/recent/4eee3650a7dc2e4512cb70fc526eb6c8.jpg',
		'/images/recent/4f009900d8b9e71d2844619fdb6b3fb8.jpg',
		'/images/recent/52613bbf108227787f03e4bed30d7d7b.jpg',
		'/images/recent/5289b5e70fcab4da1c3afb98f349bb79.jpg',
		'/images/recent/5390687a0a7e2173877471c499c496c2.jpg',
		'/images/recent/562efb5f647c16a10f971f7b2eeaede8.jpg',
		'/images/recent/56665ae1a15cb8a9da93986fb9d1ffd8.jpg',
		'/images/recent/57d45c9e05ab7db01a9696df3be39691.jpg',
		'/images/recent/5866d057d89a86117aa0c4e3337aba90.jpg',
		'/images/recent/59b730bf8aea8354371b0892e960df42.jpg',
		'/images/recent/5c4e8c3707d221be7ab8f8f3e6893866.jpg',
		'/images/recent/5f516044f4fdc50aaa676ae3bd8fcf32.jpg',
		'/images/recent/5fc9b18e4873b665b066301b2a62b2f6.jpg',
		'/images/recent/63007e3901dbdb043128756f0b9e38a0.jpg',
		'/images/recent/63ffc166342557536a2940051edce815.jpg',
		'/images/recent/6605440bf8393f5633351d07d4b71956.jpg',
		'/images/recent/6c153bedd7c12f6b515c8cc26fec481a.jpg',
		'/images/recent/6c7e662df38d26d536cf3893287ce25a.jpg',
		'/images/recent/6de36c1f158b6ffc42a47706b36fd324.jpg',
		'/images/recent/6df114c25b1d9297fae43b18dbc7e27d.jpg',
		'/images/recent/727a6fbbcac1c942eccd38042dcd73d7.jpg',
		'/images/recent/7838e9fdfc9a23754b14092a838af40f.jpg',
		'/images/recent/7a7947ead8fc6c1c424609b0b7d7527e.jpg',
		'/images/recent/7c2fbd1ea4c7d7ffe6f599cef38277fc.jpg',
		'/images/recent/7dee082abfdbcce3cd3c9def041ead59.jpg',
		'/images/recent/80cc709343f20768fd3854833bc2187b.jpg',
		'/images/recent/82db09f2f698b7b56216853963a74586.jpg',
		'/images/recent/8371ea8011c31dce0dace4a5935436f3.jpg',
		'/images/recent/84872aad2bf4841b1df57e21ff0bae6b.jpg',
		'/images/recent/88e3167450552433c867cab6e3dca714.jpg',
		'/images/recent/89b1c3d5929e2cc81c583d547ecca9d4.jpg',
		'/images/recent/8b149089f36f3b4c9ec0ac4b0d3b4eb1.jpg',
		'/images/recent/8d4d303661e83acf0896857d20df9f56.jpg',
		'/images/recent/8d4e1d02c449922ebac10350ccb0ba72.jpg',
		'/images/recent/8d859f36f37aee7275e2faf9943e7108.jpg',
		'/images/recent/904c13a4c3c786fbd787e4ffb6470db7.jpg',
		'/images/recent/9539d0f21a0e0eefee83d6acf401441e.jpg',
		'/images/recent/9587eeb9c7860ad9bfa1d4943a7c0eb7.jpg',
		'/images/recent/96bbaeb772e4657a9a7303b8bb3b4c3b.jpg',
		'/images/recent/99653f0a8daacdd0c0636093a957a92d.jpg',
		'/images/recent/9a23ae20408dc2c2ad3227bb4e998417.jpg',
		'/images/recent/9b2b12a4fbb599750ad7eb7c13b410d9.jpg',
		'/images/recent/9d292e9f260ae6fc51723a8ff05a6520.jpg',
		'/images/recent/9e147d852aa21a35ae9f9e4ff75dc914.jpg',
		'/images/recent/9e5a491576264a11b369f6d8c1868741.jpg',
		'/images/recent/9e74be06a7859659767d1e0ff5325f89.jpg',
		'/images/recent/9f3b7763e510edc53bbcd3956f8af342.jpg',
		'/images/recent/9ffe9097fb7c28dc5875efd688e86fe0.jpg',
		'/images/recent/BG1.jpg',
		'/images/recent/BG10.jpg',
		'/images/recent/BG11.jpg',
		'/images/recent/BG12.jpg',
		'/images/recent/BG2.jpg',
		'/images/recent/BG3.jpg',
		'/images/recent/BG4.jpg',
		'/images/recent/BG5.jpg',
		'/images/recent/BG6.jpg',
		'/images/recent/BG7.jpg',
		'/images/recent/BG8.jpg',
		'/images/recent/BG9.jpg',
		'/images/recent/Gogol_Bordello_x.jpg',
		'/images/recent/IMG_20140911_184453.jpg',
		'/images/recent/Martini_Rossi_Livery_Wallpaper.jpg',
		'/images/recent/Rembrandt-Philosophe_en_méditation-1632-Louvre.jpg',
		'/images/recent/Timothy-J-Reynolds-wallpaper-2560x1440.jpg',
		'/images/recent/WP.jpg',
		'/images/recent/Zen.jpg',
		'/images/recent/a659e03c949d70f042d570abf59e4f15.jpg',
		'/images/recent/a8bf127cfaf65d8f8d1877f7e5b282d7.jpg',
		'/images/recent/a9390499fcc48caf04a6820477ead9ea.jpg',
		'/images/recent/ade65a187d8ec02ff08adbf670ea5d85.jpg',
		'/images/recent/ae9322b9e1f448a7e92b1743a06bd6f5.jpg',
		'/images/recent/af1515a043d06dc2126d52cc7bb05b5a.jpg',
		'/images/recent/apocalypse-70.jpg',
		'/images/recent/b27fdf79664bf66942fbd0de82517d92.jpg',
		'/images/recent/b3cb19f5b6820144d7fce2f1d6cb3cc9.jpg',
		'/images/recent/b42089930b13eab02ed7ccd544521c06.jpg',
		'/images/recent/b42c2b35d8a4f2543f332acf9b74185b.jpg',
		'/images/recent/b5bbe6b49eb08960e7a57cc926d3951e.jpg',
		'/images/recent/b7c87edb4d5ccc841849e991e8ce75fe.jpg',
		'/images/recent/b8b13bd8f3f2a9af2dbafa3d64831e93.jpg',
		'/images/recent/baecf65b5b595d3d8c678ee06df8d34f.jpg',
		'/images/recent/baf9bf95f3bf89043cfb957aa0e45f76.jpg',
		'/images/recent/baltic_sea-wallpaper-2560x1440.jpg',
		'/images/recent/baroque_wallpaper_12-wallpaper-1920x1080.jpg',
		'/images/recent/bcaf4603d1de9e77acd074cc05eff95a.jpg',
		'/images/recent/bd4e6d5e4b6d2947d5de19360751490e.jpg',
		'/images/recent/beautiful_lake_reflection_autumn-wallpaper-2560x1440.jpg',
		'/images/recent/bfa9c6f1100039f168b76226dbde31e8.jpg',
		'/images/recent/big_ac7ad84e2be50a9fc547294d6e708908ef398eb6.jpg',
		'/images/recent/broken-social-scene-matias-palacios-hardy-1920x1200.jpg',
		'/images/recent/c46ea1030b7e02ad40fae58df8b74114.jpg',
		'/images/recent/c670581f17aad5237e338e390f6f5c17.jpg',
		'/images/recent/c865bf387bd45da3859218f30cd588dc.jpg',
		'/images/recent/c941e9c2a5cd6ca58da47de718ea7b42.jpg',
		'/images/recent/c9b6261657f5429276a43e6e957a074b.jpg',
		'/images/recent/c9ff0f841e462acc885f59ecdf5032eb.jpg',
		'/images/recent/cafd8eccafb2b301f4d4dc4a27b4f48c.jpg',
		'/images/recent/ccb7f91f28f0221fbe1b866bb3c6cce3.jpg',
		'/images/recent/cdadd423c8909c8bb2de8aedbfecda2f.jpg',
		'/images/recent/ce20459a46541772997e50a86062b0bb.jpg',
		'/images/recent/chris-jaurique-2560x1440.jpg',
		'/images/recent/creative_design_26-wallpaper-1920x1080.jpg',
		'/images/recent/d0a7e9cbe3eaf182cd7610c031c3a59d.jpg',
		'/images/recent/d79a2926cfc566eebc4d957239dbf78f.jpg',
		'/images/recent/d82467c395f45e4c56464103cb41c3c2.jpg',
		'/images/recent/d93f11aa86e166251bd24a2f4a314f59.jpg',
		'/images/recent/da990bc7ea7318c69ece56982d7aceb6.jpg',
		'/images/recent/dark_mountains-wallpaper-2560x1440.jpg',
		'/images/recent/daso-pawas-michael-cina-1920x1200.jpg',
		'/images/recent/db63496b33f639945495ae3b972fe91b.jpg',
		'/images/recent/desert_journey-wallpaper-1920x1080.jpg',
		'/images/recent/df3f5f48343c1dc7a6ecd71bf9b98ed5.jpg',
		'/images/recent/e3bc43a811d820eaf03c67a9f0cc94d6.jpg',
		'/images/recent/e74ed61c267fd978c9eb426f7f8bab4d.jpg',
		'/images/recent/e9cdc3158cb8ccc5f68f164d8e75634c.jpg',
		'/images/recent/ea783c4cb19814f5bd29fdfb6b5635d5.jpg',
		'/images/recent/ecbbd5c57fa6d42551ac2dc93f80180e.jpg',
		'/images/recent/eiffel_tower_at_the_bottom-wallpaper-2560x1440.jpg',
		'/images/recent/f33f8d12b08298d646b560c006efd4a8.jpg',
		'/images/recent/f746e746379a44b8568573dc3bd16553.jpg',
		'/images/recent/f8978c7c4593d5b02e7ece14f00b9e1a.jpg',
		'/images/recent/f9d26f2e0021694530e1cfa7c358e23e.jpg',
		'/images/recent/fab053034630a2623d75d801364b4dd4.jpg',
		'/images/recent/fb5ab6bf5834c46d72d2caa4d4a2689e.jpg',
		'/images/recent/fear_me-wallpaper-2560x1440.jpg',
		'/images/recent/freddie-mercury-rock-faces-corbis.jpg',
		'/images/recent/freddie_mercury_desktop_4720x3685_hd-wallpaper-1009943.jpg',
		'/images/recent/galaxy_desktop-wallpaper-2560x1440.jpg',
		'/images/recent/galaxy_view_from_earth-wallpaper-2560x1600.jpg',
		'/images/recent/hexagon.jpg',
		'/images/recent/hs-2010-13-a-1920x1200_wallpaper.jpg',
		'/images/recent/kim-holtermand-deserted-city-2560x1440.jpg',
		'/images/recent/leaf_veins-wallpaper-2560x1440.jpg',
		'/images/recent/life_through_a_lens-wallpaper-1920x1080.jpg',
		'/images/recent/mariana_2560x1440.jpg',
		'/images/recent/michael-cina-gadi-mizrahi-1920x1200.jpg',
		'/images/recent/michael-cina-sami-koivikko-1920x1200.jpg',
		'/images/recent/octopus.jpg',
		'/images/recent/purple_texture-wallpaper-2560x1440.jpg',
		'/images/recent/queen_freddie_mercury_desktop_2775x2090_wallpaper-265336.jpg',
		'/images/recent/ranch.jpg',
		'/images/recent/scuba_diving-wallpaper-2560x1440.jpg',
		'/images/recent/striped_room-wallpaper-1920x1080.jpg',
		'/images/recent/surroundings_1680x1050.jpg',
		'/images/recent/swirl-wallpaper-1920x1080.jpg',
		'/images/recent/this_is_a_pipe-wallpaper-2560x1440.jpg',
		'/images/recent/tumblr_mr4h9uXFZ01qgkoejo2_1280.jpg',
		'/images/recent/tumblr_mw3yhaE2j01rkdemgo1_1280.jpg',
		'/images/recent/tumblr_n70d5lkeWf1qz62xqo1_1280.jpg',
		'/images/recent/underwater_bedroom-wallpaper-2560x1440.jpg',
		'/images/recent/wall_plant-wallpaper-2560x1440.jpg',
		'/images/recent/wallpaper-1983119.jpg',
		'/images/recent/windows_blue_milestone_1_wallpaper_2_by_brebenel_silviu-d5vwyjt.jpg',
		'/images/recent/wood_background-wallpaper-2560x1440.jpg',
		'/images/recent/wp_2560-1.jpg',
		'/images/recent/wp_2560-2.jpg',
		'/images/recent/wp_2560-3.jpg',
		'/images/recent/wp_2560-4.jpg',
		'/images/recent/wp_2560.jpg'
	];
}
