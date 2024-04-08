<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Request</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body style="background-color:#fff0e5 ">

<section class="mt-24">
    <a href="{{route('posts.edit',$post->id)}}">
    <button type="button" class="ml-12 w-full flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
        <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
        </svg>
        <span>Go back</span>
    </button>
</a>

<div class="flex justify-center mt-4">
<form class="w-4/5 lg:3/5 xl:3/5" action="{{route('request')}}" method="POST">
    @csrf
    @method('POST')
    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea name="message" id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a request..." required /></textarea>
        </div>
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white  rounded-lg focus:ring-4 focus:ring-blue-2" style="background-color: #ff7f50">
                Send Request
            </button>

        </div>
    </div>
 </form>
</div>
</section>
</body>
</html>