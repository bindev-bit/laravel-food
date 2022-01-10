
<x-app-layout>
	<form action="{{ route('users.store') }}" method="POST" x-data="{role_id: 2}">

		@csrf
		<header class="bg-white shadow">
			<div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
				<div class="flex items-center justify-between">
					<h2 class="font-semibold text-xl text-gray-800 leading-tight">
						{{ __('Create User') }}
					</h2>
					<button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 mr-4">
						Remove
					</button><button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
						Update
					</button>
				</div>
		</header>

		<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
			<div class="md:grid md:grid-cols-3 md:gap-6">
				<div class="md:col-span-1">
					<div class="px-4 sm:px-0">
						<h3 class="text-lg font-medium leading-6 text-gray-900">Profile Information</h3>
						<p class="mt-1 text-sm text-gray-600">
						This information will be displayed publicly so be careful what you create.
						</p>
					</div>
				</div>
				<div class="mt-5 md:mt-0 md:col-span-2">
					<div class="shadow sm:rounded-md sm:overflow-hidde">
						<div class="px-4 py-5 bg-white space-y-6 sm:p-6">

							<div class="col-span-6 sm:col-span-3">
								<label for="name" class="block text-sm font-medium text-gray-700">Username</label>
								<input type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <x-jet-input-error for="name" class="mt-2" />
							</div>
							<div class="col-span-6 sm:col-span-3">
								<label for="email" class="block text-sm font-medium text-gray-700">Email</label>
								<input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <x-jet-input-error for="email" class="mt-2" />
							</div>
							<div>
								<label class="block text-sm font-medium text-gray-700">
									Photo
								</label>
								<div class="mt-1 flex items-center">
									<span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
										<svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
											<path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
										</svg>
									</span>
									<button type="button" class="ml-4 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
										Change
									</button>
								</div>
							</div>
							<div>
								<label for="address" class="block text-sm font-medium text-gray-700">
									Address
								</label>
								<div class="mt-1">
									<textarea id="address" name="address" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Address user for more informations"></textarea>
								</div>
								<p class="mt-2 text-sm text-gray-500">
								Brief address for profile user.
								</p>
							</div>

<div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="2">Seller</option>
                    <option value="3">Customer</option>
                </select>
            </div>
						</div>
					</div>
				</div>
			</div>


			<x-jet-section-border />

				<div class="md:grid md:grid-cols-3 md:gap-6">
					<div class="md:col-span-1">
						<div class="px-4 sm:px-0">
							<h3 class="text-lg font-medium leading-6 text-gray-900">Password</h3>
							<p class="mt-1 text-sm text-gray-600">Ensure your account is using a long, random password to stay secure.</p>
						</div>
					</div>
					<div class="mt-5 md:mt-0 md:col-span-2">
						<div class="shadow sm:rounded-md sm:overflow-hidde">
							<div class="px-4 py-5 bg-white space-y-6 sm:p-6">
								<div class="col-span-6 sm:col-span-3">
									<label for="password" class="block text-sm font-medium text-gray-700">Password</label>
									<input type="password" name="password" id="password" autocomplete="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <x-jet-input-error for="password" class="mt-2" />
								</div>
								<div class="col-span-6 sm:col-span-3">
									<label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
									<input type="password" name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <x-jet-input-error for="password_confirmation" class="mt-2" />
								</div>
							</div>
						</div>
					</div>
				</div>

		</div>
</x-app-layout>
	</form>
