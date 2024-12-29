@extends('layouts.app')

@section('title', 'Recipe Collection')

@section('content')
<section class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-5 mt-7" class="recipes">
        <div class="bg-white p-5 mb-7 rounded-lg shadow-lg" class="recipeCard">
          <h2 class="text-orange-600 text-[1.8em] mb-2.5">Chicken Tinga Tacos</h2>
          <img class="w-full h-[500px] object-cover rounded-lg mb-3.5" src="image.jpg" alt="Image description" src="resources/Chicken-Tinga-Tacos-6.jpg" alt="Chicken Tinga Tacos">
          <h3 class="text-[1.4em] mt-3.5">Ingredients:</h3>
          <ul class="ml-5 mb-5">
            <li class="text-[1.1em] mb-1.5 text-gray-700">1 tablespoon olive oil</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1 cup roughly chopped sweet onion</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">2 cloves garlic, minced</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1–2 chipotle peppers in adobo sauce, chopped/li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1 teaspoon dried oregno</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">3/4 cup canned crushed fire-roasted tomatoes/li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1/4 cup chicken stock</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 teaspoon kosher salt</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700"> cups shredded cooked chicken (rotisserie chicken works!)</li>
          </ul>
          <h3 class="text-[1.4em] mt-3.5">Instructions:</h3>
          <ol class="ml-5 mb-5">
            <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Sauce:</b> Heat a large skillet over medium. Once warm, add the oil and onion. Sauté for 4 minutes or until tender, stirring occasionally. Add in the garlic and cook for 30 seconds more. Stir in the chipotles, oregano, and cumin, and toast for 1 minute. Add in the tomatoes, stock, and salt. Bring to a simmer, and cook for 7 minutes.</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Blend:</b> Place the tomato mixture in a high-powered or regular blender, and blend until smooth.</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Chicken:</b> Return the blended sauce to the pan over low heat. Add the chicken, and cook for 5 minutes. Taste and add more salt if necessary.</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Serving:</b> Prepare the garnishes. To assemble, top the tortillas with the chicken and garnish with the avocado slices, cilantro, red onion, and cotija. Serve with a lime wedge for squeezing.</li>
          </ol>
        </div>
    
        <div class="bg-white p-5 mb-7 rounded-lg shadow-lg" class="recipeCard">
          <h2 class="text-orange-600 text-[1.8em] mb-2.5">Alfredo Sauce</h2>
          <img class="w-full h-[500px] object-cover rounded-lg mb-3.5" src="image.jpg" alt="Image description" src="resources/Amazing-Alfredo-Sauce-1365x2048.jpg" alt="Alfredo Sauce">
          <h3 class="text-[1.4em] mt-3.5">Ingredients:</h3>
          <ul class="ml-5 mb-5">
            <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 cup butter</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">3 cloves garlic</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 cup chicken or vegetable broth</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1 cup heavy cream</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">1 cup finely grated Parmesan cheese</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">salt and pepper to taste</li>
          </ul>
          <h3 class="text-[1.4em] mt-3.5">Instructions:</h3>
          <ol class="ml-5 mb-5">
            <li class="text-[1.1em] mb-1.5 text-gray-700">Melt butter in a large saucepan. Keep the heat very low, and add garlic cloves to butter. Cook until fragrant – about 5 minutes. (If you’re serving this with pasta, start that now! Don’t forget to add a generous pinch of salt to the water!)</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">Remove garlic cloves from the butter. Add heavy cream and broth, and bring to a very gentle simmer. Whisk to incorporate. Simmer over low heat for 3-5 minutes, or until slightly thickened.</li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">Add Parmesan to the sauce. Whisk in until fully melted and thickened. Taste and add salt and pepper as needed. </li>
            <li class="text-[1.1em] mb-1.5 text-gray-700">Toss with the pasta and keep over low heat until the sauce is clinging to the pasta the way you want! Or spoon the sauce over a protein and/or veg of choice. SO LUSCIOUS!</li>
          </ol>
        </div>

        <div class="bg-white p-5 mb-7 rounded-lg shadow-lg" class="recipeCard">
            <h2 class="text-orange-600 text-[1.8em] mb-2.5">Scallion Pancake with egg</h2>
            <img class="w-full h-[500px] object-cover rounded-lg mb-3.5" src="image.jpg" alt="Image description" src="resources/Scallion-Pancake-with-Egg.jpg" alt="Scallion Pancake with egg">
            <h3 class="text-[1.4em] mt-3.5">Ingredients:</h3>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 scallion pancake</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">a spritz of avocado oil, or a small pat of butter</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 handful of spinach</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1–2 eggs</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">salt and pepper</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">half an avocado</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">chili crisp to taste</li>
            </ul>
            <h3 class="text-[1.4em] mt-3.5">Instructions:</h3>
            <ol class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">Fry your scallion pancake in the oil until golden on both sides. Remove from the pan and set aside. (I use a nonstick pan for this.)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">In the same pan, add a handful of spinach to wilt it down. When it’s softened, scoot it towards the center of the pan so the scallion pancake will catch all of it when you put it back down.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Add the eggs; fry until the whites have started to set. Use a spatula to break the yolks and spread gently. Before the eggs are fully cooked, squish the scallion pancake on top of the eggs so it sticks to them as they finish cooking.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Remove from heat, fill with toppings of choice (cheese, avocado, sauces, chili crisp is a good move). Roll it up and slice it in half and GO TO TOWN! These are amazing.</li>
            </ol>
        </div>

        <div class="bg-white p-5 mb-7 rounded-lg shadow-lg" class="recipeCard">
            <h2 class="text-orange-600 text-[1.8em] mb-2.5">Quick Homemade Ramen</h2>
            <img class="w-full h-[500px] object-cover rounded-lg mb-3.5" src="image.jpg" alt="Image description" src="resources/Homemade-Ramen-3-3.jpg" alt="Quick Homemade Ramen">
            <h3 class="text-[1.4em] mt-3.5">Ingredients:</h3>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 tablespoon sesame oil</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">3 teaspoons grated ginger</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">4 teaspoons grated garlic</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">4 cups broth (I used chicken, but vegetable would also work)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">4 cups water</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700"> ounce dried shiitake mushrooms</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">2 packages instant ramen (noodles only!)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 cup chopped scallions or chives</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">2 cup chopped kale (or spinach)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 cups shredded carrots (or another vegetable like bok choy)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Sriracha to taste</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">crunchy golden panko crumbs for topping (see notes below)</li>
            </ul>
            <h3 class="text-[1.4em] mt-3.5">Instructions:</h3>
            <ol class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">Heat the sesame oil in a large skillet over medium low heat. Add the garlic and ginger; stir fry for 2 minutes or until soft and fragrant.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Add the broth and the water. Bring to a simmer; add the mushrooms and simmer for 10 minutes or until the mushrooms have softened and the broth is flavorful.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Add the instant noodles to the hot liquid and simmer for an additional 5 minutes or until the noodles have softened. Add the scallions and stir to combine.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Remove from heat, stir in the kale and carrots, and top with crunchy panko crumbs (see notes) and a soft-boiled egg (optional). Season with chili oil, hot sauce, sesame oil, and/or soy sauce and salt to taste.</li>
            </ol>
            <h3 class="text-[1.4em] mt-3.5">Notes:</h3>
            <ul class="ml-5 mb-5">To make crunchy golden panko crumbs, heat a few tablespoons of oil in a large skillet over medium heat. Add the panko, stir for one minute or less, or until golden brown. Remove and place on paper towels to drain. You can also toss the panko with a little oil and toast them in the oven to get them golden and crispy.</ul>
        </div>

        <div class="bg-white p-5 mb-7 rounded-lg shadow-lg" class="recipeCard">
            <h2 class="text-orange-600 text-[1.8em] mb-2.5">Honey Chipotle Chicken Skewers</h2>
            <img class="w-full h-[500px] object-cover rounded-lg mb-3.5" src="image.jpg" alt="Image description" src="resources/Honey-Chipotle-Chicken-Skewers.jpg" alt="Honey Chipotle Chicken Skewers">
            <h3 class="text-[1.4em] mt-3.5">Ingredients:</h3>
            <h4>Chicken:</h4>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 pound chicken breasts, cut into bite-sized pieces</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">wood skewers (optional)</li>
            </ul>
            <h4>Honey Chipotle Mix:</h4>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 1/2 tablespoon honey</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 chipotle pepper in adobo, minced</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 clove garlic, grated</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">2 tablespoons taco seasoning (I like the Siete brand)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 orange, zest and juice (1–2 teaspoons zest and 1 tablespoon juice)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 teaspoon kosher salt</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 tablespoon avocado oil</li>
            </ul>
            <h3 class="text-[1.4em] mt-3.5">Instructions:</h3>
            <ol class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Soaks:</b>Soak the skewers in water for 15-30 minutes while you prep the chicken.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Mix:</b>Using your hands or tongs, mix the chicken with the honey chipotle mix. It’ll look saucy and messy, in a good way.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Skewers:</b>Thread the chicken pieces onto skewers (usually I get 4 skewers with a pound of chicken).</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700"><b>Cook Em Up:</b>You can cook these a number of different ways – I air fry them at 400 degrees for 10 minutes or until internal temperature reaches 165 degrees. Grilling would also be amazing! Finish with a drizzle of honey, or (yum) 2 tablespoons of melted butter mixed with honey. It’s so good!</li>
            </ol>
            <h3 class="text-[1.4em] mt-3.5">Notes:</h3>
            <ul>I don’t marinate the chicken, but I do usually let it sit for 10-15 minutes while I prep the other dinner elements. You can marinate the chicken for a few hours if you are making this ahead, or just go ahead with cooking if you’re ready! </ul>
        </div>

        <div class="bg-white p-5 mb-7 rounded-lg shadow-lg" class="recipeCard">
            <h2 class="text-orange-600 text-[1.8em] mb-2.5">Butter Chicken Meatballs Recipe</h2>
            <img class="w-full h-[500px] object-cover rounded-lg mb-3.5" src="image.jpg" alt="Image description" src="resources/butter-chicken-3-scaled.jpg" alt="Butter Chicken Meatballs Recipe">
            <h3 class="text-[1.4em] mt-3.5">Ingredients:</h3>
            <h4>Butter Chicken Base:</h4>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 tablespoon avocado oil or olive oil</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">half of an onion, roughly chopped</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">3 cloves garlic, minced (or a garlic paste)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">a small piece of fresh ginger, grated (or a ginger paste)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/4 teaspoon turmeric</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/4 teaspoon smoked paprika</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 teaspoon garam masala</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 teaspoon cumin</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">one 14-ounce can crushed tomatoes or plain tomato sauce</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 cup water (more as needed later)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/2 teaspoon to 1 teaspoon kosher salt (I use 1 teaspoon, just depends how salty you want it)</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1 teaspoon sugar</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">20 ounces of cooked chicken or turkey meatballs (these are the ones I always use! this should be about 4 cups of meatballs)</li>
            </ul>
            <h4>To Finish:</h4>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">2 tablespoons butter</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/3 cup heavy cream (more to taste)</li>
            </ul>
            <h4>To Serve:</h4>
            <ul class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">11/2 cups basmati rice, or precooked reice</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">1/4 cup fresh cilantro</li>
            </ul>
            <h3 class="text-[1.4em] mt-3.5">Instructions:</h3>
            <ol class="ml-5 mb-5">
                <li class="text-[1.1em] mb-1.5 text-gray-700">Make your rice according to package directions.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Heat oil over medium heat in a large skillet or Dutch oven over medium heat. Add onion, garlic, ginger, and spices; sauté until softened.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Add tomatoes, water, salt, and sugar. Simmer for 10-15 minutes</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Transfer the sauce to a blender and puree until smooth, or use an immersion blender directly in the pot to blend.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Add sauce back to the pan. Add the meatballs; simmer with the cover on or keep on low heat until warmed through.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Add the butter and cream to make a luscious, heavenly sauce to coat your meatballs.</li>
                <li class="text-[1.1em] mb-1.5 text-gray-700">Serve over rice with a sprig or sprinkle of cilantro. Add spiciness to taste with cayenne or chili oil!</li>
            </ol>
        </div>
    </section>
@endsection