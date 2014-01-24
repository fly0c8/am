<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('CategorySeeder');
		$this->call('ShopSeeder');
		$this->call('ShopCategorySeeder');
	}

}
class CategorySeeder extends Seeder {
	public function run() {
		DB::Table('categories')->delete();
		Category::create(array("id" => 1, "name" => "Shopping"));
		Category::create(array("id" => 2, "name" => "Kulinarik"));
		Category::create(array("id" => 3, "name" => "Hotels"));
		Category::create(array("id" => 4, "name" => "Gesundheit"));
		Category::create(array("id" => 5, "name" => "Service"));
		Category::create(array("id" => 6, "name" => "Kunst & Kultur"));
		Category::create(array("id" => 7, "name" => "Events"));
		Category::create(array("id" => 8, "name" => "Tracht"));
	}
}

class ShopSeeder extends Seeder {
	public function run() {
		DB::Table('shops')->delete();
		Shop::create(array('id' => 1, 'name' => 'shop1'));
		Shop::create(array('id' => 2, 'name' => 'shop2'));
		Shop::create(array('id' => 3, 'name' => 'shop3'));		
	}
}
class ShopCategorySeeder extends Seeder {
	public function run() {
		DB::Table('shop_categories')->delete();
		ShopCategory::create(array('id'=>1,'category_id'=>1,'shop_id' => 1));
		ShopCategory::create(array('id'=>2,'category_id'=>1,'shop_id' => 2));
		ShopCategory::create(array('id'=>3,'category_id'=>2,'shop_id' => 3));
	}
}