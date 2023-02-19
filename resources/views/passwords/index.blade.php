@extends('passwords.layouts.main')
@section('title', 'Zapisane dane')

@section('content')

<div class="passwords">
    <div class="passwords__top-bar">
        <h2 class="passwords__title">Twoje zapisane dane</h2>
        <div class="passwords__filters">
            <select name="" id="" class="passwords__filter">
                <option class="passwords__option" value="">Typ: Wszystkie</option>
                <option class="passwords__option" value="">www</option>
                <option class="passwords__option" value="">Wordpress</option>
                <option class="passwords__option" value="">Prestashop</option>
                <option class="passwords__option" value="">FTP</option>
                <option class="passwords__option" value="">SSH</option>
                <option class="passwords__option" value="">Inne</option>
            </select>
            <select name="" id="" class="passwords__filter">
                <option class="passwords__option" value="">Sortuj wg: Data dodania (od najnowszych)</option>
                <option class="passwords__option" value="">Sortuj wg: Data dodania (od najstarszych)</option>
                <option class="passwords__option" value="">Data modyfikacji (Od najnowszych)</option>
                <option class="passwords__option" value="">Data modyfikacji (Od najstarszych)</option>
                <option class="passwords__option" value="">Alfabetycznie (A-Z)</option>
                <option class="passwords__option" value="">Alfabetycznie (Z-A)</option>
            </select>
        </div>
    </div>
    <div class="passwords__table-wrapper">
        <div class="passwords__table">
            <div class="passwords__table-row">
                <div class="passwords__table-cell">Aplikacja</div>
                <div class="passwords__table-cell">Link</div>
                <div class="passwords__table-cell">Typ</div>
                <div class="passwords__table-cell">Login</div>
                <div class="passwords__table-cell">Hasło</div>
                <div class="passwords__table-cell">Host</div>
                <div class="passwords__table-cell">Akcje</div>
            </div>
            <div class="passwords__table-row">
                <div class="passwords__table-cell passwords__table-cell--icon"><img class="passwords__icon"
                        src="{{asset('img/facebook.png')}}" alt=""> Facebook</div>
                <div class="passwords__table-cell"><a target="_blank" class="passwords__link"
                        href="https://www.facebook.com/">https://www.facebook.com/</a></div>
                <div class="passwords__table-cell">www</div>
                <div class="passwords__table-cell">j.lipinski017@gmail.com</div>
                <div class="passwords__table-cell passwords__table-cell--password"><input type="password"
                        class="passwords__password" value="TajneHaslo123!" disabled>
                    <div class="passwords__see">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                fill="#848484" fill-opacity="0.7" />
                        </svg>
                    </div>
                </div>
                <div class="passwords__table-cell"></div>
                <div class="passwords__table-cell">
                    <div class="passwords__actions">
                        <a href="#" class="passwords__show">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg>
                        </a>
                        <a href="#" class="__edit"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.875 8.71481L17.6 4.67037L18.675 3.63518C19.075 3.25 19.5543 3.0574 20.113 3.0574C20.671 3.0574 21.1417 3.25 21.525 3.63518L22.925 5.0074C23.3083 5.37654 23.5 5.82592 23.5 6.35555C23.5 6.88518 23.3083 7.33456 22.925 7.7037L21.875 8.71481ZM5 22.8222C4.45 22.8222 3.979 22.6335 3.587 22.256C3.19567 21.8792 3 21.4259 3 20.8963V7.41481C3 6.88518 3.19567 6.43163 3.587 6.05414C3.979 5.6773 4.45 5.48888 5 5.48888H13.925L7.875 11.3148C7.59167 11.5877 7.375 11.9006 7.225 12.2537C7.075 12.6068 7 12.9759 7 13.3611V17.0444C7 17.5741 7.196 18.0273 7.588 18.4041C7.97933 18.7816 8.45 18.9704 9 18.9704H12.825C13.225 18.9704 13.6083 18.8981 13.975 18.7537C14.3417 18.6093 14.6667 18.4006 14.95 18.1278L21 12.2778V20.8963C21 21.4259 20.8043 21.8792 20.413 22.256C20.021 22.6335 19.55 22.8222 19 22.8222H5ZM10 17.0444C9.71667 17.0444 9.47933 16.9523 9.288 16.7681C9.096 16.5832 9 16.3543 9 16.0815V13.7463C9 13.4895 9.05 13.2446 9.15 13.0116C9.25 12.7792 9.39167 12.5747 9.575 12.3981L16.175 6.04259L20.45 10.087L13.825 16.4667C13.6417 16.6432 13.4293 16.7838 13.188 16.8884C12.946 16.9924 12.6917 17.0444 12.425 17.0444H10Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg>
                        </a>

                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="passwords__delete" type="submit"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 3.84615H15.5L14.5 2.88461H9.5L8.5 3.84615H5V5.76923H19M6 18.2692C6 18.7793 6.21071 19.2684 6.58579 19.6291C6.96086 19.9897 7.46957 20.1923 8 20.1923H16C16.5304 20.1923 17.0391 19.9897 17.4142 19.6291C17.7893 19.2684 18 18.7793 18 18.2692V6.73077H6V18.2692Z"
                                        fill="#848484" fill-opacity="0.7" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="passwords__table-row">
                <div class="passwords__table-cell passwords__table-cell--icon"><img class="passwords__icon"
                        src="{{asset('img/facebook.png')}}" alt=""> Facebook</div>
                <div class="passwords__table-cell"><a target="_blank" class="passwords__link"
                        href="https://www.facebook.com/">https://www.facebook.com/</a></div>
                <div class="passwords__table-cell">www</div>
                <div class="passwords__table-cell">j.lipinski017@gmail.com</div>
                <div class="passwords__table-cell passwords__table-cell--password"><input type="password"
                        class="passwords__password" value="TajneHaslo123567890sadasdsadsadsadsad!" disabled>
                    <div class="passwords__see">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                fill="#848484" fill-opacity="0.7" />
                        </svg>
                    </div>
                </div>
                <div class="passwords__table-cell"></div>
                <div class="passwords__table-cell">
                    <div class="passwords__actions">
                        <a href="#" class="passwords__show">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg>
                        </a>
                        <a href="#" class="__edit"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.875 8.71481L17.6 4.67037L18.675 3.63518C19.075 3.25 19.5543 3.0574 20.113 3.0574C20.671 3.0574 21.1417 3.25 21.525 3.63518L22.925 5.0074C23.3083 5.37654 23.5 5.82592 23.5 6.35555C23.5 6.88518 23.3083 7.33456 22.925 7.7037L21.875 8.71481ZM5 22.8222C4.45 22.8222 3.979 22.6335 3.587 22.256C3.19567 21.8792 3 21.4259 3 20.8963V7.41481C3 6.88518 3.19567 6.43163 3.587 6.05414C3.979 5.6773 4.45 5.48888 5 5.48888H13.925L7.875 11.3148C7.59167 11.5877 7.375 11.9006 7.225 12.2537C7.075 12.6068 7 12.9759 7 13.3611V17.0444C7 17.5741 7.196 18.0273 7.588 18.4041C7.97933 18.7816 8.45 18.9704 9 18.9704H12.825C13.225 18.9704 13.6083 18.8981 13.975 18.7537C14.3417 18.6093 14.6667 18.4006 14.95 18.1278L21 12.2778V20.8963C21 21.4259 20.8043 21.8792 20.413 22.256C20.021 22.6335 19.55 22.8222 19 22.8222H5ZM10 17.0444C9.71667 17.0444 9.47933 16.9523 9.288 16.7681C9.096 16.5832 9 16.3543 9 16.0815V13.7463C9 13.4895 9.05 13.2446 9.15 13.0116C9.25 12.7792 9.39167 12.5747 9.575 12.3981L16.175 6.04259L20.45 10.087L13.825 16.4667C13.6417 16.6432 13.4293 16.7838 13.188 16.8884C12.946 16.9924 12.6917 17.0444 12.425 17.0444H10Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg>
                        </a>

                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="passwords__delete" type="submit"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 3.84615H15.5L14.5 2.88461H9.5L8.5 3.84615H5V5.76923H19M6 18.2692C6 18.7793 6.21071 19.2684 6.58579 19.6291C6.96086 19.9897 7.46957 20.1923 8 20.1923H16C16.5304 20.1923 17.0391 19.9897 17.4142 19.6291C17.7893 19.2684 18 18.7793 18 18.2692V6.73077H6V18.2692Z"
                                        fill="#848484" fill-opacity="0.7" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="passwords__table-row">
                <div class="passwords__table-cell passwords__table-cell--icon"><img class="passwords__icon"
                        src="{{asset('img/facebook.png')}}" alt=""> Facebook</div>
                <div class="passwords__table-cell"><a target="_blank" class="passwords__link"
                        href="https://www.facebook.com/">https://www.facebook.com/</a></div>
                <div class="passwords__table-cell">www</div>
                <div class="passwords__table-cell">j.lipinski017@gmail.com</div>
                <div class="passwords__table-cell passwords__table-cell--password"><input type="password"
                        class="passwords__password" value="TajneHaslo123!" disabled>
                    <div class="passwords__see">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                fill="#848484" fill-opacity="0.7" />
                        </svg>
                    </div>
                </div>
                <div class="passwords__table-cell"></div>
                <div class="passwords__table-cell">
                    <div class="passwords__actions">
                        <a href="#" class="passwords__show">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg>
                        </a>
                        <a href="#" class="__edit"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.875 8.71481L17.6 4.67037L18.675 3.63518C19.075 3.25 19.5543 3.0574 20.113 3.0574C20.671 3.0574 21.1417 3.25 21.525 3.63518L22.925 5.0074C23.3083 5.37654 23.5 5.82592 23.5 6.35555C23.5 6.88518 23.3083 7.33456 22.925 7.7037L21.875 8.71481ZM5 22.8222C4.45 22.8222 3.979 22.6335 3.587 22.256C3.19567 21.8792 3 21.4259 3 20.8963V7.41481C3 6.88518 3.19567 6.43163 3.587 6.05414C3.979 5.6773 4.45 5.48888 5 5.48888H13.925L7.875 11.3148C7.59167 11.5877 7.375 11.9006 7.225 12.2537C7.075 12.6068 7 12.9759 7 13.3611V17.0444C7 17.5741 7.196 18.0273 7.588 18.4041C7.97933 18.7816 8.45 18.9704 9 18.9704H12.825C13.225 18.9704 13.6083 18.8981 13.975 18.7537C14.3417 18.6093 14.6667 18.4006 14.95 18.1278L21 12.2778V20.8963C21 21.4259 20.8043 21.8792 20.413 22.256C20.021 22.6335 19.55 22.8222 19 22.8222H5ZM10 17.0444C9.71667 17.0444 9.47933 16.9523 9.288 16.7681C9.096 16.5832 9 16.3543 9 16.0815V13.7463C9 13.4895 9.05 13.2446 9.15 13.0116C9.25 12.7792 9.39167 12.5747 9.575 12.3981L16.175 6.04259L20.45 10.087L13.825 16.4667C13.6417 16.6432 13.4293 16.7838 13.188 16.8884C12.946 16.9924 12.6917 17.0444 12.425 17.0444H10Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg>
                        </a>

                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="passwords__delete" type="submit"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 3.84615H15.5L14.5 2.88461H9.5L8.5 3.84615H5V5.76923H19M6 18.2692C6 18.7793 6.21071 19.2684 6.58579 19.6291C6.96086 19.9897 7.46957 20.1923 8 20.1923H16C16.5304 20.1923 17.0391 19.9897 17.4142 19.6291C17.7893 19.2684 18 18.7793 18 18.2692V6.73077H6V18.2692Z"
                                        fill="#848484" fill-opacity="0.7" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </div>


            <!-- <tr class="passwords__table-row">
                <th class="passwords__table-cell passwords__table-cell--last" colspan="7">Dodaj kolejne dane <svg
                        width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.25 16.25H16.25V21.25H13.75V16.25H8.75V13.75H13.75V8.75H16.25V13.75H21.25M15 2.5C13.3585 2.5 11.733 2.82332 10.2165 3.45151C8.69989 4.07969 7.3219 5.00043 6.16117 6.16117C3.81696 8.50537 2.5 11.6848 2.5 15C2.5 18.3152 3.81696 21.4946 6.16117 23.8388C7.3219 24.9996 8.69989 25.9203 10.2165 26.5485C11.733 27.1767 13.3585 27.5 15 27.5C18.3152 27.5 21.4946 26.183 23.8388 23.8388C26.183 21.4946 27.5 18.3152 27.5 15C27.5 13.3585 27.1767 11.733 26.5485 10.2165C25.9203 8.69989 24.9996 7.3219 23.8388 6.16117C22.6781 5.00043 21.3001 4.07969 19.7835 3.45151C18.267 2.82332 16.6415 2.5 15 2.5Z"
                            fill="#848484" />
                    </svg>
                </th>
            </tr> -->
        </div>
    </div>
</div>

@endsection
