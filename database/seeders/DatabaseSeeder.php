<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Author::factory(10)->create();
        \App\Models\BookCategory::factory(10)->create();
        \App\Models\Book::factory(10)->create();
        \App\Models\BookAuthor::factory(10)->create();
        \App\Models\MembershipStatus::factory(10)->create();
        \App\Models\Library::factory(10)->create();
        \App\Models\LibraryMember::factory(10)->create();
        \App\Models\LibraryStock::factory(10)->create();
        \App\Models\BookLoan::factory(10)->create();

        DB::table('books')->insert([
            'isbn' => '1203486464',
            'title' => 'How to Win Friends and Influence People',
            'fk_category_id' => 1,
            'published_date' => '2023-01-01'
        ]);

        DB::table('authors')->insert([
            'name' => 'Dale Carnegie'
        ]);

        DB::table('book_authors')->insert([
            'fk_book_id' => 11,
            'fk_author_id' => 11
        ]);

        DB::table('library_stocks')->insert([
            'fk_book_id' => 11,
            'fk_library_id' => 1,
            'no_copies' => 99,
            'date_added' => '2022-02-02'
        ]);

        for ($i = 1; $i < 10; $i++) {
            DB::table('book_loans')->insert([
                'fk_member_id' => $i,
                'fk_stock_id' => 11,
                'loan_date' => '2022-0' . $i .'-03',
                'return_date' => '2022-0' . $i .'-10',
            ]);
        }

        


        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
