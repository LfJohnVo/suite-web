<div>
    @if ($evaluationUser)
        <div class="mt-4 overflow-hidden bg-white border-2 border-gray-300 shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h1 class="text-sm font-medium leading-6 text-gray-900">
                    Información de la evaluación
                </h1>
                <p class="max-w-2xl mt-1 text-sm text-gray-700">

                    <!-- \Carbon\Carbon::isDayOff($userQuizDetails->updated_at) -->
                    Realizaste esta evaluación el <span
                        class="px-2 bg-green-300 rounded-lg text-bold">{{ $evaluationUser ? $evaluationUser->created_at->format('d-m-Y') : 'Evaluación no realizada' }}
                    </span>
                </p>
            </div>
            <div class="border-t border-gray-300">

                <div>
                    {{-- @foreach ($userQuizDetails as $userQuizDetail) --}}
                    <div class="px-4 py-3 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <div class="text-sm font-medium text-gray-700">
                            Lección evaluada
                        </div>
                        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $evaluation->section->name }}

                        </div>
                    </div>
                    {{-- @endforeach --}}
                    <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <div class="text-sm font-medium text-gray-700">
                            Estatus
                        </div>
                        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <span
                                class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-green-600 rounded-full">Terminado</span>

                        </div>
                    </div>
                    <div class="px-4 py-2 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <div class="text-sm font-medium text-gray-700">
                            Total de preguntas
                        </div>
                        <div class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $totalQuizQuestions }}
                        </div>
                    </div>
                    <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <div class="text-sm font-medium text-gray-700">
                            Porcentaje
                        </div>

                        {{-- <div class="px-1 mt-1 text-sm text-gray-900 bg-red-300 rounded-lg sm:mt-0 sm:col-span-2">
                    tiempo
                </div> --}}
                        <div class="mt-1 text-sm text-gray-900 bg-green-300 rounded-lg sm:mt-0 sm:col-span-2">
                            {{ round($percentageEvaluationUser) }} %
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @else
        Sin información
    @endif
    @if (count($evaluation->questions) > 0)
        @foreach ($evaluation->questions as $key => $question)
            @php
                $userAnswer = [];
                foreach ($userAnswers as $answer) {
                    if ($answer->evaluation_id == $evaluation->id && $answer->question_id == $question->id && $answer->user_evaluation_id == $evaluationUser->id) {
                        $userAnswer = [
                            'evaluation_id' => $answer->evaluation_id,
                            'question_id' => $answer->id,
                            'is_correct' => $answer->is_correct,
                            'question' => $answer->question->question,
                            'answer_id' => $answer->answer_id,
                            'answer' => $answer->answer->answer,
                        ];
                        break;
                    }
                }
            @endphp
            @if (count($userAnswers))
                <div class="mt-6 overflow-hidden bg-white shadow sm:rounded-lg">

                    <div class="px-4 py-5 sm:px-6">
                        <span class="mr-2 font-extrabold"> {{ $loop->iteration }}.-</span><span
                            style="text-transform: capitalize">{{ $question->question }}</span>
                        <div x-data={show:false} class="block text-xs">
                            <div class="p-1" id="headingOne">
                                <button @click="show=!show"
                                    class="text-xs text-blue-500 underline hover:text-blue-700 focus:outline-none "
                                    type="button">
                                    Más detalle
                                </button>
                            </div>
                            <div x-show="show" class="block p-2 text-xs bg-green-100">
                                {{ $question->explanation }}
                            </div>
                            @php
                                $correctAnswer = null;
                            @endphp
                            @foreach ($question->answers as $key => $answer)
                                @php
                                    $correctAnswer = $question->answers
                                        ->filter(function ($item) {
                                            return $item->is_correct == 'true';
                                        })
                                        ->first();
                                    
                                @endphp
                                @isset($userAnswer['answer_id'])
                                    @if ($answer->id == $userAnswer['answer_id'])
                                        @if ($userAnswer['is_correct'])
                                            <div
                                                class="px-2 mt-1 text-sm font-extrabold text-white bg-green-500 rounded-lg max-w-auto ">
                                                <span class="mr-2 font-extrabold">{{ $alphabet[$key] }}</span>
                                                {{ $answer->answer }}

                                            </div>
                                        @else
                                            <div
                                                class="px-2 mt-1 text-sm font-extrabold text-white bg-green-500 rounded-lg max-w-auto ">
                                                <span class="mr-2 font-extrabold">{{ $alphabet[$key] }}</span>
                                                {{ $correctAnswer->answer }} <span class="p-1 font-extrabold">(Correct
                                                    Answer)</span>
                                            </div>

                                            <div
                                                class="px-2 mt-1 text-sm font-extrabold text-white bg-red-600 rounded-lg max-w-auto">
                                                <span class="mr-2 font-extrabold">{{ $alphabet[$key] }} </span>
                                                {{ $answer->answer }}
                                            </div>
                                        @endif
                                    @else
                                        <div class="px-2 mt-1 text-sm text-black bg-gray-300 rounded-lg max-w-auto">
                                            <span class="mr-2 font-extrabold">{{ $alphabet[$key] }} </span>
                                            {{ $answer->answer }}
                                        </div>
                                    @endif
                                @endisset
                            @endforeach
                        </div>
                    </div>

                </div>
            @endif
        @endforeach
    @else
        Sin información
    @endif
    {{-- $user es nulo cuando se muestra los resultados de la evaluación para el mismo usuario --}}
    @if ($user->id == null)
        <div class="flex items-center justify-end mt-4">
            <a type="submit"
                class="inline-flex items-center px-4 py-2 m-4 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25"
                href="{{ route('courses.status.evaluation', ['course' => $course, 'evaluation' => $evaluation]) }}">
                {{ __('Regresar') }}
            </a>
        </div>
    @endif

</div>