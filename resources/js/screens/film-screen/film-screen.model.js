import {BaseModel} from "@/models/base.model.js";
import {useStore} from "pinia-class-store";

class FilmModel extends BaseModel {
    constructor() {
        super();
        this.film = undefined;
    }

    init(film) {
        this.film = film;
    }
}

export const filmModel = useStore.bind(undefined, FilmModel);
