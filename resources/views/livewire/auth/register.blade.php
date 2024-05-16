<x-layouts.guest title="Registration Page">
    <div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8 dark:bg-white/5 ">
          <div class="p-5 px-10 sm:mx-auto sm:w-full sm:max-w-sm bg-black/5 rounded-xl dark:bg-white/5">
            <div class="">
              <img class="w-auto h-10 mx-auto" src="https://tailwindui.com/img/logos/mark.svg?color=orange&shade=600" alt="Your Company">
              <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center">Register your account</h2>
            </div>
          
            <div class="mx-5 mt-10">
              <form class="space-y-6" action="#" method="POST">
                <div>
                  <label for="name" class="block text-sm font-medium leading-6">Name</label>
                  <div class="mt-2">
                    <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium leading-6">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6">Password</label>
                    <div class="text-sm">
                      <a href="#" class="font-semibold text-orange-600 hover:text-orange-500">Forgot password?</a>
                    </div>
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Register</button>
                </div>
              </form>
            </div>
          </div>
      </div>
</x-layouts.guest>

